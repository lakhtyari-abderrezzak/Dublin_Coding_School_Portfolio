<?php

try {
    require_once "includes/dbh.inc.php";
    $query = "SELECT * FROM users;";
    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;
    $stmt = null;
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- normalize file -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- main css file -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/user.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts #Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Nunito:wght@200;300;400;600;700&family=Open+Sans:wght@400;700&family=Poppins:wght@200;300;400;500;700&family=Roboto:wght@100;300;400;500;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>My Portfolio</title>
</head>

<body>
    <!-- start header  -->
    <div class="header">
        <div class="container">
            <div class="wrapper">
                <p class="logo"><i class="fa-solid fa-user-tie"></i>ABDO</p>
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
                <div class="icon">
                    <i class="fa-solid fa-bars bars"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header  -->
    <!-- Start Table  -->
    <div class="table">
        <div class="container">
            <h2 class="title">Our Data</h2>
            <?php
            if (empty($results)) {
                echo "<h1 class='no-data'> No Data From Data Base</h1>";
            } else {
                echo "
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Comments</th>
                        </tr>
                    ";
                foreach ($results as $result) {
                    
                        echo "<tr>
                                <td>{$result['username']}</td>
                                <td>{$result['pwd']}</td>
                                <td>{$result['email']}</td>
                                <td>{$result['comments']}</td>
                            </tr>";
            }
            }
            ?>
            </table>
        </div>
    </div>
    <!-- End Table  -->

    <!-- js file  -->
    <script src="javascript_Files/users.js"></script>
</body>

</html>