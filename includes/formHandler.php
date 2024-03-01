<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$username = $_POST["username"] ;
$pwd = $_POST["pwd"];
$email = $_POST["email"];
$comments = $_POST["comment"];

 if(empty($username) || empty($pwd) || empty($email)){
        header("Location: ../index.php#contact");
        exit();   
    }

try{
   
    require_once "dbh.inc.php";
    $query = "INSERT INTO users (username, pwd, email, comments) VALUES (?, ?, ?, ?);";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $pwd, $email, $comments]);

    $pdo = null;
    $stmt = null;

    header("Location: ../user.php");
    die();
}
catch (PDOException $e){
    die("Query failed: " . $e->getMessage());
}

} else {
header("Location: ../index.php");
}