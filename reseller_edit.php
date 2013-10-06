<?php
include "config.php";
$userid = $_GET["id"];
$conn = mysql_connect($host,$user,$pass);
mysql_select_db($database);

$sql = "select Username,jenisvocer from radcheck where attribute='Expiration' and id=$userid";
$result = mysql_query($sql, $conn);
$row = mysql_fetch_array($result);
$user = $row[0];
$status = $row[1];
//$id = $row[3];
?>
<table>	
<form method=post action=phone_save.php>
<input type=hidden name="userid" value="<?php echo $userid; ?>">
<tr>
<td>ID Voucher</td><td><input type=text name=nama value="<? echo $user;?>"></td>
<tr>
<td>Status</td><td>
 <select name=status>
<option value="<? echo $status; ?>" selected>	<? echo $status; ?>
		  <option value="belumbayar"> belumbayar
		  <option value="lunas"> lunas
		  </option>

</td>



<td>
<input type=submit name=changepasswd value="Save">
<tr>
</form>



