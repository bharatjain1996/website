<?php
Session_start();
?>


<!doctype html>
<html lan="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport"
  content="width=device-width,initial scale=1.0">
  <title>Welcome to ART&CRAFT</title>
  <link rel="stylesheet" href="page1.css"/>
  <link rel="shortcut icon" href="logo.jpg"/>
</head>
<body>

<header id="header1">
  <h1>Welcome to ART&CRAFT </h1>
 </header>
  <form id="login" action="include/login.php" method="POST">
 <a  class="singup" href="Singup.php">Sing Up</a> 
   Already a customer ?
  <input type="text" name="uid" placeholder="USERNAME/EMAIL">
  <input type="password" name="pwd" placeholder="PASSWORD">
  <button type="Submit" name="submit">LOGIN</button>
  </form>
  </div>
 
 <div id="im">
  <img class="mySlides" src="header.jpg"/>
  <img class="mySlides" src="header1.jpg"/>
  <img class="mySlides" src="header2.jpg"/>
  <img class="mySlides" src="diya.jpg"/>
  <img class="mySlides" src="diya2.jpg"/>
  <img class="mySlides" src="elephant.jpg"/>
 </div>
  <script src="myjsfile.js"></script>
 
<nav id="nav1">
<ul>
<li><a href="page1.php">Home</a></li>
<li><a href="buynow.php">Buy Now</a></li>
<li><a href="gallery.php">Products Gallery</a></li>
<li><a href="aboutus.php">About us</a></li>
<li><a href="contact us.php">Contact us</a></li>
</ul>
</nav>



<form action="php.search" method="post">
<input type="text" id="searchbar" placeholder="Search..." maxlength="40" autocomplete="on" /><input type="submit" id="searchbtn" value="Go"/>
<div id="mommy">
<div id="kid1">Top Deals This Week <br/><br/><a href="buynow.php"><img  src="td1.jpg"></a></div> 
<div id="kid1">Festive Items       <br/><br/><a href="festive.php"> <img  src="fs.jpg"></a></div>
<div id="kid1">Best Selling        <br/><br/><a href="buynow3.php"><img  src="bs.jpg"></a></div>

</div>

<div id="kid2"><a href="buynow.php">Start Shopping</a></div>

<footer id="foot">
All Rights Reserved By ART&CRAFT 
<br/><br/>
<a href="page1.html"><img src="logo.jpg" width="150" height="150"/></a>
<div id="fb">
Follow us on <br/><br/>
<a href="https://www.facebook.com/Artcraft-1815770782078676/notifications/"><img  id="fb" src="fb.jpg" width="50" height="50" /></a>
<a href=""><img  id="fb" src="twitter.jpg" width="50" height="50" /></a>
</div>
</footer>


</body>
</html>
