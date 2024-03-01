<?php

$dsn = "mysql:host=localhost;dbname=portfolio_data_base";
$dbusername = "root";
$dbpassword ="";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "connection failed: " . $e->getMessage();
}