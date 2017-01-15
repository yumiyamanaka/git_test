<?php
include("connect.php");

/*投票結果の値を取得
==========================================*/
/* itemに一致するカウント数を取得 */
$recordItem01 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item01"');
$dataItem01 = mysql_fetch_assoc($recordItem01);
$dataItem01_total = $dataItem01['record_count'];
//echo ($dataItem01_total) . "<br>";
/* itemに一致する＆ユーザエージェント数が一致しないカウント数を取得 */
$recordItem01_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item01"');
$dataItem01_effct = mysql_fetch_assoc($recordItem01_effct);
$dataItem01_total_effct = $dataItem01_effct['record_count'];
//echo ($dataItem01_total_effct) . "<br>";

$recordItem02 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item02"');
$dataItem02 = mysql_fetch_assoc($recordItem02);
$dataItem02_total = $dataItem02['record_count'];
$recordItem02_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item02"');
$dataItem02_effct = mysql_fetch_assoc($recordItem02_effct);
$dataItem02_total_effct = $dataItem02_effct['record_count'];

$recordItem03 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item03"');
$dataItem03 = mysql_fetch_assoc($recordItem03);
$dataItem03_total = $dataItem03['record_count'];
$recordItem03_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item03"');
$dataItem03_effct = mysql_fetch_assoc($recordItem03_effct);
$dataItem03_total_effct = $dataItem03_effct['record_count'];

$recordItem04 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item04"');
$dataItem04 = mysql_fetch_assoc($recordItem04);
$dataItem04_total = $dataItem04['record_count'];
$recordItem04_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item04"');
$dataItem04_effct = mysql_fetch_assoc($recordItem04_effct);
$dataItem04_total_effct = $dataItem04_effct['record_count'];

$recordItem05 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item05"');
$dataItem05 = mysql_fetch_assoc($recordItem05);
$dataItem05_total = $dataItem05['record_count'];
$recordItem05_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item05"');
$dataItem05_effct = mysql_fetch_assoc($recordItem05_effct);
$dataItem05_total_effct = $dataItem05_effct['record_count'];

$recordItem06 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item06"');
$dataItem06 = mysql_fetch_assoc($recordItem06);
$dataItem06_total = $dataItem06['record_count'];
$recordItem06_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item06"');
$dataItem06_effct = mysql_fetch_assoc($recordItem06_effct);
$dataItem06_total_effct = $dataItem06_effct['record_count'];

$recordItem07 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item07"');
$dataItem07 = mysql_fetch_assoc($recordItem07);
$dataItem07_total = $dataItem07['record_count'];
$recordItem07_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item07"');
$dataItem07_effct = mysql_fetch_assoc($recordItem07_effct);
$dataItem07_total_effct = $dataItem07_effct['record_count'];

$recordItem08 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item08"');
$dataItem08 = mysql_fetch_assoc($recordItem08);
$dataItem08_total = $dataItem08['record_count'];
$recordItem08_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item08"');
$dataItem08_effct = mysql_fetch_assoc($recordItem08_effct);
$dataItem08_total_effct = $dataItem08_effct['record_count'];

$recordItem09 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item09"');
$dataItem09 = mysql_fetch_assoc($recordItem09);
$dataItem09_total = $dataItem09['record_count'];
$recordItem09_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item09"');
$dataItem09_effct = mysql_fetch_assoc($recordItem09_effct);
$dataItem09_total_effct = $dataItem09_effct['record_count'];

$recordItem10 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item10"');
$dataItem10 = mysql_fetch_assoc($recordItem10);
$dataItem10_total = $dataItem10['record_count'];
$recordItem10_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item10"');
$dataItem10_effct = mysql_fetch_assoc($recordItem10_effct);
$dataItem10_total_effct = $dataItem10_effct['record_count'];

$recordItem11 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item11"');
$dataItem11 = mysql_fetch_assoc($recordItem11);
$dataItem11_total = $dataItem11['record_count'];
$recordItem11_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item11"');
$dataItem11_effct = mysql_fetch_assoc($recordItem11_effct);
$dataItem11_total_effct = $dataItem11_effct['record_count'];

$recordItem12 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item12"');
$dataItem12 = mysql_fetch_assoc($recordItem12);
$dataItem12_total = $dataItem12['record_count'];
$recordItem12_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item12"');
$dataItem12_effct = mysql_fetch_assoc($recordItem12_effct);
$dataItem12_total_effct = $dataItem12_effct['record_count'];

$recordItem13 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item13"');
$dataItem13 = mysql_fetch_assoc($recordItem13);
$dataItem13_total = $dataItem13['record_count'];
$recordItem13_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item13"');
$dataItem13_effct = mysql_fetch_assoc($recordItem13_effct);
$dataItem13_total_effct = $dataItem13_effct['record_count'];

$recordItem14 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item14"');
$dataItem14 = mysql_fetch_assoc($recordItem14);
$dataItem14_total = $dataItem14['record_count'];
$recordItem14_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item14"');
$dataItem14_effct = mysql_fetch_assoc($recordItem14_effct);
$dataItem14_total_effct = $dataItem14_effct['record_count'];

$recordItem15 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item15"');
$dataItem15 = mysql_fetch_assoc($recordItem15);
$dataItem15_total = $dataItem15['record_count'];
$recordItem15_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item15"');
$dataItem15_effct = mysql_fetch_assoc($recordItem15_effct);
$dataItem15_total_effct = $dataItem15_effct['record_count'];

$recordItem16 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item16"');
$dataItem16 = mysql_fetch_assoc($recordItem16);
$dataItem16_total = $dataItem16['record_count'];
$recordItem16_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item16"');
$dataItem16_effct = mysql_fetch_assoc($recordItem16_effct);
$dataItem16_total_effct = $dataItem16_effct['record_count'];

$recordItem17 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item17"');
$dataItem17 = mysql_fetch_assoc($recordItem17);
$dataItem17_total = $dataItem17['record_count'];
$recordItem17_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item17"');
$dataItem17_effct = mysql_fetch_assoc($recordItem17_effct);
$dataItem17_total_effct = $dataItem17_effct['record_count'];

$recordItem18 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item18"');
$dataItem18 = mysql_fetch_assoc($recordItem18);
$dataItem18_total = $dataItem18['record_count'];
$recordItem18_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item18"');
$dataItem18_effct = mysql_fetch_assoc($recordItem18_effct);
$dataItem18_total_effct = $dataItem18_effct['record_count'];

$recordItem19 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item19"');
$dataItem19 = mysql_fetch_assoc($recordItem19);
$dataItem19_total = $dataItem19['record_count'];
$recordItem19_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item19"');
$dataItem19_effct = mysql_fetch_assoc($recordItem19_effct);
$dataItem19_total_effct = $dataItem19_effct['record_count'];

$recordItem20 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item20"');
$dataItem20 = mysql_fetch_assoc($recordItem20);
$dataItem20_total = $dataItem20['record_count'];
$recordItem20_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item20"');
$dataItem20_effct = mysql_fetch_assoc($recordItem20_effct);
$dataItem20_total_effct = $dataItem20_effct['record_count'];

