<?php
    require_once "../private/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>HOME | INFINITY</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <?php
        // include "header.php";
    ?>
    <h1>ChatGPT Search</h1>
    <form id="search-form">
      <label for="query">Search Query:</label>
      <input type="text" id="query" name="query" required>
      <button type="submit">Search</button>
    </form>
    <div id="results"></div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="assets/js/script.js"></script>
</body>
</html>