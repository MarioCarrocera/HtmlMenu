<?php
ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

echo "**********+++++++++++ <br> On Time <br> **********+++++++++++ <br> <br>";
$base='ontime/';
$AdminPassword='OT2021Free';
include_once($base."OnTime.php");
$demo=new OnTime();
$demo->InstallCore();

echo "********** <br> Create Class  <br> ********** <br> <br>";
$demo->ot_error('Creating ok').'<br>';
echo "**********+++++++++++ <br> Conecting like admin <br> **********+++++++++++ <br> <br>";
$demo->Connect('admin',$AdminPassword);

$demo->ot_show($demo->SsnDta());

$name='main';
$demo->CrtFtrBsc($name);
$demo->CrtBscIn('err','Error List',$name);
$demo->CrtBscIn('level','Security levels',$name);
$demo->CrtBscIn('status','Records status',$name);
$demo->CrtBscIn('step','Records step',$name);

$demo->AnnInAdd('err','b',$name);
$demo->AnnInAdd('level','b',$name);
$demo->AnnInAdd('status','b',$name);
$demo->AnnInAdd('step','b',$name);

echo "********** <br> Defining Level  <br> ********** <br> <br>";

$demo-> UpnCntIn('owner',0,'level', $name);
$demo-> UpnCntIn('remove',1,'level', $name);
$demo-> UpnCntIn('create',2,'level', $name);
$demo-> UpnCntIn('change',3,'level', $name);
$demo-> UpnCntIn('access',4,'level', $name);
$demo-> UpnCntIn('admin',10,'level', $name);
$demo-> UpnCntIn('delete',11,'level', $name);
$demo-> UpnCntIn('insert',12,'level', $name);
$demo-> UpnCntIn('update',13,'level', $name);
$demo-> UpnCntIn('umine',14,'level', $name);
$demo-> UpnCntIn('view',15,'level', $name);
$demo-> UpnCntIn('vmine',16,'level', $name);

echo "********** <br> Defining Status And Steps  <br> ********** <br> <br>";

$demo-> UpnCntIn('active','1','status', $name);
$demo-> UpnCntIn('force','2','status', $name);
$demo-> UpnCntIn('Inactive','3','status', $name);
$demo-> UpnCntIn('Deleted','4','status', $name);
$demo-> UpnCntIn('Release','5','status', $name);
$demo-> UpnCntIn('Poste','6','status', $name);
$demo-> UpnCntIn('On Error','7','status', $name);
$demo-> UpnCntIn('Hold','8','status', $name);

$demo-> UpnCntIn('Autorirized','1','Step', $name);
$demo-> UpnCntIn('Hold','2','Step', $name);
$demo-> UpnCntIn('On Process','3','Step', $name);
$demo-> UpnCntIn('Reject','4','Step', $name);

echo "********** <br> Defining Error  <br> ********** <br> <br>";

$demo-> UpnCntIn('C0010M001','Failing read content','err', $name);
$demo-> UpnCntIn('C0010M002','Failing create content','err', $name);
$demo-> UpnCntIn('C0010M003','Failing save content','err', $name);
$demo-> UpnCntIn('C0010M004','Missing container','err', $name);
$demo-> UpnCntIn('C0010M005','Mising system content,file system corrupted','err', $name);
$demo-> UpnCntIn('C0010M006','Access error','err', $name);
$demo-> UpnCntIn('C0010M007','Record exist','err', $name);
$demo-> UpnCntIn('C0010M008',"Record don't exist",'err', $name);
$demo-> UpnCntIn('C0010M009',"Record not avaible",'err', $name);
$demo-> UpnCntIn('C0010M010',"Record not visible",'err', $name);
$demo-> UpnCntIn('C0010M011',"Not conected",'err', $name);
$demo-> UpnCntIn('C0010M012',"Not autorized",'err', $name);
$demo-> UpnCntIn('C0010M013',"Can't change id",'err', $name);
$demo-> UpnCntIn('C0010M014',"Unkwow cointeiner",'err', $name);
$demo-> UpnCntIn('C0010M015',"Featured just for pay vertion",'err', $name);
$demo-> UpnCntIn('C0010M016',"Wrong data suply",'err', $name);
$demo-> UpnCntIn('C0010M017',"Container exist",'err', $name);
$demo-> UpnCntIn('C0010M018',"Not valid value",'err', $name);
$demo-> UpnCntIn('C0010M019',"Feature not installed",'err', $name);
$demo-> UpnCntIn('C0010M020',"Feature installed",'err', $name);
$demo-> UpnCntIn('C0010M021',"Already connected",'err', $name);
$demo-> UpnCntIn('C0010M022',"Record not active",'err', $name);
$demo-> UpnCntIn('C0010M023',"Record not autorized",'err', $name);
$demo-> UpnCntIn('C0010M024',"Unkown status",'err', $name);
$demo-> UpnCntIn('C0010M025',"Not valid status",'err', $name);
$demo-> UpnCntIn('C0010M026',"Not a valid data",'err', $name);
$demo-> UpnCntIn('C0010M027',"Invalid structur, can't lock",'err', $name);
$demo-> UpnCntIn('C0010M028',"Lock Fail, allready locked",'err', $name);
$demo-> UpnCntIn('C0010M029',"Not Locked",'err', $name);
$demo-> UpnCntIn('C0010M030',"Not enougth level",'err', $name);
$demo-> UpnCntIn('C0010M031',"A table is allready open",'err', $name);
$demo-> UpnCntIn('C0010M032',"All tables are close",'err', $name);
$demo-> UpnCntIn('C0010M033',"Mising record",'err', $name);
$demo-> UpnCntIn('C0010M034',"Can't delete user admin",'err', $name);
$demo-> UpnCntIn('C0010M035',"Can't modify user admin",'err', $name);
$demo-> UpnCntIn('C0010M036',"Mising Field",'err', $name);
$demo-> UpnCntIn('C0010M037',"Leng violation must be at less 8 character",'err', $name);
$demo-> UpnCntIn('C0010M038',"Access grant to 'Anonimus' nor requiered",'err', $name);
$demo-> UpnCntIn('C0010M039',"Missing Record",'err', $name);
$demo-> UpnCntIn('C0010M040',"Record don't have key",'err', $name);
$demo-> UpnCntIn('C0010M041',"Record have more than one key",'err', $name);
$demo-> UpnCntIn('C0010M042',"Field Could't be Empty",'err', $name);
$demo-> UpnCntIn('C0010M043',"Wrong field type",'err', $name);
$demo-> UpnCntIn('C0010M044',"Working over",'err', $name);
$demo-> UpnCntIn('C0010M045',"Field not in list",'err', $name);
$demo-> UpnCntIn('C0010M046',"Error in date suplied",'err', $name);
$demo-> UpnCntIn('C0010M047',"Error in time suplied",'err', $name);
$demo-> UpnCntIn('C0010M048',"Error in date/time suplied",'err', $name);
$demo-> UpnCntIn('C0010M049',"Unkwow field type",'err', $name);
$demo-> UpnCntIn('C0010M050',"Not value suplied",'err', $name);
$demo-> UpnCntIn('C0010M051',"Unkwow Validation",'err', $name);
$demo-> UpnCntIn('C0010M052',"Validation Fail",'err', $name);
$demo-> UpnCntIn('C0010M053',"Field Not in record",'err', $name);
$demo-> UpnCntIn('C0010M054',"UnLock Fail, not locked by you",'err', $name);
$demo-> UpnCntIn('C0010M055',"Invalid place, just can be last, first,up,down",'err', $name);
$demo-> UpnCntIn('C0010M056',"No realated record found, asigned to last",'err', $name);
$demo-> UpnCntIn('C0010M057',"Unkwon Movement",'err', $name);
$demo-> UpnCntIn('C0010M058',"Missing movement",'err', $name);
$demo-> UpnCntIn('C0010M059',"RecId must be specify or autocal",'err', $name);
$demo-> UpnCntIn('C0010M060',"Can't include field",'err', $name);
$demo-> UpnCntIn('C0010M061',"RecId must be specify",'err', $name);
$demo-> UpnCntIn('C0010M062',"Wrong DateTime, reject movement",'err', $name);
$demo-> UpnCntIn('C0010M063',"Duplicate unique key",'err', $name);