$recordItem21 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item21"');
$dataItem21 = mysql_fetch_assoc($recordItem21);
$dataItem21_total = $dataItem21['record_count'];
$recordItem21_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item21"');
$dataItem21_effct = mysql_fetch_assoc($recordItem21_effct);
$dataItem21_total_effct = $dataItem21_effct['record_count'];

$recordItem22 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item22"');
$dataItem22 = mysql_fetch_assoc($recordItem22);
$dataItem22_total = $dataItem22['record_count'];
$recordItem22_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item22"');
$dataItem22_effct = mysql_fetch_assoc($recordItem22_effct);
$dataItem22_total_effct = $dataItem22_effct['record_count'];

$recordItem23 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item23"');
$dataItem23 = mysql_fetch_assoc($recordItem23);
$dataItem23_total = $dataItem23['record_count'];
$recordItem23_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item23"');
$dataItem23_effct = mysql_fetch_assoc($recordItem23_effct);
$dataItem23_total_effct = $dataItem23_effct['record_count'];

$recordItem24 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item24"');
$dataItem24 = mysql_fetch_assoc($recordItem24);
$dataItem24_total = $dataItem24['record_count'];
$recordItem24_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item24"');
$dataItem24_effct = mysql_fetch_assoc($recordItem24_effct);
$dataItem24_total_effct = $dataItem24_effct['record_count'];

$recordItem25 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item25"');
$dataItem25 = mysql_fetch_assoc($recordItem25);
$dataItem25_total = $dataItem25['record_count'];
$recordItem25_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item25"');
$dataItem25_effct = mysql_fetch_assoc($recordItem25_effct);
$dataItem25_total_effct = $dataItem25_effct['record_count'];

$recordItem26 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item26"');
$dataItem26 = mysql_fetch_assoc($recordItem26);
$dataItem26_total = $dataItem26['record_count'];
$recordItem26_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item26"');
$dataItem26_effct = mysql_fetch_assoc($recordItem26_effct);
$dataItem26_total_effct = $dataItem26_effct['record_count'];

$recordItem27 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item27"');
$dataItem27 = mysql_fetch_assoc($recordItem27);
$dataItem27_total = $dataItem27['record_count'];
$recordItem27_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item27"');
$dataItem27_effct = mysql_fetch_assoc($recordItem27_effct);
$dataItem27_total_effct = $dataItem27_effct['record_count'];

$recordItem28 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item28"');
$dataItem28 = mysql_fetch_assoc($recordItem28);
$dataItem28_total = $dataItem28['record_count'];
$recordItem28_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item28"');
$dataItem28_effct = mysql_fetch_assoc($recordItem28_effct);
$dataItem28_total_effct = $dataItem28_effct['record_count'];

$recordItem29 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item29"');
$dataItem29 = mysql_fetch_assoc($recordItem29);
$dataItem29_total = $dataItem19['record_count'];
$recordItem29_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item29"');
$dataItem29_effct = mysql_fetch_assoc($recordItem29_effct);
$dataItem29_total_effct = $dataItem29_effct['record_count'];

$recordItem30 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item30"');
$dataItem30 = mysql_fetch_assoc($recordItem30);
$dataItem30_total = $dataItem30['record_count'];
$recordItem30_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item30"');
$dataItem30_effct = mysql_fetch_assoc($recordItem30_effct);
$dataItem30_total_effct = $dataItem30_effct['record_count'];

$recordItem31 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item31"');
$dataItem31 = mysql_fetch_assoc($recordItem31);
$dataItem31_total = $dataItem31['record_count'];
$recordItem31_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item31"');
$dataItem31_effct = mysql_fetch_assoc($recordItem31_effct);
$dataItem31_total_effct = $dataItem31_effct['record_count'];

$recordItem32 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item32"');
$dataItem32 = mysql_fetch_assoc($recordItem32);
$dataItem32_total = $dataItem32['record_count'];
$recordItem32_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item32"');
$dataItem32_effct = mysql_fetch_assoc($recordItem32_effct);
$dataItem32_total_effct = $dataItem32_effct['record_count'];

$recordItem33 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item33"');
$dataItem33 = mysql_fetch_assoc($recordItem33);
$dataItem33_total = $dataItem33['record_count'];
$recordItem33_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item33"');
$dataItem33_effct = mysql_fetch_assoc($recordItem33_effct);
$dataItem33_total_effct = $dataItem33_effct['record_count'];

$recordItem34 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item34"');
$dataItem34 = mysql_fetch_assoc($recordItem34);
$dataItem34_total = $dataItem34['record_count'];
$recordItem34_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item34"');
$dataItem34_effct = mysql_fetch_assoc($recordItem34_effct);
$dataItem34_total_effct = $dataItem34_effct['record_count'];

$recordItem35 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item35"');
$dataItem35 = mysql_fetch_assoc($recordItem35);
$dataItem35_total = $dataItem35['record_count'];
$recordItem35_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item35"');
$dataItem35_effct = mysql_fetch_assoc($recordItem35_effct);
$dataItem35_total_effct = $dataItem35_effct['record_count'];

$recordItem36 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item36"');
$dataItem36 = mysql_fetch_assoc($recordItem36);
$dataItem36_total = $dataItem36['record_count'];
$recordItem36_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item36"');
$dataItem36_effct = mysql_fetch_assoc($recordItem36_effct);
$dataItem36_total_effct = $dataItem36_effct['record_count'];

$recordItem37 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item37"');
$dataItem37 = mysql_fetch_assoc($recordItem37);
$dataItem37_total = $dataItem37['record_count'];
$recordItem37_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item37"');
$dataItem37_effct = mysql_fetch_assoc($recordItem37_effct);
$dataItem37_total_effct = $dataItem37_effct['record_count'];

$recordItem38 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item38"');
$dataItem38 = mysql_fetch_assoc($recordItem38);
$dataItem38_total = $dataItem38['record_count'];
$recordItem38_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item38"');
$dataItem38_effct = mysql_fetch_assoc($recordItem38_effct);
$dataItem38_total_effct = $dataItem38_effct['record_count'];

$recordItem39 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item39"');
$dataItem39 = mysql_fetch_assoc($recordItem39);
$dataItem39_total = $dataItem39['record_count'];
$recordItem39_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item39"');
$dataItem39_effct = mysql_fetch_assoc($recordItem39_effct);
$dataItem39_total_effct = $dataItem39_effct['record_count'];

$recordItem40 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item40"');
$dataItem40 = mysql_fetch_assoc($recordItem40);
$dataItem40_total = $dataItem40['record_count'];
$recordItem40_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item40"');
$dataItem40_effct = mysql_fetch_assoc($recordItem40_effct);
$dataItem40_total_effct = $dataItem40_effct['record_count'];

$recordItem41 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item41"');
$dataItem41 = mysql_fetch_assoc($recordItem41);
$dataItem41_total = $dataItem41['record_count'];
$recordItem41_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item41"');
$dataItem41_effct = mysql_fetch_assoc($recordItem41_effct);
$dataItem41_total_effct = $dataItem41_effct['record_count'];

