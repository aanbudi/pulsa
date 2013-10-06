<?
include "config.php";
$name = $_POST["nama"];
$status = $_POST["status"];
$userid = $_POST["userid"];

$conn = mysql_connect($host, $user, $pass);
mysql_select_db($database, $conn);
//		mysql_query("UPDATE into radcheck (Name,Number,GroupID) VALUES ('$name','$hp','$groupid' )");
mysql_query("UPDATE radcheck set jenisvocer='$status' where id='$userid'") or die('Error, query failed');

echo ("Editing Berhasil!!!");
$timestamp= time();
$timestamp=date("d F Y H:i:s",$timestamp);
mysql_select_db(kalkun,$conn);
mysql_query("INSERT INTO outbox (DestinationNumber,TextDecoded) VALUES ('+6281804133862','voucher dengan ID $name sudah diset menjadi $status pada $timestamp')") or die ('kirim sms salah');


?>	
<a href=index.php>Back</a>