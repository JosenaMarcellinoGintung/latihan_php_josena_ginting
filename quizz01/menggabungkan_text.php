<!--
fungsi echo bisa menampilkan satu atau lebih variabel teks dalam satu perintah,
dengan dipisah oleh coma (,),
Contoh :
-->
<?php
echo "<p>Fungsi echo bisa menampilkan satu atau lebih variabel teks dalam satu perintah, dengan dipisah oleh coma (,),</p>";

echo "Contoh 1 </br>";
echo "ini ","adalah ","teks "," terpisah.";
echo "</br></br></br></br>";

// menggunakan titik sebagai pemisah format variabel yang akan dimasukan
echo "Contoh 2 </br>";
$teks = "teks terpisah.";
echo "ini "."adalah ".$teks;

echo "<h1> Aku Bangga Belajar PHP di Politeknik Bisnis Indonesia</h1>";
echo "1" + "1"; // hasilnya akan menjadi 2
echo "2" - "1"; // hasilnya akan menjadi 1
echo "2" * "2"; // hasilnya akan menjadi 4
echo "2" / "2"; // hasilnya akan menjadi 1
echo "1" . "1"; // hasilnya akan menjadi 11
?>

<!-- Kesimpulan
Dari tiga cara menampilkan teks diatas, yang paling sering digunakan adalah echo
karena fungsinya yang lebih reliable dan dapat digunakan dalam segala kondisi
serta dapat digunakan untuk penghitungan matematika.

Selain itu, printf terkadang digunakan untuk lebih memudahkan penggantian format teks
dari sebuah variabel, tanpa harus parsing(penyesuaian format) terlebih dahulu. -->