$recordItem42 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item42"');
$dataItem42 = mysql_fetch_assoc($recordItem42);
$dataItem42_total = $dataItem42['record_count'];
$recordItem42_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item42"');
$dataItem42_effct = mysql_fetch_assoc($recordItem42_effct);
$dataItem42_total_effct = $dataItem42_effct['record_count'];

$recordItem43 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item43"');
$dataItem43 = mysql_fetch_assoc($recordItem43);
$dataItem43_total = $dataItem43['record_count'];
$recordItem43_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item43"');
$dataItem43_effct = mysql_fetch_assoc($recordItem43_effct);
$dataItem43_total_effct = $dataItem43_effct['record_count'];

$recordItem44 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item44"');
$dataItem44 = mysql_fetch_assoc($recordItem44);
$dataItem44_total = $dataItem44['record_count'];
$recordItem44_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item44"');
$dataItem44_effct = mysql_fetch_assoc($recordItem44_effct);
$dataItem44_total_effct = $dataItem44_effct['record_count'];

$recordItem45 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item45"');
$dataItem45 = mysql_fetch_assoc($recordItem45);
$dataItem45_total = $dataItem45['record_count'];
$recordItem45_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item45"');
$dataItem45_effct = mysql_fetch_assoc($recordItem45_effct);
$dataItem45_total_effct = $dataItem45_effct['record_count'];

$recordItem46 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item46"');
$dataItem46 = mysql_fetch_assoc($recordItem46);
$dataItem46_total = $dataItem46['record_count'];
$recordItem46_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item46"');
$dataItem46_effct = mysql_fetch_assoc($recordItem46_effct);
$dataItem46_total_effct = $dataItem46_effct['record_count'];

$recordItem47 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item47"');
$dataItem47 = mysql_fetch_assoc($recordItem47);
$dataItem47_total = $dataItem47['record_count'];
$recordItem47_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item47"');
$dataItem47_effct = mysql_fetch_assoc($recordItem47_effct);
$dataItem47_total_effct = $dataItem47_effct['record_count'];

$recordItem48 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item48"');
$dataItem48 = mysql_fetch_assoc($recordItem48);
$dataItem48_total = $dataItem48['record_count'];
$recordItem48_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item48"');
$dataItem48_effct = mysql_fetch_assoc($recordItem48_effct);
$dataItem48_total_effct = $dataItem48_effct['record_count'];

$recordItem49 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item49"');
$dataItem49 = mysql_fetch_assoc($recordItem49);
$dataItem49_total = $dataItem49['record_count'];
$recordItem49_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item49"');
$dataItem49_effct = mysql_fetch_assoc($recordItem49_effct);
$dataItem49_total_effct = $dataItem49_effct['record_count'];

$recordItem50 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item50"');
$dataItem50 = mysql_fetch_assoc($recordItem50);
$dataItem50_total = $dataItem50['record_count'];
$recordItem50_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item50"');
$dataItem50_effct = mysql_fetch_assoc($recordItem50_effct);
$dataItem50_total_effct = $dataItem50_effct['record_count'];

$recordItem51 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item51"');
$dataItem51 = mysql_fetch_assoc($recordItem51);
$dataItem51_total = $dataItem51['record_count'];
$recordItem51_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item51"');
$dataItem51_effct = mysql_fetch_assoc($recordItem51_effct);
$dataItem51_total_effct = $dataItem51_effct['record_count'];

$recordItem52 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item52"');
$dataItem52 = mysql_fetch_assoc($recordItem52);
$dataItem52_total = $dataItem52['record_count'];
$recordItem52_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item52"');
$dataItem52_effct = mysql_fetch_assoc($recordItem52_effct);
$dataItem52_total_effct = $dataItem52_effct['record_count'];

$recordItem53 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item53"');
$dataItem53 = mysql_fetch_assoc($recordItem53);
$dataItem53_total = $dataItem53['record_count'];
$recordItem53_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item53"');
$dataItem53_effct = mysql_fetch_assoc($recordItem53_effct);
$dataItem53_total_effct = $dataItem53_effct['record_count'];

$recordItem54 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item54"');
$dataItem54 = mysql_fetch_assoc($recordItem54);
$dataItem54_total = $dataItem54['record_count'];
$recordItem54_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item54"');
$dataItem54_effct = mysql_fetch_assoc($recordItem54_effct);
$dataItem54_total_effct = $dataItem54_effct['record_count'];

$recordItem55 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item55"');
$dataItem55 = mysql_fetch_assoc($recordItem55);
$dataItem55_total = $dataItem55['record_count'];
$recordItem55_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item55"');
$dataItem55_effct = mysql_fetch_assoc($recordItem55_effct);
$dataItem55_total_effct = $dataItem55_effct['record_count'];

$recordItem56 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item56"');
$dataItem56 = mysql_fetch_assoc($recordItem56);
$dataItem56_total = $dataItem56['record_count'];
$recordItem56_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item56"');
$dataItem56_effct = mysql_fetch_assoc($recordItem56_effct);
$dataItem56_total_effct = $dataItem56_effct['record_count'];

$recordItem57 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item57"');
$dataItem57 = mysql_fetch_assoc($recordItem57);
$dataItem57_total = $dataItem57['record_count'];
$recordItem57_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item57"');
$dataItem57_effct = mysql_fetch_assoc($recordItem57_effct);
$dataItem57_total_effct = $dataItem57_effct['record_count'];

$recordItem58 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item58"');
$dataItem58 = mysql_fetch_assoc($recordItem58);
$dataItem58_total = $dataItem58['record_count'];
$recordItem58_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item58"');
$dataItem58_effct = mysql_fetch_assoc($recordItem58_effct);
$dataItem58_total_effct = $dataItem58_effct['record_count'];

$recordItem59 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item59"');
$dataItem59 = mysql_fetch_assoc($recordItem59);
$dataItem59_total = $dataItem59['record_count'];
$recordItem59_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item59"');
$dataItem59_effct = mysql_fetch_assoc($recordItem59_effct);
$dataItem59_total_effct = $dataItem59_effct['record_count'];

$recordItem60 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item60"');
$dataItem60 = mysql_fetch_assoc($recordItem60);
$dataItem60_total = $dataItem60['record_count'];
$recordItem60_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item60"');
$dataItem60_effct = mysql_fetch_assoc($recordItem60_effct);
$dataItem60_total_effct = $dataItem60_effct['record_count'];

$recordItem61 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item61"');
$dataItem61 = mysql_fetch_assoc($recordItem61);
$dataItem61_total = $dataItem61['record_count'];
$recordItem61_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item61"');
$dataItem61_effct = mysql_fetch_assoc($recordItem61_effct);
$dataItem61_total_effct = $dataItem61_effct['record_count'];

$recordItem62 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item62"');
$dataItem62 = mysql_fetch_assoc($recordItem62);
$dataItem62_total = $dataItem62['record_count'];
$recordItem62_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item62"');
$dataItem62_effct = mysql_fetch_assoc($recordItem62_effct);
$dataItem62_total_effct = $dataItem62_effct['record_count'];

