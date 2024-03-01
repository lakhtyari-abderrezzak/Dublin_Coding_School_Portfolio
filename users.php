<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"] ;
    
    try{
        require_once "../dbh.inc.php";
        $query = "SELECT * FROM users WHERE username = :username ;";
        $stmt = $pdo->prepare($query);

        $result = $stmt->bindParam(":username", $username);
        $stmt->execute();
    
        $pdo = null;
        $stmt = null;
    
        
    }
    catch (PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
    
    } else {
    header("Location: ../index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     
    echo "<h1> This is Our page </h1>";
    echo $result;
    
    ?>
</body>
</html>