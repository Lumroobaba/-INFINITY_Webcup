<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

  <div class="container">
    <!-- <div class="wrapper">
      <div class="title"><span>Welcome to Celestial!</span></div>
      <div class="subtitle"><span>Let's begin your adventure</span></div>
      <form action="#" method="#">
        <div class="dream">Enter your dream:</div>
        <div class="row">
          <textarea type="text" name="dream" required></textarea>
        </div>
        <br>
        <div class="row button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div> -->
    <div class="wrapper">
      <form action="#" method="#">
        <div class="dream">Your predictions:</div>
        <div class="row">
          <textarea type="text" name="prediction" required></textarea>
        </div>
      </form>
    </div>
  </div>

    <!-- particles.js container --> 
    <div id="particles-js"></div> 

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
    <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="script.js"></script>
    <script>
      // Set the direction to "bottom" after 4 seconds and then to "none" after 8 seconds
        setTimeout(function() {
            
        }, 4000);

        setTimeout(function() {
            
        }, 8000);

    </script>
</body>
</html>