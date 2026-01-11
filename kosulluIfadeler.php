<?php
$Db_userName="hatice Aksoy";
$Db_password="1234";

// if($Db_userName=="hatice Aksoy" and $Db_password="12345"){
//     echo "username ve parola doğru";
// }
// else{
//     echo "username ve parola yanlış";
// }

// if($Db_userName=="hatice Aksoy"){
//     if($Db_password="12345"){
//         echo "giriş başarılı";
//     }
//     else{
//         echo "parola yanlış veya hatalı";
//     }
// }
// else{
//     echo "username yanlış";
// }
if($Db_userName !=="hatice Aksoy"){
    echo "username yanlış";

} elseif($Db_password !="12345"){
    echo "password yanlış";

}
else{
    echo "giriş başarılı";
}

?>