echo "********** <br> Defining Time zones  <br> ********** <br> <br>";

$name='date';
$demo->CrtFtrBsc($name);
$demo->CrtBscIn('TimeZone','Time Zones',$name) ;
$demo->AnnInAdd('TimeZone','b',$name);
$data=array('Africa/Abidjan'=>0,'Africa/Accra'=>0,'Africa/Addis_Ababa'=>0,'Africa/Algiers'=>0,'Africa/Asmara'=>0,'Africa/Bamako'=>0,'Africa/Bangui'=>0,'Africa/Banjul'=>0,'Africa/Bissau'=>0,'Africa/Blantyre'=>0,'Africa/Brazzaville'=>0,'Africa/Bujumbura'=>0,'Africa/Cairo'=>0,'Africa/Casablanca'=>0,'Africa/Ceuta'=>0,'Africa/Conakry'=>0,'Africa/Dakar'=>0,'Africa/Dar_es_Salaam'=>0,'Africa/Djibouti'=>0,'Africa/Douala'=>0,'Africa/El_Aaiun'=>0,'Africa/Freetown'=>0,'Africa/Gaborone'=>0,'Africa/Harare'=>0,'Africa/Johannesburg'=>0,'Africa/Juba'=>0,'Africa/Kampala'=>0,'Africa/Khartoum'=>0,'Africa/Kigali'=>0,'Africa/Kinshasa'=>0,'Africa/Lagos'=>0,'Africa/Libreville'=>0,'Africa/Lome'=>0,'Africa/Luanda'=>0,'Africa/Lubumbashi'=>0,'Africa/Lusaka'=>0,'Africa/Malabo'=>0,'Africa/Maputo'=>0,'Africa/Maseru'=>0,'Africa/Mbabane'=>0,'Africa/Mogadishu'=>0,'Africa/Monrovia'=>0,'Africa/Nairobi'=>0,'Africa/Ndjamena'=>0,'Africa/Niamey'=>0,'Africa/Nouakchott'=>0,'Africa/Ouagadougou'=>0,'Africa/Porto-Novo'=>0,'Africa/Sao_Tome'=>0,'Africa/Tripoli'=>0,'Africa/Tunis'=>0,'Africa/Windhoek');
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Africa','TimeZone',$name);
}
$data=array('America/Adak'=>0,'America/Anchorage'=>0,'America/Anguilla'=>0,'America/Antigua'=>0,'America/Araguaina'=>0,'America/Argentina/Buenos_Aires'=>0,'America/Argentina/Catamarca'=>0,'America/Argentina/Cordoba'=>0,'America/Argentina/Jujuy'=>0,'America/Argentina/La_Rioja'=>0,'America/Argentina/Mendoza'=>0,'America/Argentina/Rio_Gallegos'=>0,'America/Argentina/Salta'=>0,'America/Argentina/San_Juan'=>0,'America/Argentina/San_Luis'=>0,'America/Argentina/Tucuman'=>0,'America/Argentina/Ushuaia'=>0,'America/Aruba'=>0,'America/Asuncion'=>0,'America/Atikokan'=>0,'America/Bahia'=>0,'America/Bahia_Banderas'=>0,'America/Barbados'=>0,'America/Belem'=>0,'America/Belize'=>0,'America/Blanc-Sablon'=>0,'America/Boa_Vista'=>0,'America/Bogota'=>0,'America/Boise'=>0,'America/Cambridge_Bay'=>0,'America/Campo_Grande'=>0,'America/Cancun'=>0,'America/Caracas'=>0,'America/Cayenne'=>0,'America/Cayman'=>0,'America/Chicago'=>0,'America/Chihuahua'=>0,'America/Costa_Rica'=>0,'America/Creston'=>0,'America/Cuiaba'=>0,'America/Curacao'=>0,'America/Danmarkshavn'=>0,'America/Dawson'=>0,'America/Dawson_Creek'=>0,'America/Denver'=>0,'America/Detroit'=>0,'America/Dominica'=>0,'America/Edmonton'=>0,'America/Eirunepe'=>0,'America/El_Salvador'=>0,'America/Fort_Nelson'=>0,'America/Fortaleza'=>0,'America/Glace_Bay'=>0,'America/Godthab'=>0,'America/Goose_Bay'=>0,'America/Grand_Turk'=>0,'America/Grenada'=>0,'America/Guadeloupe'=>0,'America/Guatemala'=>0,'America/Guayaquil'=>0,'America/Guyana'=>0,'America/Halifax'=>0,'America/Havana'=>0,'America/Hermosillo'=>0,'America/Indiana/Indianapolis'=>0,'America/Indiana/Knox'=>0,'America/Indiana/Marengo'=>0,'America/Indiana/Petersburg'=>0,'America/Indiana/Tell_City'=>0,'America/Indiana/Vevay'=>0,'America/Indiana/Vincennes'=>0,'America/Indiana/Winamac'=>0,'America/Inuvik'=>0,'America/Iqaluit'=>0,'America/Jamaica'=>0,'America/Juneau'=>0,'America/Kentucky/Louisville'=>0,'America/Kentucky/Monticello'=>0,'America/Kralendijk'=>0,'America/La_Paz'=>0,'America/Lima'=>0,'America/Los_Angeles'=>0,'America/Lower_Princes'=>0,'America/Maceio'=>0,'America/Managua'=>0,'America/Manaus'=>0,'America/Marigot'=>0,'America/Martinique'=>0,'America/Matamoros'=>0,'America/Mazatlan'=>0,'America/Menominee'=>0,'America/Merida'=>0,'America/Metlakatla'=>0,'America/Mexico_City'=>0,'America/Miquelon'=>0,'America/Moncton'=>0,'America/Monterrey'=>0,'America/Montevideo'=>0,'America/Montserrat'=>0,'America/Nassau'=>0,'America/New_York'=>0,'America/Nipigon'=>0,'America/Nome'=>0,'America/Noronha'=>0,'America/North_Dakota/Beulah'=>0,'America/North_Dakota/Center'=>0,'America/North_Dakota/New_Salem'=>0,'America/Ojinaga'=>0,'America/Panama'=>0,'America/Pangnirtung'=>0,'America/Paramaribo'=>0,'America/Phoenix'=>0,'America/Port-au-Prince'=>0,'America/Port_of_Spain'=>0,'America/Porto_Velho'=>0,'America/Puerto_Rico'=>0,'America/Punta_Arenas'=>0,'America/Rainy_River'=>0,'America/Rankin_Inlet'=>0,'America/Recife'=>0,'America/Regina'=>0,'America/Resolute'=>0,'America/Rio_Branco'=>0,'America/Santarem'=>0,'America/Santiago'=>0,'America/Santo_Domingo'=>0,'America/Sao_Paulo'=>0,'America/Scoresbysund'=>0,'America/Sitka'=>0,'America/St_Barthelemy'=>0,'America/St_Johns'=>0,'America/St_Kitts'=>0,'America/St_Lucia'=>0,'America/St_Thomas'=>0,'America/St_Vincent'=>0,'America/Swift_Current'=>0,'America/Tegucigalpa'=>0,'America/Thule'=>0,'America/Thunder_Bay'=>0,'America/Tijuana'=>0,'America/Toronto'=>0,'America/Tortola'=>0,'America/Vancouver'=>0,'America/Whitehorse'=>0,'America/Winnipeg'=>0,'America/Yakutat'=>0,'America/Yellowknife'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'America','TimeZone',$name);
}
$data=array('Antarctica/Casey'=>0,'Antarctica/Davis'=>0,'Antarctica/DumontDUrville'=>0,'Antarctica/Macquarie'=>0,'Antarctica/Mawson'=>0,'Antarctica/McMurdo'=>0,'Antarctica/Palmer'=>0,'Antarctica/Rothera'=>0,'Antarctica/Syowa'=>0,'Antarctica/Troll'=>0,'Antarctica/Vostok'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Antarctica','TimeZone',$name);
}
$data=array('Arctic/Longyearbyen');
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Arctic','TimeZone',$name);
}
$data=array('UTC');
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'UTC','TimeZone',$name);
}
$data=array('Asia/Aden'=>0,'Asia/Almaty'=>0,'Asia/Amman'=>0,'Asia/Anadyr'=>0,'Asia/Aqtau'=>0,'Asia/Aqtobe'=>0,'Asia/Ashgabat'=>0,'Asia/Atyrau'=>0,'Asia/Baghdad'=>0,'Asia/Bahrain'=>0,'Asia/Baku'=>0,'Asia/Bangkok'=>0,'Asia/Barnaul'=>0,'Asia/Beirut'=>0,'Asia/Bishkek'=>0,'Asia/Brunei'=>0,'Asia/Chita'=>0,'Asia/Choibalsan'=>0,'Asia/Colombo'=>0,'Asia/Damascus'=>0,'Asia/Dhaka'=>0,'Asia/Dili'=>0,'Asia/Dubai'=>0,'Asia/Dushanbe'=>0,'Asia/Famagusta'=>0,'Asia/Gaza'=>0,'Asia/Hebron'=>0,'Asia/Ho_Chi_Minh'=>0,'Asia/Hong_Kong'=>0,'Asia/Hovd'=>0,'Asia/Irkutsk'=>0,'Asia/Jakarta'=>0,'Asia/Jayapura'=>0,'Asia/Jerusalem'=>0,'Asia/Kabul'=>0,'Asia/Kamchatka'=>0,'Asia/Karachi'=>0,'Asia/Kathmandu'=>0,'Asia/Khandyga'=>0,'Asia/Kolkata'=>0,'Asia/Krasnoyarsk'=>0,'Asia/Kuala_Lumpur'=>0,'Asia/Kuching'=>0,'Asia/Kuwait'=>0,'Asia/Macau'=>0,'Asia/Magadan'=>0,'Asia/Makassar'=>0,'Asia/Manila'=>0,'Asia/Muscat'=>0,'Asia/Nicosia'=>0,'Asia/Novokuznetsk'=>0,'Asia/Novosibirsk'=>0,'Asia/Omsk'=>0,'Asia/Oral'=>0,'Asia/Phnom_Penh'=>0,'Asia/Pontianak'=>0,'Asia/Pyongyang'=>0,'Asia/Qatar'=>0,'Asia/Qostanay'=>0,'Asia/Qyzylorda'=>0,'Asia/Riyadh'=>0,'Asia/Sakhalin'=>0,'Asia/Samarkand'=>0,'Asia/Seoul'=>0,'Asia/Shanghai'=>0,'Asia/Singapore'=>0,'Asia/Srednekolymsk'=>0,'Asia/Taipei'=>0,'Asia/Tashkent'=>0,'Asia/Tbilisi'=>0,'Asia/Tehran'=>0,'Asia/Thimphu'=>0,'Asia/Tokyo'=>0,'Asia/Tomsk'=>0,'Asia/Ulaanbaatar'=>0,'Asia/Urumqi'=>0,'Asia/Ust-Nera'=>0,'Asia/Vientiane'=>0,'Asia/Vladivostok'=>0,'Asia/Yakutsk'=>0,'Asia/Yangon'=>0,'Asia/Yekaterinburg'=>0,'Asia/Yerevan'=>0
);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Asia','TimeZone',$name);
}
$data=array('Atlantic/Azores'=>0,'Atlantic/Bermuda'=>0,'Atlantic/Canary'=>0,'Atlantic/Cape_Verde'=>0,'Atlantic/Faroe'=>0,'Atlantic/Madeira'=>0,'Atlantic/Reykjavik'=>0,'Atlantic/South_Georgia'=>0,'Atlantic/St_Helena'=>0,'Atlantic/Stanley'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Atlantic','TimeZone',$name);
}
$data=array('Australia/Adelaide'=>0,'Australia/Brisbane'=>0,'Australia/Broken_Hill'=>0,'Australia/Currie'=>0,'Australia/Darwin'=>0,'Australia/Eucla'=>0,'Australia/Hobart'=>0,'Australia/Lindeman'=>0,'Australia/Lord_Howe'=>0,'Australia/Melbourne'=>0,'Australia/Perth'=>0,'Australia/Sydney'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Australia','TimeZone',$name);
}
$data=array('Europe/Amsterdam'=>0,'Europe/Andorra'=>0,'Europe/Astrakhan'=>0,'Europe/Athens'=>0,'Europe/Belgrade'=>0,'Europe/Berlin'=>0,'Europe/Bratislava'=>0,'Europe/Brussels'=>0,'Europe/Bucharest'=>0,'Europe/Budapest'=>0,'Europe/Busingen'=>0,'Europe/Chisinau'=>0,'Europe/Copenhagen'=>0,'Europe/Dublin'=>0,'Europe/Gibraltar'=>0,'Europe/Guernsey'=>0,'Europe/Helsinki'=>0,'Europe/Isle_of_Man'=>0,'Europe/Istanbul'=>0,'Europe/Jersey'=>0,'Europe/Kaliningrad'=>0,'Europe/Kiev'=>0,'Europe/Kirov'=>0,'Europe/Lisbon'=>0,'Europe/Ljubljana'=>0,'Europe/London'=>0,'Europe/Luxembourg'=>0,'Europe/Madrid'=>0,'Europe/Malta'=>0,'Europe/Mariehamn'=>0,'Europe/Minsk'=>0,'Europe/Monaco'=>0,'Europe/Moscow'=>0,'Europe/Oslo'=>0,'Europe/Paris'=>0,'Europe/Podgorica'=>0,'Europe/Prague'=>0,'Europe/Riga'=>0,'Europe/Rome'=>0,'Europe/Samara'=>0,'Europe/San_Marino'=>0,'Europe/Sarajevo'=>0,'Europe/Saratov'=>0,'Europe/Simferopol'=>0,'Europe/Skopje'=>0,'Europe/Sofia'=>0,'Europe/Stockholm'=>0,'Europe/Tallinn'=>0,'Europe/Tirane'=>0,'Europe/Ulyanovsk'=>0,'Europe/Uzhgorod'=>0,'Europe/Vaduz'=>0,'Europe/Vatican'=>0,'Europe/Vienna'=>0,'Europe/Vilnius'=>0,'Europe/Volgograd'=>0,'Europe/Warsaw'=>0,'Europe/Zagreb'=>0,'Europe/Zaporozhye'=>0,'Europe/Zurich'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Europe','TimeZone',$name);
}
$data=array('Indian/Antananarivo'=>0,'Indian/Chagos'=>0,'Indian/Christmas'=>0,'Indian/Cocos'=>0,'Indian/Comoro'=>0,'Indian/Kerguelen'=>0,'Indian/Mahe'=>0,'Indian/Maldives'=>0,'Indian/Mauritius'=>0,'Indian/Mayotte'=>0,'Indian/Reunion'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Indian','TimeZone',$name);
}
$data=array('Pacific/Apia'=>0,'Pacific/Auckland'=>0,'Pacific/Bougainville'=>0,'Pacific/Chatham'=>0,'Pacific/Chuuk'=>0,'Pacific/Easter'=>0,'Pacific/Efate'=>0,'Pacific/Enderbury'=>0,'Pacific/Fakaofo'=>0,'Pacific/Fiji'=>0,'Pacific/Funafuti'=>0,'Pacific/Galapagos'=>0,'Pacific/Gambier'=>0,'Pacific/Guadalcanal'=>0,'Pacific/Guam'=>0,'Pacific/Honolulu'=>0,'Pacific/Kiritimati'=>0,'Pacific/Kosrae'=>0,'Pacific/Kwajalein'=>0,'Pacific/Majuro'=>0,'Pacific/Marquesas'=>0,'Pacific/Midway'=>0,'Pacific/Nauru'=>0,'Pacific/Niue'=>0,'Pacific/Norfolk'=>0,'Pacific/Noumea'=>0,'Pacific/Pago_Pago'=>0,'Pacific/Palau'=>0,'Pacific/Pitcairn'=>0,'Pacific/Pohnpei'=>0,'Pacific/Port_Moresby'=>0,'Pacific/Rarotonga'=>0,'Pacific/Saipan'=>0,'Pacific/Tahiti'=>0,'Pacific/Tarawa'=>0,'Pacific/Tongatapu'=>0,'Pacific/Wake'=>0,'Pacific/Wallis'=>0);
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,'Pacific','TimeZone',$name);
}

