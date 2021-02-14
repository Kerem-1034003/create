<?php

$servername = "localhost";
$dbname = "makelaar3";
$username ="root";
$password = "Kerem1";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname"
        , $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connectie gelukt <br />";
}
catch (PDOException $e){
    echo "connectie mislukt : " . $e->getMessage();
}
?>