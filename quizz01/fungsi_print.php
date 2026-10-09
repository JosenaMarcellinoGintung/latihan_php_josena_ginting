/* Cara menampilkan teks pada PHP
Menampilkan teks pada PHP dapat dilakukan melalui 3 fungsi yaitu
fungsi echo(),
fungsi print(),
dan fungsi printf().
Lalu, apa perbedaan pada ketiga fungsi tersebut dan apa saja kegunaannya?
LETS TRY!
*/

<!-- Fungsi echo -->
<?php
echo "<h1> Mari Belajar PHP di Politeknik Bisnis Indonesia</h1>";
echo "Hello Dunia!!...<br>";
echo "Ini adalah contoh tulisan<br>";
echo "Ini ", "contoh ", "teks ", "yang ", "terpisah.";
?>

<!-- Fungsi printf -->
<?php
print "<h2>Ini adalah contoh mencetak Teks</h2>";
print ("Contoh mencetak teks 1");
print ("Contoh mencetak teks 2");
?>

<!-- Fungsi printf -->
<?php
$var1=123456789;
$var2=-123456789;
$var3=50; //untuk ascii, ascii 50 adalah 2;

printf("%s = s <br>", $var1); //berubah menjadi string
printf("%d = d <br>", $var1); //berubah jadi bilangan desimal
printf("%d = d <br>", $var2); //berubah jadi bilangan desimal
printf("%f = f <br>", $var1); //berubah menjadi bilangan pecahan
printf("%b = b <br>", $var1); //berubah menjadi boolean (bilangan biner)
printf("%c = c <br>", $var3); //merubah ascii menjadi teks
?>

