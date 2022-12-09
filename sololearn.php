<?php

/*
lessons 7.2
Math Operators
*/
$computer = 10;
$monitors = 2;
$mult = $computer * $monitors;
echo $mult ."\n";

/*
lessons 9.2 
Find The Adults
*/
$age = 20;
if ($age>=18) {
    echo "true";
} else {
    echo "false";
}

echo "\n";

/*
lessons 10.2
Noon Or Midnight
*/
$hour = 13;
if ($hour>=0 && $hour<=12) {
    echo "am";
} else if ($hour>12 && $hour<=24){
    echo "pm";
}

echo "\n";

/*
lessons 13
Trip Planer
*/
$distance = 150;
$speed = 40;
$time = $distance / $speed;
$timeInMinutes = $time * 60;
echo $timeInMinutes;

echo "\n";


/*
lessons 14.2
Vacation Month
*/
$mounth = "August";
if ($mounth == "August") {
    echo "vacation";
}

echo "\n";


/*
lessons 15.2
Set A Word Record
*/
$tinggiLompatan = 2.45;
if ($tinggiLompatan >= 2.45) {
    echo "new record";
} else {
    echo "not this time";
}

echo "\n";


/*
lessons 16.2
Exam Result
*/
$score = 78;
if ($score>=88){
    echo "exellent";
} else if ($score>=40) {
    echo "good";
} else {
    echo "fail";
}

echo "\n";


/*
lessons 17.2
Dark Theme
*/
$themeNumber = 2;
switch ($themeNumber) {
    case 1:
        echo "Light";
        break;
    case 2:
        echo "Dark";
        break;
    case 3:
        echo "Nocturne";
        break;
    default :
        echo "Terminal";
        break; 
}

echo "\n";

/*
lessons 18.2 
Repead And Learn Code
*/
for ($a=1; $a<=5; $a++) {
    echo "Learning PHP is fun \n";
}

echo "\n";

/*
lessons 19.2
Time's Up
*/
$seconds = 5;
for ($seconds>=5; $seconds--;) {
    echo $seconds ."\n";
}

echo "\n";


/*
lessons 21.2
Skipping 13
*/
$Lhotel = 15;
for ($i = 0; $i<=16; $i++) {
    if ($i == 13) {
        continue;
    }
    echo $i ."\n";
}

echo "\n";



/*
Siput di dalam Sumur


Siput memanjat 7 kaki setiap hari dan tergelincir kembali 2 kaki setiap malam.
Berapa hari yang diperlukan siput untuk keluar dari sumur dengan kedalaman tertentu?

Contoh Masukan:
31

Contoh Keluaran:
6

Penjelasan: Mari kita uraikan jarak yang ditempuh siput setiap hari:
Hari 1: 7-2=5
Hari 2: 5+7-2=10
Hari 3: 10+7-2=15
Hari 4: 15+7-2=20
Hari 5: 20+7-2=25
Hari 6: 25+7=32
Jadi, pada Hari ke-6 siput akan mencapai 32 kaki dan keluar dari sumur pada siang hari, tanpa tergelincir kembali malam itu.
Petunjuk: Anda dapat menggunakan loop untuk menghitung jarak yang ditempuh siput setiap hari, dan memutus loop saat mencapai jarak yang diinginkan.
*/
// $sumur = 500;
// $naik = 30;
// $turun = 15;
// $hari = 24;
// for($i=0; $i < $sumur; $i++){
//     if ($naik< $sumur) {
//             $naik += 7;
//             if ($sumur > $naik) {
//             $naik -= 2;        
//             }
//         $hari++; 
          
//     } else {
//            echo $hari;
//             break;
//     }  
// }  
$depth = 31;
    //your code goes here
    $x = 0; //milesDone
    $y = 0; //dayCount
    for($i=0 ; $i < $depth ;$i++){
     if ($x<$depth) {
         $x += 7;
         if ($depth > $x) {
         $x -= 2;        
         }
         $y++;
    } else {
        echo $y;
        break;
    }  
}  


echo "\n";


/*
lessons 24.2
Loading
*/
function showPreloader() {
    echo "Loading";
}
showPreloader();

echo "\n";

/*
lessons 26.2
Who Wont The Match
*/
function finalResult($goalsTeam1,$goalsTeam2) {
    if ( $goalsTeam1 > $goalsTeam2 ) {
        echo "Team 1 won";
    } else if ( $goalsTeam2 > $goalsTeam1 ) {
        echo "Team 2 won";
    } else {
        echo "Draw";
    }
};

finalResult(3,4);

echo "\n";


/*
lessons 27.2
Averange Of Three
*/
$num1 = 3;
$num2 = 6;
$num3 = 9;
$addition = ($num1 + $num2 + $num3) / 3;
echo $addition;

echo "\n";


// php ulangan pas
for($i=1; $i<=5; $i++) {
    for($j=1; $j<=$i; $j++)
    {
    echo '*';
    }
    echo "\n";
    }
?>