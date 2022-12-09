<?php
/*
Array 
Array adalah variabel khusus, yang dapat menampung lebih dari satu nilai sekaligus.
Jika Anda memiliki daftar item (daftar nama, misalnya), menyimpannya dalam satu variabel akan terlihat seperti ini:
$nama1 = "David";
$nama2 = "Ami";
$nama3 = "Yohanes";
PHP
Tetapi bagaimana jika Anda memiliki 100 nama di daftar Anda? Solusinya: Buat array!

Array Numerik

Array numerik atau terindeks mengaitkan indeks numerik dengan nilainya.
Indeks dapat ditetapkan secara otomatis (indeks selalu dimulai dari 0), seperti ini:
$nama = array("David", "Amy", "John");
PHP
Sebagai alternatif, Anda dapat menetapkan indeks secara manual.
$nama[0] = "David";
$nama[1] = "Ami";
$nama[2] = "Yohanes";
PHP
Kami mendefinisikan sebuah array bernama $names yang menyimpan tiga nilai.
Anda dapat mengakses elemen array melalui indeksnya.
Ingatlah bahwa elemen pertama dalam array memiliki indeks 0, bukan 1.
*/
$nama1 = "David";
$nama2 = "Ami";
$nama3 = "Yohanes";
echo $nama1 . "\n", $nama2 . "\n", $nama3 . "\n";

$myArray[0] = "John";
$myArray[1] = 17;
$myArray[2] = 21;

echo "$myArray[0] is $myArray[2] and me $myArray[1]";

?>