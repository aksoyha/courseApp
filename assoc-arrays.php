<?php

// key - value

//41 => kocaeli

$plakalar=array("41","53","34");
$sehirler=array("kocaeli","rize","istanbul");


$plakalarBilgileri=array(
    "41"=>"kocaeli",
    "34"=>"istanbul",
    "53"=>"rize"
);

echo $plakalarBilgileri["41"]."<br>";
echo $plakalarBilgileri["34"]."<br>";
echo $plakalarBilgileri["53"]."<br>";


$telefonRehberi=[
    "ali"=> "444444",
    "canan"=>"555555",
    "ahmet"=>"666666"
];
echo $telefonRehberi["ali"]."<br>";

$urun = [
    "urunAdi"=>"Iphone 14",
    "fiyat"=> 30000,
    "satistami"=> true
];
echo $urun["urunAdi"]." ".$urun["fiyat"]."<br>";

$urunler=[
    [
        "urunAdi"=>"Iphone 14",
        "fiyat"=> 30000,
        "satistami"=> true
    ],
    [
        "urunAdi"=>"Iphone 15",
        "fiyat"=> 40000,
        "satistami"=> true
    ],
    [
        "urunAdi"=>"Iphone 16",
        "fiyat"=> 50000,
        "satistami"=> true
    ]

    ];
    echo $urunler[0]["urunAdi"]."<br";





?>