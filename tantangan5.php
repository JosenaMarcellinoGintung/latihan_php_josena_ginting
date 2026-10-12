<?php
$nama = "Josena Marcellino Ginting";
$kelas = "D-III";
$jurusan = "Komputerisasi Akuntansi";
$umur = 20;
$nilai = 95;

echo "================================<br>";
echo "        KARTU PROFIL SISWA<br>";
echo "================================<br>";

printf("Nama       : %s<br>", $nama);
printf("Kelas      : %s<br>", $kelas);
printf("Jurusan    : %s<br>", $jurusan);
printf("Umur       : %d tahun<br>", $umur);
printf("Nilai      : %.2f<br>", $nilai);

echo "================================<br>";

$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";
printf("Status     : %s", $status);
?>