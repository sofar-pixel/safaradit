<?php
  // Menangkapisivariabeldariform.php
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];

  // menyimpan nilai dan menuliskan serta menutup  txt
  $safar= "\n$nik|$nama";
  $buka=fopen("user.txt","a");
  $tulis=fwrite($buka,$safar);
  $tutup=fclose($buka);
 echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'login.php';
			</script>
		";




?>