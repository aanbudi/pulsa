<HTML>
<HEAD>
<TITLE>Client ISP INTERSAT</TITLE>
</HEAD>
<table width="150%" border="0">
  <tr><!-- Row 1 -->
      <td width=500 nowarp="">
      <table border=1 bordercolordark=#ffffe0 bordercolorlight=#000000 cellpadding=2 cellspacing=0 bgcolor='#ffffe0' valign="top">

<form method=post action=search.php>

<form method=post action=search.php>
<tr>
<td>Nama Reseller</td><td>
                <select name=ecolink>
                                <option value="" selected>--Nama Reseller---
                                <?
                                include "config.php";
                                $conn = mysql_connect($host, $user, $pass);
                                mysql_select_db("kalkun", $conn);
                                $sqlz = "SELECT * FROM reseller order by id";
                                $conn = mysql_connect($host, $user, $pass);
                                $resultz = mysql_query($sqlz, $conn);
                                while ($row = mysql_fetch_array($resultz)){

                                $nama = $row["nama"];

                                                                $telepon = $row["phone"];

                                echo "<option value=$telepon>$nama\n";

                                }
                                ?>
                                </option>
                                </select>

                                </td>
                                                <tr>

<td><input type=submit name=changepasswd value="Search User">
</form>
</table>

<?
include "config.php";
$ecolink = $_POST["ecolink"];
$conn = mysql_connect($host, $user, $pass);
mysql_select_db($database, $conn);
$sql = "select Username,harga,jenisvocer,id,userid,ecolinkid,harga,mydate,mytime from radcheck where Attribute='Expiration' and userid=$ecolink order by jenisvocer";	
$result = mysql_query($sql, $conn);
print "<table border=1 bordercolordark=#ffffe0 bordercolorlight=#000000 cellpadding=2 cellspacing=0 bgcolor='#ffffe0' valign=top>\n";

echo "<tr bgcolor='#d0ddb0'>";
echo "<td><b>ID Voucher</b></td>";
echo "<td><b>Nomer Reseller</b></td>";
echo "<td><b>Nomer Penerima</b></td>";
echo "<td><b>Tanggal Pemesanan</b></td>";
echo "<td><b>Harga</b></td>";
echo "<td><b>Status</b></td>";
//echo "<td><center><b>Group</b></center></td>";
//echo "<td><center><b>Action</b></center></td>";

echo "</tr>";
while ($row = mysql_fetch_array($result)){
$user = $row[0];
$harga = $row[1];
$status = $row[2];
$id = $row[3];
$hp = $row[4];
$penerima = $row[5];
$harga = $row[6];
$tanggal = $row[7];
$jam = $row[8];

echo "<tr>";
echo "<td><a href=http://radius.wintersat.com/user_info.php3?login=$user>$user</a></td>";
echo "<td>$hp</td>";
echo "<td>$penerima</td>";
echo "<td>$tanggal $jam</td>";
echo "<td>$harga</td>";
echo "<td><a href='reseller_edit.php?id=$id'>$status</a></td>";

}

?>




</font>
</BODY>
</HTML>