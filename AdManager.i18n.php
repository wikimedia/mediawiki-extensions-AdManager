<?php
/**
 * Internationalization file for the AdManager extension.
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();

/** English
 * @author Ike Hecht
 */
$messages['en'] = array(
	'admanager' => 'Ad Manager',
	'admanagerzones' => 'Ad Manager Zones',
	'admanager-desc' => 'Provides a [[Special:AdManager|special page]] which allows sysops to set the zone for pages or categories',
	'admanager_docu' => 'To add or remove the ad zone of a page or entire category, add or remove its title below.',
	'admanagerzones_docu' => 'Enter each ad zone number on its own line.',
	'admanager_invalidtargetpage' => 'No page found with title "$1".',
	'admanager_invalidtargetcategory' => 'No category found with title "$1".',
	'admanager_notable' => 'Error! A required database table was not found! Run update.php first.',
	'admanager_noAdManagerZones' => 'Error! You must add some ad zones. Enter them at [[Special:AdManagerZones|Ad Manager Zones]].',
	'admanager_labelPage' => 'Page titles',
	'admanager_labelCategory' => 'Category names',
	'admanager_submit' => 'Submit',
	'admanager_noads' => 'Display no ads',
	'admanager_Page' => 'Pages',
	'admanager_Category' => 'Categories',
	'admanager_added' => 'Your changes have been saved',
	'admanager_addedzone' => 'Added zone',
	'admanager_zonenum' => 'Zone #: $1',
	'admanager_zonenotnumber' => 'Error! $1 is not a number.',
	'admanager_return' => 'Return to [[Special:AdManager|Ad Manager]]',
	'admanager_gotoads' => '[[Special:AdManager|Edit ad placement]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Edit ad zones]]',
	'right-admanager' => '[[Special:AdManager|Manage advertising configuration]]',
);

/** Message documentation (Message documentation)
 * @author Dalba
 * @author EugeneZelenko
 * @author Shirayuki
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'admanager' => '{{doc-special|AdManager|unlisted=1}}',
	'admanagerzones' => '{{doc-special|AdManagerZones|unlisted=1}}
Special:AdManagerZones is used to set which zones are available in Special:AdManager. AdManager is an extension to MediaWiki that allows per-page or per-category placement of ads into a wiki page. It is designed to work with zones from an external advertising server such as OpenX, but allows the placement of zones from (probably) any such server.',
	'admanager-desc' => 'Description of this extension',
	'admanager_docu' => 'Used in Special:AdManager, when there are no errors.',
	'admanagerzones_docu' => 'Used in [[Special:AdManagerZones]]',
	'admanager_invalidtargetpage' => 'Used as error message. Parameters:
* $1 - page title',
	'admanager_invalidtargetcategory' => 'Used as error message. Parameters:
* $1 - category name (category page title)',
	'admanager_notable' => 'Used as error message in Special:AdManager and Special:AdManagerZones.',
	'admanager_noAdManagerZones' => 'Used in [[Special:AdManager]]',
	'admanager_labelPage' => 'Used in [[Special:AdManager]].
{{Identical|Page title}}',
	'admanager_labelCategory' => 'Used in [[Special:AdManager]].
{{Identical|Category name}}',
	'admanager_submit' => '{{Identical|Submit}}',
	'admanager_noads' => 'Usage example of this message:

* Zone #: Display no ads',
	'admanager_Page' => '{{Identical|Page}}',
	'admanager_Category' => '{{Identical|Categories}}',
	'admanager_added' => 'Used as success message in Special:AdManager.

This message is followed by the message {{msg-mw|Admanager return}}.',
	'admanager_addedzone' => 'Usage example of this message (123 is the Zone number):

*Added zone 123',
	'admanager_zonenum' => '"#" stands for "number" (number sign). Parameters:
* $1 - the Zone number',
	'admanager_zonenotnumber' => 'Error message

* $1 is the invalid Zone number. $1 may contain HTML tags.',
	'admanager_return' => 'Used in Special:AdManager.

This message follows the message {{msg-mw|Admanager added}}.',
	'admanager_gotoads' => 'Link to [[Special:AdManager]]. Used in [[Special:AdManagerZones]].',
	'admanager_gotozones' => 'Link to [[Special:AdManagerZones]]. Used in [[Special:AdManager]].',
	'right-admanager' => '{{doc-right|admanager}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'admanager_Page' => 'Bladsye',
	'admanager_Category' => 'Kategorieë',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'admanager_labelPage' => 'የገጽ አርዕስት',
	'admanager_submit' => 'ለማቅረብ',
	'admanager_Page' => 'ገጾች',
	'admanager_Category' => 'መደቦች',
);

/** Arabic (العربية)
 * @author Meno25
 * @author Tarawneh
 * @author روخو
 */
$messages['ar'] = array(
	'admanager_labelPage' => 'عناوين الصفحة:',
	'admanager_labelCategory' => 'أسماء التصنيف',
	'admanager_submit' => 'إرسال',
	'admanager_noads' => 'لا تعرض إعلانات',
	'admanager_Page' => 'صفحات',
	'admanager_Category' => 'تصنيفات',
	'admanager_added' => 'تم حفظ التغييرات',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'admanager' => "Alministrador d'anuncios",
	'admanagerzones' => "Zones del alministrador d'anuncios",
	'admanager-desc' => 'Ufre una [[Special:AdManager|páxina especial]] que permite a los operadores del sistema configurar la zona pa les páxines o categoríes',
	'admanager_docu' => "P'amestar o desaniciar la zona d'anuncios d'una páxina o categoría entera, amieste o desanicie'l so títulu más abaxo.",
	'admanagerzones_docu' => "Escriba cada númberu de zona d'anuncios na so propia llinia.",
	'admanager_invalidtargetpage' => 'Nun s\'alcontró denguna páxina col títulu "$1".',
	'admanager_invalidtargetcategory' => 'Nun s\'alcontró denguna categoría col títulu "$1".',
	'admanager_notable' => "¡Error! ¡Nun s'alcontró una tabla requerida de la base de datos! Execute primero update.php.",
	'admanager_noAdManagerZones' => "¡Error! Tien d'amestar dalgunes zones d'anuncios. Amiesteles nes [[Special:AdManagerZones|zones del xestor d'anuncios]].",
	'admanager_labelPage' => 'Títulos de páxina',
	'admanager_labelCategory' => 'Nomes de categoría',
	'admanager_submit' => 'Unviar',
	'admanager_noads' => 'Nun amosar anuncios',
	'admanager_Page' => 'Páxines',
	'admanager_Category' => 'Categoríes',
	'admanager_added' => 'Guardaronse los cambeos',
	'admanager_addedzone' => 'Zona amestada',
	'admanager_zonenum' => 'Zona nº: $1',
	'admanager_zonenotnumber' => '¡Error! $1 nun ye un númberu.',
	'admanager_return' => "Volver al [[Special:AdManager|Alministrador d'anuncios]]",
	'admanager_gotoads' => '[[Special:AdManager|Editar la posición del anunciu]]',
	'admanager_gotozones' => "[[Special:AdManagerZones|Editar les zones d'anuncios]]",
	'right-admanager' => "[[Special:AdManager|Alministrar la configuración d'anuncios]]",
);

/** South Azerbaijani (تورکجه)
 * @author Amir a57
 * @author Mousa
 */
$messages['azb'] = array(
	'admanager' => 'رئکلام ایداره‌چی‌سی',
	'admanagerzones' => 'رئکلام ایداره‌چی‌سی بؤلگه‌لری',
	'admanager_invalidtargetpage' => '«$1» آدلا صحیفه تاپیلمادی.',
	'admanager_labelPage' => 'صحیفه باش‌لیق‌لاری',
	'admanager_labelCategory' => 'بولمه آدلاری',
	'admanager_submit' => 'گؤندر',
	'admanager_noads' => 'رئکلام لاری گورستمه',
	'admanager_Page' => 'صحیفه لر',
	'admanager_Category' => 'بؤلمه‌لر',
	'admanager_added' => 'ائدیگینیز دیشیک لیک لر ساخلانیب دیر',
	'admanager_addedzone' => 'ائکلئنئن بؤلگه',
	'admanager_zonenum' => 'بؤلگه نومره‌سی: $1',
	'admanager_zonenotnumber' => 'خطا! $1 بیر سایی دئییل.',
	'admanager_return' => '[[Special:AdManager|Reklam Yöneticisine]] قاییت',
	'admanager_gotoads' => '[[Special:AdManager|رئکلامی دیشدیر]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|بؤلگه‌یه دیشدیر]]',
	'right-admanager' => '[[Special:AdManager|رئکلام ایداره‌چی‌سی نیظام‌لاری]]',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'admanager' => 'Реклама идаралаусыһы',
	'admanagerzones' => 'Реклама зоналары идаралаусыһы',
	'admanager-desc' => 'Хакимдәргә бит һәм категория заналарын өҫтәү өсөн[[Special:AdManager|ярҙамсы бит]] өҫтәргә',
	'admanager_docu' => 'Биттә йәки бөтә категорияла реклама зонаһын ҡуйыу йәки ҡуймау өсөн, уның исемен ҡуйығыҙ йәки алып ташлағыҙ.',
	'admanagerzones_docu' => 'Һәр реклама зонаһы номерын айырым юлда яҙығыҙ.',
	'admanager_invalidtargetpage' => '" $1 " бите табылманы.',
	'admanager_invalidtargetcategory' => '" $1 " категорияһы табылманы.',
	'admanager_notable' => 'Хата! Һоралған мәғлүмәт таблицаһы табылманы. Эшләрегеҙ update.php.',
	'admanager_noAdManagerZones' => 'Хата! Бер нисә реклама зонаһын өҫтәргә кәрәк. Уларҙы  [[Special:AdManagerZones|Реклама менеджеры зонаһына]] өҫтәгеҙ.',
	'admanager_labelPage' => 'Бит исемдәре',
	'admanager_labelCategory' => 'Категория исемдәре',
	'admanager_submit' => 'Ебәрергә',
	'admanager_noads' => 'Реклама күрһәтмәҫкә',
	'admanager_Page' => 'Биттәр',
	'admanager_Category' => 'Категориялар',
	'admanager_added' => 'Үҙгәртеүҙәрегеҙ һаҡланды',
	'admanager_addedzone' => 'Өҫтәлгән зона',
	'admanager_zonenum' => 'Зона #:$1',
	'admanager_zonenotnumber' => 'Хата!  $1 һан түгел.',
	'admanager_return' => 'Киренән  [[Special:AdManager|Реклама менеджерына]]',
	'admanager_gotoads' => '[[Special:AdManager|Реклама урынлаштырыуҙы үҙгәртергә]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Реклама зонаһын үҙгәртергә]]',
	'right-admanager' => '[[Special:AdManager|Реклама көйләүен идаралау]]',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'admanager' => 'Paramaneho nin Anunsiyo',
	'admanagerzones' => 'Mga Sona kan Paramaneho nin Anunsiyo',
	'admanager-desc' => 'Minahaya nin sarong [[Special:AdManager|espesyal na pahina]] na minatugot kan mga sistemang nagpapadalagan tanganing ikaag an sona para sa mga pahina o mga kategoriya.',
	'admanager_docu' => 'Sa pagdugang o pagtangkas kan sona nin anunsiyo nin sarong pahina o kabilogan nin kategoriya, idugang o tangkason an titulo kaini sa ibaba.',
	'admanagerzones_docu' => 'Ilaog an kada numero kan sona nin anunsiyo sa laog kan sadire kaining linya.',
	'admanager_invalidtargetpage' => 'Mayong pahina an nanagboan na igwang titulo na "$1".',
	'admanager_invalidtargetcategory' => 'Mayong kategoriya an nanagboan na igwang titulo na "$1".',
	'admanager_notable' => 'Ay sala! Sarong pinaghahagad na katalaanan sa datos-sarayan an dae nanagboan! Magpadalagan nguna nin kasumpayan.php.',
	'admanager_noAdManagerZones' => 'Kasalaan! Ika kaipuhang magdugang nin iba pang mga sona nin anunsiyo. Ilaog sinda sa [[Special:AdManagerZones|Mga Sona kan Paramaneho nin Anunsiyo]].',
	'admanager_labelPage' => 'Mga Titulo nin Pahina',
	'admanager_labelCategory' => 'Kategoriya nin mga pangaran',
	'admanager_submit' => 'Isumite',
	'admanager_noads' => 'Dae magpahiling nin mga anunsiyo',
	'admanager_Page' => 'Mga Pahina',
	'admanager_Category' => 'Mga Kategoriya',
	'admanager_added' => 'An saimong mga kaliwatan nakatagama na.',
	'admanager_addedzone' => 'Pinagdugang na sona',
	'admanager_zonenum' => 'Sona #:$1',
	'admanager_zonenotnumber' => 'Ay sala! $1 bako tabing numero.',
	'admanager_return' => 'Magbuwelta sa [[Special:AdManager|Paramaneho nin Anunsiyo]]',
	'admanager_gotoads' => '[[Special:AdManager|Liwaton an kaaganan nin anunsiyo]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Liwaton an mga sona nin anunsiyo]]',
	'right-admanager' => '[[Special:AdManager|Manehoon an kasalansanan nin anunsiyo]]',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'admanager' => 'Кіраўнік рэклямы',
	'admanagerzones' => 'Кіраваньне зонамі рэклямы',
	'admanager-desc' => 'Дадае [[Special:AdManager|спэцыяльную старонку]], якая дазваляе адміністратарам прызначаць зону для старонак ці катэгорыяў',
	'admanager_docu' => 'Для даданьня ці выдаленьня зоны рэклямы на старонцы ці ўсёй катэгорыі, трэба дадаць ці выдаліць назву ўнізе.',
	'admanagerzones_docu' => 'Увядзіце нумар кожнай зоны рэклямы ў асобным радку.',
	'admanager_invalidtargetpage' => 'Старонка з назвай «$1» ня знойдзеная.',
	'admanager_invalidtargetcategory' => 'Катэгорыя з назвай «$1» ня знойдзеная.',
	'admanager_notable' => 'Памылка! Неабходная табліца базы зьвестак ня знойдзеная! Спачатку запусьціце update.php.',
	'admanager_noAdManagerZones' => 'Памылка! Вам неабходна дадаць зоны рэклямы. Увядзіце іх у [[Special:AdManagerZones|Кіраваньні зонамі рэклямы]].',
	'admanager_labelPage' => 'Назвы старонак',
	'admanager_labelCategory' => 'Назвы катэгорыяў',
	'admanager_submit' => 'Захаваць',
	'admanager_noads' => 'Не паказваць рэкляму',
	'admanager_Page' => 'Старонкі',
	'admanager_Category' => 'Катэгорыі',
	'admanager_added' => 'Вашыя зьмены былі захаваныя',
	'admanager_addedzone' => 'Дададзеная зона',
	'admanager_zonenum' => 'Зона № $1',
	'admanager_zonenotnumber' => 'Памылка: $1 не зьяўляецца лікам.',
	'admanager_return' => 'Вярнуцца ў [[Special:AdManager|кіраваньне рэклямай]]',
	'admanager_gotoads' => '[[Special:AdManager|Рэдагаваць разьмяшчэньне рэклямы]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Рэдагаваць зоны рэклямы]]',
	'right-admanager' => '[[Special:AdManager|кіраваньне наладамі рэклямы]]',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'admanager_invalidtargetpage' => 'Не е намерена страница с името „$1“.',
	'admanager_invalidtargetcategory' => 'Не е намерена категория с името „$1“.',
	'admanager_submit' => 'Изпращане',
	'admanager_noads' => 'Без показване на реклами',
	'admanager_Page' => 'Страници',
	'admanager_Category' => 'Категории',
	'admanager_added' => 'Промените бяха съхранени',
	'admanager_zonenum' => 'Зона #: $1',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'admanager_labelPage' => 'পাতার শিরোনাম',
	'admanager_labelCategory' => 'বিষয়শ্রেণীর নাম',
	'admanager_submit' => 'জমা দাও',
	'admanager_Page' => 'পাতা',
	'admanager_Category' => 'বিষয়শ্রেণী',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'admanager' => 'Merour ar brudañ',
	'admanagerzones' => 'Takadoù merañ ar brudañ',
	'admanager_invalidtargetpage' => 'N\'eus bet kavet pajenn ebet dezhi an titl "$1".',
	'admanager_invalidtargetcategory' => 'N\'eus bet kavet rummañ ebet dezhañ an titl "$1".',
	'admanager_labelPage' => 'Titloù ar bajenn',
	'admanager_labelCategory' => 'Anvioù ar rummad :',
	'admanager_submit' => 'Kas',
	'admanager_noads' => 'Na ziskouez bruderezh',
	'admanager_Page' => 'Pajennoù',
	'admanager_Category' => 'Rummadoù',
	'admanager_added' => 'Enrollet eo bet ho kemmoù',
	'admanager_addedzone' => 'Takad ouzhpennet',
	'admanager_zonenum' => 'Takad #: $1',
	'admanager_zonenotnumber' => "Fazi ! $1 n'eo ket un niver.",
	'admanager_return' => 'Distreiñ da [[Special:AdManager|Ad Manager]]',
);