$recordItem63 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item63"');
$dataItem63 = mysql_fetch_assoc($recordItem63);
$dataItem63_total = $dataItem63['record_count'];
$recordItem63_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item63"');
$dataItem63_effct = mysql_fetch_assoc($recordItem63_effct);
$dataItem63_total_effct = $dataItem63_effct['record_count'];

$recordItem64 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item64"');
$dataItem64 = mysql_fetch_assoc($recordItem64);
$dataItem64_total = $dataItem64['record_count'];
$recordItem64_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item64"');
$dataItem64_effct = mysql_fetch_assoc($recordItem64_effct);
$dataItem64_total_effct = $dataItem64_effct['record_count'];

$recordItem65 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item65"');
$dataItem65 = mysql_fetch_assoc($recordItem65);
$dataItem65_total = $dataItem65['record_count'];
$recordItem65_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item65"');
$dataItem65_effct = mysql_fetch_assoc($recordItem65_effct);
$dataItem65_total_effct = $dataItem65_effct['record_count'];

$recordItem66 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item66"');
$dataItem66 = mysql_fetch_assoc($recordItem66);
$dataItem66_total = $dataItem66['record_count'];
$recordItem66_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item66"');
$dataItem66_effct = mysql_fetch_assoc($recordItem66_effct);
$dataItem66_total_effct = $dataItem66_effct['record_count'];

$recordItem67 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item67"');
$dataItem67 = mysql_fetch_assoc($recordItem67);
$dataItem67_total = $dataItem67['record_count'];
$recordItem67_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item67"');
$dataItem67_effct = mysql_fetch_assoc($recordItem67_effct);
$dataItem67_total_effct = $dataItem67_effct['record_count'];

$recordItem68 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item68"');
$dataItem68 = mysql_fetch_assoc($recordItem68);
$dataItem68_total = $dataItem68['record_count'];
$recordItem68_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item68"');
$dataItem68_effct = mysql_fetch_assoc($recordItem68_effct);
$dataItem68_total_effct = $dataItem68_effct['record_count'];

$recordItem69 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item69"');
$dataItem69 = mysql_fetch_assoc($recordItem69);
$dataItem69_total = $dataItem69['record_count'];
$recordItem69_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item69"');
$dataItem69_effct = mysql_fetch_assoc($recordItem69_effct);
$dataItem69_total_effct = $dataItem69_effct['record_count'];

$recordItem70 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item70"');
$dataItem70 = mysql_fetch_assoc($recordItem70);
$dataItem70_total = $dataItem70['record_count'];
$recordItem70_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item70"');
$dataItem70_effct = mysql_fetch_assoc($recordItem70_effct);
$dataItem70_total_effct = $dataItem70_effct['record_count'];

$recordItem71 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item71"');
$dataItem71 = mysql_fetch_assoc($recordItem71);
$dataItem71_total = $dataItem71['record_count'];
$recordItem71_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item71"');
$dataItem71_effct = mysql_fetch_assoc($recordItem71_effct);
$dataItem71_total_effct = $dataItem71_effct['record_count'];

$recordItem72 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item72"');
$dataItem72 = mysql_fetch_assoc($recordItem72);
$dataItem72_total = $dataItem72['record_count'];
$recordItem72_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item72"');
$dataItem72_effct = mysql_fetch_assoc($recordItem72_effct);
$dataItem72_total_effct = $dataItem72_effct['record_count'];

$recordItem73 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item73"');
$dataItem73 = mysql_fetch_assoc($recordItem73);
$dataItem73_total = $dataItem73['record_count'];
$recordItem73_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item73"');
$dataItem73_effct = mysql_fetch_assoc($recordItem73_effct);
$dataItem73_total_effct = $dataItem73_effct['record_count'];

$recordItem74 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item74"');
$dataItem74 = mysql_fetch_assoc($recordItem74);
$dataItem74_total = $dataItem74['record_count'];
$recordItem74_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item74"');
$dataItem74_effct = mysql_fetch_assoc($recordItem74_effct);
$dataItem74_total_effct = $dataItem74_effct['record_count'];

$recordItem75 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item75"');
$dataItem75 = mysql_fetch_assoc($recordItem75);
$dataItem75_total = $dataItem75['record_count'];
$recordItem75_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item75"');
$dataItem75_effct = mysql_fetch_assoc($recordItem75_effct);
$dataItem75_total_effct = $dataItem75_effct['record_count'];

$recordItem76 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item76"');
$dataItem76 = mysql_fetch_assoc($recordItem76);
$dataItem76_total = $dataItem76['record_count'];
$recordItem76_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item76"');
$dataItem76_effct = mysql_fetch_assoc($recordItem76_effct);
$dataItem76_total_effct = $dataItem76_effct['record_count'];

$recordItem77 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item77"');
$dataItem77 = mysql_fetch_assoc($recordItem77);
$dataItem77_total = $dataItem77['record_count'];
$recordItem77_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item77"');
$dataItem77_effct = mysql_fetch_assoc($recordItem77_effct);
$dataItem77_total_effct = $dataItem77_effct['record_count'];

$recordItem78 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item78"');
$dataItem78 = mysql_fetch_assoc($recordItem78);
$dataItem78_total = $dataItem78['record_count'];
$recordItem78_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item78"');
$dataItem78_effct = mysql_fetch_assoc($recordItem78_effct);
$dataItem78_total_effct = $dataItem78_effct['record_count'];

$recordItem79 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item79"');
$dataItem79 = mysql_fetch_assoc($recordItem79);
$dataItem79_total = $dataItem79['record_count'];
$recordItem79_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item79"');
$dataItem79_effct = mysql_fetch_assoc($recordItem79_effct);
$dataItem79_total_effct = $dataItem79_effct['record_count'];

$recordItem80 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item80"');
$dataItem80 = mysql_fetch_assoc($recordItem80);
$dataItem80_total = $dataItem80['record_count'];
$recordItem80_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item80"');
$dataItem80_effct = mysql_fetch_assoc($recordItem80_effct);
$dataItem80_total_effct = $dataItem80_effct['record_count'];

$recordItem81 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item81"');
$dataItem81 = mysql_fetch_assoc($recordItem81);
$dataItem81_total = $dataItem81['record_count'];
$recordItem81_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item81"');
$dataItem81_effct = mysql_fetch_assoc($recordItem81_effct);
$dataItem81_total_effct = $dataItem81_effct['record_count'];

$recordItem82 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item82"');
$dataItem82 = mysql_fetch_assoc($recordItem82);
$dataItem82_total = $dataItem82['record_count'];
$recordItem82_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item82"');
$dataItem82_effct = mysql_fetch_assoc($recordItem82_effct);
$dataItem82_total_effct = $dataItem82_effct['record_count'];

$recordItem83 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item83"');
$dataItem83 = mysql_fetch_assoc($recordItem83);
$dataItem83_total = $dataItem83['record_count'];
$recordItem83_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item83"');
$dataItem83_effct = mysql_fetch_assoc($recordItem83_effct);
$dataItem83_total_effct = $dataItem83_effct['record_count'];

