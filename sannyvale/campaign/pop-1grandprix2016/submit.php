<?php
include("connect.php");

//フォームより値を受け取る
$itemname = mb_convert_encoding(htmlspecialchars($_POST["itemname"], ENT_QUOTES), "UTF-8","AUTO");
//SQLインジェクションの防御
if (get_magic_quotes_gpc()){//PHPの設定を確認(マジッククオートが無効か確認)
$itemname = stripslashes($itemname);//文字列をアンエスケープ
}
//'を無害化※MySQLの文字をエスケープ
$itemname = mysql_real_escape_string($itemname);
//現在の日時を取得
$now = date( "Y-m-d H:i:s", time());
//ユーザーエージェントを取得
//$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_agent = $_SERVER["REMOTE_ADDR"] ;

//DBへの書き込み
$sql = 'INSERT INTO grandprix2016 (itemname, useragent, ins_date) VALUES("'.$itemname.'","'.$user_agent.'","'.$now.'")';
$recordSet = mysql_query($sql);
if (!$recordSet) {
	//INSERT失敗
	echo (mysql_error());
//	header("Location: ./");
//	exit();
	//echo($sql);

}else{
	//INSERT成功
//	header("Location: ./index.shtml");
//	exit();
}

include("dbClose.php");//DBクローズ
header("Location: ./index.shtml#complete");
exit();
?>

