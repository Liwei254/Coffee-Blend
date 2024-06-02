<?php


//host
define("HOST", "localhost");

//database name
define("DBNAME", "coffee-blend");

//username
define("USER", "root");

//password
define("PASS", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);

// Check connection
if ($conn == true){
    echo "Connected successfully";
} else {
    echo "Connection failed: ";
}