$recordItem84 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item84"');
$dataItem84 = mysql_fetch_assoc($recordItem84);
$dataItem84_total = $dataItem84['record_count'];
$recordItem84_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item84"');
$dataItem84_effct = mysql_fetch_assoc($recordItem84_effct);
$dataItem84_total_effct = $dataItem84_effct['record_count'];

$recordItem85 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item85"');
$dataItem85 = mysql_fetch_assoc($recordItem85);
$dataItem85_total = $dataItem85['record_count'];
$recordItem85_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item85"');
$dataItem85_effct = mysql_fetch_assoc($recordItem85_effct);
$dataItem85_total_effct = $dataItem85_effct['record_count'];

$recordItem86 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item86"');
$dataItem86 = mysql_fetch_assoc($recordItem86);
$dataItem86_total = $dataItem86['record_count'];
$recordItem86_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item86"');
$dataItem86_effct = mysql_fetch_assoc($recordItem86_effct);
$dataItem86_total_effct = $dataItem86_effct['record_count'];

$recordItem87 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item87"');
$dataItem87 = mysql_fetch_assoc($recordItem87);
$dataItem87_total = $dataItem87['record_count'];
$recordItem87_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item87"');
$dataItem87_effct = mysql_fetch_assoc($recordItem87_effct);
$dataItem87_total_effct = $dataItem87_effct['record_count'];

$recordItem88 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item88"');
$dataItem88 = mysql_fetch_assoc($recordItem88);
$dataItem88_total = $dataItem88['record_count'];
$recordItem88_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item88"');
$dataItem88_effct = mysql_fetch_assoc($recordItem88_effct);
$dataItem88_total_effct = $dataItem88_effct['record_count'];

$recordItem89 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item89"');
$dataItem89 = mysql_fetch_assoc($recordItem89);
$dataItem89_total = $dataItem89['record_count'];
$recordItem89_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item89"');
$dataItem89_effct = mysql_fetch_assoc($recordItem89_effct);
$dataItem89_total_effct = $dataItem89_effct['record_count'];

$recordItem90 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item90"');
$dataItem90 = mysql_fetch_assoc($recordItem90);
$dataItem90_total = $dataItem90['record_count'];
$recordItem90_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item90"');
$dataItem90_effct = mysql_fetch_assoc($recordItem90_effct);
$dataItem90_total_effct = $dataItem90_effct['record_count'];

$recordItem91 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item91"');
$dataItem91 = mysql_fetch_assoc($recordItem91);
$dataItem91_total = $dataItem91['record_count'];
$recordItem91_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item91"');
$dataItem91_effct = mysql_fetch_assoc($recordItem91_effct);
$dataItem91_total_effct = $dataItem91_effct['record_count'];

$recordItem92 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item92"');
$dataItem92 = mysql_fetch_assoc($recordItem92);
$dataItem92_total = $dataItem92['record_count'];
$recordItem92_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item92"');
$dataItem92_effct = mysql_fetch_assoc($recordItem92_effct);
$dataItem92_total_effct = $dataItem92_effct['record_count'];

$recordItem93 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item93"');
$dataItem93 = mysql_fetch_assoc($recordItem93);
$dataItem93_total = $dataItem93['record_count'];
$recordItem93_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item93"');
$dataItem93_effct = mysql_fetch_assoc($recordItem93_effct);
$dataItem93_total_effct = $dataItem93_effct['record_count'];

$recordItem94 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item94"');
$dataItem94 = mysql_fetch_assoc($recordItem94);
$dataItem94_total = $dataItem94['record_count'];
$recordItem94_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item94"');
$dataItem94_effct = mysql_fetch_assoc($recordItem94_effct);
$dataItem94_total_effct = $dataItem94_effct['record_count'];

$recordItem95 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item95"');
$dataItem95 = mysql_fetch_assoc($recordItem95);
$dataItem95_total = $dataItem95['record_count'];
$recordItem95_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item95"');
$dataItem95_effct = mysql_fetch_assoc($recordItem95_effct);
$dataItem95_total_effct = $dataItem95_effct['record_count'];

$recordItem96 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item96"');
$dataItem96 = mysql_fetch_assoc($recordItem96);
$dataItem96_total = $dataItem96['record_count'];
$recordItem96_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item96"');
$dataItem96_effct = mysql_fetch_assoc($recordItem96_effct);
$dataItem96_total_effct = $dataItem96_effct['record_count'];

$recordItem97 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item97"');
$dataItem97 = mysql_fetch_assoc($recordItem97);
$dataItem97_total = $dataItem97['record_count'];
$recordItem97_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item97"');
$dataItem97_effct = mysql_fetch_assoc($recordItem97_effct);
$dataItem97_total_effct = $dataItem97_effct['record_count'];

$recordItem98 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item98"');
$dataItem98 = mysql_fetch_assoc($recordItem98);
$dataItem98_total = $dataItem98['record_count'];
$recordItem98_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item98"');
$dataItem98_effct = mysql_fetch_assoc($recordItem98_effct);
$dataItem98_total_effct = $dataItem98_effct['record_count'];

$recordItem99 = mysql_query('SELECT COUNT(id) AS record_count FROM grandprix2016 WHERE itemname = "item99"');
$dataItem99 = mysql_fetch_assoc($recordItem99);
$dataItem99_total = $dataItem99['record_count'];
$recordItem99_effct = mysql_query('SELECT COUNT(DISTINCT useragent) AS record_count FROM grandprix2016 WHERE itemname = "item99"');
$dataItem99_effct = mysql_fetch_assoc($recordItem99_effct);
$dataItem99_total_effct = $dataItem99_effct['record_count'];

/* TOTAL投票数 */
$dataItem_total = $dataItem01_total + $dataItem02_total + $dataItem03_total + $dataItem04_total + $dataItem05_total + $dataItem06_total + $dataItem07_total + $dataItem08_total + $dataItem09_total + $dataItem10_total 
+ $dataItem11_total + $dataItem12_total + $dataItem13_total + $dataItem14_total + $dataItem15_total + $dataItem16_total + $dataItem17_total + $dataItem18_total + $dataItem19_total + $dataItem20_total 
+ $dataItem21_total + $dataItem22_total + $dataItem23_total + $dataItem24_total + $dataItem25_total + $dataItem26_total + $dataItem27_total + $dataItem28_total + $dataItem29_total + $dataItem30_total 
+ $dataItem31_total + $dataItem32_total + $dataItem33_total + $dataItem34_total + $dataItem35_total + $dataItem36_total + $dataItem37_total + $dataItem38_total + $dataItem39_total + $dataItem40_total 
+ $dataItem41_total + $dataItem42_total + $dataItem43_total + $dataItem44_total + $dataItem45_total + $dataItem46_total + $dataItem47_total + $dataItem48_total + $dataItem49_total + $dataItem50_total 
+ $dataItem51_total + $dataItem52_total + $dataItem53_total + $dataItem54_total + $dataItem55_total + $dataItem56_total + $dataItem57_total + $dataItem58_total + $dataItem59_total + $dataItem60_total 
+ $dataItem61_total + $dataItem62_total + $dataItem63_total + $dataItem64_total + $dataItem65_total + $dataItem66_total + $dataItem67_total + $dataItem68_total + $dataItem69_total + $dataItem70_total 
+ $dataItem71_total + $dataItem72_total + $dataItem73_total + $dataItem74_total + $dataItem75_total + $dataItem76_total + $dataItem77_total + $dataItem78_total + $dataItem79_total + $dataItem80_total 
+ $dataItem81_total + $dataItem82_total + $dataItem83_total + $dataItem84_total + $dataItem85_total + $dataItem86_total + $dataItem87_total + $dataItem88_total + $dataItem89_total + $dataItem90_total 
+ $dataItem91_total + $dataItem92_total + $dataItem93_total + $dataItem94_total + $dataItem95_total + $dataItem96_total + $dataItem97_total + $dataItem98_total + $dataItem99_total;
//echo($dataItem_total);

