<?php
/*
Array Multi Dimensi
Array multidimensi berisi satu atau lebih array.

Dimensi array menunjukkan jumlah indeks yang Anda perlukan untuk memilih elemen.
- Untuk array dua dimensi, Anda memerlukan dua indeks untuk memilih elemen
- Untuk array tiga dimensi, Anda memerlukan tiga indeks untuk memilih elemen
Array dengan kedalaman lebih dari tiga level sulit dikelola.

Mari buat array dua dimensi yang berisi 3 array:
$orang = lari(
   'online'=>array('David', 'Amy'),
   'offline'=>array('John', 'Rob', 'Jack'),
   'pergi'=>array('Arthur', 'Daniel')
);
PHP
Sekarang larik $people dua dimensi berisi 3 larik, dan memiliki dua indeks: baris dan kolom.
Untuk mengakses elemen array $people, kita harus menunjuk ke dua indeks.
Array dalam array multidimensi dapat berupa numerik dan asosiatif.
*/
$people = array(
    'online'=>array('David', 'Amy'),
    'offline'=>array('John', 'Rob', 'Jack'),
    'away'=>array('Arthur', 'Daniel')
 );
 
 echo $people['online'][0] ."\n";
 echo $people['away'][1];
?>