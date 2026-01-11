<?php
$urunAdi="Iphone 13";
$urunFiyati=30000;
$kdvOrani=0.18;


// $sonuc=$urunAdi." adlı ürünün fiyatı:".$urunFiyati."TL'dir";
$urunFiyati=$urunFiyati+ ($urunFiyati*$kdvOrani);

$sonuc="{$urunAdi} adlı ürünün fiyatı {$urunFiyati} TL'dir";

echo $sonuc."<br>";
echo $sonuc[0]."<br>";
echo $sonuc[11]."<br>";
echo $sonuc[29]."<br>";
//string fonksiyonlariii 
echo strlen($sonuc)."<br>";
echo str_word_count($sonuc)."<br>";
echo strtoupper($sonuc)."<br>";
echo strtolower($sonuc)."<br>";













?>