/** Bosnian (bosanski)
 * @author DzWiki
 */
$messages['bs'] = array(
	'admanager_submit' => 'Pošalji',
	'admanager_Page' => 'Stranice',
	'admanager_Category' => 'Kategorije',
);

/** Catalan (català)
 * @author Gemmaa
 * @author Pitort
 */
$messages['ca'] = array(
	'admanager' => "Administrador d'anuncis",
	'admanagerzones' => "Zones de l'administrador d'anuncis",
	'admanager-desc' => 'Proporciona una [[Special:AdManager|pàgina especial]] que permet els administradors de configurar la zona de pàgines o categories.',
	'admanager_docu' => "Per afegir o suprimir la zona d'anunci d'una pàgina o categoria sencera, afegir o treure el seu títol sota.",
	'admanagerzones_docu' => "Cada número de zona d'anunci d'entrar en la seva pròpia línia.",
	'admanager_invalidtargetpage' => 'No hi ha pàgina s\'ha trobat amb títol " $1 ".',
	'admanager_invalidtargetcategory' => 'No hi ha pàgina s\'ha trobat amb títol " $1 ".',
	'admanager_notable' => "Error! No s'ha trobat una taula de base de dades requerit! Córrer update.php primer.",
	'admanager_noAdManagerZones' => "Error! Heu d'afegir algunes zones d'anuncis. Introduïu-les a les [[Special:AdManagerZones|Zones de l'Administrador d'anuncis]].",
	'admanager_labelPage' => 'Títol de la pàgina:',
	'admanager_labelCategory' => 'Nom de la categoria:',
	'admanager_submit' => 'Envia',
	'admanager_noads' => "No hi ha anuncis d'exhibició",
	'admanager_Page' => 'Pàgines',
	'admanager_Category' => 'Categories',
	'admanager_added' => "S'han desat els canvis",
	'admanager_addedzone' => "Zona d'afegit",
	'admanager_zonenum' => '# La zona:$1',
	'admanager_zonenotnumber' => 'Error!  $1  no és un número.',
	'admanager_return' => "Torna a [[Special:AdManager|Administrador d'anuncis]]",
	'admanager_gotoads' => "[[Special:AdManager|Edita la col. locació d'anuncis]]",
	'admanager_gotozones' => "[[Special:AdManagerZones|Edita les zones d'anuncis]]",
	'right-admanager' => '[[Special:AdManager|Gestió de configuració de publicitat]]',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'admanager_labelPage' => 'سەردێڕەکانی پەڕە',
	'admanager_labelCategory' => 'ناوەکانی پۆل',
	'admanager_Page' => 'پەڕەکان',
	'admanager_Category' => 'پۆلەكان',
	'admanager_added' => 'گۆڕانکارییەکانت پاشەکەوت کران',
	'admanager_zonenotnumber' => 'ھەڵە! $1 ژمارە نییە.',
);

/** Czech (česky)
 * @author Gaj777
 * @author Mormegil
 * @author Paxt
 */
