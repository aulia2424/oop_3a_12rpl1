<?php
/*
Operator Logika (Logical Operators)
Operator logis digunakan untuk menggabungkan pernyataan kondisional.contentImage
Anda dapat menggabungkan istilah sebanyak yang Anda inginkan. Gunakan tanda kurung () untuk diutamakan.
Sama seperti Bahasa lainnya, dalam pembuatan system tentu diperlukan yang Namanya logika, dalam PHP sendiri memiliki operator logika yang digunakan untuk mengoperasikan dua buah operand yang bertipe Boolean. Operator logika dapat berupa AND, OR, dan NOT. Berikut tabel yang menunjukkan operator logika di PHP.
| operator | keterangan |
| && | logika AND(dan) |
| || | logika OR(atau) |
| ! | logika NOT(bukan) |
| and | logika AND sama seperti && |
| or | logika OR sama seperti || |
| xor | logika XOR(exclusive OR) || |

NOTES:
Operator && dan and akan menghasilkan nilai true jika kedua operand bernilai true. Selain kondisi itu, operator ini akan menghasilkan nilai false.
Operator || dan or akan menghasilkan nilai false jika kedua operand bernilai false. Selain kondisi tersebut, operator ini akan menghasilkan nilai true.
Operator ! digunakan untuk melakukan negasi terhadap suatu nilai Boolean, operator ini hanya memiliki sebuah operand. Jika operand bernilai true, maka operator ini akan menghasilkan false dan sebaliknya.
Operator xor hanya akan menghasilkan nilai true jika salah satu operand-nya bernilai true, jika keduanya bernilai true maka operasi XOR akan menghasilkan nilai false.
Kalau masih bingung kalian bisa cari di google dengan keyword tabel kebenaran atau coba lihat kode yang dibuat menggunakan operator logika berikut.
*/
echo "Operasi AND \n";
echo "1 && 1 :".(true && true)."\n";
echo "1 && 0 :".(true && false)."\n";
echo "0 && 0 :".(false && false)."\n\n";

echo "Operasi OR \n";
echo "1 || 1 :".(true || true)."\n";
echo "1 || 0 :".(true || false)."\n";
echo "0 || 0 :".(false || false)."\n\n";

echo "Operasi NOT \n";
echo "!1 :".(!true)."\n";
echo "!0 :".(!false)."\n\n";

echo "Operasi XOR \n";
echo "1 xor 1 :".(true xor true)."\n";
echo "1 xor 0 :".(true xor false)."\n";
echo "0 xor 0 :".(false xor false)."\n\n";


?>