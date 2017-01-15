<?php
//*********************************************
//データベースにコネクト
	$hostnm = "localhost";
	//$hostnm = "mysql536.in.shared-server.net:41495";
	
	$userid = "root";
	//$userid = "KVMBVzzcwN519";
	
	$passwd = "";
	//$passwd = "friTo2014";

/* ##### MYSQL #####
ObjectDriver DBI::mysql
Database dgbFfuSXRd809
DBUser dgbFfuSXRd809
DBPassword friTo2014
DBHost mysql524.in.shared-server.net
DBPort 23572
*/


	$con = mysql_connect($hostnm, $userid, $passwd);
	//*****************************************
	//データベースにコネクト
	$dbnm = "fritolay";//データベース名
	//$dbnm = "KVMBVzzcwN519";//データベース名

	$db = mysql_select_db($dbnm, $con);
	
	//*****************************************

	//*****************************************
	//データベースの選択
	$db_selected = $db;
	
	if (!$db_selected){
		exit('db select err'.mysql_error());
	}else{
		//print($dbnm.'データベースを選択しました。<br>');
	}
//*********************************************
mysql_query('SET NAMES utf8');

	/*
	$dbHOST = "www.fritolay.co.jp";
	$dbUSER = "friftpusr";
	$dbPASS = "friTo2014";
	$dbNAME = "dgbFfuSXRd809";
	
	$conn=mysql_connect("$dbHOST","$dbUSER","$dbPASS"); mysql_select_db("$dbNAME",$conn);
	*/

?>
