<?php
echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt","a+");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];


fwrite($fp,"$nama|$alamat|$email|$status|$komentar\n"); fclose($fp);
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=tampilan.php> Isi Buku Tamu </a><br>"; echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
?>
