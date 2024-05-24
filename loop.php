<?php

/*
PHP da asosan quyidagi sikllardan foydalaniladi:
while, for, do...while, foreach
*/
//Topshiriq 1 dan 100 gacha bo'lgan sonlarni ekranga chiqarish
//
// for ($i = 1; $i<=100; $i++){
    
//     if ($i%2 == 0){
//         echo "Juft son: $i <br>";
//     }
// }
//Topshiriq-2 1 dan 47 gacha bo'lgan sonlarni ichida nechta juft son borligini aniqlang
// $i = 1;
// $counter = 0;


// while ($i <= 47){
//     if ($i%2 == 0) {
//         $counter++;
//     }
//     $i++;
// }

// echo "Juft sonlar soni: $counter"
// 
$colors = ['red', 'blue', 'yellow', 'green', 'pink'];


foreach($colors as $x) {
    echo "This color: $x <br>";
}


?>