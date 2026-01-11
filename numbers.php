<?php
$sayi1=10.2;
$sayi2=20;

echo "sonuç:".($sayi1+$sayi2)."<br>";
echo "sonuç:".($sayi1-$sayi2)."<br>";
echo "sonuç:".($sayi1*$sayi2)."<br>";
echo "sonuç:".($sayi1/$sayi2)."<br>";


echo var_dump(is_int($sayi2))."<br>";
echo var_dump(is_int($sayi1))."<br>";
echo var_dump(is_float($sayi1))."<br>";
echo var_dump(is_numeric("alo"))."<br>";


echo ceil(5.8)."<br>";//yuvarlama yukarı doğru yuvarlar
echo ceil(5.3)."<br>";// yukarı doğru yuvarlar her zaman
echo floor(5.8)."<br>";//asagı dogru yuvarlama
echo round(5.8)."<br>";// asagı veya yukarı yakın olana dogru yuvarlama
echo round(5.3)."<br>";// asagı yakın olan
echo sqrt(25)."<br>";//karekoku al
echo abs(-25)."<br>";//mutlak deger al


?>