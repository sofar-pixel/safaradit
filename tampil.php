<?php
require_once 'functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>
<html>
<head><title>Halaman tampil data </title>
<style type="text/css">
<!--

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
.style6 {color: #FF66FF}
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
<li></li>
 <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);


  $i=1;

  foreach($rows as $row => $data)
  {

    // Memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
    $row_data = explode('|', $data);

    $info[$row]['tanggal']           = $row_data[0];
    $info[$row]['waktu']         = $row_data[1];
    $info[$row]['lokasi']      = $row_data[2];
    $info[$row]['suhu']         = $row_data[3];

    // Menampilkan Data

  }
?>
          </p></td>
      </tr>
    </table></td>
  </tr>
</table>
<h2>&nbsp;</h2>
<section class="lo"><center>
	<form action="cari.php" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
</form>
  <table border="1" cellpadding="5" cellspacing="0" bordercolor="#A6590E">
  	<tr>
    <th><span class="style6">TANGGAL <a href="urut.php">^</a> | <a href="urut2.php">\</a></span></th>
    <th><span class="style6">WAKTU <a href="urut.php">^</a> | </span><a href="urut2.php">\</a></th>
    <th><span class="style6">LOKASI</span></th>
    <th><span class="style6">SUHU<a href="urut.php">^</a> | <a href="urut2.php">\</a></span></th>
</tr>
<?php $i = 1; ?>
	<?php foreach($rows as $row => $data) { ?>
<tr>
   <td class="style6"><?=$info[$row]['tanggal']; ?></td>
   <td class="style6"><?=$info[$row]['waktu']; ?></td>
   <td class="style6"><?=$info[$row]['lokasi']; ?></td>
   <td class="style6"><?=$info[$row]['suhu']; ?></td>

</tr>
	<?php $i++; ?>
	<?php } ?>
</table>










  <div align="right"><a href="input.php"><img src="fococlipping-20220304-14628.png" width="52" height="52" border="0"></a>
  </div>
</body>
</html>