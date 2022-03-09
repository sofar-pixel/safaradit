<?php
  // Menangkapisivariabeldariform.php
  $tanggal = $_POST['tanggal'];
  $waktu = $_POST['waktu'];
  $lokasi = $_POST['lokasi'];
  $suhu = $_POST['suhu'];

  // menyimpan nilai dan menuliskan serta menutup  txt
  $safar= "\n $tanggal|$waktu|$lokasi|$suhu";
  $buka=fopen("data.txt","a");
  $tulis=fwrite($buka,$safar);
  $tutup=fclose($buka);
 echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'tampil.php';
			</script>
		";




?>