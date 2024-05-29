<?php

try {
//host
deine("HOST", "localhost"); 

//dbname
define("DBNAME", "coffee-blend");

//user
define("USER", "root");

//pass
define("PASS", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch( PDOException $Exception ) {
    echo $Exception->getMessage();
}
// if($conn == true){
//     echo "Connected";
// } else{
//     echo "Not Connected";
// }
