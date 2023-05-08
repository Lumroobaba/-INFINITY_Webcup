<?php
require './private/History.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
    <link rel="stylesheet" href="./assets/css/history.css">
</head>

<nav style="background-color: gray;">
    <img src="./assets/img/Celestial2.png" alt="" id="logo">
    <a href="login.php">
    </a>
</nav>

<body>
    <div class="top">
        <a href="dashboard.php">
            <p>Dashboard</p>
        </a>
        <a href="#">
            <p>ACCOUNT</p>
        </a>
        <a href="index.php">
            <p>Home</p>
        </a>
        <a href="logout.php">
            <p>Log Out</p>
        </a>
    </div> 
    </div>
    <div class="table table_top">
        <div class="date table-column">
            <p>ID</p>
        </div>
        <div class="date table-column">
            <p>Date</p>
        </div>
        <div class="dream table-column">
            <p>Dream</p>
        </div>
        <div class="prediction table-column">
            <p>Prediction</p>
        </div>
    </div>
    <div class="table table_bottom">

        <?php
        foreach ($checkacc as $row) { ?>
            <div class="dream table-column">
                <p><?php echo $row['userid']; ?></p>
            </div>
            <div class="date table-column">
                <p><?php echo $row['username']; ?></p>
            </div>
            <div class="date table-column">
                <p><?php echo $row['useremail']; ?></p>
            </div>
            <div class="prediction table-column">
                <p><?php echo $row['usertype']; ?></p>
            </div>

        <?php } ?>
    </div>

    <div class="container">
        <div class="btn">
            <a href="./users.php"><button>Back</button></a>
        </div>

</body>

</html>