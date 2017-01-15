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

/* TOTAL投票数 */
$dataItem_total = $dataItem01_total + $dataItem02_total;
//echo($dataItem_total);

/* 合計有効投票数（ユーザ数） */
$dataItem_total_effct = $dataItem01_total_effct + $dataItem02_total_effct;
//echo($dataItem_total_effct);

// CSVに出力する配列
$data_title = array('フレーバー名', '総投票数', '有効投票数（ユーザー数）');
$data = array(
    array('itemname'=>'フレーバー1', 'dataItem_total'=>$dataItem01_total, 'dataItem_total_effct'=>$dataItem01_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),
    array('itemname'=>'フレーバー2', 'dataItem_total'=>$dataItem02_total, 'dataItem_total_effct'=>$dataItem02_total_effct),

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

// CSVのHTTPヘッダ
header("Content-Type: application/octet-stream; charset=utf-8");
header("Content-Disposition: attachment; filename=grandprix2016.csv");

include("dbClose.php");//DBクローズ
?>