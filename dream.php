<<<<<<< HEAD
=======
<?php
session_start();
if ($_SESSION["login"] != "loggedIn") {
  header("location:login.php");
}
require_once 'private/validation.php';



if (isset($_POST['submit'])) { 
  require_once './private/History.php';
  $descriptions = $_POST['dreams'];
 
  $dreams = new dreams();
  $dreams = $dreams->addDreams($descriptions);
}

?>

>>>>>>> 2696d346b91bd999bbae18e394571f268501403e
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>SD Worx ChatBot</title>
</head>
<body>
  <header>
    <img src="https://upload.wikimedia.org/wikipedia/fr/7/70/Logo-SDWorx.png?20101001151737" alt="Company Logo">
  </header>
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Welcome Students!</span></div>
      <div class="subtitle"><span>Let's begin your Learning</span></div>
      <div class="chatbot-image">
        <img src="https://cdn3.iconfinder.com/data/icons/chatbot-robot/100/chatbot_01_16_bot_chat_robot_app_artificial_chatbot_dialog-256.png" alt="Chatbot Face">
      </div>
      <div class="form">
        <form method="POST">
          <div class="dream">Send a message</div>
          <div class="row">
            <textarea type="text" name="dreams" required></textarea>
          </div>
          <br>
          <div class="row button">
            <input type="submit" value="Submit" name="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- particles.js container -->
  <div id="particles-js"></div>
  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/particles.js"></script>
</body>
</html>
