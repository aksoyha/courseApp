<?php
// 1-Aritmetik operatorler


// echo $a + $b."<br>";
// echo $a - $b."<br>";
// echo $a * $b."<br>";
// echo $a / $b."<br>";
// echo $a % $b."<br>";
// echo $a ** $b."<br>";
// echo ++$a."<br>";

// 2-Atama operatörler
// $a=$a + $b;
// $a -=$b;
// $a *=$b;
// $a /=$b;
// $a =$b;
// echo $a;
// $a=10;
// $b=5;
// 3-Karsılastirma
// $sonuc=($a == $b);
// $sonuc=($a != $b);
// $sonuc=($a > $b);
// $sonuc=($a >= $b);
// $sonuc=($a < $b);
// $sonuc=($a <= $b);

// echo var_dump($sonuc)


// 4-Mantıksal operatörler
$yas=19;
$mezuniyet="ilkokul";


$sonuc=($yas>=18 and ($mezuniyet=="lise" or $mezuniyet=="üniversite"));
echo var_dump($sonuc);








?>