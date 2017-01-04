<!DOCTYPE html>
<html>
<head>
  <title>Raspberry Splash</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style3.css">
<link rel="stylesheet" href="css/style4.css">
<script src="rate.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-sidenav a {padding:20px}
</style>
</head>
<body style="background-color: #DFC8B4;">
<br><br><br><br>
<br>
<br>
<h1 style="text-align: center;">Berry Sauced Cocktail</h1>
<div>
<nav>
 <ul>
   <img src="http://www.magic4walls.com/wp-content/uploads/2016/03/pieces-of-watermelon-and-raspberry-in-cocktail-glass-next-to-watermelon-slices-694x417.jpg" style="text-align: center; height: 300px;width: 500px;">
   <h3 style="text-align: center;">Rate this Recipe:</h3><?php require_once "rate.php"; ?>
   <br>
 </ul>
</nav>
<article>
<br>
<center>
<h1>Ingredients:</h1>
<ul>
 <p>12 ounces raspberries (about 2 1/2 cups)</p>
 <p>2 cups dry red wine</p>
 <p>1/2 cup Brandy</p>
 <p>1 whole vanilla bean, split and scraped, seeds and pod reserved</p>
 <p>1 tablespoon zest from 1 lemon</p>
 <p>1 cup sugar</p>
</ul>
</center>
</article>
<br><hr>
<section>
<h1>Directions:</h1>
<p>Place the raspberries in a sealable glass jar and mash them with a spoon or muddler until just broken up enough to release juice. Add wine, seal, and shake the jar. Let steep for 2 days.
<br>
Pour brandy in pint-sized sealable glass jar along with the vanilla bean, split and scraped, and the lemon zest. Seal and shake the jar, then let steep for 2 days.
<br>
Strain the raspberry-wine mixture through strainer lined with cheesecloth. Reserve the raspberries for another use, if desired. Set aside one cup of infused wine and pour remainder into small saucepan. Add sugar. Heat over medium heat until sugar is dissolved and mixture is syrupy, 5 to 7 minutes. Let syrup cool to room temperature.
<br>
Strain brandy through fine mesh strainer lined with cheesecloth. Combine infused brandy with raspberry syrup in quart-sized sealable jar. Add reserved cup raspberry wine. Seal and shake, then let rest at room temperature for 2 days. Refrigerate and store for up to 1 month</p>
</section>
</div>


<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:15%;height:200%; min-width:300px;background-image: url('images/yumm.png'); background-repeat: no-repeat; color: white;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
  <br>
  <a href="index.php" onclick="w3_close()">Recipe Me</a>
  <br>
  <a href="login.php" onclick="w3_close()">Login</a>
  <br>
  <a href="signup.php" onclick="w3_close()">Sign Up</a>
</nav>
<!-- Top menu -->
<div class="w3-top">
  <div class="w3-#C1CFDA w3-xlarge w3-padding-xlarge" style="max-width:1900px;height:150px;margin:auto;background-color:#DD0B0B;color: black;">
    <div class="w3-opennav w3-left w3-hover-text-grey" onclick="w3_open()">&#9776;</div>
    <div class="w3-right">
      
    </div>
    <div class="w3-center"><a href="index.php"><img src="logo2.png" width="250" height="130"></a></div>
  </div>
</div>

<!-- Footer -->
<?php require_once "footer.php"; ?>

<script src="js/calc2.js"></script>

</body>
</html>
