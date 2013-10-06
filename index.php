<HTML>
<HEAD>
<TITLE>Client ISP INTERSAT</TITLE>
</HEAD>
<table width="150%" border="0">
  <tr><!-- Row 1 -->
      <td width=500 nowarp="">
      <table border=1 bordercolordark=#ffffe0 bordercolorlight=#000000 cellpadding=2 cellspacing=0 bgcolor='#ffffe0' valign="top">

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

    



</font>
</BODY>
</HTML>