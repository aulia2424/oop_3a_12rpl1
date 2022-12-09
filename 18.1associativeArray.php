<?php
/*
Array asosiatif
Array asosiatif adalah array yang menggunakan kunci bernama yang Anda tetapkan untuknya.
Ada dua cara untuk membuat array asosiatif:
$orang = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// atau
$orang['David'] = "27";
$orang['Amy'] = "21";
$orang['Joni'] = "42";
PHP
Pada contoh pertama, perhatikan penggunaan tanda => dalam menetapkan nilai ke kunci bernama.
*/
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42"); //ini array associative
echo $people['Amy'] ."\n";

$orang = array("Nama" => "aulia", "Kelas" => "12", "Jurusan" => "rpl");
echo $orang["Nama"];
?>