echo "********** <br> Defining Time Formats  <br> ********** <br> <br>";

$table='PhpFormat';
$demo->CrtBscIn($table,'Date Time Format defined in PHP',$name) ;
$demo->AnnInAdd($table,'b',$name);
$data=array('ATOM'=> "Y-m-d\TH:i:sP",'COOKIE'=> "l, d-M-Y H:i:s T",'ISO8601'=> "Y-m-d\TH:i:sO",'RFC822'=> "D, d M y H:i:s O",'RFC850'=> "l, d-M-y H:i:s T",'RFC1036'=> "D, d M y H:i:s O",'RFC1123'=> "D, d M Y H:i:s O",'RFC2822'=> "D, d M Y H:i:s O",'RFC3339'=> "Y-m-d\TH:i:sP",'RFC3339_EXTENDED'=> "Y-m-d\TH:i:s.vP",'RSS'=> "D, d M Y H:i:s O",'W3C'=> "Y-m-d\TH:i:sP",'timestamp'=>'YmdHisP' );
foreach ($data as $code => $value) {
	$demo->UpnCntIn($code,$value,$table,$name);
}

echo "********** <br> Soport files for pagw  <br> ********** <br> <br>";

$demo->ClnFtr('page');
$demo->ClnFtr('ddd');
$demo->ClnFtr('record');




