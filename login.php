<?php
require_once 'functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
<!--
  body {background-color: #181515;}
.style1 {color: #FF00FF}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style3 {color: #FF00FF; font-family: Geneva, Arial, Helvetica, sans-serif; }
-->
    </style>
</head>
<body>
<section class="loginform cf">
    <form name="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="284" align="center">
  <tr>
    <td colspan="2"><div align="center">
      <h1 class="style1 style2">Peduli Diri-Login</h1>
    </div></td>
    </tr>
  <tr>
    <td width="90"><label for="NIK"><span class="style3">NIK</span></label>      </td>
    <td width="178"><input type="username" name="nik" placeholder="nomor nik" required></td>
  </tr>
  <tr>
    <td><span class="style3">NAMA</span></td>
    <td><input type="username" name="nama" placeholder="nama lengkap anda" required></td>
  </tr>
</table>
<label for="NIK"></label>
<label for="NAMA"></label>
        <div align="center">
          <p>
            <input type="submit" value="Login">
          </p>
          <p><div class="button">
            <button>
            <div align="center"><a href="register.php">Pengguna Baru</a></div>
            </button>
</p>
      </div>
          
    </form>
</section>
</body>
</html>