<?php 
/*
Lingkup Variabel (VARIABLE SCOPE)
Variabel PHP dapat dideklarasikan di mana saja dalam skrip.
Ruang lingkup variabel adalah bagian dari skrip di mana variabel dapat dirujuk atau digunakan.

Cakupan variabel PHP yang paling banyak digunakan adalah lokal, global.
Variabel yang dideklarasikan di luar fungsi memiliki cakupan global.
Variabel yang dideklarasikan dalam suatu fungsi memiliki cakupan lokal, dan hanya dapat diakses dalam fungsi tersebut.

Perhatikan contoh berikut.
Skrip ini akan menghasilkan kesalahan, karena variabel $name memiliki cakupan global, dan tidak dapat diakses dalam fungsi getName(). Ketuk lanjutkan untuk melihat bagaimana fungsi dapat mengakses variabel global.
Fungsi akan dibahas dalam pelajaran mendatang.
*/
$nama = 'aulia'; //global scope
function nama() { //local scope
    echo 'AULIA ';
}
nama(); 
echo $nama // yang di print adalah variable yang berada di global scope
?>