/* 合計有効投票数（ユーザ数） */
$dataItem_total_effct = $dataItem01_total_effct + $dataItem02_total_effct + $dataItem03_total_effct + $dataItem04_total_effct + $dataItem05_total_effct + $dataItem06_total_effct + $dataItem07_total_effct + $dataItem08_total_effct + $dataItem09_total_effct + $dataItem10_total_effct;
+ $dataItem11_total_effct + $dataItem12_total_effct + $dataItem13_total_effct + $dataItem14_total_effct + $dataItem15_total_effct + $dataItem16_total_effct + $dataItem17_total_effct + $dataItem18_total_effct + $dataItem19_total_effct + $dataItem20_total_effct 
+ $dataItem21_total_effct + $dataItem22_total_effct + $dataItem23_total_effct + $dataItem24_total_effct + $dataItem25_total_effct + $dataItem26_total_effct + $dataItem27_total_effct + $dataItem28_total_effct + $dataItem29_total_effct + $dataItem30_total_effct 
+ $dataItem31_total_effct + $dataItem32_total_effct + $dataItem33_total_effct + $dataItem34_total_effct + $dataItem35_total_effct + $dataItem36_total_effct + $dataItem37_total_effct + $dataItem38_total_effct + $dataItem39_total_effct + $dataItem40_total_effct 
+ $dataItem41_total_effct + $dataItem42_total_effct + $dataItem43_total_effct + $dataItem44_total_effct + $dataItem45_total_effct + $dataItem46_total_effct + $dataItem47_total_effct + $dataItem48_total_effct + $dataItem49_total_effct + $dataItem50_total_effct 
+ $dataItem51_total_effct + $dataItem52_total_effct + $dataItem53_total_effct + $dataItem54_total_effct + $dataItem55_total_effct + $dataItem56_total_effct + $dataItem57_total_effct + $dataItem58_total_effct + $dataItem59_total_effct + $dataItem60_total_effct 
+ $dataItem61_total_effct + $dataItem62_total_effct + $dataItem63_total_effct + $dataItem64_total_effct + $dataItem65_total_effct + $dataItem66_total_effct + $dataItem67_total_effct + $dataItem68_total_effct + $dataItem69_total_effct + $dataItem70_total_effct 
+ $dataItem71_total_effct + $dataItem72_total_effct + $dataItem73_total_effct + $dataItem74_total_effct + $dataItem75_total_effct + $dataItem76_total_effct + $dataItem77_total_effct + $dataItem78_total_effct + $dataItem79_total_effct + $dataItem80_total_effct 
+ $dataItem81_total_effct + $dataItem82_total_effct + $dataItem83_total_effct + $dataItem84_total_effct + $dataItem85_total_effct + $dataItem86_total_effct + $dataItem87_total_effct + $dataItem88_total_effct + $dataItem89_total_effct + $dataItem90_total_effct 
+ $dataItem91_total_effct + $dataItem92_total_effct + $dataItem93_total_effct + $dataItem94_total_effct + $dataItem95_total_effct + $dataItem96_total_effct + $dataItem97_total_effct + $dataItem98_total_effct + $dataItem99_total_effct;
//echo($dataItem_total_effct);

