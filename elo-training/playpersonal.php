<!DOCTYPE html>
<html  lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family : "Playfair Display";
    font-style: italic;
    letter-spacing: 5px;
 }
.button {
    background-color: white;
    border: 2px solid #4CAF50;
    border-radius: 12px;
    color: black;
    padding: 30px 64px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-family: "Playfair Display";
    font-style: italic;
    font-size: 32px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>

<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Pick your Pic</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">

      <a href="#introdution" class="w3-bar-item w3-button">Introdution</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/src/paris-skyline-watercolour.jpg" alt="paris header" style="width:100%"/>
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge w3-text-SlateBlue">Pick your Pic</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

 <!-- Introdution Section -->
 <div class="w3-row w3-padding-64" id="introdution">
 <h1 class="w3-center">Introdution</h1><br></br>
   <img src="/src/flower4.png" class="w3-round w3-image w3-opacity-min"  alt="flower" width="100%" />
    </div>


 <p style="text-align: center" >
 <a href="./picturepersonal.php" class="button">Start to use</a>
</p>

</div>


  
<!-- End page content -->


<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>

</html>