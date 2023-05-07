<?php
require './private/getHistory.php';
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

<nav>
    <img src="./assets/img/Celestial2.png" alt="" id="logo">
    <a href="login.php"> 
    </a>
</nav>

<body>
    <div class="top">
        <a href="index.php">
            <p>Home</p>
        </a>
        <a href="">
            <p>Account</p>
        </a>
        <a href="history.php">
            <p>Back</p>
        </a>
        <a href="">
            <p>Log Out</p>
        </a>
    </div>
    <div class="container">
        <div class="title">
            <p>Dreams History</p>
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
        foreach ($listDreams as $row) { ?>
            <div class="date table-column">
                <p><?php echo $row['historyid']; ?></p>
            </div>
            <div class="date table-column">
                <p><?php echo $row['date_created']; ?></p>
            </div>
            <div class="dream table-column">
                <p><?php echo $row['description']; ?></p>
            </div>
            <div class="prediction table-column">
                <p><?php echo $row['prediction']; ?></p>
            </div>

        <?php } ?>
    </div>

    <div class="container">
        <div class="btn">
            <a href="./history.php"><button>Back</button></a>
        </div>

</body>

</html>