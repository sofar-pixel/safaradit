<?php
require_once 'functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>
<html>
<head><title>Halaman masuk data </title>
	<style>
	body {background-color: #181515;}
.style1 {
	font-size: xx-large;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #A6590E;
}
.style2 {
	font-size: medium;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #640505;
}
.style3 {
	font-family: "Courier New", Courier, monospace;
	font-size: small;
}
.style4 {font-family: "Courier New", Courier, monospace}
.style5 {color: #FF66FF}
-->
	</style>
</head>
<body>
<table width="644" height="149" border="0" bordercolor="#181515" bgcolor="#181515">
  <tr>
    <td width="161" rowspan="3" bgcolor="#181515"><img src="1.png" width="158" height="111"></td>
    <td height="41" colspan="4" bgcolor="#181515"><h1 class="style1">PEDULI DIRI </h1></td>
  </tr>
  <tr>
    <td height="36" colspan="4" bordercolor="#F0F0F0" bgcolor="#181515"><h3 class="style2">APLIKASI PERJALANAN ANDA </h3></td>
  </tr>
  <tr>
    <td width="63" height="23" bgcolor="#181515"><h4><a href="index.php" class="style3">home</a></h4></td>
    <td width="203" bgcolor="#181515"><h4><a href="index.php"></a> <a href="tampil.php" class="style4">catatan perjalanan</a></h4></td>
    <td width="92" bgcolor="#181515"><h4><a href="input.php" class="style3">isi data</a></h4></td>
    <td width="103" bgcolor="#181515"><h4><a href="input.php"></a> <a href="logout.php" class="style3">keluar</a></h4></td>
  </tr>
</table>
<h1>&nbsp;</h1>
<center>
<form name="form1" method="post" action="proses.php">
	<table>

		<h1 class="style5">masukan data perjalanan</h1>
		<tr>
		<td colspan="2"><h3 class="style5">PEDULI DIRI-INPUT JOURNEY</h3></td>
</tr>
<tr>
		<td width="250"><span class="style5">TANGGAL</span></td>
        <td width="530"><input size="40" name="tanggal" type="date" id="TANGGAL"></td>
      </tr>
      <tr>
		<td width="250"><span class="style5">WAKTU</span></td>
        <td width="530"><input size="40" name="waktu" type="time" id="WAKTU"></td>
      </tr>
     <tr>
		<td width="250"><span class="style5">LOKASI</span></td>
        <td width="530"><input size="40" name="lokasi" type="text" id="LOKASI"></td>
      </tr>
      <tr>
		<td width="250"><span class="style5">SUHU TUBUH</span></td>
        <td width="530"><input size="40" name="suhu" type="text" id="SUHU TUBUH"></td>
    </tr>
    <tr>
         <td><input name="Submit" type="submit" value="Simpan"></td>
     </tr>






	</table>
</form>
</center>










</body>
</html>