$messages['cs'] = array(
	'admanager' => 'Správce reklam',
	'admanagerzones' => 'Správce reklamních zón',
	'admanager_docu' => 'Chcete-li přidat nebo odstranit reklamní zónu stránky nebo celé kategorie, přidej nebo odberte její název.',
	'admanagerzones_docu' => 'Zadejte číslo každé reklamní zóny na samostatném řádku.',
	'admanager_invalidtargetpage' => 'Stránka s názvem "$1" nebyla nalezena.',
	'admanager_invalidtargetcategory' => 'Žádná kategorie s názvem "$1" nebyla nalezena.',
	'admanager_notable' => 'Chyba! Požadovaná tabulka databáze nebyla nalezena! Nejprve spusťte update.php.',
	'admanager_noAdManagerZones' => 'Chyba! Musíte přidat nějaké reklamní zóny. Je to možné ve [[Special:AdManagerZones|Správci reklamních zón]].',
	'admanager_labelPage' => 'Názvy stránek',
	'admanager_labelCategory' => 'Názvy kategorií',
	'admanager_submit' => 'Odeslat',
	'admanager_noads' => 'Nezobrazovat reklamy',
	'admanager_Page' => 'Stránky',
	'admanager_Category' => 'Kategorie',
	'admanager_added' => 'Vaše úpravy byly uloženy',
	'admanager_addedzone' => 'Přidána zona',
	'admanager_zonenum' => 'Zóna č. $1',
	'admanager_zonenotnumber' => 'Chyba! $1 není čislem.',
	'admanager_return' => 'Návrat do [[Special: AdManager|Správce reklamy]]', # Fuzzy
	'admanager_gotoads' => '[[Special:AdManager|Upravit umístění reklamy]]',
	'admanager_gotozones' => '[[Special: AdManagerZones|Editovat zóny inzerátů]]', # Fuzzy
	'right-admanager' => '[[Special:AdManager|Upravit konfiguraci inzerce]]',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 * @author Pwyll
 */
$messages['cy'] = array(
	'admanager' => 'Rheolwr hysbysebion',
	'admanagerzones' => 'Ardaloedd Rheolwr Hysbysebion',
	'admanager-desc' => "Yn darparu [[Special:AdManager|tudalen arbennig]] sy'n galluogi gweinyddwyr i osod yr ardal ar gyfer tudalennau neu gategorïau.",
	'admanager_docu' => 'I ychwanegu neu waredu ardal hysbysebu tudalen neu categori lawn, ychwanegwch neu waredwch ei deitl isod.',
	'admanagerzones_docu' => 'Nodwch rif pob ardal hysbyseb ar ei linell ei hun.',
	'admanager_invalidtargetpage' => 'Ni ddaethpwyd o hyd i dudalen gyda\'r teitl "$1".',
	'admanager_invalidtargetcategory' => 'Ni ddaethpwyd o hyd i gategori gyda\'r teitl "$1".',
	'admanager_notable' => 'Gwall! Ni ddaethpwyd o hyd i dabl cronfa ddata angenrheidiol. Rhedwch update.php yn gyntaf.',
	'admanager_noAdManagerZones' => 'Gwall! Rhaid i chi ychwanegu rhai ardaloedd. Nodwch nhw yn [[Special:AdManagerZones|Ardaloedd Rheolwr Hysbysebion]].',
	'admanager_labelPage' => 'Teitlau tudalennau',
	'admanager_labelCategory' => 'Enwau categorïau',
	'admanager_submit' => 'Cyflwyner',
	'admanager_noads' => 'Peidio arddangos hysbysebion',
	'admanager_Page' => 'Tudalennau',
	'admanager_Category' => 'Categorïau',
	'admanager_added' => 'Cadwyd eich newidiadau',
	'admanager_addedzone' => 'Ardal a ychwanegwyd',
	'admanager_zonenum' => 'Ardal #: $1',
	'admanager_zonenotnumber' => 'Gwall! Nid rhif yw $1',
	'admanager_return' => 'Dychwelyd i [[Special:AdManager|Rheolwr Hysbesebion]]',
	'right-admanager' => '[[Special:AdManager|Trefnu ffurfwedd yr hysbysebu]]',
);

/** Danish (dansk)
 * @author Tjernobyl
 */
$messages['da'] = array(
	'admanager' => 'Annoncehåndtering',
	'admanagerzones' => 'Annoncehåndteringsområder',
	'admanager-desc' => 'Giver en [[Special:AdManager|specialside]] som tillader sysops at angive området for sider eller kategorier',
	'admanager_docu' => 'Hvis du vil tilføje eller fjerne en side eller en hel kategoris annonceområde, tilføj eller fjern titlen nedenfor.',
	'admanagerzones_docu' => 'Angiv hver annonceområdes nummer på dens egen linje.',
	'admanager_invalidtargetpage' => 'Ingen side fundet ved navn "$1".',
	'admanager_invalidtargetcategory' => 'Ingen kategori fundet ved navn "$1".',
	'admanager_notable' => 'Fejl! En påkrævet databasetabel blev ikke fundet! Kør update.php først.',
	'admanager_noAdManagerZones' => 'Fejl! Du skal tilføje nogle annonceområder. Angiv dem i [[Special:AdManagerZones|annoncehåndteringsområder]].',
	'admanager_labelPage' => 'Sidetitler',
	'admanager_labelCategory' => 'Kategorinavne',
	'admanager_submit' => 'Gem',
	'admanager_noads' => 'Vis ingen annoncer',
	'admanager_Page' => 'Sider',
	'admanager_Category' => 'Kategorier',
	'admanager_added' => 'Dine ændringer er blevet gemt',
	'admanager_addedzone' => 'Tilføjet område',
	'admanager_zonenum' => 'Område #: $1',
	'admanager_zonenotnumber' => 'Fejl! $1 er ikke et tal.',
	'admanager_return' => 'Gå tilbage til [[Special:AdManager|Annoncehåndtering]]',
	'admanager_gotoads' => '[[Special:AdManager|Rediger annonceplacering]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Rediger annonceområder]]',
	'right-admanager' => '[[Special:AdManager|Håndter annoncekonfiguration]]',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'admanager' => 'Anzeigenverwaltung',
	'admanagerzones' => 'Anzeigenverwaltung - Anzeigenbereiche',
	'admanager-desc' => 'Ergänzt eine [[Special:AdManager|Spezialseite]], die es Administratoren ermöglicht einen Anzeigenbereich für Seiten und Kategorien festzulegen',
	'admanager_docu' => 'Um einen Anzeigenbereich bei einer Seite oder Kategorie hinzuzufügen oder zu entfernen, muss deren Name hinzugefügt oder entfernt werden.',
	'admanagerzones_docu' => 'Bitte die Nummer jedes Anzeigenbereichs in einer eigenen Zeile angeben.',
	'admanager_invalidtargetpage' => 'Es wurde keine Seite mit dem Namen „$1“ gefunden.',
	'admanager_invalidtargetcategory' => 'Es wurde keine Kategorie mit dem Namen „$1“ gefunden.',
	'admanager_notable' => 'Fehler: Die erforderliche Datenbanktabelle wurde nicht gefunden. Bitte update.php ausführen.',
	'admanager_noAdManagerZones' => 'Fehler: Es müssen zunächst Anzeigebereiche hinzugefügt werden. Dies ist auf der Spezialseite [[Special:AdManagerZones|Anzeigenverwaltung - Anzeigenbereiche]] möglich.',
	'admanager_labelPage' => 'Seitennamen',
	'admanager_labelCategory' => 'Kategorienamen',
	'admanager_submit' => 'Speichern',
	'admanager_noads' => 'Keine Anzeigen anzeigen',
	'admanager_Page' => 'Seiten',
	'admanager_Category' => 'Kategorien',
	'admanager_added' => 'Die Änderungen wurden gespeichert',
	'admanager_addedzone' => 'Anzeigenbereich wurde hinzugefügt',
	'admanager_zonenum' => 'Anzeigenbereichsnummer: $1',
	'admanager_zonenotnumber' => 'Fehler: Bei $1 handelt es sich nicht um eine Anzeigenbereichsnummer.',
	'admanager_return' => 'Zurück zur [[Special:AdManager|Anzeigenverwaltung]]',
	'admanager_gotoads' => '[[Special:AdManager|Anzeigen bearbeiten]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Anzeigenbereiche bearbeiten]]',
	'right-admanager' => '[[Special:AdManager|Anzeigen konfigurieren]]',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'admanager' => 'İdarekarê Reklami',
	'admanagerzones' => 'Mıntıqey idarekaran de Reklaman',
	'admanager_labelPage' => 'Sernamey pelan',
	'admanager_labelCategory' => 'Nameyê kategoriyan',
	'admanager_submit' => 'Qeyd ke',
	'admanager_noads' => 'Reklaman measne',
	'admanager_Page' => 'Peli',
	'admanager_Category' => 'Kategoriy',
	'admanager_added' => 'Vurnayışe şıma biyo qeyd',
	'admanager_addedzone' => 'Mıntıqaya ke debyaya',
	'admanager_zonenum' => 'Nıntıqa #: $1',
	'admanager_zonenotnumber' => 'Xırabin!  $1  yew amar niya.',
	'admanager_return' => 'Peyser şo [[Special:AdManager|İdarekarê Reklami]]',
	'admanager_gotoads' => '[[Special:AdManager|Reklami timar ke]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Warey timar ke]]',
	'right-admanager' => '[[Special:AdManager|Sazê İdarekar dê Reklami]]',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'admanager' => 'Ad Manager',
	'admanagerzones' => 'Wobcerki zastojnika anonsow',
	'admanager-desc' => 'Dodawa [[Special:AdManager|specialny bok]], kótaryž dowólujo administratoram, aby nastajili wobcerk anonsow za boki abo kategorije',
	'admanager_docu' => 'Aby wobcerk anonsow boka abo cełeje kategorije pśidał abo wótpórał, pśidaj abo wótpóraj jogo slědujucy titel.',
	'admanagerzones_docu' => 'Zapódaj numer kuždego wobcerka anonsow we swójskej smužce.',
	'admanager_invalidtargetpage' => 'Žeden bok z titelom "$1" namakany.',
	'admanager_invalidtargetcategory' => 'Žedna kategorija z titelom "$1" namakana.',
	'admanager_notable' => 'Zmólka! Trěbna tabela datoweje banki njejo se namakała! Wuwjeź njepjerwjej update.php.',
	'admanager_noAdManagerZones' => 'Zmólka! Musyš wobcerki anonsow pśidaś. Zapódaj je na boku [[Special:AdManagerZones|wobcerki zastojnika anonsow]]',
	'admanager_labelPage' => 'Bokowe titele',
	'admanager_labelCategory' => 'Kategorijowe mjenja',
	'admanager_submit' => 'Wótpósłaś',
	'admanager_noads' => 'Žedne anonse zwobrazniś',
	'admanager_Page' => 'Boki',
	'admanager_Category' => 'Kategorije',
	'admanager_added' => 'Twóje změny su se składowali',
	'admanager_addedzone' => 'Wobcerk pśidany',
	'admanager_zonenum' => 'Numer wobcerka: $1',
	'admanager_zonenotnumber' => 'Zmólka! $1 njejo licba.',
	'admanager_return' => 'Slědk k [[Special:AdManager|zastojnikoju anonsow]]',
	'admanager_gotoads' => '[[Special:AdManager|Anonse wobźěłaś]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Wobcerki anonsow wobźěłaś]]',
	'right-admanager' => '[[Special:AdManager|Anonse konfigurěrowaś]]',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 * @author Protnet
 * @author ZaDiak
 */
$messages['el'] = array(
	'admanager' => 'Διαχείριση διαφημίσεων',
	'admanagerzones' => 'Ζώνες διαχείρισης διαφημίσεων',
	'admanager-desc' => 'Παρέχει μια [[Special:AdManager|ειδική σελίδα]] που επιτρέπει σε διαχειριστές να ορίσουν τη ζώνη για σελίδες ή κατηγορίες',
	'admanager_docu' => 'Για να προσθέσετε ή να αφαιρέσετε τη ζώνη διαφήμισης μιας σελίδας ή μιας ολόκληρης κατηγορίας, προσθέστε ή αφαιρέστε τον τίτλο της παρακάτω.',
	'admanagerzones_docu' => 'Εισάγετε τον αριθμό κάθε ζώνης διαφημίσεων στη δική της γραμμή.',
	'admanager_invalidtargetpage' => 'Δε βρέθηκε καμία σελίδα με τίτλο "$1".',
	'admanager_invalidtargetcategory' => 'Δε βρέθηκε καμία κατηγορία με τίτλο "$1".',
	'admanager_notable' => 'Σφάλμα! Δεν βρέθηκε ο απαιτούμενος πίνακας βάσης δεδομένων! Τρέξτε πρώτα το update.php.',
	'admanager_noAdManagerZones' => 'Σφάλμα! Πρέπει να προσθέσετε ορισμένες ζώνες διαφημίσεων. Εισαγάγετέ τες στις [[Special:AdManagerZones|Ζώνες Διαχείρισης Διαφημίσεων]].',
	'admanager_labelPage' => 'Τίτλοι σελίδων',
	'admanager_labelCategory' => 'Ονόματα κατηγοριών',
	'admanager_submit' => 'Καταχώρηση',
	'admanager_noads' => 'Μη προβολή διαφημίσεων',
	'admanager_Page' => 'Σελίδες',
	'admanager_Category' => 'Κατηγορίες',
	'admanager_added' => 'Οι αλλαγές σας έχουν αποθηκευτεί',
	'admanager_addedzone' => 'Προστέθηκε η ζώνη',
	'admanager_zonenum' => 'Ζώνη #: $1',
	'admanager_zonenotnumber' => 'Σφάλμα! Το $1 δεν είναι αριθμός.',
	'admanager_return' => 'Επιστρέψετε στη [[Special:AdManager|Διαχείριση διαφημίσεων]]',
	'admanager_gotoads' => '[[Special:AdManager|Επεξεργασία θέσης διαφημίσεων]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Επεξεργασία ζωνών διαφημίσεων]]',
	'right-admanager' => '[[Special:AdManager|Διαχείριση διαμόρφωσης διαφήμισης]]',
);

/** Esperanto (Esperanto)
 * @author Blahma
 * @author Yekrats
 */
$messages['eo'] = array(
	'admanager' => 'Reklammastrumilo',
	'admanagerzones' => 'Reklammastrumilaj zonoj',
	'admanager-desc' => 'Provizas [[Special:AdManager|spacialan paĝon]] per kiu administranto povas agordi la zonon por paĝoj aŭ kategorioj',
	'admanager_docu' => 'Por aldoni aŭ forigi la reklamzonon de paĝo aŭ tuta kategorio, aldonu aŭ forigu sube ĝian titolon.',
	'admanagerzones_docu' => 'Enskribu ĉiun reklamzonan numeron sur apartan linion.',
	'admanager_invalidtargetpage' => 'Neniu paĝo trovita laŭ titolo "$1".',
	'admanager_invalidtargetcategory' => 'Neniu kategorio trovita laŭ titolo "$1".',
	'admanager_notable' => 'Eraro! Necesa datumbaza tabelo ne trovita! Unue rulu update.php.',
	'admanager_noAdManagerZones' => 'Eraro! Vi devas aldoni iun reklamzonon. Faru tion en la paĝo pri [[Special:AdManagerZones|reklammastrumilaj zonoj]].',
	'admanager_labelPage' => 'Titoloj de paĝoj',
	'admanager_labelCategory' => 'Nomoj de kategorioj',
	'admanager_submit' => 'Submeti',
	'admanager_noads' => 'Montri neniujn reklamojn',
	'admanager_Page' => 'Paĝoj',
	'admanager_Category' => 'Kategorioj',
	'admanager_added' => 'Viaj ŝanĝoj konserviĝis',
	'admanager_addedzone' => 'Aldonita zono',
	'admanager_zonenum' => 'Zono n-ro $1',
	'admanager_zonenotnumber' => 'Eraro! $1 ne estas numero.',
	'admanager_return' => 'Reveni al [[Special:AdManager|reklammastrumilo]]',
	'admanager_gotoads' => '[[Special:AdManager|Redakti aperon de reklamo]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Redakti reklamajn zonojn]]',
	'right-admanager' => '[[Special:AdManager|Mastrumi la agordon de reklamado]]',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'admanager' => 'Administrador de publicidad',
	'admanagerzones' => 'Zonas de administrador de publicidad',
	'admanager-desc' => 'Proporciona una [[Special:AdManager|página especial]] que permite a los sysops (operadores de sistema) establecer la zona de páginas o categorías',
	'admanager_docu' => 'Para agregar o quitar la zona de publicidad de una página o de toda la categoría, agregue o elimine su título a continuación.',
	'admanagerzones_docu' => 'Introduzca cada número de zona de publicidad en su propia línea.',
	'admanager_invalidtargetpage' => 'Ninguna página encontrada con el título "$1".',
	'admanager_invalidtargetcategory' => 'Ninguna categoría encontrada con el título "$1".',
	'admanager_notable' => '¡Error! ¡No se encontró una tabla de base de datos requerida! Ejecute primero update.php.',
	'admanager_noAdManagerZones' => '¡Error! Debe agregar algunas zonas de publicidad. Introdúzcalas en [[Special:AdManagerZones|el administrador de zonas de publicidad]].',
	'admanager_labelPage' => 'Títulos de página',
	'admanager_labelCategory' => 'Nombres de categoría',
	'admanager_submit' => 'Enviar',
	'admanager_noads' => 'No mostrar anuncios',
	'admanager_Page' => 'Páginas',
	'admanager_Category' => 'Categorías',
	'admanager_added' => 'Sus cambios han sido guardados',
	'admanager_addedzone' => 'Zona adicional',
	'admanager_zonenum' => 'Zona #: $1',
	'admanager_zonenotnumber' => '¡Error!  $1 no es un número.',
	'admanager_return' => 'Volver al [[Special:AdManager|Administrador de publicidad]]',
	'admanager_gotoads' => '[[Special:AdManager|Editar ubicación de publicidad]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Editar zonas de publicidad]]',
	'right-admanager' => '[[Special:AdManager|Administrar configuración de publicidad]]',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'admanager_labelPage' => 'Lehekülgede pealkirjad:',
	'admanager_labelCategory' => 'Kategooriate nimed',
	'admanager_noads' => 'Ära näita reklaame',
	'admanager_Page' => 'Leheküljed',
	'admanager_Category' => 'Kategooriad',
	'admanager_added' => 'Sinu muudatused on salvestatud',
	'admanager_zonenotnumber' => 'Viga! $1 ei ole number.',
);

/** Basque (euskara)
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'admanager_submit' => 'Bidali',
	'admanager_Page' => 'Orrialdeak',
	'admanager_Category' => 'Kategoriak',
);

/** Persian (فارسی)
 * @author Dalba
 * @author Mjbmr
 * @author Reza1615
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'admanager' => 'مدیریت آگهی',
	'admanagerzones' => 'مناطق مدیریت آگهی',
	'admanager-desc' => 'یک [[Special:AdManager|صفحهٔ ویژه]] فراهم می‌کند که به مدیران اجازه می‌دهد برای صفحه‌ها یا رده‌ها منطقه تعریف کنند.',
	'admanager_docu' => 'برای افزودن یا برداشتن یک منطقهٔ آگهی از یک صفحه یا کل یک رده، عنوانش را در زیر بیفزایید یا حذف کنید.',
	'admanagerzones_docu' => 'شمارهٔ هر منطقهٔ آگهی را در خط خودش بنویسید.',
	'admanager_invalidtargetpage' => 'صفحه‌ای با عنوان «$1» یافت نشد.',
	'admanager_invalidtargetcategory' => 'رده‌ای با عنوان «$1» یافت نشد.',
	'admanager_notable' => 'خطا! جدول پایگاه دادهٔ مورد نیاز پیدا نشد! ابتدا Update.php را اجرا کنید.',
	'admanager_noAdManagerZones' => 'خطا! باید چند منطقهٔ آگهی بیفزایید. آنها را در [[Special:AdManagerZones|مناطق مدیریت آگهی]] وارد کنید.',
	'admanager_labelPage' => 'عناوین صفحه',
	'admanager_labelCategory' => 'نام‌های رده',
	'admanager_submit' => 'ثبت',
	'admanager_noads' => 'نمایش بدون آگهی',
	'admanager_Page' => 'صفحه‌ها',
	'admanager_Category' => 'رده‌ها',
	'admanager_added' => 'تغییرات شما ذخیره شده‌است',
	'admanager_addedzone' => 'منطقهٔ افزوده شده',
	'admanager_zonenum' => 'شمارهٔ منطقه: $1',
	'admanager_zonenotnumber' => 'خطا! $1 عدد نیست.',
	'admanager_return' => 'بازگشت به [[Special:AdManager|مدیریت آگهی]]',
	'admanager_gotoads' => '[[Special:AdManager|ویرایش جای‌گیری آگهی]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|ویرایش مناطق آگهی]]',
	'right-admanager' => '[[Special:AdManager|مدیریت پیکربندی تبلیغات]]',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Crt
 * @author Nedergard
 * @author Stryn
 * @author VezonThunder
 */
$messages['fi'] = array(
	'admanager' => 'Mainoshallinta',
	'admanagerzones' => 'Mainoshallinnan alueet',
	'admanager-desc' => 'Sisältää [[Special:AdManager|toimintosivun]], jolla ylläpitäjät voivat asettaa mainosalueet sivuille tai luokille',
	'admanager_docu' => 'Voit lisätä tai poistaa sivun tai kokonaisen luokan mainosalueen lisäämällä tai poistamalla sen otsikon alla.',
	'admanagerzones_docu' => 'Kirjoita kunkin mainosalueen numero omalle rivilleen.',
	'admanager_invalidtargetpage' => 'Sivua otsikolla "$1" ei löytynyt.',
	'admanager_invalidtargetcategory' => 'Luokkaa otsikolla "$1" ei löytynyt.',
	'admanager_notable' => 'Virhe! Vaadittua tietokantataulukkoa ei löytynyt! Suorita update.php ensin.',
	'admanager_noAdManagerZones' => 'Virhe! Sinun tulee lisätä mainosalueita. Lisää ne sivulla [[Special:AdManagerZones|Mainoshallinnan alueet]].',
	'admanager_labelPage' => 'Sivujen nimet',
	'admanager_labelCategory' => 'Luokkien nimet',
	'admanager_submit' => 'Lähetä',
	'admanager_noads' => 'Ei mainoksia',
	'admanager_Page' => 'Sivut',
	'admanager_Category' => 'Luokat',
	'admanager_added' => 'Muutoksesi on tallennettu',
	'admanager_addedzone' => 'Lisätty vyöhyke',
	'admanager_zonenum' => 'Vyöhyke #: $1',
	'admanager_zonenotnumber' => 'Virhe! $1 ei ole numero.',
	'admanager_return' => 'Palaa sivulle [[Special:AdManager|Mainoshallinta]]',
	'admanager_gotoads' => '[[Special:AdManager|Muokkaa mainosten sijaintia]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Muokkaa mainosalueita]]',
	'right-admanager' => '[[Special:AdManager|Hallinnoida mainonta-asetuksia]]',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Hashar
 */
$messages['fr'] = array(
	'admanager' => 'Gestionnaire de publicité',
	'admanagerzones' => 'Zones de gestionnaire de publicité',
	'admanager-desc' => 'Fournit une [[Special:AdManager|page spéciale]] qui permet aux sysops de fixer la zone pour les pages ou les catégories',
	'admanager_docu' => "Pour ajouter ou supprimer la zone de publicité d'une page ou d'une catégorie complète, ajoutez ou supprimez son titre ci-dessous.",
	'admanagerzones_docu' => 'Entrez chaque numéro de zone de publicité sur sa propre ligne.',
	'admanager_invalidtargetpage' => 'Aucune page trouvé avec le titre « $1 ».',
	'admanager_invalidtargetcategory' => 'Pas de catégorie trouvée avec le titre "$1".',
	'admanager_notable' => "Erreur! Une table de base de données requise n'a pas été trouvée! Lancez d'abord update.php.",
	'admanager_noAdManagerZones' => 'Erreur! Vous devez ajouter des zones de publicité. Entrez-les dans les [[Special:AdManagerZones|zones de gestionnaire de publicité]].',
	'admanager_labelPage' => 'Titres de page',
	'admanager_labelCategory' => 'Noms de catégorie',
	'admanager_submit' => 'Soumettre',
	'admanager_noads' => 'Ne pas afficher de publicité',
	'admanager_Page' => 'Pages',
	'admanager_Category' => 'Catégories',
	'admanager_added' => 'Vos modifications ont été enregistrées',
	'admanager_addedzone' => 'Zone ajoutée',
	'admanager_zonenum' => 'Zone #: $1',
	'admanager_zonenotnumber' => "Erreur ! « $1 » n'est pas un nombre.",
	'admanager_return' => 'Revenir à [[Special:AdManager|Gestionnaire de publicité]]',
	'admanager_gotoads' => "[[Special:AdManager|Modifier l’emplacement d'une publicité]]",
	'admanager_gotozones' => '[[Special:AdManagerZones|Modifier les zones de publicité]]',
	'right-admanager' => '[[Special:AdManager|Gérer la configuration des publicités]]',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'admanager' => 'Administrator de recllâmes',
	'admanagerzones' => 'Zones de l’administrator de recllâmes',
	'admanager_invalidtargetpage' => 'Gins de pâge trovâye avouéc lo titro « $1 ».',
	'admanager_invalidtargetcategory' => 'Gins de catègorie trovâye avouéc lo titro « $1 ».',
	'admanager_labelPage' => 'Titros de pâges',
	'admanager_labelCategory' => 'Noms de catègories',
	'admanager_submit' => 'Sometre',
	'admanager_noads' => 'Fâre vêre gins de recllâma',
	'admanager_Page' => 'Pâges',
	'admanager_Category' => 'Catègories',
	'admanager_added' => 'Voutros changements sont étâs encartâs',
	'admanager_addedzone' => 'Zona apondua',
	'admanager_zonenum' => 'Numerô de zona : $1',
	'admanager_zonenotnumber' => 'Èrror ! $1 est pas un nombro.',
	'admanager_return' => 'Retôrn a l’[[Special:AdManager|administrator de recllâmes]]',
	'admanager_gotoads' => '[[Special:AdManager|Changiér lo placement de recllâma]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Changiér les zones de recllâmes]]',
	'right-admanager' => '[[Special:AdManager|Administrar la configuracion de la recllâma]]',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'admanager_Page' => 'Leathanaigh',
	'admanager_Category' => 'Catagóirí',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'admanager' => 'Xestor de anuncios',
	'admanagerzones' => 'Xestor das zonas de anuncios',
	'admanager-desc' => 'Proporciona unha [[Special:AdManager|páxina especial]] que permite aos administradores definir a zona das páxinas ou categorías',
	'admanager_docu' => 'Para engadir ou eliminar a zona de anuncios dunha páxina ou categoría enteira, engada ou elimine o seu título a continuación.',
	'admanagerzones_docu' => 'Escriba cada número de zona de anuncios na súa propia liña.',
	'admanager_invalidtargetpage' => 'Non se atopou ningunha páxina co título "$1".',
	'admanager_invalidtargetcategory' => 'Non se atopou ningunha categoría co título "$1".',
	'admanager_notable' => 'Erro! Non se atopou a táboa da base de datos necesaria para continuar! Execute update.php primeiro.',
	'admanager_noAdManagerZones' => 'Erro! Ten que engadir algunhas zonas de anuncios. Insíraas no [[Special:AdManagerZones|Xestor das zonas de anuncios]].',
	'admanager_labelPage' => 'Títulos da páxinas',
	'admanager_labelCategory' => 'Nomes da categorías',
	'admanager_submit' => 'Enviar',
	'admanager_noads' => 'Non mostrar os anuncios',
	'admanager_Page' => 'Páxinas',
	'admanager_Category' => 'Categorías',
	'admanager_added' => 'Gardáronse os seus cambios',
	'admanager_addedzone' => 'Zona engadida',
	'admanager_zonenum' => 'Zona nº: $1',
	'admanager_zonenotnumber' => 'Erro! "$1" non é un número.',
	'admanager_return' => 'Volver ao [[Special:AdManager|Xestor de anuncios]]',
	'admanager_gotoads' => '[[Special:AdManager|Editar a posición do anuncio]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Editar as zonas dos anuncios]]',
	'right-admanager' => '[[Special:AdManager|Xestionar a configuración dos anuncios]]',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Deror avi
 */
$messages['he'] = array(
	'admanager' => 'ניהול המודעות',
	'admanagerzones' => 'איזור ניהול המודעות',
	'admanager-desc' => 'יצירת [[Special:AdManager|דף מיוחד]] שמאפשר למפעילים להגדיר את האזור לדפים או קטגוריות',
	'admanager_docu' => 'על מנת להוסיף או להסיר את איזור המועדות של עמוד או של קטגוריה שלמה, נא להוסיף או להסיר את כותרתו מטה.',
	'admanagerzones_docu' => 'נא להזין כל מספר איזור מודעה בשורה נפרדת.',
	'admanager_invalidtargetpage' => 'לא נמצא דף שכותרתו "$1".',
	'admanager_invalidtargetcategory' => 'לא נמצאה קטגוריה שכותרתה "$1".',
	'admanager_notable' => 'שגיאה! לא נמצאה טבלת מסד הנתונים! נא הרץ תחילה את update.php',
	'admanager_noAdManagerZones' => 'שגיאה! עליך להזין אזורי מודעות. נא הזנתם ב- [[Special:AdManagerZones|איזור ניהול המודעות]].',
	'admanager_labelPage' => 'כותרות דפים',
	'admanager_labelCategory' => 'שמות קטגוריות',
	'admanager_submit' => 'שליחה',
	'admanager_noads' => 'הצגה ללא פרסומות',
	'admanager_Page' => 'דפים',
	'admanager_Category' => 'קטגוריות',
	'admanager_added' => 'השינויים נשמרו',
	'admanager_addedzone' => 'אזור נוסף',
	'admanager_zonenum' => 'אזור #: $1',
	'admanager_zonenotnumber' => 'שגיאה! $1 אינו מספר.',
	'admanager_return' => 'חזרה ל[[Special:AdManager|מנהל הפרסומות]]',
	'admanager_gotoads' => '[[Special:AdManager|עריכת מיקום מודעה]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|עריכת איזורי מודעה]]',
	'right-admanager' => '[[Special:AdManager|ניהול תצורת פרסום]]',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'admanager' => 'विज्ञापन प्रबंधक',
	'admanagerzones' => 'विज्ञापन प्रबंधक जोन',
	'admanager_labelPage' => 'पृष्ठ शीर्षक',
	'admanager_labelCategory' => 'श्रेणी नाम',
	'admanager_submit' => 'जमा करें',
	'admanager_noads' => 'कोई विज्ञापन प्रदर्शित नहीं',
	'admanager_Page' => 'पृष्ठ',
	'admanager_Category' => 'श्रेणियाँ',
	'admanager_zonenum' => 'जोन #: $1',
	'admanager_zonenotnumber' => 'त्रुटि! $1 एक संख्या नहीं है।',
	'admanager_return' => '[[Special:AdManager|विज्ञापन प्रबन्धक]] को लौट जाएँ',
	'admanager_gotoads' => '[[Special:AdManager|विज्ञापन प्लेसमेंट सम्पादन करें]]',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'admanager' => 'Ad Manager',
	'admanagerzones' => 'Ad Manager - nawěškowe wobłuki',
	'admanager-desc' => 'Dodawa [[Special:AdManager|specialnu stronu]], kotraž administratoram dowoluje, zo bychu nawěškowy wobłuk za strony abo kategorije nastajili',
	'admanager_docu' => 'Zo by nawěškowy wobłuk strony abo cyłeje kategorije přidał abo wotstronił, přidaj abo wotstroń jeje titul.',
	'admanagerzones_docu' => 'Zapodaj čisło kóždeho nawěškoweho wobłuka we swójskej lince.',
	'admanager_invalidtargetpage' => 'Žana strona z titulom "$1" namakana.',
	'admanager_invalidtargetcategory' => 'Žana kategorija z titulom "$1" namakana.',
	'admanager_notable' => 'Zmylk! Trěbna tabela datoweje banki njeje so namakała! Wuwjedź najprjedy update.php.',
	'admanager_noAdManagerZones' => 'Zmylk! Dyrbiš nawěškowe wobłuki přidać. Zapodaj je na [[Special:AdManagerZones|Ad Manager - nawěškowe wobłuki]]',
	'admanager_labelPage' => 'Titule stronow',
	'admanager_labelCategory' => 'Kategorijowe mjena',
	'admanager_submit' => 'Wotpósłać',
	'admanager_noads' => 'Žane nawěški pokazać',
	'admanager_Page' => 'Strony',
	'admanager_Category' => 'Kategorije',
	'admanager_added' => 'Twoje změny su so składowali',
	'admanager_addedzone' => 'Nawěškowy wobłuk přidaty',
	'admanager_zonenum' => 'Čisło nawěškoweho wobłuka: $1',
	'admanager_zonenotnumber' => 'Zmylk! $1 ličba njeje.',
	'admanager_return' => 'Wróćo k [[Special:AdManager|Ad Manager]]',
	'admanager_gotoads' => '[[Special:AdManager|Nawěški wobdźěłać]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Nawěškowe wobłuki wobdźěłać]]',
	'right-admanager' => '[[Special:AdManager|Nawěški konfigurować]]',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'admanager' => 'Hirdetéskezelő',
	'admanagerzones' => 'Hirdetéskezelő zónák',
	'admanager_invalidtargetpage' => 'Nem található "$1" című oldal.',
	'admanager_invalidtargetcategory' => 'Nem található "$1" című kategória.',
	'admanager_notable' => 'Hiba! A kért adatbázis tábla nem található. Futtassa először az update.php-t!',
	'admanager_noAdManagerZones' => 'Hiba! Először fel kell venned hirdetési zónákat. Add meg őket a [[Special:AdManagerZones|Hirdetéskezelő zónáknál]]!',
	'admanager_labelPage' => 'Lap címek',
	'admanager_labelCategory' => 'Kategórianevek',
	'admanager_submit' => 'Elküldés',
	'admanager_Page' => 'Lapok',
	'admanager_Category' => 'Kategóriák',
	'admanager_added' => 'Változásaid elmentve',
	'admanager_addedzone' => 'Hozzáadott zóna:',
	'admanager_zonenum' => 'Zónaszám: $1',
	'admanager_zonenotnumber' => 'Hiba! $1 nem szám.',
	'admanager_return' => 'Vissza a [[Special:AdManager|hirdetéskezelőhöz]]',
	'admanager_gotoads' => '[[Special:AdManager|Hirdetés elhelyezés szerkesztése]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Hirdetési zónák szerkesztése]]',
	'right-admanager' => '[[Special:AdManager|Hirdetési konfiguráció kezelése]]',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'admanager' => 'Gestor de annuncios',
	'admanagerzones' => 'Zonas del gestor de annuncios',
	'admanager-desc' => 'Forni un [[Special:AdManager|pagina special]] que permitte al administratores de definir le zona pro paginas o categorias',
	'admanager_docu' => 'Pro adder o remover le zona de annuncios de un pagina o de un tote categoria, adde o remove su titulo hic infra.',
	'admanagerzones_docu' => 'Entra le numero de cata zona de annuncios in su proprie linea.',
	'admanager_invalidtargetpage' => 'Nulle pagina trovate con titulo "$1".',
	'admanager_invalidtargetcategory' => 'Nulle categoria trovate con titulo "$1".',
	'admanager_notable' => 'Error! Un tabella requisite non esseva trovate in le base de datos! Executa update.php primo.',
	'admanager_noAdManagerZones' => 'Error! Es necessari adder alcun zonas de annuncios. Entra los in le pagina [[Special:AdManagerZones|Zonas del gestor de annuncios]].',
	'admanager_labelPage' => 'Titulos de pagina',
	'admanager_labelCategory' => 'Nomines de categoria',
	'admanager_submit' => 'Submitter',
	'admanager_noads' => 'Non monstrar annuncios',
	'admanager_Page' => 'Paginas',
	'admanager_Category' => 'Categorias',
	'admanager_added' => 'Le cambiamentos ha essite salveguardate.',
	'admanager_addedzone' => 'Zona addite',
	'admanager_zonenum' => '№ de zona: $1',
	'admanager_zonenotnumber' => 'Error! $1 non es un numero.',
	'admanager_return' => 'Retornar al [[Special:AdManager|gestor de annuncios]]',
	'admanager_gotoads' => '[[Special:AdManager|Modificar placiamento de annuncio]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Modificar zonas de annuncios]]',
	'right-admanager' => '[[Special:AdManager|Gerer configuration de publicitate]]',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'admanager' => 'Ad Manager',
	'admanagerzones' => 'Ad Manager Zones',
	'admanagerzones_docu' => 'Masukkan setiap nomor zona iklan di barisnya sendiri.',
	'admanager_invalidtargetpage' => 'Halaman dengan judul "$1" tidak ditemukan.',
	'admanager_invalidtargetcategory' => 'Kategori dengan judul "$1" tidak ditemukan.',
	'admanager_notable' => 'Kesalahan! Tabel basis data yang diperlukan tidak ditemukan! Jalankan dulu update.php.',
	'admanager_labelPage' => 'Judul halaman',
	'admanager_labelCategory' => 'Nama kategori',
	'admanager_submit' => 'Kirim',
	'admanager_noads' => 'Jangan tampilkan iklan',
	'admanager_Page' => 'Halaman',
	'admanager_Category' => 'Kategori',
	'admanager_added' => 'Perubahan Anda telah disimpan',
	'admanager_addedzone' => 'Zona ditambahkan',
	'admanager_zonenum' => 'Zona #: $1',
	'admanager_zonenotnumber' => 'Kesalahan! $1 bukanlah angka.',
	'admanager_return' => 'Kembali ke [[Special:AdManager|Ad Manager]]',
	'admanager_gotoads' => '[[Special:AdManager|Sunting penempatan iklan]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Sunting zona iklan]]',
	'right-admanager' => '[[Special:AdManager|Kelola konfigurasi iklan]]',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'admanager_labelPage' => 'Íshí ihü',
	'admanager_Page' => 'Ihü',
	'admanager_Category' => 'Ébéanọr',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'admanager_labelPage' => 'Síðutitlar',
	'admanager_labelCategory' => 'Flokkaheiti',
	'admanager_submit' => 'Senda',
	'admanager_noads' => 'Sýna engar auglýsingar',
	'admanager_Page' => 'Síður',
	'admanager_Category' => 'Flokkar',
	'admanager_added' => 'Breytingar þínar hafa verið vistaðar',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'admanager' => 'Gestione pubblicità',
	'admanagerzones' => 'Gestione zone per pubblicità',
	'admanager-desc' => 'Fornisce una [[Special:AdManager|pagina speciale]] che permette agli amministratori di impostare le zone per pagine o categorie',
	'admanager_docu' => "Per aggiungere o rimuovere la zona per la pubblicità di una pagina o l'intera categoria, aggiungi o rimuovi il suo titolo sotto.",
	'admanagerzones_docu' => 'Inserisci il numero di ogni zona nella propria riga.',
	'admanager_invalidtargetpage' => 'Nessuna pagina trovata con il titolo "$1".',
	'admanager_invalidtargetcategory' => 'Nessuna categoria trovata con il titolo "$1".',
	'admanager_notable' => 'Errore! Una tabella di database richiesta non è stata trovata! Eseguire update.php prima di procedere.',
	'admanager_noAdManagerZones' => 'Errore! È necessario aggiungere alcune zone per la pubblicità. Inseriscile nella [[Special:AdManagerZones|Gestione zone per pubblicità]].',
	'admanager_labelPage' => 'Titoli di pagine',
	'admanager_labelCategory' => 'Nomi delle categorie',
	'admanager_submit' => 'Invia',
	'admanager_noads' => 'Non visualizzare pubblicità',
	'admanager_Page' => 'Pagine',
	'admanager_Category' => 'Categorie',
	'admanager_added' => 'Le modifiche sono state salvate',
	'admanager_addedzone' => 'Zone aggiunte',
	'admanager_zonenum' => 'Zona #: $1',
	'admanager_zonenotnumber' => 'Errore! $1 non è un numero.',
	'admanager_return' => 'Ritorna a [[Special:AdManager|Gestione pubblicità]]',
	'admanager_gotoads' => '[[Special:AdManager|Modifica il posizionamento della pubblicità]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Modifica zone pubblicità]]',
	'right-admanager' => '[[Special:AdManager|Gestisce la configurazione della pubblicità]]',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'admanager' => '広告の管理',
	'admanagerzones' => '広告管理のゾーン',
	'admanager-desc' => '管理者がページまたはカテゴリにゾーンを設定できるようにする、[[Special:AdManager|特別ページ]]を提供する',
	'admanager_docu' => 'ページまたはカテゴリ全体の広告ゾーンを追加または除去するには、下でページ名を追加または除去してください。',
	'admanagerzones_docu' => '広告ゾーン番号を各行に 1 つずつ入力してください。',
	'admanager_invalidtargetpage' => '「$1」という名前のページはありません。',
	'admanager_invalidtargetcategory' => '「$1」という名前のカテゴリはありません。',
	'admanager_notable' => 'エラー! 必須のデータベーステーブルがありません! まず update.php を実行してください。',
	'admanager_noAdManagerZones' => 'エラー! 広告ゾーンをいくつか設定する必要があります。[[Special:AdManagerZones|広告管理のゾーン]]で入力してください。',
	'admanager_labelPage' => 'ページ名',
	'admanager_labelCategory' => 'カテゴリ名',
	'admanager_submit' => '送信',
	'admanager_noads' => '広告非表示',
	'admanager_Page' => 'ページ',
	'admanager_Category' => 'カテゴリ',
	'admanager_added' => '変更を保存しました',
	'admanager_addedzone' => 'ゾーンを追加しました:',
	'admanager_zonenum' => 'ゾーン番号: $1',
	'admanager_zonenotnumber' => 'エラー! $1 は数値ではありません。',
	'admanager_return' => '[[Special:AdManager|広告の管理]]に戻る',
	'admanager_gotoads' => '[[Special:AdManager|広告の配置を編集]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|広告ゾーンを編集]]',
	'right-admanager' => '[[Special:AdManager|広告の設定を管理]]',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'admanager' => 'Panata Tawa',
	'admanagerzones' => 'Wewengkoné Panata Tawa',
	'admanager_labelPage' => 'Irah-irahan kaca',
	'admanager_labelCategory' => 'Jenengé katègori',
	'admanager_submit' => 'Kirim',
	'admanager_noads' => 'Aja majang tawa',
	'admanager_Page' => 'Kaca-kaca',
	'admanager_Category' => 'Kategori-kategori',
	'admanager_added' => 'Owah-owahané Sampéyan wis kasinggahaké',
	'admanager_addedzone' => 'Wewengkon sing kawuwuhaké',
	'admanager_zonenum' => 'Wewengkon #: $1',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'admanager' => 'რეკლამის მენეჯერი',
	'admanagerzones' => 'სარეკლამო ზონების მენეჯერი',
	'admanagerzones_docu' => 'თითოეული სარეკლამო ზონის ნომერი შეიყვანეთ თითო ხაზზე.',
	'admanager_invalidtargetpage' => 'გვერდი სათაურით „$1“ ვერ მოიძებნა.',
	'admanager_invalidtargetcategory' => 'კატეგორია სათაურით „$1“ ვერ მოიძებნა.',
	'admanager_labelPage' => 'გვერდის სათაურები',
	'admanager_labelCategory' => 'კატეგორიის სახელები',
	'admanager_submit' => 'მიღება',
	'admanager_noads' => 'არ აჩვენო რეკლამა',
	'admanager_Page' => 'გვერდები',
	'admanager_Category' => 'კატეგორიები',
	'admanager_added' => 'თქვენი ცვლილებები შენახულია',
	'admanager_addedzone' => 'დამატებულია ზონა',
	'admanager_zonenum' => 'ზონა №: $1',
	'admanager_zonenotnumber' => 'შეცდომა! $1 არ არის რიცხვი.',
	'admanager_return' => '[[Special:AdManager|რეკლამის მენეჯერთან]] დაბრუნება',
	'admanager_gotoads' => '[[Special:AdManager|რეკლამის განთავსების რედაქტირება]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|სარეკლამო ზონების რედაქტირება]]',
	'right-admanager' => '[[Special:AdManager|რეკლამის კონფიგურაციის მართვა]]',
);

/** Khowar (کھوار)
 * @author Rachitrali
 */
$messages['khw'] = array(
	'admanager_labelPage' => 'صفحہ عنوانات',
	'admanager_submit' => 'داخل کوے',
	'admanager_Page' => 'صفحات',
	'admanager_Category' => 'زمرہ جات',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'admanager' => '광고 관리자',
	'admanagerzones' => '광고 관리자 영역',
	'admanager-desc' => '문서나 분류에 대한 영역을 설정하여 관리할 수 있도록 [[Special:AdManager|특수 문서]]을 제공합니다',
	'admanager_docu' => '문서가 전체 카테고리의 광고 영역을 더하거나 제거하려면 아래에 있는 광고의 제목을 추가하거나 제거하세요.',
	'admanagerzones_docu' => '각각의 줄에 광고 영역 번호를 입력하세요.',
	'admanager_invalidtargetpage' => '"$1" 제목으로 된 문서가 없습니다.',
	'admanager_invalidtargetcategory' => '"$1" 제목으로 된 분류가 없습니다.',
	'admanager_notable' => '오류! 필요한 데이터베이스 테이블을 찾을 수 없습니다! 먼저 update.php를 실행하세요.',
	'admanager_noAdManagerZones' => '오류! 약간의 광고 영역을 더해야 합니다. [[Special:AdManagerZones|광고 관리자 영역]]으로 들어가세요.',
	'admanager_labelPage' => '문서 제목',
	'admanager_labelCategory' => '분류 이름',
	'admanager_submit' => '제출',
	'admanager_noads' => '광고를 보여주지 않음',
	'admanager_Page' => '문서',
	'admanager_Category' => '분류',
	'admanager_added' => '바뀜을 저장했습니다',
	'admanager_addedzone' => '추가된 영역',
	'admanager_zonenum' => '영역 #: $1',
	'admanager_zonenotnumber' => '오류! $1(은)는 숫자가 아닙니다.',
	'admanager_return' => '[[Special:AdManager|광고 관리자]]로 돌아갑니다',
	'admanager_gotoads' => '[[Special:AdManager|광고 배치 편집]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|광고 영역 편집]]',
	'right-admanager' => '[[Special:AdManager|광고 설정 관리]]',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'admanager' => 'Reklaame Verwallde',
	'admanagerzones' => 'Reklame Verwallde &mdash; Berette',
	'admanager-desc' => 'Deihd en [[Special:AdManager|{{int:specialpage}}]] en et Wiki, domet Wiki_Köbeße der Berett för Aanzeije op Sigge un en Saachjroppe faß lääje künne.',
	'admanager_docu' => 'Öm ene Berett för de Reklaame vun ene Sigg udder en janze Saachjropp derbei ze donn udder afzeträcke, donn onge dä Tittel derbei udder fott.',
	'admanagerzones_docu' => 'Donn jedem Berett för de Reklaame sing Nommer op sing eije Reih.',
	'admanager_invalidtargetpage' => 'Kein Sigg mem Naame „$1“ jefonge.',
	'admanager_invalidtargetcategory' => 'Kein Saachjropp mem Naame „$1“ jefonge.',
	'admanager_notable' => 'En nüüdeje Tabäll en dä Daatebangk vun Wiki wood nit jefonge.
Lohß eets ens dat Projramm <code lang="en">update.php</code> loufe.',
	'admanager_noAdManagerZones' => 'Do moß ene Berett för de Reklaame aanjävve. Donn di op dä Sigg [[Special:AdManagerZones|Berette för de Reklaame]] aanlääje.',
	'admanager_labelPage' => 'Siggetittele:',
	'admanager_labelCategory' => 'Dä Saachjroppe ier Naame:',
	'admanager_submit' => 'Lohß Jonn!',
	'admanager_noads' => 'Kein Reklaame aanzeije',
	'admanager_Page' => 'Sigge',
	'admanager_Category' => 'Saachjroppe',
	'admanager_added' => 'Ding Änderonge sin faßjehalde.',
	'admanager_addedzone' => 'Dä Berett för de Reklaame wood zojeföösch:',
	'admanager_zonenum' => 'Berett för de Reklaame Nommer: $1',
	'admanager_zonenotnumber' => '„$1“ es kein Zahl.',
	'admanager_return' => 'Retuur nohm [[Special:AdManager|Reklaame Verwallde]]',
	'admanager_gotoads' => '[[Special:AdManager|Reklaame plazeere]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Berette för de Reklaame Verwallde]]',
	'right-admanager' => '[[Special:AdManager|Enschtällonge för de Reklaame Ändere]]',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'admanager_submit' => 'Tomar bike',
	'admanager_Page' => 'Rûpel',
	'admanager_Category' => 'Kategorî',
);

/** Kirghiz (Кыргызча)
 * @author Growingup
 */
$messages['ky'] = array(
	'admanager_submit' => 'Жөнөтүү',
	'admanager_Page' => 'Барактар',
	'admanager_Category' => 'Категориялар',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'admanager' => 'Gestioun vun de Reklammen',
	'admanagerzones' => 'Gestioun vun den Zone vun de Reklammen',
	'admanager-desc' => 'Setzt eng [[Special:AdManager|Spezialsäit]] derbäi déi et Administrateuren erlaabt fir Zone vu Säiten oder Kategorien ze definéieren',
	'admanager_invalidtargetpage' => 'Keng Säit mam Titel "$1" fonnt.',
	'admanager_invalidtargetcategory' => 'Keng Kategorie mam Titel "$1" fonnt.',
	'admanager_notable' => "Feeler: Déi erfuerdert Datebanktabell gouf net fonnt! Start d'éischt update.php.",
	'admanager_labelPage' => 'Säitennimm',
	'admanager_labelCategory' => 'Nimm vun de Kategorien:',
	'admanager_submit' => 'Späicheren',
	'admanager_noads' => 'Keng Reklamme weisen',
	'admanager_Page' => 'Säiten',
	'admanager_Category' => 'Kategorien',
	'admanager_added' => 'Är Ännerunge goufe gespäichert',
	'admanager_addedzone' => 'Derbäigesaten Zone',
	'admanager_zonenum' => 'Zone #: $1',
	'admanager_zonenotnumber' => 'Feeler! $1 ass keng Zuel.',
	'admanager_return' => "Zréck op d'[[Special:AdManager|Gestioun vun de Reklammen]]",
);

/** Limburgish (Limburgs)
 * @author Pahles
 */
$messages['li'] = array(
	'admanager' => 'Advertentiebehier',
	'admanagerzones' => 'Zones veur advertentiebehier',
	'admanager-desc' => "Veug 'n [[Special:AdManager|speciaal pagina]] bie die systeemwèrkers in sjtaot sjtelt om de zone veur pagina's of categorieë in te sjtèlle",
	'admanager_docu' => "De kins 'n advertentiezone van 'n pagina of volledige categorie biedoon of ewegsjaffe door de naam devaan bie te doon of eweg te sjaffe.",
	'admanagerzones_docu' => "Veur jeder advertentiezone op 'n eige regel in.",
	'admanager_invalidtargetpage' => 'Gein pagina gevónje mit de naam "$1".',
	'admanager_invalidtargetcategory' => 'Gein categorie gevónje mit de naam "$1".',
	'admanager_notable' => "Fout! 'n Vereiste databasetabel is neet gevónje! Veur iers update.php oet.",
	'admanager_noAdManagerZones' => 'Fout! De mós advertentiezones toeveuge. Veur ze in op de [[Special:AdManagerZones|speciaal pagina]].',
	'admanager_labelPage' => 'Paginaname',
	'admanager_labelCategory' => 'Categoriename',
	'admanager_submit' => 'Opsjlaon',
	'admanager_noads' => 'Gein advertenties weergaeve',
	'admanager_Page' => "Pagina's",
	'admanager_Category' => 'Categorieë',
	'admanager_added' => 'Dien verangeringe zeen opgesjlage',
	'admanager_addedzone' => 'Zone toegeveug',
	'admanager_zonenum' => 'Zonenómmer: $1',
	'admanager_zonenotnumber' => 'Fout: $1 is gein getal.',
	'admanager_return' => 'Trök nao [[Special:AdManager|advertentiebehier]]',
	'admanager_gotoads' => '[[Special:AdManager|Advertentieplaatsing bewirke]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Advertentiezones bewirke]]',
	'right-admanager' => '[[Special:AdManager|Advertentie-insjtèllinge behiere]]',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'admanager' => 'Skelbimų tvarkyklė',
	'admanagerzones' => 'Skelbimų tvarkyklės zonos',
	'admanager_invalidtargetpage' => 'Puslapis nerastas su pavadinimu "$1".',
	'admanager_invalidtargetcategory' => 'Kategorija nerasta su pavadinimu "$1".',
	'admanager_labelPage' => 'Puslapio pavadinimai',
	'admanager_labelCategory' => 'Kategorijų pavadinimai',
	'admanager_submit' => 'Siųsti',
	'admanager_noads' => 'Nerodyti reklamų',
	'admanager_Page' => 'Puslapiai',
	'admanager_Category' => 'Kategorijos',
	'admanager_added' => 'Jūsų pakeitimai buvo įrašyti',
	'admanager_addedzone' => 'Pridėta zona',
	'admanager_zonenum' => 'Zona #: $1',
	'admanager_zonenotnumber' => 'Klaida! $1 nėra skaičius.',
	'admanager_gotozones' => '[[Special:AdManagerZones|Redaguoti reklamos zonas]]',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'admanager_labelPage' => 'Lapu nosaukumi',
	'admanager_labelCategory' => 'Kategoriju nosaukumi',
	'admanager_submit' => 'Iesniegt',
	'admanager_noads' => 'Nerādīt reklāmas',
	'admanager_Page' => 'Lapas',
	'admanager_Category' => 'Kategorijas',
	'admanager_added' => 'Jūsu veiktās izmaiņas ir saglabātas',
	'admanager_zonenum' => 'Zonas #: $1',
	'admanager_zonenotnumber' => 'Kļūda! $1 nav skaitlis.',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'admanager' => 'Menejer Iklan',
	'admanagerzones' => 'Wilayaeh Menejer Iklan',
	'admanager-desc' => 'Nyediakna [[Special:AdManager|kaca khusus]] sing ngijina opsis ngeset wilayaeh nggo kaca utawa kategori',
	'admanager_docu' => 'Kanggo nambaih utawa mbuang wilayah iklan sekang kaca utawa kabeh kategori, tambahna utawa buang judhule nang ngisor kiye.',
	'admanagerzones_docu' => 'Lebokna saben nomer wilayah iklan nang barise dhewek.',
	'admanager_invalidtargetpage' => 'Ora nemokna kaca sing judhule "$1".',
	'admanager_invalidtargetcategory' => 'Ora nemokna kategori sing judhule "$1".',
	'admanager_notable' => 'Kasalahan! Tabel basis data sing diperlokna ota ketemu! Lakokna disit update.php.',
	'admanager_noAdManagerZones' => 'Kasalahan! Rika kudu nambahna wilayah iklan. Lebokna kuwe nang [[Special:AdManagerZones|Ad Manager Zones]].',
	'admanager_labelPage' => 'Judul kaca',
	'admanager_labelCategory' => 'Jeneng kategori',
	'admanager_submit' => 'Kirimna',
	'admanager_noads' => 'Aja nidokna iklan',
	'admanager_Page' => 'Kaca',
	'admanager_Category' => 'Kategori',
	'admanager_added' => 'Owahane Rika wis disimpen',
	'admanager_addedzone' => 'Wilayah sing ditambahna',
	'admanager_zonenum' => 'Wilayah #: $1',
	'admanager_zonenotnumber' => 'Kasalahan! $1 kuwe dudu angka.',
	'admanager_return' => 'Mbalik ming [[Special:AdManager|Menejer Iklan]]',
	'admanager_gotoads' => '[[Special:AdManager|Nyunting panggonane iklan]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Nyunting wilayaeh iklan]]',
	'right-admanager' => '[[Special:AdManager|Ngatur konfigurasi iklan]]',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'admanager' => 'Раководител со реклами',
	'admanagerzones' => 'Зони - Раководител со реклами',
	'admanager-desc' => 'Дава [[Special:AdManager|специјална страница]] каде системските оператори можат да ја зададат зоната за страниците или категориите',
	'admanager_docu' => 'За да додадете или отстраните рекламна зона на една страница или цела категорија, подолу додајте/отстранете го нејзиниот наслов.',
	'admanagerzones_docu' => 'Внесете го ги броевите на рекламните зони, секој во посебен ред.',
	'admanager_invalidtargetpage' => 'Не пронајдов страница со наслов „$1“.',
	'admanager_invalidtargetcategory' => 'Не пронајдов категорија со наслов „$1“.',
	'admanager_notable' => 'Грешка! Не ја пронајдов потребната табела во базата! Најпрвин направете поднова со update.php.',
	'admanager_noAdManagerZones' => 'Грешка! Мора да додадете некои рекламни зони. Внесете ги во „[[Special:AdManagerZones|Зони - Раководител со реклами]]“.',
	'admanager_labelPage' => 'Наслови на страниците',
	'admanager_labelCategory' => 'Имиња на категориите',
	'admanager_submit' => 'Поднеси',
	'admanager_noads' => 'Не прикажувај реклами',
	'admanager_Page' => 'Страници',
	'admanager_Category' => 'Категории',
	'admanager_added' => 'Вашите измени се зачувани',
	'admanager_addedzone' => 'Додадена зона',
	'admanager_zonenum' => 'Зона бр: $1',
	'admanager_zonenotnumber' => 'Грешка! $1 не претставува број.',
	'admanager_return' => 'Назад на [[Special:AdManager|Раководителот со реклами]]',
	'admanager_gotoads' => '[[Special:AdManager|Смени положба на рекламата]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Уреди рекламни зони]]',
	'right-admanager' => '[[Special:AdManager|Поставки за рекламирање]]',
);

/** Malayalam (മലയാളം)
 * @author Santhosh.thottingal
 */
$messages['ml'] = array(
	'admanager_submit' => 'സമർപ്പിക്കുക',
	'admanager_Page' => 'താളുകൾ',
	'admanager_Category' => 'വർഗ്ഗങ്ങൾ',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Diagramma Della Verita
 */
$messages['ms'] = array(
	'admanager' => 'Pengurus Iklan',
	'admanagerzones' => 'Zon Pengurus Iklan',
	'admanager-desc' => 'Menyediakan [[Special:AdManager|halaman khas]] yang membolehkan pentadbir menetapkan zon untuk halaman atau kategori',
	'admanager_docu' => 'Untuk menambahkan atau menggugurkan zon iklan sesuatu halaman atau seluruh kategori, tambahkan atau gugurkan tajuknya di bawah.',
	'admanagerzones_docu' => 'Satu nombor zon iklan sahaja untuk setiap baris.',
	'admanager_invalidtargetpage' => 'Tiada halaman yang bertajuk "$1".',
	'admanager_invalidtargetcategory' => 'Tiada kategori yang bertajuk "$1".',
	'admanager_notable' => 'Perhatian! Jadual pangkalan data yang diperlukan tidak dijumpai! Jalankan update.php terlebih dahulu.',
	'admanager_noAdManagerZones' => 'Perhatian! Anda mesti menambahkan zon iklan. Masukkannya di [[Special:AdManagerZones|Zon Pengurus Iklan]].',
	'admanager_labelPage' => 'Tajuk laman',
	'admanager_labelCategory' => 'Nama kategori',
	'admanager_submit' => 'Hantar',
	'admanager_noads' => 'Jangan paparkan iklan',
	'admanager_Page' => 'Halaman',
	'admanager_Category' => 'Kategori-kategori',
	'admanager_added' => 'Perubahan anda telah disimpan',
	'admanager_addedzone' => 'Zon tambahan',
	'admanager_zonenum' => 'Bil. Zon: $1',
	'admanager_zonenotnumber' => 'Ralat! $1 bukan bilangan.',
	'admanager_return' => 'Kembali ke [[Special:AdManager|Ad Manager]]',
	'admanager_gotoads' => '[[Special:AdManager|Ubah kedudukan iklan]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Ubah zon iklan]]',
	'right-admanager' => '[[Special:AdManager|Menguruskan tataletak pengiklanan]]',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'admanager' => 'Ġestjoni tar-reklamar',
	'admanager_invalidtargetpage' => 'L-ebda paġna ma nstabet bit-titlu "$1".',
	'admanager_invalidtargetcategory' => 'L-ebda kategorija ma nstabet bit-titlu "$1".',
	'admanager_labelPage' => 'Titli tal-paġni',
	'admanager_labelCategory' => 'Ismijiet tal-kategoriji',
	'admanager_submit' => 'Ibgħat',
	'admanager_noads' => 'Turix l-ebda reklam',
	'admanager_Page' => 'Paġni',
	'admanager_Category' => 'Kategoriji',
	'admanager_added' => 'It-tibdiliet tiegħek ġew salvati',
	'admanager_addedzone' => 'Żoni miżjuda',
	'admanager_zonenum' => 'Żona #: $1',
	'admanager_zonenotnumber' => 'Żball! $1 mhuwiex numru.',
	'admanager_return' => 'Irritorna lura lejn [[Special:AdManager|Ġestjoni tar-reklamar]]',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author EvenT
 */
$messages['nb'] = array(
	'admanager' => 'Annonsebehandler',
	'admanagerzones' => 'Soner for annonsebehandler',
	'admanager-desc' => 'Frembringer en [[Special:AdManager|spesialside]] som tillater sysop-er å sette sonen for sider eller kategorier',
	'admanager_docu' => 'For å legge inn eller fjerne annonsesonen av en side eller hele kategorien er det bare å legge inn eller fjerne tilhørende tittel under.',
	'admanagerzones_docu' => 'Legg inn hvert annonsesonenummer på egen linje.',
	'admanager_invalidtargetpage' => 'Finner ikke side med tittel "$1".',
	'admanager_invalidtargetcategory' => 'Finner ikke kategori med tittel "$1".',
	'admanager_notable' => 'Feil! En nødvendig databasetabell ble ikke funnet! Kjør <i>update.php</i> først.',
	'admanager_noAdManagerZones' => 'Feil! Du må legge til noen reklamesoner. Legg dem i [[Special:AdManagerZones|Ad Manager Zones]].',
	'admanager_labelPage' => 'Sidetitler',
	'admanager_labelCategory' => 'Kategorinavn',
	'admanager_submit' => 'Send',
	'admanager_noads' => 'Vis ingen annonser',
	'admanager_Page' => 'Sider',
	'admanager_Category' => 'Kategorier',
	'admanager_added' => 'Dine endringer er lagret',
	'admanager_addedzone' => 'Legg til sone',
	'admanager_zonenum' => 'Sone #: $1',
	'admanager_zonenotnumber' => 'Feil! $1 er ikke et tall.',
	'admanager_return' => 'Gå tilbake til [[Special:AdManager|Ad Manager]]',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'admanager_labelCategory' => 'Kategorienamen',
	'admanager_submit' => 'Spickern',
	'admanager_Page' => 'Sieden',
	'admanager_Category' => 'Kategorien',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'admanager' => 'Advertentiebeheer',
	'admanagerzones' => 'Zones voor advertentiebeheer',
	'admanager-desc' => "Voegt een [[Special:AdManager|speciale pagina]] toe die beheerders in staat stelt om de zone voor pagina's of categorieën in te stellen",
	'admanager_docu' => 'U kunt een advertentiezone van een pagina of volledige categorie toevoegen of verwijderen door de naam ervan toe te voegen of te verwijderen.',
	'admanagerzones_docu' => 'Voer elke advertentiezone op een eigen regel in.',
	'admanager_invalidtargetpage' => 'Geen pagina gevonden met de naam "$1".',
	'admanager_invalidtargetcategory' => 'Geen categorie gevonden met de naam "$1".',
	'admanager_notable' => 'Fout: een vereiste databasetabel is niet gevonden. Voer eerst update.php uit.',
	'admanager_noAdManagerZones' => 'Fout: u moet advertentiezones toevoegen. Voer ze in op de [[Special:AdManagerZones|speciale pagina]].',
	'admanager_labelPage' => 'Paginanamen',
	'admanager_labelCategory' => 'Categorienamen',
	'admanager_submit' => 'Opslaan',
	'admanager_noads' => 'Geen advertenties weergeven',
	'admanager_Page' => "Pagina's",
	'admanager_Category' => 'Categorieën',
	'admanager_added' => 'Uw wijzigingen zijn opgeslagen',
	'admanager_addedzone' => 'Zone toegevoegd',
	'admanager_zonenum' => 'Zonenummer: $1',
	'admanager_zonenotnumber' => 'Fout: $1 is geen getal.',
	'admanager_return' => 'Terug naar [[Special:AdManager|advertentiebeheer]]',
	'admanager_gotoads' => '[[Special:AdManager|Advertentieplaatsing bewerken]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Advertentiezones bewerken]]',
	'right-admanager' => '[[Special:AdManager|Advertentie-instellingen beheren]]',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'admanager_noAdManagerZones' => 'Fout: je moet advertentiezones toevoegen. Voer ze in op de [[Special:AdManagerZones|speciale pagina]].',
	'admanager_added' => 'Je wijzigingen zijn opgeslagen',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 * @author ଆଶୁତୋଷ କର
 */
$messages['or'] = array(
	'admanager' => 'ବିଜ୍ଞାପନ ପରିଚାଳକ',
	'admanagerzones' => 'ବିଜ୍ଞାପନ ପରିଚାଳକ ଅଞ୍ଚଳ ଗୁଡିକ',
	'admanager_notable' => 'ତ୍ରୁଟି! ଏକ ଦରକାରି ଡେଟାବେସ ତାଲିକା ମିଳିଲା ନାହିଁ। ପ୍ରଥମେ update.php ଚଲାନ୍ତୁ।',
	'admanager_labelPage' => 'ପୃଷ୍ଠା ଶିରୋନାମାଗୁଡିକ',
	'admanager_labelCategory' => 'ଶ୍ରେଣୀ ନାମ',
	'admanager_submit' => 'ପଇଠ କରିବେ',
	'admanager_noads' => 'କୌଣସି ବିଜ୍ଞାପନ ଦେଖାଇବେ ନାହିଁ',
	'admanager_Page' => 'ପୃଷ୍ଠାଗୁଡିକ',
	'admanager_Category' => 'ବିଭାଗଗୁଡିକ',
	'admanager_added' => 'ଆପଣଙ୍କର ବଦଳଗୁଡିକୁ ସାଇତାଗଲା',
	'admanager_addedzone' => 'ଯୋଡ଼ାଯାଇଥିବା ଭାଗ',
	'admanager_zonenum' => 'ଅଞ୍ଚଳ ନଂ : $1',
	'admanager_zonenotnumber' => 'ଅସୁବିଧା ! $1 ଗୋଟିଏ ସଂଖ୍ୟା ନୁହେଁ ।',
	'admanager_return' => '[[Special:AdManager|Ad Manager]]କୁ ଫେରିବେ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'admanager_labelPage' => 'Naame vun Bledder',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'admanager' => 'Oazaischevawaldung',
	'admanagerzones' => "Oazaischevawaldung B'raische",
	'admanager-desc' => "Ä [[Special:AdManager|Schbezialsaid]], wu Adminischradore än Oazaischeb'raisch fa Saide und Kadegorije feschdleesche kennen",
	'admanager_docu' => "Umän Oazaischeb'raisch baina Said dzuzufiesche oda wegzunemme, fiesch oda nemm unne soin Titl dzu oda weg.",
	'admanagerzones_docu' => "Geb die Numma vun alle Oazaischeb'raisch ina aischeni Zail oa.",
	'admanager_invalidtargetpage' => 'S\'hod kä Said midm Titl "$1".',
	'admanager_invalidtargetcategory' => 'S\'hod kä Kadegorije midm Titl "$1".',
	'admanager_notable' => "Fehla: Die nedisch Daadebong'gtabell isch ned gfunne worre. Loß update.php laafe.",
	'admanager_noAdManagerZones' => "Fehla: Erschd mol missen Oazaischeb'raisch dzug'fieschd werre. Des konschd uffde Schbezialsaid [[Special:AdManagerZones|Oazaischevawaldung B'raische]] mache.",
	'admanager_labelPage' => 'Tidl vunde Said:',
	'admanager_labelCategory' => 'Kadegorijenoame',
	'admanager_submit' => 'Schbaischere',
	'admanager_noads' => 'Kä Oazaische ausgewe',
	'admanager_Page' => 'Saide',
	'admanager_Category' => 'Kadegorije',
	'admanager_added' => 'Doi Änarunge sin gschbaischad worre',
	'admanager_addedzone' => "Oazaischeb'raisch isch dzugfieschd worre",
	'admanager_zonenum' => "Numma vum Oazaischeb'raisch: $1",
	'admanager_zonenotnumber' => 'Fehla! $1 isch kä Numma.',
	'admanager_return' => 'Zrigg zude [[Special:AdManager|Oazaischevawaldung]]',
	'admanager_gotoads' => '[[Special:AdManager|Oande Oazaisch schaffe]]',
	'admanager_gotozones' => "[[Special:AdManagerZones|Oam Oazaischeb'raisch schaffe]]",
	'right-admanager' => '[[Special:AdManager|Oazaische gschdalde]]',
);

/** Polish (polski)
 * @author Matma Rex
 * @author Woytecr
 */
$messages['pl'] = array(
	'admanager' => 'Menedżer reklam',
	'admanagerzones' => 'Obszary reklamowe',
	'admanager-desc' => 'Dodaje [[Special:AdManager|stronę specjalną]], która pozwala administratorom ustalać obszary reklamowe dla stron lub kategorii',
	'admanager_docu' => 'Aby dodać lub usunąć obszar reklamowy do/z strony lub całej kategorii, dodaj lub usuń jej nazwę poniżej.',
	'admanagerzones_docu' => 'Wpisz numer każdego obszaru reklamowego w osobnej linii.',
	'admanager_invalidtargetpage' => 'Nie znaleziono strony o nazwie „$1”.',
	'admanager_invalidtargetcategory' => 'Nie znaleziono kategorii o nazwie „$1”.',
	'admanager_notable' => 'Błąd! Nie znaleziono wymaganej tabeli bazy danych! Najpierw uruchom skrypt update.php.',
	'admanager_noAdManagerZones' => 'Błąd! Musisz najpierw zdefiniować obszary reklamowe. Wpisz je na stronie specjalnej [[Special:AdManagerZones|Obszary reklamowe]].',
	'admanager_labelPage' => 'Tytuły stron',
	'admanager_labelCategory' => 'Nazwy kategorii',
	'admanager_submit' => 'Wyślij',
	'admanager_noads' => 'Nie wyświetlaj reklam',
	'admanager_Page' => 'Strony',
	'admanager_Category' => 'Kategorie',
	'admanager_added' => 'Zmiany zostały zapisane',
	'admanager_addedzone' => 'Dodano obszar',
	'admanager_zonenum' => 'Strefa #: $1',
	'admanager_zonenotnumber' => 'Błąd! „$1” nie jest liczbą.',
	'admanager_return' => 'Wróć do [[Special:AdManager|Menedżera reklam]]',
	'admanager_gotoads' => '[[Special:AdManager|Zmień umiejscowienie reklam]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Zmień obszary reklamowe]]',
	'right-admanager' => '[[Special:AdManager|Zarządzaj konfiguracją reklam]]',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'admanager' => "Gestor d'areclam",
	'admanagerzones' => "Zòne ëd gestor d'areclam",
	'admanager-desc' => "A forniss na [[Special:AdManager|pàgina special]] ch'a përmët a j'aministrator d'amposté la zòna për le pàgine o le categorìe",
	'admanager_docu' => "Për gionté o gavé la zòna d'areclam ëd na pàgina o ëd na categorìa antrega, ch'a gionta o ch'a gava sò tìtol sì-sota.",
	'admanagerzones_docu' => "Ch'a anseriss minca nùmer ëd zòna d'areclam dzora soa linia.",
	'admanager_invalidtargetpage' => 'pa gnun-e pagine trovà con tìtol "$1".',
	'admanager_invalidtargetcategory' => 'pa gnun-e categorìe trovà con tìtol "$1".',
	'admanager_notable' => "Eror! Na tàula ëd base ëd dàit ciamà a l'é pa stàita trovà! Fé prima marcé update.php.",
	'admanager_noAdManagerZones' => "Eror! A dev gionté dle zòne d'areclam. Ch'A-j buta ant le [[Special:AdManagerZones|Zòne ëd mansé d'areclam]].",
	'admanager_labelPage' => 'Tìtoj ëd pàgina',
	'admanager_labelCategory' => 'Nòm dla categorìa',
	'admanager_submit' => 'Spediss',
	'admanager_noads' => "Mostré pa d'areclam",
	'admanager_Page' => 'Pàgine',
	'admanager_Category' => 'Categorìe',
	'admanager_added' => 'Soe modìfiche a son ëstàite salvà',
	'admanager_addedzone' => 'Zòne giontà',
	'admanager_zonenum' => 'Zòna #: $1',
	'admanager_zonenotnumber' => "Eror! $1 a l'é pa un nùmer.",
	'admanager_return' => "Torné a [[Special:AdManager|Mansé d'areclam]]",
	'admanager_gotoads' => "[[Special:AdManager|Modifiché ël posissionament ëd n'areclam]]",
	'admanager_gotozones' => "[[Special:AdManagerZones|Modifiché le zòne d'areclam]]",
	'right-admanager' => "[[Special:AdManager|Gestì la configurassion dj'areclam]]",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'admanager_labelPage' => 'مخ سرليکونه',
	'admanager_labelCategory' => 'د وېشنيزو نومونه',
	'admanager_submit' => 'سپارل',
	'admanager_Page' => 'مخونه',
	'admanager_Category' => 'وېشنيزې',
	'admanager_added' => 'ستاسې بدلونونه خوندي شول',
	'admanager_zonenum' => 'سيمه #: $1',
	'admanager_zonenotnumber' => 'ستونزه! $1 يوه شمېره نه ده.',
);

/** Portuguese (português)
 * @author Bonifácio
 * @author SandroHc
 */
$messages['pt'] = array(
	'admanager_docu' => 'Para adicionar ou remover a zona de publicidade de uma página ou toda a categoria, adicionar ou remover o título abaixo.',
	'admanager_labelCategory' => 'Nomes da categoria',
	'admanager_submit' => 'Enviar',
	'admanager_noads' => 'Não apresentar anúncios',
	'admanager_Page' => 'Páginas',
	'admanager_Category' => 'Categorias',
	'admanager_added' => 'As suas alterações foram salvas',
	'admanager_addedzone' => 'Zona adicionada',
	'admanager_zonenum' => 'Zona #: $1',
	'admanager_zonenotnumber' => 'Erro! $1 não é um número.',
	'admanager_return' => 'Voltar para [[Special:AdManager|Ad Manager]]',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas Blade
 * @author 555
 */
$messages['pt-br'] = array(
	'admanager' => 'Gestão de anúncios',
	'admanagerzones' => 'Gestão de zonas de anúncios',
	'admanager-desc' => 'Provê uma [[Special:AdManager|página especial]] que permite aos administradores definirem uma zona de anúncios em páginas ou categorias',
	'admanager_docu' => 'Para adicionar ou remover a zona de anúncios de uma página ou de uma categoria por inteiro, adicione ou remova seus títulos abaixo.',
	'admanagerzones_docu' => 'Insira cada número de zona de anúncios em sua própria linha.',
	'admanager_invalidtargetpage' => 'Não foi encontrada nenhuma página com o título "$1".',
	'admanager_invalidtargetcategory' => 'Não foi encontrada nenhuma categoria com o título "$1".',
	'admanager_notable' => 'Erro! Uma tabela requerida não foi localizada no banco de dados. Execute update.php antes de prosseguir.',
	'admanager_noAdManagerZones' => 'Erro! É necessário adicionar algumas zonas de anúncios. Insira-as em [[Special:AdManagerZones|Gestão de zonas de anúncios]]',
	'admanager_labelPage' => 'Títulos de páginas',
	'admanager_labelCategory' => 'Nomes de categorias',
	'admanager_submit' => 'Enviar',
	'admanager_noads' => 'Não mostrar anúncios',
	'admanager_Page' => 'Páginas',
	'admanager_Category' => 'Categorias',
	'admanager_added' => 'Suas alterações foram salvas',
	'admanager_addedzone' => 'Zona adicionada',
	'admanager_zonenum' => 'Zona #: $1',
	'admanager_zonenotnumber' => 'Erro! $1 não é um número.',
	'admanager_return' => 'Retornar para a [[Special:AdManager|gestão de anúncios]]',
	'admanager_gotoads' => '[[Special:AdManager|Editar a posição do anúncio]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Editar zonas de anúncio]]',
	'right-admanager' => '[[Special:AdManager|Gerir a configuração dos anúncios]]',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 */
$messages['ro'] = array(
	'admanager' => 'Gestionar de anunțuri',
	'admanagerzones' => 'Zone gestionare anunțuri',
	'admanager-desc' => 'Furnizează o [[Special:AdManager|pagină specială]] care permite administratorilor să seteze zona pentru pagini sau categorii',
	'admanager_docu' => 'Pentru a adăuga sau înlătura zona cu anunțuri a unei pagini sau a unei întregi categorii, adăugați-i sau eliminați-i titlul mai jos.',
	'admanagerzones_docu' => 'Introduceți fiecare număr al zonei cu anunțuri pe un singur rând.',
	'admanager_invalidtargetpage' => 'Nicio pagină găsită cu titlul „$1”.',
	'admanager_invalidtargetcategory' => 'Nicio categorie găsită cu titlul „$1”.',
	'admanager_notable' => 'Eroare! Un tabel cu baza de date, care a fost solicitat, nu a fost găsit! Rulați mai întâi update.php.',
	'admanager_noAdManagerZones' => 'Eroare! Trebuie să adăugați câteva zone cu anunțuri. Introduceți-le în pagina [[Special:AdManagerZones|Zone gestionare anunțuri]].',
	'admanager_labelPage' => 'Titluri de pagină',
	'admanager_labelCategory' => 'Nume de categorie',
	'admanager_submit' => 'Trimite',
	'admanager_noads' => 'Nu se afișează anunțuri',
	'admanager_Page' => 'Pagini',
	'admanager_Category' => 'Categorii',
	'admanager_added' => 'Modificările dumneavoastră au fost salvate',
	'admanager_addedzone' => 'Zonă adăugată',
	'admanager_zonenum' => 'Zona nr.: $1',
	'admanager_zonenotnumber' => 'Eroare! $1 nu este un număr.',
	'admanager_return' => 'Revenire la [[Special:AdManager|Ad Manager]]',
	'admanager_gotoads' => '[[Special:AdManager|Modifică amplasarea anunțurilor]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Modifică zonele cu anunțuri]]',
	'right-admanager' => '[[Special:AdManager|Gestionează configurația anunțurilor publicitare]]',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'admanager' => "Aggiunge 'nu amministratore",
	'admanagerzones' => "Aggiunge 'nu amministratore de zone",
	'admanager-desc' => "Dèje 'na [[Special:AdManager|pàgene speciale]] 'a quale permette a le amministrature de 'mbostà 'a zone pe le pàggene o le categorije",
	'admanager_docu' => "Pe aggiungere o luà 'a zone ad de 'na pàgene o 'n'indera categorije, aggiungere o luà 'u titole sue aqquà sotte.",
	'admanagerzones_docu' => "Sckaffe ogne membre de zone ''ad'' sus a linèa soje.",
	'admanager_invalidtargetpage' => 'Nisciune pàgene acchijate c\'u titole "$1".',
	'admanager_invalidtargetcategory' => 'Nisciune categorije acchijate c\'u titole "$1".',
	'admanager_notable' => "Errore! 'A tabbelle d'u database ca è richieste non ge stè! Lange update.php apprime.",
	'admanager_noAdManagerZones' => "Errore! Tu à aggiungere quacche zone ''ad''. Sckaffele sus a 'u [[Special:AdManagerZones|Gestore de Zone ''ad'']].",
	'admanager_labelPage' => "Titele d'a pàgene",
	'admanager_labelCategory' => 'Nome de le categorie',
	'admanager_submit' => 'Conferme',
	'admanager_noads' => 'Non ge vide nisciune annunce',
	'admanager_Page' => 'Pàggene',
	'admanager_Category' => 'Categorije',
	'admanager_added' => 'Le cangiaminde tue sonde state salvate',
	'admanager_addedzone' => 'Vanne aggiunde',
	'admanager_zonenum' => 'Vanne #: $1',
	'admanager_zonenotnumber' => "Errore! $1 non g'è 'nu numere.",
	'admanager_return' => 'Tuèrne a [[Special:AdManager|Ad Manager]]',
	'admanager_gotoads' => "[[Special:AdManager|Cange 'u posizionamènde de le annunce]]",
	'admanager_gotozones' => "[[Special:AdManagerZones|Cange 'na zone]]",
	'right-admanager' => "[[Special:AdManager|Gestisce 'a configurazione d'a pubblecetà]]",
);

/** Russian (русский)
 * @author DCamer
 * @author Engineering
 */
$messages['ru'] = array(
	'admanager' => 'Менеджер рекламы',
	'admanagerzones' => 'Менеджер рекламных зон',
	'admanager-desc' => 'Добавляет [[Special:AdManager|служебную страницу]] которая позволяет администраторам устанавливать зоны для страниц или категорий',
	'admanager_docu' => 'Чтобы добавить или удалить рекламную зону страницы или всей категории, добавьте или удалите ее название.',
	'admanagerzones_docu' => 'Введите номер каждой рекламной зоны на отдельной строке.',
	'admanager_invalidtargetpage' => 'Не найдена страница " $1 ".',
	'admanager_invalidtargetcategory' => 'Не найдена категория " $1 ".',
	'admanager_notable' => 'Ошибка! Не найдена необходимая таблица базы данных! Сначала запустите update.php.',
	'admanager_noAdManagerZones' => 'Ошибка! Необходимо добавить несколько рекламных зон. Введите их в [[Special:AdManagerZones|Менеджере рекламных зон]].',
	'admanager_labelPage' => 'Названия страниц',
	'admanager_labelCategory' => 'Названия категорий',
	'admanager_submit' => 'Отправить',
	'admanager_noads' => 'Не отображать рекламу',
	'admanager_Page' => 'Страницы',
	'admanager_Category' => 'Категории',
	'admanager_added' => 'Ваши изменения были сохранены',
	'admanager_addedzone' => 'Добавлена зона',
	'admanager_zonenum' => 'Зона #:$1',
	'admanager_zonenotnumber' => 'Ошибка!  $1  не является числом.',
	'admanager_return' => 'Обратно в [[Special:AdManager|Менеджер рекламы]]',
	'admanager_gotoads' => '[[Special:AdManager|Изменить размещение рекламы]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Изменить рекламные зоны]]',
	'right-admanager' => '[[Special:AdManager|Управление конфигурацией рекламы]]',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'admanager' => 'Адміністратор реклам',
	'admanagerzones' => 'Адміністратор рекламовых зон',
	'admanager-desc' => 'Забеспечує [[Special:AdManager|службову сторінку]], яка дозволює адміністраторам встановлёвати зоны про сторінкы або катеґорії',
	'admanager_docu' => 'Кідь хочете придати або вылучіти рекламову зону сторінкы або цїлой катеґорії, придайте або одоберьте їй назву долов.',
	'admanagerzones_docu' => 'Уведьте чісло каждой рекламовой зоны на екстра рядку.',
	'admanager_invalidtargetpage' => 'Сторінка з назвов "$1" ся не нашла.',
	'admanager_invalidtargetcategory' => 'Жадна катеґорія з назвов "$1" ся не нашла.',
	'admanager_notable' => 'Хыба! Потрібна табліця датабазы ся не нашла! Найсамперше спустьте update.php.',
	'admanager_noAdManagerZones' => 'Хыба! Мусите придати даякы рекламовы зоны. Тото є можливе в [[Special:AdManagerZones|Адміністратор рекламовых зон]].',
	'admanager_labelPage' => 'Назвы сторінок',
	'admanager_labelCategory' => 'Назвы катеґорій',
	'admanager_submit' => 'Загнати',
	'admanager_noads' => 'Не вказовати рекламы',
	'admanager_Page' => 'Сторінкы',
	'admanager_Category' => 'Катеґорії',
	'admanager_added' => 'Вашы зміны захованы',
	'admanager_addedzone' => 'Придана зона',
	'admanager_zonenum' => 'Зона #: $1',
	'admanager_zonenotnumber' => 'Хыба! $1 не є чісло.',
	'admanager_return' => 'Вернути ся до [[Special: AdManager|Адміністратор реклам]]', # Fuzzy
	'admanager_gotoads' => '[[Special:AdManager|Управляти розміщіня реклам]]',
	'admanager_gotozones' => '[[Special: AdManagerZones|Едітовати зону реклам]]', # Fuzzy
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'admanagerzones' => 'Арбааһын бөлөхтөрүн менеджерэ',
	'admanager_labelPage' => 'Сирэйдэр бастара',
	'admanager_labelCategory' => 'Категориялар ааттара',
	'admanager_submit' => 'Ыыт',
	'admanager_noads' => 'Арбааһыны көрдөрүмэ',
	'admanager_Page' => 'Сирэйдэр',
	'admanager_Category' => 'Категориялар',
	'admanager_added' => 'Уларытыыҥ бигэргэннэ',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'admanager' => 'දැන්වීම් කළමනාකරු',
	'admanagerzones' => 'දැන්වීම් කළමනාකරුගේ කලාප',
	'admanager_invalidtargetpage' => '"$1" ශීර්ෂය සමඟ පිටු කිසිවක් හමු නොවුණි.',
	'admanager_invalidtargetcategory' => '"$1" ශීර්ෂය සමඟ ප්‍රවර්ග කිසිවක් හමු නොවුණි.',
	'admanager_labelPage' => 'පිටුවේ මාතෘකා',
	'admanager_labelCategory' => 'ප්‍රවර්ග නාම',
	'admanager_submit' => 'යොමන්න',
	'admanager_noads' => 'දැන්වීම් නොපෙන්වන්න',
	'admanager_Page' => 'පිටු',
	'admanager_Category' => 'ප්‍රවර්ග',
	'admanager_added' => 'ඔබ විසින් කරනලද වෙනස්කිරීම් සුරකින ලදී.',
	'admanager_addedzone' => 'දැන්වීම් කලාපය',
	'admanager_zonenum' => 'කලාපය #: $1',
	'admanager_zonenotnumber' => 'දෝෂය! $1 යනු අංකයක් නොවේ.',
	'admanager_return' => '[[Special:AdManager|දැන්වීම් කළමනාකරු]] වෙත ආපසු යන්න',
	'admanager_gotoads' => '[[Special:AdManager|දැන්වීම් ස්ථාපනය සංස්කරණය කරන්න]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|දැන්වීම් කලාප සංස්කරණය කරන්න]]',
	'right-admanager' => '[[Special:AdManager|දැන්වීම්කරණ වින්‍යාසගතකිරීම කළමනාකරණය කරන්න]]',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'admanager' => 'Správca reklám',
	'admanagerzones' => 'Zóny správcu reklám',
	'admanager-desc' => 'Poskytuje [[Special:AdManager|špeciálnu stránku]], ktorá umožňuje správcom nastaviť zóny stránok alebo kategórií',
	'admanager_docu' => 'Ak chcete pridať alebo odstrániť reklamnú zónu stránky alebo celej kategórie, pridajte alebo odstráňte jej názov dolu.',
	'admanagerzones_docu' => 'Zadajte číslo každej reklamnej zóny na samostatnom riadku.',
	'admanager_invalidtargetpage' => 'Žiadna stránka s názvom „$1“.',
	'admanager_invalidtargetcategory' => 'Žiadna kategória s názvom „$1“.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'admanager_invalidtargetpage' => 'Не постоји страница под називом „$1“.',
	'admanager_invalidtargetcategory' => 'Не постоји категорија под називом „$1“.',
	'admanager_notable' => 'Грешка! Не могу да пронађем потребну табелу у бази. Прво покрените update.php.',
	'admanager_noAdManagerZones' => 'Грешка! Морате да додате неке огласне зоне. Унесите их у „[[Special:AdManagerZones|Зоне – управљач огласима]]“.',
	'admanager_labelPage' => 'Наслови страница',
	'admanager_labelCategory' => 'Називи категорија',
	'admanager_submit' => 'Пошаљи',
	'admanager_noads' => 'Не приказуј огласе',
	'admanager_Page' => 'Странице',
	'admanager_Category' => 'Категорије',
	'admanager_added' => 'Ваше измене су сачуване',
	'admanager_addedzone' => 'Додата зона',
	'admanager_zonenum' => 'Зона бр.: $1',
	'admanager_zonenotnumber' => 'Грешка! $1 не представља број.',
	'admanager_return' => 'Назад на [[Special:AdManager|управљач огласима]]',
	'admanager_gotoads' => '[[Special:AdManager|Промени положај огласа]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Уреди огласне зоне]]',
	'right-admanager' => '[[Special:AdManager|поставке за оглашавање]]',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'admanager' => 'Annonshanterare',
	'admanagerzones' => 'Annonshanterar-zoner',
	'admanager-desc' => 'Ger en [[Special:AdManager|specialsida]] som låter systemoperatör ställa in zonen för sidor eller kategorier',
	'admanager_docu' => 'För att lägga till eller ta bort annonszonen av en sida eller en hel kategori, lägg till eller ta bort rubriken nedan.',
	'admanagerzones_docu' => 'Ange varje annonszon-nummer på en egen rad.',
	'admanager_invalidtargetpage' => 'Ingen sida hittades med titeln "$1".',
	'admanager_invalidtargetcategory' => 'Ingen kategori hittades med titeln "$1".',
	'admanager_notable' => 'Fel! En nödvändig databastabell hittades inte! Kör update.php först.',
	'admanager_noAdManagerZones' => 'Fel! Du måste lägga till några annonszoner. Skriv in dem i [[Special:AdManagerZones|Annonshanterarzoner]].',
	'admanager_labelPage' => 'Sidtitel',
	'admanager_labelCategory' => 'Kategorinamn',
	'admanager_submit' => 'Skicka',
	'admanager_noads' => 'Visa inga annonser',
	'admanager_Page' => 'Sidor',
	'admanager_Category' => 'Kategorier',
	'admanager_added' => 'Dina ändringar har sparats',
	'admanager_addedzone' => 'Lade till zon',
	'admanager_zonenum' => 'Zon #: $1',
	'admanager_zonenotnumber' => 'Fel! $1 är inte ett tal.',
	'admanager_return' => 'Återgå till [[Special:AdManager|Annonshanteraren]]',
	'admanager_gotoads' => '[[Special:AdManager|Redigera annonsplacering]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Redigera annonszoner]]',
	'right-admanager' => '[[Special:AdManager|Hantera annonskonfigurering]]',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'admanager_invalidtargetpage' => 'Hakuna ukurasa umepatikana wenye mada "$1".',
	'admanager_invalidtargetcategory' => 'Hakuna jamii imepatikana yemye mada "$1".',
	'admanager_labelPage' => 'Mada ya ukurasa',
	'admanager_labelCategory' => 'Jina za jamii',
	'admanager_submit' => 'Wasilisha',
	'admanager_noads' => 'Usionyeshe matangazo',
	'admanager_Page' => 'Kurasa',
	'admanager_Category' => 'Jamii',
	'admanager_added' => 'Mabadiliko yako yamehifadhiwa',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'admanager' => 'விளம்பர மேலாளர்',
	'admanagerzones' => 'விளம்பர மேலாளர் பகுதிகள்',
	'admanager_invalidtargetpage' => '"$1" தலைப்புள்ள எந்தப் பக்கமும் காணப்படவில்லை.',
	'admanager_invalidtargetcategory' => '"$1" தலைப்புள்ள எந்தப் பகுப்பும் காணப்படவில்லை.',
	'admanager_labelPage' => 'பக்கத் தலைப்புகள்',
	'admanager_labelCategory' => 'பகுப்புப் பெயர்கள்',
	'admanager_submit' => 'சமர்ப்பி',
	'admanager_noads' => 'விளம்பரங்களை காண்பிக்க வேண்டாம்',
	'admanager_Page' => 'பக்கங்கள்',
	'admanager_Category' => 'பகுப்புகள்',
	'admanager_added' => 'உங்கள் மாற்றங்கள் சேமிக்கப்பட்டது.',
	'admanager_addedzone' => 'சேர்க்கப்பட்ட பகுதி',
	'admanager_zonenotnumber' => 'பிழை! $1 ஓர் எண் அன்று.',
);

/** Telugu (తెలుగు)
 * @author Jprmvnvijay5
 * @author Veeven
 */
$messages['te'] = array(
	'admanager_labelPage' => 'పేజీ శీర్షికలు',
	'admanager_labelCategory' => 'వర్గాల పేర్లు',
	'admanager_submit' => 'దాఖలుచెయ్యి',
	'admanager_Page' => 'పుటలు',
	'admanager_Category' => 'వర్గాలు',
	'admanager_added' => 'మీ మార్పుల భద్రమయ్యాయి',
	'admanager_zonenotnumber' => 'పొరపాటు! $1 సంఖ్య కాదు.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'admanager' => 'Tagapamahala ng Patalastas',
	'admanagerzones' => 'Mga Sona ng Tagapamahala ng Anunsiyo',
	'admanager-desc' => 'Nagbibigay ng isang [[Special:AdManager|natatanging pahina]] na nagpapahintulot sa mga tagapagpaandar ng sistema na magtakda ng sona para sa mga pahina o mga kategorya',
	'admanager_docu' => 'Upang makapagdagdag o makapagtanggal ng sona ng anunsiyo ng isang pahina o buong kategorya, idagdag o tanggalin ang pamagat nito sa ibaba.',
	'admanagerzones_docu' => 'Ipasok ang bawat isang bilang na pangsona ng anunsiyo sa ibabaw ng sarili nitong guhit.',
	'admanager_invalidtargetpage' => 'Walang pahinang natagpuan na mayroong pamagat na "$1".',
	'admanager_invalidtargetcategory' => 'Walang kategoryang natagpuan na mayroong pamagat na "$1".',
	'admanager_notable' => 'Kamalian! Hindi natagpuan ang isang kinakailangang talahanayan ng kalipunan ng dato! Patakbuhin muna ang update.php.',
	'admanager_noAdManagerZones' => 'Pagkakamali! Dapat kang magdagdag ng ilang mga sona ng patalastas. Ipasok ang mga ito roon sa [[Special:AdManagerZones|Mga Sona ng Tagapamahala ng Patalastas]].',
	'admanager_labelPage' => 'Mga pamagat ng pahina',
	'admanager_labelCategory' => 'Mga pangalan ng kategorya',
	'admanager_submit' => 'Ipasa',
	'admanager_noads' => 'Huwag magpakita ng mga patalastas',
	'admanager_Page' => 'Mga pahina',
	'admanager_Category' => 'Mga kategorya',
	'admanager_added' => 'Nasagip na ang mga binago mo',
	'admanager_addedzone' => 'Idinagdag ang sonang',
	'admanager_zonenum' => 'Sona #: $1',
	'admanager_zonenotnumber' => 'Kamalian! Ang $1 ay hindi isang bilang.',
	'admanager_return' => 'Bumalik sa [[Special:AdManager|Tagapamahala ng Patalastas]]',
	'admanager_gotoads' => '[[Special:AdManager|Baguhin ang pagkakalagay ng patalastas]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Baguhin ang mga sona ng patalastas]]',
	'right-admanager' => '[[Special:AdManager|Pamahalaan ang pagkakaayos ng pag-aanunsiyo]]',
);

/** Turkish (Türkçe)
 * @author Hedda Gabler
 * @author Incelemeelemani
 */
$messages['tr'] = array(
	'admanager' => 'Reklam Yöneticisi',
	'admanagerzones' => 'Reklam Yöneticisi bölgeleri',
	'admanager_invalidtargetpage' => '"$1" adıyla sayfa bulunamadı.',
	'admanager_labelPage' => 'Sayfa başlıkları',
	'admanager_labelCategory' => 'Kategori adları',
	'admanager_submit' => 'Gönder',
	'admanager_noads' => 'Reklamları gösterme',
	'admanager_Page' => 'Sayfalar',
	'admanager_Category' => 'Kategoriler',
	'admanager_added' => 'Değişiklikleriniz kaydedildi',
	'admanager_addedzone' => 'Eklenen bölge',
	'admanager_zonenum' => 'Bölge #: $1',
	'admanager_zonenotnumber' => 'Hata!  $1  bir sayı değil.',
	'admanager_return' => '[[Special:AdManager|Reklam Yöneticisine]] dön',
	'admanager_gotoads' => '[[Special:AdManager|Reklamı düzenle]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Bölgeyi düzenle]]',
	'right-admanager' => '[[Special:AdManager|Reklam Yöneticisi ayarları]]',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'admanager_labelPage' => 'ⵉⵣⵡⵉⵍⵏ ⵏ ⵜⴰⵙⵏⴰ',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Arlin
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'admanager' => 'ئېلان باشقۇرغۇچ',
	'admanagerzones' => 'ئېلان باشقۇرغۇچ رايون',
	'admanager-desc' => 'بىر [[Special:AdManager|ئالاھىدە بەت]]  تەمىنلىگەن، ئۇ باشقۇرغۇچىنىڭ بەت ياكى تۈرگە ئايرىش دائىرىسىنى تەڭشىشىگە يول قويىدۇ.',
	'admanagerzones_docu' => 'ئۆزىنىڭ قۇرىدا ھەر بىر ئېلان رايونىنىڭ نومۇرىنى كىرگۈزۈڭ.',
	'admanager_invalidtargetpage' => 'ماۋزۇسى "$1" بولغان بەت تېپىلمىدى.',
	'admanager_invalidtargetcategory' => 'ماۋزۇسى "$1" بولغان كاتېگورىيە تېپىلمىدى.',
	'admanager_notable' => 'خاتالىق! زۆرۈر بىر ساندان جەدۋىلىنى تاپالمىدى! ئالدى بىلەن update.php نى ئىجرا قىلىڭ.',
	'admanager_noAdManagerZones' => 'خاتالىق! چوقۇم ئېلان ئورنى قىستۇرۇشىڭىز كېرەك.  [[Special:AdManagerZones|ئېلان ئورنىنى باشقۇرۇش]] نىڭ ئىچىگە ئۇنى كىرگۈزۈڭ.',
	'admanager_labelPage' => 'بەت ماۋزۇسى:',
	'admanager_labelCategory' => 'كاتېگورىيە ئىسمى',
	'admanager_submit' => 'تاپشۇر',
	'admanager_noads' => 'ئېلان كۆرسەتمە',
	'admanager_Page' => 'بەتلەر',
	'admanager_Category' => 'كاتېگورىيە',
	'admanager_added' => 'ئۆزگەرتىش ساقلاندى',
	'admanager_addedzone' => 'قوشۇلغان رايون',
	'admanager_zonenum' => 'رايۇن # :$1',
	'admanager_zonenotnumber' => 'خاتا! $1 سان ئەمەس.',
	'admanager_return' => '[[Special:AdManager|ئېلان باشقۇرغۇچ]] غا قايت.',
	'admanager_gotoads' => '[[Special:AdManager|ئېلان ئورنىنى تەھرىرلەش]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|ئېلان رايوننى تەھرىرلەش]]',
	'right-admanager' => '[[Special:AdManager|ئېلان باشقۇرغۇچنى تەڭشە]]',
);

/** Ukrainian (українська)
 * @author Sodmy
 */
$messages['uk'] = array(
	'admanager' => 'Менеджер оголошень',
	'admanagerzones' => 'Менеджер оголошень по зонам',
	'admanager-desc' => 'Забезпечує [[Special:AdManager|службову сторінку]], яка дозволяє адміністраторам встановлювати зони для сторінок або категорій',
	'admanager_docu' => 'Щоб додати або видалити зону оголошення у сторінці або усієї категорії, додайте або видаліть її назву нижче.',
	'admanagerzones_docu' => 'Введіть номер кожної зони оголошень в окремому рядку.',
	'admanager_invalidtargetpage' => 'Не знайдено сторінки з назвою "$1".',
	'admanager_invalidtargetcategory' => 'Не знайдено категорії з назвою "$1".',
	'admanager_notable' => 'Помилка! Не знайдено необхідної таблиці бази даних! Спочатку запустіть update.php.',
	'admanager_noAdManagerZones' => 'Помилка! Ви повинні додати деякі зони оголошень. Введіть їх у [[Special:AdManagerZones|Менеджер зон оголошень]].',
	'admanager_labelPage' => 'Назви сторінок',
	'admanager_labelCategory' => 'Імена категорій',
	'admanager_submit' => 'Відправити',
	'admanager_noads' => 'Не показувати рекламу',
	'admanager_Page' => 'Сторінки',
	'admanager_Category' => 'Категорії',
	'admanager_added' => 'Ваші зміни збережено',
	'admanager_addedzone' => 'Додана зона',
	'admanager_zonenum' => 'Зона #: $1',
	'admanager_zonenotnumber' => 'Помилка! $1 не є числом.',
	'admanager_return' => 'Повернутися до [[Special:AdManager|Менеджер оголошень]]',
	'admanager_gotoads' => '[[Special:AdManager|Редагувати розміщення оголошень]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|Редагувати зони оголошень]]',
	'right-admanager' => '[[Special:AdManager|Керування конфігурацією реклами]]',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'admanager_labelPage' => 'صفحہ عنوانات',
	'admanager_labelCategory' => 'زمرہ کے نام',
	'admanager_submit' => 'جمع کرائیں',
	'admanager_noads' => 'ظاہر کی کوئی اشتہار نہیں',
	'admanager_Page' => 'صفحات',
	'admanager_Category' => 'زمرہ جات',
);

/** Vietnamese (Tiếng Việt)
 * @author Cheers!
 * @author Minh Nguyen
 * @author පසිඳු කාවින්ද
 */
$messages['vi'] = array(
	'admanager_invalidtargetcategory' => 'Không tìm thấy thể loại với tên “$1”.',
	'admanager_notable' => 'Lỗi: Không tìm thấy một bảng cơ sở dữ liệu cần thiết! Hãy chạy update.php trước tiên.',
	'admanager_noAdManagerZones' => 'Lỗi: Bạn phải thêm một số khu vực quảng cáo. Nhập chúng tại [[Special:AdManagerZones|Khu vực quản lý quảng cáo]].',
	'admanager_labelPage' => 'Tên trang',
	'admanager_submit' => 'Đăng',
	'admanager_noads' => 'Không hiển thị quảng cáo',
	'admanager_Page' => 'Số trang',
	'admanager_Category' => 'Thể loại',
);

/** Waray (Winaray)
 * @author JinJian
 */
$messages['war'] = array(
	'admanager_Page' => 'Mga pakli',
	'admanager_Category' => 'Mga kaarangay',
	'admanager_added' => 'Gintipig an imo mga ginliwat',
	'admanager_addedzone' => 'Gindugngan hin sona',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'admanager_submit' => 'אײַנגעבן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hzy980512
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'admanager' => '广告管理器',
	'admanagerzones' => '广告管理器区域',
	'admanager-desc' => '提供了一个[[Special:AdManager|特殊页面]]，它允许管理员设置页面或分类的区域',
	'admanager_docu' => '要添加或移除一个页面或分类的广告区域，在下面添加或移除其标题。',
	'admanagerzones_docu' => '在其行上输入每个广告区域的编号。',
	'admanager_invalidtargetpage' => '找不到标题名为“$1”的页面',
	'admanager_invalidtargetcategory' => '找不到标题名为“$1”的分类',
	'admanager_notable' => '错误！找不到一个必须的数据库资料表！请先运行update.php。',
	'admanager_noAdManagerZones' => '错误！您必须添加一些广告区域，在[[Special:AdManagerZones|广告区域管理器]]中输入它们。',
	'admanager_labelPage' => '页面标题',
	'admanager_labelCategory' => '分类名称',
	'admanager_submit' => '提交',
	'admanager_noads' => '不显示广告',
	'admanager_Page' => '页面',
	'admanager_Category' => '分类',
	'admanager_added' => '更改已保存',
	'admanager_addedzone' => '已添加区域',
	'admanager_zonenum' => '区域 #: $1',
	'admanager_zonenotnumber' => '错误！$1不是数字。',
	'admanager_return' => '回到[[Special:AdManager|广告管理器]]',
	'admanager_gotoads' => '[[Special:AdManager|编辑广告位置]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|编辑广告区域]]',
	'right-admanager' => '[[Special:AdManager|管理广告配置]]',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Oapbtommy
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'admanager' => '廣告管理員',
	'admanagerzones' => '廣告管理員區域',
	'admanager-desc' => '提供一個[[Special:AdManager|特殊頁面]]以供管理員設置頁面或分類的區域',
	'admanager_docu' => '要添加或移除一個頁面或分類的廣告區域，在下面添加或移除其標題。',
	'admanagerzones_docu' => '在其行上輸入每個廣告區域編號。',
	'admanager_invalidtargetpage' => '找不到標題名為“$1”的頁面',
	'admanager_invalidtargetcategory' => '找不到標題名為“$1”的分類',
	'admanager_notable' => '錯誤！找不到某數據庫資料表！請先運行update.php。',
	'admanager_noAdManagerZones' => '錯誤！您必須添加廣告區。在[[Special:AdManagerZones|管理廣告區]]內輸入它。',
	'admanager_labelPage' => '頁面標題',
	'admanager_labelCategory' => '類別名稱',
	'admanager_submit' => '提交',
	'admanager_noads' => '不顯示廣告',
	'admanager_Page' => '頁面',
	'admanager_Category' => '類別',
	'admanager_added' => '更改已保存',
	'admanager_addedzone' => '已添加區域',
	'admanager_zonenum' => '區＃：$1',
	'admanager_zonenotnumber' => '錯誤！$1 不是一個數字。',
	'admanager_return' => '回到[[Special:AdManager|廣告管理器]]',
	'admanager_gotoads' => '[[Special:AdManager|編輯廣告位置]]',
	'admanager_gotozones' => '[[Special:AdManagerZones|編輯廣告區域]]',
	'right-admanager' => '[[Special:AdManager|管理廣告配置]]',
);
