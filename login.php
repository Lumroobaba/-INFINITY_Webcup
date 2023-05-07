<?php
session_start();
require_once 'private/validation.php';

if (isset($_POST['btnLogin'])) { 
    require_once './private/conn.php';
    require_once './private/user.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $dbconn = new DBConn(); 
    $users = new Users();
    $listUsers = $users->retrieveUsers($dbconn);

    foreach ($listUsers as $row) {
        if ($email == $row['useremail'] && $password == $row['userpass']) {
            $_SESSION['email'] = $email;

            if ($row['category'] == "ADMIN") {
                $_SESSION['admin'] = true;
                header('Location:http:/localhost/-INFINITY_Webcup/dream.php
                ');
                $_SESSION["login"] = "loggedIn";
            } else {
                $_SESSION['client'] = true;
                header('Location:http:/-INFINITY_Webcup/dream.php');
                $_SESSION["login"] = "loggedIn";
            }
        } else {
            $login = false;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Login|Celestial</title>
</head>

<body>
    <div class="main">
        <div class="login">
            <img src="./assets/img/space-login.jpg" alt="login image" class="login__img">
            <form method="POST" class="login__form">
                <h1 class="login__title">Login</h1>
                <div class="login__content">
                    <div class="login__box">
                        <i class="ri-user-fill login__icon"></i>

                        <div class="login__box-input">
                            <input type="email" class="login__input" name="email" placeholder="" required>
                            <label for="" class="login__label login__eye">Email</label>
                        </div>
                    </div>

                    <div class="login__box">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                            <input type="password" class="login__input" name="password" id="login-pass" placeholder="" required>
                            <label for="" class="login__label">Password</label>
                            <i class="ri-eye-line login__eye" id="login-eye"></i>
                        </div>
                    </div>

                </div>
                <div class="login__check">
                    <div class="login__check-group">
                        <input type="checkbox" class="login__check-input">
                        <label for="" class="login_check-label">Remember me</label>
                    </div>

                    <a href=" " class="login__forgot">Forgot Password?</a>
                </div>

                <!-- <button class="login__button">Login</button> -->
                <input type="submit" name="btnLogin" class="login__button" value="Login">

                <?php
                if (isset($_SESSION['error'])) {
                    echo "<div class='alertmsg'>" . $_SESSION['error'] . "</div>";

                    unset($_SESSION['error']);
                }
                ?>

                <p class="login__register">
                    Don't have an account ? <a href="register.php"> Register</a>
                </p>
            </form>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/login.js"></script>
</body>

</html>