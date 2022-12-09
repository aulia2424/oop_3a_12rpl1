<?php 
/*
Tipe Data
Variabel dapat menyimpan berbagai tipe data.
Tipe data yang didukung oleh PHP: String, Integer, Float, Boolean, Array, Object, NULL, Resource.

Tali PHP
String adalah rangkaian karakter, seperti "Halo dunia!"
String dapat berupa teks apa pun dalam kumpulan tanda kutip tunggal atau ganda.
<?php
  $string1 = "Halo dunia!"; // tanda kutip ganda
  $string2 = 'Halo dunia!'; // tanda kutip tunggal
?>
PHP
Anda dapat menggabungkan dua string menggunakan operator penggabungan titik ( .).
Misalnya: gema $s1 . $s2

bilangan bulat PHP

Bilangan bulat adalah bilangan bulat (tanpa desimal) yang harus sesuai dengan kriteria berikut:
- Tidak boleh berisi koma atau kosong
- Tidak boleh titik desimal
- Itu bisa positif atau negatif
<?php
  $int1 = 42; // nomor positif
  $int2 = -42; // angka negatif
?>
PHP
Variabel dapat menyimpan berbagai tipe data.
*/

/*
PHP mengambang


Angka mengambang, atau angka titik mengambang, adalah angka yang menyertakan titik desimal.
<?php
  $x = 42.168;
?>
PHP
Boolean PHP


Boolean mewakili dua status yang mungkin: BENAR atau SALAH.
<?php
  $x = benar; $y = salah;
?>
PHP
Boolean sering digunakan dalam pengujian bersyarat, yang akan dibahas nanti dalam kursus.
Sebagian besar tipe data dapat digunakan dalam kombinasi satu sama lain. Dalam contoh ini, string dan integer disatukan untuk menentukan jumlah dari dua angka.
PHP secara otomatis mengubah setiap variabel menjadi tipe data yang benar, sesuai dengan nilainya. Inilah mengapa variabel $str diperlakukan sebagai angka tambahan.
*/
$ageA = 20;
$ageB = 14;
$penggabunganAge = $ageA+$ageB;
echo 'jika umur mereka di gabungkan hasilnya adalah: ' .$penggabunganAge
?>