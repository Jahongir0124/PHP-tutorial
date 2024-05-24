<?php

/*
PHP operatorlari
Operatorlar o'zgaruvchilar va qiymatlar ustida amallarni bajarish uchun ishlatiladi.

PHP operatorlarni quyidagi guruhlarga ajratadi:

Arifmetik operatorlar
Belgilash operatorlari
Taqqoslash operatorlari
Oshirish/kamaytirish operatorlari
Mantiqiy operatorlar
String operatorlari
Massiv operatorlari
Shartli belgilash operatorlari
*/


$x = 40;
$y = 43;

if ($x == $y){
    echo 'x va y bir-biriga teng';
} elseif ($x > $y) {
    echo 'x va y dan katta';
} else {
    echo 'x y dan kichik';
}