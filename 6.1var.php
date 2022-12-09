<?php
/*
Variabel digunakan sebagai "wadah" tempat kami menyimpan informasi.
Variabel PHP dimulai dengan tanda dolar ($), yang diikuti dengan nama variabel.
$nama_variabel = nilai;
PHP
Aturan untuk variabel PHP:
- Nama variabel harus dimulai dengan huruf atau garis bawah
- Nama variabel tidak boleh dimulai dengan angka
- Nama variabel hanya boleh berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ )
- Nama variabel peka huruf besar kecil ($nama dan $NAME akan menjadi dua variabel yang berbeda)

Sebagai contoh:
Pada contoh di atas, perhatikan bahwa kita tidak perlu memberi tahu PHP tipe data mana dari variabel tersebut.
PHP secara otomatis mengonversi variabel ke tipe data yang benar, tergantung nilainya.
Tidak seperti bahasa pemrograman lainnya, PHP tidak memiliki perintah untuk mendeklarasikan variabel. Itu dibuat saat Anda pertama kali memberikan nilai padanya.
*/
// menghitung luas lingkaran
$r = 21;
$t = 20;
define("phi",3.14);
$luas = phi * pow($r, 2) * $t;
echo 'luas lingkaran = ' .round($luas);



?>