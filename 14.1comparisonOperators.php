<?php
/*
Operator Perbandingan (Comparison Operators)
Operator perbandingan membandingkan dua nilai (angka atau string).
Operator perbandingan digunakan di dalam pernyataan bersyarat, dan dievaluasi menjadi TRUE atau FALSE.contentImage
Hati-hati menggunakan == dan === ; yang pertama tidak memeriksa jenis data.

| Nama Operator | Contoh                                     | Hasil            | 
| ==            | Sama dengan $x == $y                       | Mengembalikan nilai true jika $x sama dengan $y
| ===           | Identik $x === $y                          | Mengembalikan true jika $x sama dengan $y, dan tipenya sama
| !=            | Tidak sama dengan $x != $y                 | Mengembalikan nilai true jika $x tidak sama dengan $y
| <>            | Tidak sama dengan $x <> $y                 | Mengembalikan nilai true jika $x tidak sama dengan $y
| !==           | Tidak identik $x !== $y                    | Mengembalikan nilai true jika $x tidak sama dengan $y, atau tidak bertipe sama
| >             | Lebih besar dari $x > $y                   | Mengembalikan nilai true jika $x lebih besar dari $y
| <             | Kurang dari $x < $y                        | Mengembalikan nilai true jika $x lebih kecil dari $y
| >=            | Lebih besar dari atau sama dengan $x >= $y | Mengembalikan nilai true jika $x lebih besar atau sama dengan $y
| <=            | Kurang dari atau sama dengan $x <= $y      | Mengembalikan nilai true jika $x kurang dari atau sama dengan $y
| <=>           | Spaceship $x <=> $y                        | Mengembalikan bilangan bulat kurang dari, sama dengan, atau lebih besar dari nol, tergantung pada apakah $x kurang dari, sama dengan, atau lebih besar dari $y. Diperkenalkan dalam PHP 7.
*/
$num1 = 12;
$num2 = 11;
if ($num1 > $num2) {
    echo "data ke1 lebih besar daripada data ke2";
} else if ($num1<$num2) {
    echo "data ke2 lebih besar daripada data ke1";
}

?>