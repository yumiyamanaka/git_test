<?php
phpinfo(); 
?> 

<?php

echo("あああああ");

$dbHOST = "localhost";
$dbUSER = "root";
$dbPASS = "";
$dbPORT = "";
$dbNAME = "fritolay";

//$conn=mysql_connect("$dbHOST","$dbUSER","$dbPASS"); mysql_select_db("$dbNAME",$conn);

//$conn = pg_connect("host=$dbHOST port=$dbPORT dbname=$dbNAME user=$dbUSER password=$dbPASS");

$conn = mysql_connect("[mysql536.in.shared-server.net]:[/tmp/mysql.sock]","[KVMBVzzcwN519]","[friTo2014]");


/*
mysql_connect('www.fritolay.co.jp', 'friftpusr@fritolay.co.jp', 'friTo2014') or die(mysql_error());
mysql_select_db('dgbFfuSXRd809');
mysql_query('SET NAMES UTF8');
*/

//*********************************************
//データベースにコネクト
/*
	//$hostnm = "localhost";
	$hostnm = 'www.fritolay.co.jp';
	
	//$userid = "root";
	$userid = 'KVMBVzzcwN519';
	
	//$passwd = "";
	$passwd = 'friTo2014';
	
	//$driver = 'mysql';
	
	$con = mysql_connect($hostnm, $userid, $passwd);
	//*****************************************
	//データベースにコネクト
	//$dbnm = "fritolay";//データベース名
	$dbnm = "KVMBVzzcwN519";//データベース名

	$db = mysql_select_db($dbnm, $con);
	
	//*****************************************

	//*****************************************
	//データベースの選択
	$db_selected = $db;
	
	if (!$db_selected){
		exit('111'.mysql_error());
	}else{
		print($dbnm.'データベースを選択しました。<br>');
	}
//*********************************************
mysql_query('SET NAMES utf8');

	/*
	$dbHOST = "localhost";
	$dbUSER = "root";
	$dbPASS = "";
	$dbNAME = "fritolay";
	*/
	
	/*	
	$dbHOST = "localhost";
	$dbUSER = "root";
	$dbPASS = "";
	$dbNAME = "fritolay";
		
	$conn=mysql_connect("$dbHOST","$dbUSER","$dbPASS"); mysql_select_db("$dbNAME",$conn);
	*/

/*
$link = mysql_connect('www.fritolay.co.jp', 'dgbFfuSXRd809', 'friTo2014');
if (!$link) {
    die('Not connected : ' . mysql_error());
}
*/

?>
