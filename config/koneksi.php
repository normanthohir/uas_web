<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "web2_ti3a";
//PDO
try {
    $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    
} catch (PDOException $e) {
    echo "Koneksi Gagal : " . $e->getMessage() . "<br>";
    die();
}
