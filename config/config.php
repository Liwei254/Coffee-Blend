<?php

//host
deine("HOST", "localhost"); 

//dbname
define("DBNAME", "coffee-blend");

//user
define("USER", "root");

//pass
define("PASS", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);

if($conn==true){
    echo "Connected";
} else{
    echo "Not Connected";
}