echo "********** <br> Creatinf data for html meta tags <br> ********** <br> <br>";
$name='page';
$demo->CrtFtrBsc($name);
$table='screen';
$demo->CrtBscIn($table,'Related data on screen',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('icon','otfavicon.ico',$table, $name);
$demo->UpnCntIn('head','On Time',$table, $name);
$demo->UpnCntIn('description','Mundos Genesys, content manger',$table, $name);
$demo->UpnCntIn('keyword','cm,wiki,blog,pages,user,free, comertial',$table, $name);
$demo->UpnCntIn('author','Mundos Genesys',$table, $name);

echo "********** <br> Creating data for add gogle letter to html<br> ********** <br> <br>";
$name='page';
$demo->CrtFtrBsc($name);
$table='letters';
$demo->CrtBscIn($table,'Leters to load',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('Oswald','google',$table, $name);
$demo->UpnCntIn('Sofia','google',$table, $name);
$demo->UpnCntIn('Wendy One','google',$table, $name);
$demo->UpnCntIn('Srisakdi','google',$table, $name);
$demo->UpnCntIn('Tangerine','www',$table, $name);


echo "********** <br> Creating basic content data for crete css styles <br> ********** <br> <br>";
$name='page';
$table='size';
$demo->CrtBscIn($table,'Letters size',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('shuge','35px',$table, $name);
$demo->UpnCntIn('sbig','30px',$table, $name);
$demo->UpnCntIn('sxl','25px',$table, $name);
$demo->UpnCntIn('sl','20px',$table, $name);
$demo->UpnCntIn('sm','15px',$table, $name);
$demo->UpnCntIn('ss','12px',$table, $name);
$demo->UpnCntIn('sxs','10px',$table, $name);

$table='color';
$demo->CrtBscIn($table,'Colors',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('transparent','transparent','color', $name);
$demo->UpnCntIn('black','black',$table, $name);
$demo->UpnCntIn('red','red',$table, $name);
$demo->UpnCntIn('brown','#534a14',$table, $name);
$demo->UpnCntIn('cream','$fdffd4',$table, $name);
$demo->UpnCntIn('green','#579835',$table, $name);
$demo->UpnCntIn('dark browm','#8b4513',$table, $name);
$demo->UpnCntIn('marron','#800000',$table, $name);
$demo->UpnCntIn('yellow','#f2f234',$table, $name);
$demo->UpnCntIn('beige','#deb887',$table, $name);

$table='style';
$demo->CrtBscIn($table,'Letter Style',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('normal','normal',$table, $name);
$demo->UpnCntIn('italic','italic',$table, $name);
$demo->UpnCntIn('oblique','oblique',$table, $name);

$table='variant';
$demo->CrtBscIn($table,'Letter variant',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('vnormal','vnormal',$table, $name);
$demo->UpnCntIn('vsmall','vsmall',$table, $name);
$demo->UpnCntIn('vblack','vblack',$table, $name);

$table='weight';
$demo->CrtBscIn($table,'Letter weight',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('sublime','900',$table, $name);
$demo->UpnCntIn('subhead','700',$table, $name);
$demo->UpnCntIn('colhead','200',$table, $name);
$demo->UpnCntIn('data','300',$table, $name);
$demo->UpnCntIn('comment','100',$table, $name);
$demo->UpnCntIn('menu','100',$table, $name);

$table='myletters';
$demo->CrtBscIn($table,'My letters by Use',$name);
$demo->AnnInAdd($table,'b',$name);

$demo->UpnCntIn('Body','Oswald',$table, $name);
$demo->UpnCntIn('Headers','Sofia',$table, $name);
$demo->UpnCntIn('Error','Sofia',$table, $name);
$demo->UpnCntIn('Windows','Tangerine',$table, $name);
$demo->UpnCntIn('footer','Tangerine',$table, $name);

$table='UPoss';
$demo->CrtBscIn($table,'Postions',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('static',"Elements render in order, as they appear in the document flow",$table, $name);
$demo->UpnCntIn('absolute',"The element is positioned relative to its first positioned (not static) ancestor element",$table, $name);
$demo->UpnCntIn('fixed',"The element is positioned relative to the browser window",$table, $name);
$demo->UpnCntIn('relative',"The element is positioned relative to its normal position, so 'left:20px' adds 20 pixels to the element's LEFT position",$table, $name);
$demo->UpnCntIn('sticky',"The element is positioned based on the user's scroll position A sticky element toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it 'sticks' in place (like position:fixed).",$table, $name);

$table='USize';
$demo->CrtBscIn($table,'Size Units',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('cm',"centimeters",$table, $name);
$demo->UpnCntIn('mm',"millimeters",$table, $name);
$demo->UpnCntIn('in',"inches (1in = 96px = 2.54cm)",$table, $name);
$demo->UpnCntIn('px',"pixels (1px = 1/96th of 1in)",$table, $name);
$demo->UpnCntIn('pt',"points (1pt = 1/72 of 1in)",$table, $name);
$demo->UpnCntIn('pc',"picas (1pc = 12 pt)",$table, $name);
$demo->UpnCntIn('em',"Relative to the font-size of the element (2em means 2 times the size of the current font)",$table, $name);
$demo->UpnCntIn('ex',"Relative to the x-height of the current font (rarely used)",$table, $name);
$demo->UpnCntIn('ch',"Relative to the width of the '0' (zero)",$table, $name);
$demo->UpnCntIn('rem',"Relative to font-size of the root element",$table, $name);
$demo->UpnCntIn('vw',"Relative to 1% of the width of the viewport*",$table, $name);
$demo->UpnCntIn('vh',"Relative to 1% of the height of the viewport*",$table, $name);
$demo->UpnCntIn('vmin',"Relative to 1% of viewport's* smaller dimension",$table, $name);
$demo->UpnCntIn('vmax',"Relative to 1% of viewport's* larger dimension",$table, $name);
$demo->UpnCntIn('%',"Relative to the parent element",$table, $name);

$table='Cursor';
$demo->CrtBscIn($table,'Cursor ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('alias',"alias",$table, $name);
$demo->UpnCntIn('all-scroll',"all-scroll",$table, $name);
$demo->UpnCntIn('auto',"auto",$table, $name);
$demo->UpnCntIn('cell',"cell",$table, $name);
$demo->UpnCntIn('context-menu',"context-menu",$table, $name);
$demo->UpnCntIn('col-resize',"col-resize",$table, $name);
$demo->UpnCntIn('copy',"copy",$table, $name);
$demo->UpnCntIn('crosshair',"crosshair",$table, $name);
$demo->UpnCntIn('default',"default",$table, $name);
$demo->UpnCntIn('e-resize',"e-resize",$table, $name);
$demo->UpnCntIn('ew-resize',"ew-resize",$table, $name);
$demo->UpnCntIn('grab',"grab",$table, $name);
$demo->UpnCntIn('grabbing',"grabbing",$table, $name);
$demo->UpnCntIn('help',"help",$table, $name);
$demo->UpnCntIn('move',"move",$table, $name);
$demo->UpnCntIn('n-resize',"n-resize",$table, $name);
$demo->UpnCntIn('ne-resize',"ne-resize",$table, $name);
$demo->UpnCntIn('nesw-resize',"nesw-resize",$table, $name);
$demo->UpnCntIn('ns-resize',"ns-resize",$table, $name);
$demo->UpnCntIn('nw-resize',"nw-resize",$table, $name);
$demo->UpnCntIn('nwse-resize',"nwse-resize",$table, $name);
$demo->UpnCntIn('no-drop',"no-drop",$table, $name);
$demo->UpnCntIn('none',"none",$table, $name);
$demo->UpnCntIn('not-allowed',"not-allowed",$table, $name);
$demo->UpnCntIn('pointer',"pointer",$table, $name);
$demo->UpnCntIn('progress',"progress",$table, $name);
$demo->UpnCntIn('row-resize',"row-resize",$table, $name);
$demo->UpnCntIn('s-resize',"s-resize",$table, $name);
$demo->UpnCntIn('se-resize',"se-resize",$table, $name);
$demo->UpnCntIn('sw-resize',"sw-resize",$table, $name);
$demo->UpnCntIn('text',"text",$table, $name);
$demo->UpnCntIn('w-resize',"w-resize",$table, $name);
$demo->UpnCntIn('wait',"wait",$table, $name);
$demo->UpnCntIn('zoom-in',"zoom-in",$table, $name);
$demo->UpnCntIn('zoom-out',"zoom-out",$table, $name);

$table='Border_Style ';
$demo->CrtBscIn($table,'Css Borders ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('dotted',"Defines a dotted border",$table, $name);
$demo->UpnCntIn('dashed',"Defines a dashed border",$table, $name);
$demo->UpnCntIn('solid',"Defines a solid border",$table, $name);
$demo->UpnCntIn('double',"Defines a double border",$table, $name);
$demo->UpnCntIn('groove',"Defines a 3D grooved border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('ridge',"Defines a 3D grooved border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('inset',"Defines a 3D inset border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('outset',"Defines a 3D outset border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('none',"Defines no border",$table, $name);
$demo->UpnCntIn('hidden',"Defines a hidden border",$table, $name);

$table='HAlign';
$demo->CrtBscIn($table,'Horizontal Aling ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('left',"Aligns the text to the left	",$table, $name);
$demo->UpnCntIn('right',"Aligns the text to the right",$table, $name);
$demo->UpnCntIn('center',"Centers the text",$table, $name);
$demo->UpnCntIn('justify',"Stretches the lines so that each line has equal width (like in newspapers and magazines)",$table, $name);

$table='DecoLine';
$demo->CrtBscIn($table,'Decoration line ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('overline',"overline",$table, $name);
$demo->UpnCntIn('underline',"underline",$table, $name);
$demo->UpnCntIn('line-through',"line-through",$table, $name);
$demo->UpnCntIn('underline overline',"underline overline",$table, $name);
$demo->UpnCntIn('none',"none",$table, $name);

$table='Dispalyval';
$demo->CrtBscIn($table,'Options for display',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('inline',"Displays an element as an inline element (like <span>). Any height and width properties will have no effect",$table, $name);
$demo->UpnCntIn('block',"Displays an element as a block element (like <p>). It starts on a new line, and takes up the whole width",$table, $name);
$demo->UpnCntIn('contents',"Makes the container disappear, making the child elements children of the element the next level up in the DOM",$table, $name);
$demo->UpnCntIn('flex',"Displays an element as a block-level flex container",$table, $name);
$demo->UpnCntIn('grid',"Displays an element as a block-level grid container",$table, $name);
$demo->UpnCntIn('inline-block',"Displays an element as an inline-level block container. The element itself is formatted as an inline element, but you can apply height and width values",$table, $name);
$demo->UpnCntIn('inline-flex',"Displays an element as an inline-level flex container",$table, $name);
$demo->UpnCntIn('inline-grid',"Displays an element as an inline-level grid container",$table, $name);
$demo->UpnCntIn('inline-table',"The element is displayed as an inline-level table",$table, $name);
$demo->UpnCntIn('list-item',"Let the element behave like a <li> element",$table, $name);
$demo->UpnCntIn('run-in',"Displays an element as either block or inline, depending on context",$table, $name);
$demo->UpnCntIn('table',"Let the element behave like a <table> element",$table, $name);
$demo->UpnCntIn('table-caption',"Let the element behave like a <caption> element",$table, $name);
$demo->UpnCntIn('table-column-group',"Let the element behave like a <colgroup> element",$table, $name);
$demo->UpnCntIn('table-header-group',"Let the element behave like a <thead> element",$table, $name);
$demo->UpnCntIn('table-footer-group',"Let the element behave like a <tfoot> element",$table, $name);
$demo->UpnCntIn('table-row-group',"Let the element behave like a <tbody> element",$table, $name);
$demo->UpnCntIn('table-cell',"Let the element behave like a <td> element",$table, $name);
$demo->UpnCntIn('table-column',"Let the element behave like a <col> element",$table, $name);
$demo->UpnCntIn('table-row',"Let the element behave like a <tr> element",$table, $name);
$demo->UpnCntIn('none',"The element is completely removed",$table, $name);

echo "********** <br> Defining Field Types  <br> ********** <br> <br>";

$name='ddd';
$table='type';
$demo->CrtFtrBsc($name);
$demo->CrtBscIn($table,'Field Type',$name) ;
$demo->AnnInAdd($table,'b',$name);

$demo->UpnCntIn('A','Array',$table,$name);
$demo->UpnCntIn('S','String',$table,$name);
$demo->UpnCntIn('I','Integer',$table,$name);
$demo->UpnCntIn('i','Identity',$table,$name);
$demo->UpnCntIn('F','Float',$table,$name);
$demo->UpnCntIn('D','Date Time',$table,$name);
$demo->UpnCntIn('K','Key Field',$table,$name);
$demo->UpnCntIn('k','Index Field (unique)',$table,$name);
$demo->UpnCntIn('s','Sort Field',$table,$name);
$demo->UpnCntIn('T','TimeStamp',$table,$name);
$demo->UpnCntIn('t','Time',$table,$name);
$demo->UpnCntIn('d','Date',$table,$name);
$demo->UpnCntIn('B','Logic Value',$table,$name);
$demo->UpnCntIn('R','Relate',$table,$name);
$demo->UpnCntIn('V','Not defined',$table,$name);
$demo->UpnCntIn('P','Plain file',$table,$name);
$demo->UpnCntIn('p','Public Plain file',$table,$name);
$demo->UpnCntIn('L','List of',$table,$name);
$demo->UpnCntIn('l','link to file',$table,$name);
$demo->UpnCntIn('M','Master Detail Relationship',$table,$name);

echo "********** <br> Defining Data dictyonary  <br> ********** <br> <br>";

$demo->VldStp();
$demo->DddAddFld('FldNme', array('FldTpe'=>'K','FldDsc'=>'Field name'));
$demo->DddAddFld('FldDsc', array('FldTpe'=>'S','FldDsc'=>'Field description'));
$demo->DddAddFld('FldTpe', array('FldTpe'=>'R','FldDsc'=>'Field type','FldVld'=>array('Name'=>'lookin','content'=>'type', 'in'=>'ddd')));
$demo->DddAddFld('FldVld', array('FldTpe'=>'A','FldDsc'=>'Field validation'));
$demo->DddAddFld('FldEmp', array('FldTpe'=>'B','FldDsc'=>'Field bool'));
$demo->DddAddFld('FldDfl', array('FldTpe'=>'V','FldDsc'=>'Default Value'));
$demo->VldStr();

echo "********** <br> Create record  for data dictionary <br> ********** <br> <br>";

$demo->CrtRcd('ddd','Data Dictionary');
$demo->RcdAddIn('ddd','FldNme', array('FldEmp'=>FALSE));
$demo->RcdAddIn('ddd','FldDsc', array('FldEmp'=>FALSE));
$demo->RcdAddIn('ddd','FldTpe', array('FldEmp'=>FALSE));
$demo->RcdAddIn('ddd','FldVld', array('FldEmp'=>TRUE));
$demo->RcdAddIn('ddd','FldEmp', array('FldEmp'=>TRUE));
$demo->RcdAddIn('ddd','FldDfl', array('FldEmp'=>TRUE));

echo "********** <br> Defining Data dictyonary for General Porpuse <br> ********** <br> <br>";

$demo->DddAddFld('Id', array('FldTpe'=>'i','FldDsc'=>'Identity Field'));
$demo->DddAddFld('RecId', array('FldTpe'=>'k','FldDsc'=>'Record Identifier'));
$demo->DddAddFld('KeyId', array('FldTpe'=>'K','FldDsc'=>'Record Identifier'));
$demo->DddAddFld('Name', array('FldTpe'=>'S','FldDsc'=>'Store the name'));
$demo->DddAddFld('File', array('FldTpe'=>'P','FldDsc'=>'Name of the free text'));
$demo->DddAddFld('Img', array('FldTpe'=>'l','FldDsc'=>'Name of the image'));
$demo->DddAddFld('WnrId', array('FldTpe'=>'S','FldDsc'=>'OwnerID'));
$demo->DddAddFld('CtdId', array('FldTpe'=>'S','FldDsc'=>'Created User'));
$demo->DddAddFld('CtdDtt', array('FldTpe'=>'T','FldDsc'=>'Created DateTime'));
$demo->DddAddFld('LstdId', array('FldTpe'=>'S','FldDsc'=>'Last Update User'));
$demo->DddAddFld('LstDtt', array('FldTpe'=>'T','FldDsc'=>'Last Update DateTime'));
$demo->DddAddFld('CrrStt', array('FldTpe'=>'S','FldDsc'=>'Current Status'));
$demo->DddAddFld('SttID', array('FldTpe'=>'S','FldDsc'=>'Status By'));
$demo->DddAddFld('SttDtt', array('FldTpe'=>'T','FldDsc'=>'Status DateTime'));
$demo->DddAddFld('CrrStp', array('FldTpe'=>'S','FldDsc'=>'Current Step'));
$demo->DddAddFld('StpId', array('FldTpe'=>'S','FldDsc'=>'Step By'));
$demo->DddAddFld('StpDtt', array('FldTpe'=>'T','FldDsc'=>'Step Date Time'));
$demo->DddAddFld('GString', array('FldTpe'=>'S','FldDsc'=>'General Porpuse Srting'));
$demo->DddAddFld('GInteger', array('FldTpe'=>'I','FldDsc'=>'General Porpuse Integer'));
$demo->DddAddFld('GFloat', array('FldTpe'=>'F','FldDsc'=>'General Porpuse Float'));
$demo->DddAddFld('GLogic', array('FldTpe'=>'B','FldDsc'=>'General Porpuse Logic Value'));
$demo->DddAddFld('GMaster', array('FldTpe'=>'M','FldDsc'=>'General Porpuse Master Detail'));

echo "********** <br> Campos para Css <br> ********** <br> <br>";

$demo->DddAddFld('SizeCss', array('FldTpe'=>'A','FldDsc'=>'Setup size of css','FldVld'=>array('Name'=>'subset_join', 'in'=>'Size')));
$demo->DddAddFld('ColorCss', array('FldTpe'=>'S','FldDsc'=>'Css Color of the element','FldVld'=>array('Name'=>'bringin','content'=>'color', 'in'=>'page')));
$demo->DddAddFld('Sides', array('FldTpe'=>'A','FldDsc'=>'Setup Sides of css','FldVld'=>array('Name'=>'subset_join_space', 'in'=>'SizeArround')));
$demo->DddAddFld('SzNumber', array('FldTpe'=>'S','FldDsc'=>'Css About the amount of the size'));
$demo->DddAddFld('SzUnit', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'USize', 'in'=>'page')));
$demo->DddAddFld('BorderStyleCss', array('FldTpe'=>'S','FldDsc'=>'Style of the Vorder','FldVld'=>array('Name'=>'lookin','
content'=>'Border_Style', 'in'=>'page')));
$demo->DddAddFld('font-family', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'bringin','content'=>'myletters', 'in'=>'page')));
$demo->DddAddFld('font-style', array('FldTpe'=>'S','FldDsc'=>'Css Font style','FldVld'=>array('Name'=>'bringin','content'=>'style', 'in'=>'page')));
$demo->DddAddFld('font-variant', array('FldTpe'=>'S','FldDsc'=>'Css Font variant','FldVld'=>array('Name'=>'bringin','content'=>'variant', 'in'=>'page')));
$demo->DddAddFld('font-weight', array('FldTpe'=>'S','FldDsc'=>'Css Font weight','FldVld'=>array('Name'=>'bringin','content'=>'weight', 'in'=>'page')));
$demo->DddAddFld('position', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'bringin','content'=>'UPoss', 'in'=>'page')));
$demo->DddAddFld('cursor', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'Cursor', 'in'=>'page')));
$demo->DddAddFld('border-style', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'subset_sort', 'in'=>'Styles')));
$demo->DddAddFld('text-decoration-line', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoLine', 'in'=>'page')));
$demo->DddAddFld('text-decoration', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoLine', 'in'=>'page')));
$demo->DddAddFld('text-decoration-style', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoStyle', 'in'=>'page')));
$demo->DddAddFld('text-align', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'HAlign', 'in'=>'page')));
$demo->DddAddFld('display', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'Dispalyval', 'in'=>'page')));
$demo->DddAddFld('float', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'in','content'=>array('left'=>1,'right'=>1,'none'=>1))));
$demo->DddChgFld('position', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'lookin','content'=>'UPoss', 'in'=>'page')));

echo "********** <br> Campos para layout <br> ********** <br> <br>";

$demo->DddAddFld('Order', array('FldTpe'=>'K','FldDsc'=>'Order to Deploy'));
$demo->DddAddFld('CssClass', array('FldTpe'=>'S','FldDsc'=>'Css Class to asing','FldVld'=>array('Name'=>'lookfrom','content'=>'MainCss', 'in'=>'page')));

echo "********** <br> Sub Record Sizes <br> ********** <br> <br>";

$demo->CrtRcd('Size','Size & unit of an element');
$demo->RcdAddIn('Size','SzNumber', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Size','SzUnit', array('FldEmp'=>TRUE)); 

echo "********** <br> Sub Record Estilo de borde <br> ********** <br> <br>";

$demo->CrtRcd('Styles','Side Styles in Css propierties');
$demo->RcdAddIn('Styles','1-Top', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','2-Left', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','3-Bottom', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','4-Rigth', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','All', array('FldEmp'=>TRUE),'BorderStyleCss');

echo "********** <br> Sub Record Size arround <br> ********** <br> <br>";

$demo->CrtRcd('SizeArround','Side Styles arround object in Css propierties');
$demo->RcdAddIn('SizeArround','1-Top', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','2-Lef', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','3-Bottom', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','4-Rigth', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','All', array('FldEmp'=>TRUE),'SizeCss');

echo "********** <br> Sub Record CssStyles <br> ********** <br> <br>";

$demo->CrtRcd('Css','Cascading Style Sheets Definition');
$demo->RcdAddIn('Css','KeyId', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Css','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Css','font-family', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','font-style', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','font-size', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','font-variant', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','font-weight', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','background-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','position', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','width', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','height', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','top', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','left', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','right', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','bottom', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','cursor', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','border-style', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','border-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','text-decoration-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','text-decoration-line', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','text-decoration', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','text-decoration-style', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','text-align', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','margin', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','border-radius', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','padding', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','max-width', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','max-heigh', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','display', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','float', array('FldEmp'=>TRUE));
$demo->RcdChgIn('Css','position', array('FldEmp'=>TRUE));

echo "********** <br> LatOut Record  <br> ********** <br> <br>";

$demo->CrtRcd('Layout','Html Layout');
$demo->RcdAddIn('Layout','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Layout','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Layout','CssClass', array('FldEmp'=>FALSE));

echo "********** <br> Defining Lenguage Record  <br> ********** <br> <br>";
$name = 'Lenguages';
$demo->CrtRcd($name,'Lenguages');
$demo->RcdAddIn($name,'KeyId', array('FldEmp'=>FALSE));
$demo->RcdAddIn($name,'Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn($name,'Img', array('FldEmp'=>TRUE,'FldVld'=>array('Name'=>'image', 'in'=>'public')));

echo "********** <br> Activate Table feature in page  <br> ********** <br> <br>";
$inside = 'page';
$demo->CrtFtrTbl($inside);

echo "********** <br> Activating tables in main & cresating lenguage<br> ********** <br> <br>";

$demo->CrtFtrTbl('main');
$demo->CrtTblIn('Lenguages', 'Lenguages avaible on sisitem', 'Lenguages' , 'main');

$demo->InsTblIn('Lenguages' , 'En', array('Name'=>'English', 'Img'=> 'usa flag'),'main');
$demo->InsTblIn('Lenguages' , 'Es', array('Name'=>'Español', 'Img'=> 'bandera española'),'main');
$demo->InsTblIn('Lenguages' , 'Mx', array('Name'=>'Español (México)', 'Img'=> 'bandera mexicana'),'main');


echo "**********+++++++++++ <br> Demo Finish<br> **********+++++++++++ <br> <br>";
?>