// CSVに出力する配列
$data_title = array('フレーバー名', '総投票数', '有効投票数（ユーザー数）');
$data = array(
    array('itemname'=>'バターしょうゆ', 'dataItem_total'=>$dataItem01_total, 'dataItem_total_effct'=>$dataItem01_total_effct),
    array('itemname'=>'九州しょうゆ', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'チーズ', 'dataItem_total'=>$dataItem03_total, 'dataItem_total_effct'=>$dataItem03_total_effct),
    array('itemname'=>'塩キャラメル', 'dataItem_total'=>$dataItem04_total, 'dataItem_total_effct'=>$dataItem04_total_effct),
    array('itemname'=>'シュガーバター', 'dataItem_total'=>$dataItem05_total, 'dataItem_total_effct'=>$dataItem05_total_effct),
    array('itemname'=>'コンソメ', 'dataItem_total'=>$dataItem06_total, 'dataItem_total_effct'=>$dataItem06_total_effct),
    array('itemname'=>'BBQ', 'dataItem_total'=>$dataItem07_total, 'dataItem_total_effct'=>$dataItem07_total_effct),
    array('itemname'=>'うましお', 'dataItem_total'=>$dataItem08_total, 'dataItem_total_effct'=>$dataItem08_total_effct),
    array('itemname'=>'クラムチャウダー', 'dataItem_total'=>$dataItem09_total, 'dataItem_total_effct'=>$dataItem09_total_effct),
    array('itemname'=>'カレー', 'dataItem_total'=>$dataItem10_total, 'dataItem_total_effct'=>$dataItem10_total_effct),
    array('itemname'=>'みたらしだんご', 'dataItem_total'=>$dataItem11_total, 'dataItem_total_effct'=>$dataItem11_total_effct),
    array('itemname'=>'しあわせバター味', 'dataItem_total'=>$dataItem12_total, 'dataItem_total_effct'=>$dataItem12_total_effct),
    array('itemname'=>'おさつバター味', 'dataItem_total'=>$dataItem13_total, 'dataItem_total_effct'=>$dataItem13_total_effct),
    array('itemname'=>'カスタードクリーム味', 'dataItem_total'=>$dataItem14_total, 'dataItem_total_effct'=>$dataItem14_total_effct),
    array('itemname'=>'いちごミルク', 'dataItem_total'=>$dataItem15_total, 'dataItem_total_effct'=>$dataItem15_total_effct),
    array('itemname'=>'ココナッツシュガー', 'dataItem_total'=>$dataItem16_total, 'dataItem_total_effct'=>$dataItem16_total_effct),
    array('itemname'=>'はちみつレモン', 'dataItem_total'=>$dataItem17_total, 'dataItem_total_effct'=>$dataItem17_total_effct),
    array('itemname'=>'ヨーグルト', 'dataItem_total'=>$dataItem18_total, 'dataItem_total_effct'=>$dataItem18_total_effct),
    array('itemname'=>'てりやきマヨネーズ', 'dataItem_total'=>$dataItem19_total, 'dataItem_total_effct'=>$dataItem19_total_effct),
    array('itemname'=>'コーンポタージュ', 'dataItem_total'=>$dataItem20_total, 'dataItem_total_effct'=>$dataItem20_total_effct),
    array('itemname'=>'サワークリームオニオン', 'dataItem_total'=>$dataItem21_total, 'dataItem_total_effct'=>$dataItem21_total_effct),
    array('itemname'=>'焼きトウモロコシ', 'dataItem_total'=>$dataItem22_total, 'dataItem_total_effct'=>$dataItem22_total_effct),
    array('itemname'=>'オニオングラタンスープ', 'dataItem_total'=>$dataItem23_total, 'dataItem_total_effct'=>$dataItem23_total_effct),
    array('itemname'=>'きんぴらごぼう', 'dataItem_total'=>$dataItem24_total, 'dataItem_total_effct'=>$dataItem24_total_effct),
    array('itemname'=>'ポテトサラダ', 'dataItem_total'=>$dataItem25_total, 'dataItem_total_effct'=>$dataItem25_total_effct),
    array('itemname'=>'グラタン', 'dataItem_total'=>$dataItem26_total, 'dataItem_total_effct'=>$dataItem26_total_effct),
    array('itemname'=>'アンチョビ＆ガーリック', 'dataItem_total'=>$dataItem27_total, 'dataItem_total_effct'=>$dataItem27_total_effct),
    array('itemname'=>'ペッパー＆サラミ', 'dataItem_total'=>$dataItem28_total, 'dataItem_total_effct'=>$dataItem28_total_effct),
    array('itemname'=>'海老のアヒージョ', 'dataItem_total'=>$dataItem29_total, 'dataItem_total_effct'=>$dataItem29_total_effct),
    array('itemname'=>'ポルチーニ茸のクリームチーズ', 'dataItem_total'=>$dataItem30_total, 'dataItem_total_effct'=>$dataItem30_total_effct),
    array('itemname'=>'トリュフ＆チーズ', 'dataItem_total'=>$dataItem31_total, 'dataItem_total_effct'=>$dataItem31_total_effct),
    array('itemname'=>'フライドチキン', 'dataItem_total'=>$dataItem32_total, 'dataItem_total_effct'=>$dataItem32_total_effct),
    array('itemname'=>'わさび＆ビーフ', 'dataItem_total'=>$dataItem33_total, 'dataItem_total_effct'=>$dataItem33_total_effct),
    array('itemname'=>'Ｗペッパー（レッド＆ブラック）', 'dataItem_total'=>$dataItem34_total, 'dataItem_total_effct'=>$dataItem34_total_effct),
    array('itemname'=>'ガーリックバター', 'dataItem_total'=>$dataItem35_total, 'dataItem_total_effct'=>$dataItem35_total_effct),
    array('itemname'=>'のりしお', 'dataItem_total'=>$dataItem36_total, 'dataItem_total_effct'=>$dataItem36_total_effct),
    array('itemname'=>'わさびしょうゆ', 'dataItem_total'=>$dataItem37_total, 'dataItem_total_effct'=>$dataItem37_total_effct),
    array('itemname'=>'桜えび塩', 'dataItem_total'=>$dataItem38_total, 'dataItem_total_effct'=>$dataItem38_total_effct),
    array('itemname'=>'梅味', 'dataItem_total'=>$dataItem39_total, 'dataItem_total_effct'=>$dataItem39_total_effct),
    array('itemname'=>'ホットチリ味', 'dataItem_total'=>$dataItem40_total, 'dataItem_total_effct'=>$dataItem40_total_effct),
    array('itemname'=>'タコス味', 'dataItem_total'=>$dataItem41_total, 'dataItem_total_effct'=>$dataItem41_total_effct),
    array('itemname'=>'チーズ＆ハラペーニョ味', 'dataItem_total'=>$dataItem42_total, 'dataItem_total_effct'=>$dataItem42_total_effct),
    array('itemname'=>'えだまめ', 'dataItem_total'=>$dataItem43_total, 'dataItem_total_effct'=>$dataItem43_total_effct),
    array('itemname'=>'ハニーマスタード', 'dataItem_total'=>$dataItem44_total, 'dataItem_total_effct'=>$dataItem44_total_effct),
    array('itemname'=>'ソルト&ビネガー', 'dataItem_total'=>$dataItem45_total, 'dataItem_total_effct'=>$dataItem45_total_effct),
    array('itemname'=>'柚子胡椒', 'dataItem_total'=>$dataItem46_total, 'dataItem_total_effct'=>$dataItem46_total_effct),
    array('itemname'=>'ほたてバター', 'dataItem_total'=>$dataItem47_total, 'dataItem_total_effct'=>$dataItem47_total_effct),
    array('itemname'=>'馬刺し', 'dataItem_total'=>$dataItem48_total, 'dataItem_total_effct'=>$dataItem48_total_effct),
    array('itemname'=>'ブルーチーズ', 'dataItem_total'=>$dataItem49_total, 'dataItem_total_effct'=>$dataItem49_total_effct),
    array('itemname'=>'いかの塩辛', 'dataItem_total'=>$dataItem50_total, 'dataItem_total_effct'=>$dataItem50_total_effct),
    array('itemname'=>'濃厚チェダー＆カマンベール', 'dataItem_total'=>$dataItem51_total, 'dataItem_total_effct'=>$dataItem51_total_effct),
    array('itemname'=>'塩チョコ', 'dataItem_total'=>$dataItem52_total, 'dataItem_total_effct'=>$dataItem52_total_effct),
    array('itemname'=>'ペッパー＆塩レモン（瀬戸内レモン）', 'dataItem_total'=>$dataItem53_total, 'dataItem_total_effct'=>$dataItem53_total_effct),
    array('itemname'=>'メープル＆バター', 'dataItem_total'=>$dataItem54_total, 'dataItem_total_effct'=>$dataItem54_total_effct),
    array('itemname'=>'アップルシナモン', 'dataItem_total'=>$dataItem55_total, 'dataItem_total_effct'=>$dataItem55_total_effct),
    array('itemname'=>'アーモンドシュガー', 'dataItem_total'=>$dataItem56_total, 'dataItem_total_effct'=>$dataItem56_total_effct),
    array('itemname'=>'桜餅味', 'dataItem_total'=>$dataItem57_total, 'dataItem_total_effct'=>$dataItem57_total_effct),
    array('itemname'=>'黒蜜きな粉', 'dataItem_total'=>$dataItem58_total, 'dataItem_total_effct'=>$dataItem58_total_effct),
    array('itemname'=>'モンブラン', 'dataItem_total'=>$dataItem59_total, 'dataItem_total_effct'=>$dataItem59_total_effct),
    array('itemname'=>'キャラメル', 'dataItem_total'=>$dataItem60_total, 'dataItem_total_effct'=>$dataItem60_total_effct),
    array('itemname'=>'抹茶', 'dataItem_total'=>$dataItem61_total, 'dataItem_total_effct'=>$dataItem61_total_effct),
    array('itemname'=>'チョコ', 'dataItem_total'=>$dataItem62_total, 'dataItem_total_effct'=>$dataItem62_total_effct),
    array('itemname'=>'いちご', 'dataItem_total'=>$dataItem63_total, 'dataItem_total_effct'=>$dataItem63_total_effct),
    array('itemname'=>'バニラ', 'dataItem_total'=>$dataItem64_total, 'dataItem_total_effct'=>$dataItem64_total_effct),
    array('itemname'=>'マンゴー', 'dataItem_total'=>$dataItem65_total, 'dataItem_total_effct'=>$dataItem65_total_effct),
    array('itemname'=>'ロイヤルミルクティ－', 'dataItem_total'=>$dataItem66_total, 'dataItem_total_effct'=>$dataItem66_total_effct),
    array('itemname'=>'あんこ', 'dataItem_total'=>$dataItem67_total, 'dataItem_total_effct'=>$dataItem67_total_effct),
    array('itemname'=>'アボカドチーズ', 'dataItem_total'=>$dataItem68_total, 'dataItem_total_effct'=>$dataItem68_total_effct),
    array('itemname'=>'柚子&ジンジャー', 'dataItem_total'=>$dataItem69_total, 'dataItem_total_effct'=>$dataItem69_total_effct),
    array('itemname'=>'オリーブオイル＆ハーブソルト', 'dataItem_total'=>$dataItem70_total, 'dataItem_total_effct'=>$dataItem70_total_effct),
    array('itemname'=>'アーモンドチーズ', 'dataItem_total'=>$dataItem71_total, 'dataItem_total_effct'=>$dataItem71_total_effct),
    array('itemname'=>'セサミソルト', 'dataItem_total'=>$dataItem72_total, 'dataItem_total_effct'=>$dataItem72_total_effct),
    array('itemname'=>'トマト＆モッツァレラ', 'dataItem_total'=>$dataItem73_total, 'dataItem_total_effct'=>$dataItem73_total_effct),
    array('itemname'=>'バターチキンカレー', 'dataItem_total'=>$dataItem74_total, 'dataItem_total_effct'=>$dataItem74_total_effct),
    array('itemname'=>'パクチー', 'dataItem_total'=>$dataItem75_total, 'dataItem_total_effct'=>$dataItem75_total_effct),
    array('itemname'=>'豚キムチ', 'dataItem_total'=>$dataItem76_total, 'dataItem_total_effct'=>$dataItem76_total_effct),
    array('itemname'=>'ピザ', 'dataItem_total'=>$dataItem77_total, 'dataItem_total_effct'=>$dataItem77_total_effct),
    array('itemname'=>'クリームシチュー', 'dataItem_total'=>$dataItem78_total, 'dataItem_total_effct'=>$dataItem78_total_effct),
    array('itemname'=>'明太マヨネーズ', 'dataItem_total'=>$dataItem79_total, 'dataItem_total_effct'=>$dataItem79_total_effct),
    array('itemname'=>'ツナマヨ', 'dataItem_total'=>$dataItem80_total, 'dataItem_total_effct'=>$dataItem80_total_effct),
    array('itemname'=>'塩こんぶ', 'dataItem_total'=>$dataItem81_total, 'dataItem_total_effct'=>$dataItem81_total_effct),
    array('itemname'=>'ラムネ', 'dataItem_total'=>$dataItem82_total, 'dataItem_total_effct'=>$dataItem82_total_effct),
    array('itemname'=>'コーラ', 'dataItem_total'=>$dataItem83_total, 'dataItem_total_effct'=>$dataItem83_total_effct),
    array('itemname'=>'オレンジジュース', 'dataItem_total'=>$dataItem84_total, 'dataItem_total_effct'=>$dataItem84_total_effct),
    array('itemname'=>'甘酒', 'dataItem_total'=>$dataItem85_total, 'dataItem_total_effct'=>$dataItem85_total_effct),
    array('itemname'=>'コーヒー', 'dataItem_total'=>$dataItem86_total, 'dataItem_total_effct'=>$dataItem86_total_effct),
    array('itemname'=>'チョコミント', 'dataItem_total'=>$dataItem87_total, 'dataItem_total_effct'=>$dataItem87_total_effct),
    array('itemname'=>'ポン酢味', 'dataItem_total'=>$dataItem88_total, 'dataItem_total_effct'=>$dataItem88_total_effct),
    array('itemname'=>'チキン南蛮', 'dataItem_total'=>$dataItem89_total, 'dataItem_total_effct'=>$dataItem89_total_effct),
    array('itemname'=>'タコ焼き', 'dataItem_total'=>$dataItem90_total, 'dataItem_total_effct'=>$dataItem90_total_effct),
    array('itemname'=>'めんつゆ', 'dataItem_total'=>$dataItem91_total, 'dataItem_total_effct'=>$dataItem91_total_effct),
    array('itemname'=>'うなぎのかば焼き', 'dataItem_total'=>$dataItem92_total, 'dataItem_total_effct'=>$dataItem92_total_effct),
    array('itemname'=>'梅こぶ茶', 'dataItem_total'=>$dataItem93_total, 'dataItem_total_effct'=>$dataItem93_total_effct),
    array('itemname'=>'トムヤムクン', 'dataItem_total'=>$dataItem94_total, 'dataItem_total_effct'=>$dataItem94_total_effct),
    array('itemname'=>'ナポリタン', 'dataItem_total'=>$dataItem95_total, 'dataItem_total_effct'=>$dataItem95_total_effct),
    array('itemname'=>'ちりめん山椒', 'dataItem_total'=>$dataItem96_total, 'dataItem_total_effct'=>$dataItem96_total_effct),
    array('itemname'=>'ごま油', 'dataItem_total'=>$dataItem97_total, 'dataItem_total_effct'=>$dataItem97_total_effct),
    array('itemname'=>'とんこつしょうゆラーメン（旨玉）', 'dataItem_total'=>$dataItem98_total, 'dataItem_total_effct'=>$dataItem98_total_effct),
    array('itemname'=>'たまごかけごはん', 'dataItem_total'=>$dataItem99_total, 'dataItem_total_effct'=>$dataItem99_total_effct),
);
// タイトル設定
$csv = "";
foreach ($data_title as $i => $value) {
    //$value = mb_convert_encoding($value, 'sjis-win', 'utf-8');
    $csv .= ($i ? ',' : ''). $value;
}
$csv .= "\n"; // 改行コード

// コンテンツ設定
foreach ($data as $value) {
	//$value = mb_convert_variables('sjis-win', 'utf-8', $value);
	$csv .= $value['itemname']. ",". $value['dataItem_total']. ",". $value['dataItem_total_effct']. "\n";
}
	$csv .= "\n";
	$csv .= "TOTAL投票数". ",". $dataItem_total. ",". "\n";
	$csv .= "合計有効票数". ",". $dataItem_total_effct. "\n";

//echo($csv);
$csv = mb_convert_encoding ( $csv , "sjis-win" , 'utf-8' );
// CSVのHTTPヘッダ
header("Content-Type: application/octet-stream; charset=utf-8");
header("Content-Disposition: attachment; filename=grandprix2016.csv");
echo($csv);
include("dbClose.php");//DBクローズ
?>