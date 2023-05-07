<?php
    session_start();
    require_once 'includes/validation.php';
    
    if(isset($_SESSION["authentication"])){
        if($_SESSION["authentication"] == true){
            if($_SESSION["usertype"] == 0){
                header('Location:index.php');
            }else if($_SESSION["usertype"] == 1){
                header('Location:admin/dashboard.php');
            }
        }
    }else{
        header('location:logout.php');
    }

    // if(isset($_SESSION['captcha'])){
    //     $now = time();
    //     if($now >= $_SESSION['captcha']){
    //       unset($_SESSION['captcha']);
    //     }
    // }
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

    <title>Register</title>
</head>

<body>
    <div class="main">  
        <div class="login">
            <img src="./assets/img/space.png" alt="login image" class="login__img">
            <div class="login__form">
                <h1 class="login__title">Register</h1>
                <div class="login__content">

                    <div class="login__box">
                        <i class="ri-user-fill login__icon"></i>

                        <div class="login__box-input">
                            <input type="username" name="username" class="login__input" placeholder="" required>
                            <label for="" class="login__label login__eye">Username</label>
                        </div>
                    </div>

                    <div class="login__box">
                        <i class="ri-mail-line"></i>

                        <div class="login__box-input">
                            <input type="email" name="email" class="login__input" placeholder="" required>
                            <label for="" class="login__label login__eye">Email</label>
                        </div>
                    </div>

                    <div class="login__box">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                            <input type="password" class="login__input" placeholder="" required>
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

                <button class="login__button" name="btnRegister">Register</button>

                <?php 
                    if(isset($_SESSION['error'])){
                        echo "<div class='alertmsg'>".$_SESSION['error']."</div>";
    
                        unset($_SESSION['error']);
                    }
                ?>

                <p class="login__register">
                    Already have an account ? <a href="login.php"> Login</a>
                </p>
            </div>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/login.js"></script>
</body>

</html>