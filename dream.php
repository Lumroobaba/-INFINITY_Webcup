<?php
// session_start(); 
// if($_SESSION["login"] != "loggedIn"){ 
//   header("location:login.php");
// }


session_start();
require_once 'private/validation.php';



if (isset($_POST['submit'])) {
  require_once './private/conn.php';
  require_once './private/History.php';
  $description = $_POST['dream'];
  $prediction = $_POST['prediction'];

  $dbconn = new DBConn();
  $dreams = new dreams();
  $dreams = $dreams->addDreams($description, $prediction);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/dream.css">
  <title>DREAM | Celestial</title>
</head>

<nav>
  <img src="./assets/img/Celestial2.png" alt="" id="logo">
  <a href="history.php">
    <p style="font-size: 1vw;">History</p>
  </a>
</nav>

<body>

  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Welcome to Celestial!</span></div>
      <div class="subtitle"><span>Let's begin your adventure</span></div>
      <div class="form">
        <form method="POST">
          <div class="dream">Enter your dream:</div>
          <div class="row">
            <textarea type="text" name="dream" required></textarea>
          </div>
          <br>
          <div class="row button">
            <input type="submit" value="Submit" name="submit">
          </div>
        </form>
      </div>
    </div>
    <!-- <div class="wrapper">
      <form action="#" method="#">
        <div class="dream">Your predictions:</div>
        <div class="row">
          <textarea type="text" name="prediction" required></textarea>
        </div>
      </form>
    </div> -->
  </div>

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/particles.js"></script>

</body>

</html>