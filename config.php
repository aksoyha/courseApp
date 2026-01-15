<?php
$host="localhost";
$usernam="root";
$password="";
$database="coursedb";
// MYSQLi (object-orinted,precedure)
//PDO(oracle, POSTRE SQL,SQlite,)

$connect= mysqli_connect($host,$usernam,$password,$database);

if(mysqli_connect_errno() > 0){
    die("hata:".mysqli_connect_errno());
}
// echo "bağlantı kuruldu.";  After connecting,there is no need for a message. 

// echo "bağlantı kapatıldı.";
?>