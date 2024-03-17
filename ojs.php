<?php
$wordlist = array('file/','files/','journals/','journal/','jurnal/','jurnals/','jurnal_file/','jurnal_files/','jurnal_data_file/','jurnal_data_files/','jurnalfile/','jurnalfiles/','jurnaldatafile/','jurnaldatafiles/','data/','datafile/','datafiles/','journalfile/','journalfiles/','journal_file/','journal_files/','journal_data/','journal_data_file/','journal_data_files/');
echo "\33[0;32m==========================================================\n";
echo "\33[37;1mOJS : dir : brute\n";
echo "\33[37;1mblogspot : https://stdfromcybertobrotherhood.blogspot.com\n";
echo "\33[37;1mcontoh : site:google.com site:http://google.com site:https://google.com\n";
echo "\33[0;32m==========================================================\n";
echo "\33[37;1msite:";
$target = fopen("php://stdin","r"); 
$url = trim(fgets($target));
foreach ($wordlist as $key) {
$domain = $url.'/'.$key;
$checker = get_headers($domain);
if (preg_match('/200/', $checker[0])) {
echo "\33[0;32m[✓]".$domain."\n";
}else{
echo "\33[31;1m[x]".$domain."\n";
     }
   }
?>
