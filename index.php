<?php
require_once 'functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>
<html>
<head><title>Halaman utama </title>
	<style>body {background-color: #181515;}
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
--></style>
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
 </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="282" height="81" align="center">
  <tr>
    <td height="75"><div align="center">
      <?php
        if (!isset($_SESSION['is_auth'])) :
            echo '<b>login Required! you will redirect to login page</b>';
            header("refresh:3; url=login.php");
            die;
        else:
            $r = '<b class="style1">' . 'Selamat Datang ' . $_SESSION['nama'] . ' Di Peduli Diri  </b>';
            $r .= '
<form action="logout.php" method="post" accept-charset="utf-8">
            <input type="submit" value="Click here for logout">
        </form>';
        
            echo $r;
        endif;
        ?>
    </div></td>
  </tr>
</table>
<h1 align="left">&nbsp;</h1>
<h4>
  <section class="loginform cf"></section>
</h4>
<section class="login1form cf"><center>
<br>
    </center>
</section>










</body>
</html>