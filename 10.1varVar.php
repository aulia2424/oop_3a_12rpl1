<?php
/*
Variabel Variabel
Dengan PHP, Anda dapat menggunakan satu variabel untuk menentukan nama variabel lain.
Jadi, variabel variabel memperlakukan nilai variabel lain sebagai namanya.

Sebagai contoh:
$$a adalah variabel yang menggunakan nilai variabel lain, $a, sebagai namanya. Nilai $a sama dengan "hello". Variabel yang dihasilkan adalah $halo, yang menyimpan nilai "Hai!".
*/
$a = 'hello';
$hello = "Hi!";
echo $$a;
?>