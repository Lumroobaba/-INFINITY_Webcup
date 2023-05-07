<?php
require_once './private/conn.php';
require_once './private/user.php'; 

$dbconn = new DBConn();
$users = new Users();
$listUsers = $users->retrieveUsers($dbconn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="acc.css">
</head>

<body>
    <nav>
        <img src="./assets/img/Celestial2.png" alt="" id="logo">
        <a href="dashboard.php">
            <p style="font-size: 1vw;">DASHBOARD?</p>
        </a>
    </nav>

    <div class="container">
        <div class="title">Usernema</div>
        <div class="container_details">
            <div class="box ">

                <?php
 
                foreach ($listUsers as $row) {
                    if ($row['useremail'] == $_SESSION['email']) {
                ?>
                        <div class="details">User details:<?php echo $row['userid']; ?></div>
                        <div class="details">User details:<?php echo $row['useremail']; ?></div>
                        <div class="details">User details:<?php echo $row['userpass']; ?></div>
                        <div class="details">User details:<?php echo $row['totalcount']; ?></div>
                        <div class="details">User details:<?php echo $row['countleft']; ?></div>
                        <div class="details">User details:<?php echo $row['usertype']; ?></div>
                        <div class="details">User details:<?php echo $row['date_created']; ?></div>
                <?php  }
                }
                ?>
                <div class="details">User details:</div>
                <div class="details">User details:</div>
                <div class="details">User details:</div>
                <div class="details">User details:</div>
                <div class="details">User details:</div>
                <div class="details">User details:</div>
                <div class="details">User details:</div>
            </div>
            <div class="box img"><img src="https://static.vecteezy.com/system/resources/thumbnails/002/534/006/small/social-media-chatting-online-blank-profile-picture-head-and-body-icon-people-standing-icon-grey-background-free-vector.jpg" alt=""></div>
        </div>
    </div>
</body>

</html>