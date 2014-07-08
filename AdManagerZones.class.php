<?php
/**
 * Layer on top of the ad zones table
 */
class AdManagerZones {
	/**
	 * @var array $zones Zones to be added to db
	 */
	private $zones = array();
	const AD_ZONES_TABLE = 'adzones';

	public function __construct( array $zones ) {
		$this->setZones( $zones );
	}

	public static function getTableName() {
		return self::AD_ZONES_TABLE;
	}

	public static function getBlankZoneID() {
		return '----';
	}

	/**
	 * Check if this zone is valid
	 *
	 * @param string $zone
	 * @return boolean
	 */
	public static function isValidZone( $zone ) {
		if ( empty( $zone ) ) {
			return true;
		}
		if ( !is_numeric( $zone ) ) {
			return false;
		}
		return true;
	}

	/**
	 * Validate single zone name and throw an error if invalid
	 *
	 * @param string $zone
	 * @return boolean
	 * @throws ErrorPageError
	 */
	public static function validateZone( $zone ) {
		$zone = trim( $zone );
		if ( !self::isValidZone( $zone ) ) {
			throw new ErrorPageError( 'internalerror', 'admanager_zonenotnumber', $zone );
		}
		return true;
	}

	/**
	 * Validate array of zones
	 *
	 * @param array $zones
	 * @return boolean
	 */
	public static function validateZones( $zones ) {
		foreach ( $zones as $zone ) {
			self::validateZone( $zone );
		}
		return true;
	}

	/**
	 * Check if the correct table exists
	 *
	 * @return boolean
	 */
	public static function tableExists() {
		$dbr = wfGetDB( DB_SLAVE );
		return $dbr->tableExists( self::getTableName() );
	}

	/**
	 * @return array
	 */
	public function getZones() {
		return $this->zones;
	}

	/**
	 * Retrieves current zones from the db
	 *
	 * @return array current zones in db
	 */
	public static function getZonesFromDB() {
		$dbr = wfGetDB( DB_SLAVE );
		$current = $dbr->select(
			self::getTableName(), array( '*' ), array(), __METHOD__
		);

		// Fetch current table into array
		$currentArray = array();
		while ( $currentRow = $current->fetchObject() ) {
			$currentArray[] = $currentRow->ad_zone_id;
		}

		return $currentArray;
	}

	/**
	 * Purge the db and insert new zones
	 *
	 * @return boolean
	 */
	public function execute() {
		$dbw = wfGetDB( DB_MASTER );
		/** @todo Not such a good idea. What if insert fails? */
		$dbw->delete( self::getTableName(), '*', __METHOD__ );

		return $this->addZones( $this->zones );
	}

	/**
	 * Insert an array of zones into the db
	 *
	 * @param array $zones
	 * @return boolean
	 */
	protected function addZones( $zones = null ) {
		if ( !$zones ) {
			if ( isset( $this->zones ) ) {
				$zones = $this->zones;
			} else {
				return false;
			}
		}

		foreach ( $zones as $zone ) {
			if ( !self::addZone( $zone ) ) {
				return false;
			}
		}
		return true;
	}

	/**
	 * Insert a single zone into the db
	 *
	 * @param string $zone
	 * @return boolean
	 */
	protected function addZone( $zone ) {
		$dbw = wfGetDB( DB_MASTER );
		return $dbw->insert(
				self::getTableName(), array( 'ad_zone_id' => $zone ), __METHOD__
		);
	}

	/**
	 * @param array $zones
	 */
	public function setZones( array $zones ) {
		$this->zones = $zones;
	}
}
