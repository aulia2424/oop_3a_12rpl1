<?php
/*
Operator Aritmatika
Operator aritmetika bekerja dengan nilai numerik untuk melakukan operasi aritmetika umum.contentImageExample:
Jalankan kode dan lihat cara kerjanya!
| operator | name           | example |
| +        | addition       | $x+$y   |
| -        | subtraction    | $x-$y   |
| *        | Multiplication | $x*$y   |
| /        | Division       | $x/$y   |
| %        | modulus        | $x%$y   |
*/
$num1 = 8;
$num2 = 6;

//Addition
echo "pertambahan" . "\n";
echo $num1 + $num2 ."\n"; 

//Subtraction
echo "pengurangan" . "\n";
echo $num1 - $num2  ."\n"; 

//Multiplication
echo "perkalian" . "\n";
echo $num1 * $num2  ."\n"; 

//Division
echo "pembagian" . "\n";
echo $num1 / $num2  ."\n"; 

//Modulus
echo "sisabagi" . "\n";
echo $num1 % $num2  ."\n"; 


/*
Modulus
Operator modulus, diwakili oleh tanda %, mengembalikan sisa pembagian operan pertama dengan operan kedua:
Jika Anda menggunakan angka floating point dengan operator modulus, angka tersebut akan diubah menjadi bilangan bulat sebelum operasi.
*/
$x = 14;
$y = 3;
echo $x % $y ."\n";


/*
Kenaikan & Penurunan (Increment & Decrement)
Operator kenaikan digunakan untuk menaikkan nilai variabel.
Operator pengurangan digunakan untuk mengurangi nilai variabel.
$x++; // setara dengan $x = $x+1;
$x--; // setara dengan $x = $x-1;
PHP
Operator kenaikan dan penurunan baik mendahului atau mengikuti variabel.
$x++; // pasca-kenaikan
$x--; // pasca-penurunan
++$x; // peningkatan awal
--$x; // pre-decrement
PHP
Perbedaannya adalah post-increment mengembalikan nilai asli sebelum mengubah variabel, sedangkan pre-increment mengubah variabel terlebih dahulu dan kemudian mengembalikan nilainya.
Contoh:
$a = 2; $b = $a++; // $a=3, $b=2
$a = 2; $b = ++$a; // $a=3, $b=3
PHP
Operator kenaikan digunakan untuk menaikkan nilai variabel.
*/
// menggunakan for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x \n";
  }
?>