<?php

/**
 * Layer on top of the ad zones table
 */
class AdManagerZones {
	const AD_ZONES_TABLE = 'adzones';
	/**
	 * @var array $zones Zones to be added to db
	 */
	private $zonesToAdd = [];

	/**
	 * @var array $zones Zones to be removed from db
	 */
	private $zonesToRemove = [];

	/**
	 * @var bool $zonesAddedSuccessfully
	 */
	private $zonesAddedSuccessfully;

	/**
	 * @var bool $zonesRemovedSuccessfully
	 */
	private $zonesRemovedSuccessfully;

	/**
	 * @return array
	 */
	public function getZonesToAdd() {
		return $this->zonesToAdd;
	}

	public function getZonesToRemove() {
		return $this->zonesToRemove;
	}

	public function getZonesAddedSuccessfully() {
		return $this->zonesAddedSuccessfully;
	}

	public function getZonesRemovedSuccessfully() {
		return $this->zonesRemovedSuccessfully;
	}

	public function setZonesToAdd( array $zones ) {
		return wfSetVar( $this->zonesToAdd, $zones );
	}

	public function setZonesToRemove( $zonesToRemove ) {
		return wfSetVar( $this->zonesToRemove, $zonesToRemove );
	}

	public function setZonesAddedSuccessfully( $zonesAddedSuccessfully ) {
		return wfSetVar( $this->zonesAddedSuccessfully, $zonesAddedSuccessfully );
	}

	public function setZonesRemovedSuccessfully( $zonesRemovedSuccessfully ) {
		return wfSetVar( $this->zonesRemovedSuccessfully, $zonesRemovedSuccessfully );
	}

	public function __construct( array $wantedZones ) {
		$currentZones = $this->getZonesFromDB();

		$this->zonesToAdd = array_diff( $wantedZones, $currentZones );
		$this->zonesToRemove = array_diff( $currentZones, $wantedZones );
	}

	public static function getTableName() {
		return self::AD_ZONES_TABLE;
	}

	public static function getBlankZoneID() {
		return '----';
	}

	/**
	 * Check if the zone is valid
	 *
	 * @param string $zone
	 * @return bool
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
	 * @return bool
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
	 * @return bool
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
	 * @return bool
	 */
	public static function tableExists() {
		$dbr = self::getReadDbConnection();
		return $dbr->tableExists( self::getTableName() );
	}

	/**
	 * Retrieves current zones from the db
	 *
	 * @return array current zones in db
	 */
	public static function getZonesFromDB() {
		$dbr = self::getReadDbConnection();
		$current = $dbr->select(
			self::getTableName(), [ '*' ], [], __METHOD__
		);

		// Fetch current table into array
		$currentArray = [];
		foreach ( $current as $currentRow ) {
			$currentArray[] = $currentRow->ad_zone_id;
		}

		return $currentArray;
	}

	/**
	 * Add new zones to db and remove the old zones
	 *
	 * @return bool Successful if added and removed successfully
	 */
	public function execute() {
		$this->zonesAdded = $this->doAddZones();
		$this->zonesRemoved = $this->doRemoveZones();

		return $this->zonesAdded && $this->zonesRemoved;
	}

	/**
	 * Insert an array of zones into the db
	 *
	 * @return bool
	 */
	protected function doAddZones() {
		$dbw = $this->getWriteDbConnection();
		$rows = [];
		foreach ( $this->getZonesToAdd() as $zone ) {
			$rows[] = [ 'ad_zone_id' => $zone ];
		}
		$success = $dbw->insert( self::getTableName(), $rows, __METHOD__, 'IGNORE' );

		// DatabaseBase::insert does not always return true for success as documented...
		return $success !== false;
	}

	/**
	 * Remove zones from the db
	 *
	 * return bool True if all zones were removed
	 */
	protected function doRemoveZones() {
		$successAll = true;
		foreach ( $this->getZonesToRemove() as $zone ) {
			$successAll &= (bool)$this->removeZone( $zone );
		}
		return $successAll;
	}

	/**
	 * Remove a zone from the db
	 *
	 * @param string $zone
	 * @return bool|ResultWrapper
	 */
	protected function removeZone( $zone ) {
		$dbw = $this->getWriteDbConnection();
		return $dbw->delete( self::getTableName(), [ 'ad_zone_id' => $zone ], __METHOD__ );
	}

	/**
	 * @return DatabaseBase Read-only db connection
	 */
	public static function getReadDbConnection() {
		return wfGetDB( DB_REPLICA );
	}

	/**
	 * @return DatabaseBase Writable db connection
	 */
	public static function getWriteDbConnection() {
		return wfGetDB( DB_MASTER );
	}
}
