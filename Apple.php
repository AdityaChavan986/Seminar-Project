<!DOCTYPE html>
<html>
<head>
<title>laptop Drive</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Demo3.1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
</head>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b> Laptop Drive</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="file:///C:/Users/Aditya/OneDrive/Desktop/por/Home.html" class="w3-bar-item w3-button">Home</a>
    <a href="file:///C:/Users/Aditya/OneDrive/Desktop/por/Asus.html" class="w3-bar-item w3-button">Asus</a>
    <a href="file:///C:/Users/Aditya/OneDrive/Desktop/por/Apple.html" class="w3-bar-item w3-button">Apple</a>
    <a href="#" class="w3-bar-item w3-button">Lenovo</a>
    <a href="#" class="w3-bar-item w3-button">HP</a>
    <a href="#" class="w3-bar-item w3-button">Acer</a>
    <a href="#" class="w3-bar-item w3-button"> Msi </a>
    <a href="#" class="w3-bar-item w3-button"> Toshiba</a>
  </div>
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Apple</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <h2 class="w3-left">Apple</h2>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="img/1.png" alt="Laptop" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">              </h1>
      <h1 class="w3-hide-large w3-hide-medium">        </h1>
      <h1 class="w3-hide-small">      </h1>
      <p><a href="#Laptop" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="Laptop">
    <p>3 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="img/22.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
        </div>
        </div>
        <p>Apple MacBook Pro 13"<br><b>₹90,000</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/Screenshot_20230104_183252.png" style="width:110%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Apple MacBook Pro 16"<br><b>₹2,00,000</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="img/44.png" style="width:110%">
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
        </div>
        </div>
        <p>Apple MacBook Pro 14"<br><b>₹1,00,000</b></p>
      </div>
    </div>

   

    

     

  
  <!-- End page content -->
</div>
<div class="w3-black w3-center w3-padding-24"
   colspan="3" id="footer">
    &copy;copy write 2023. all Rights reserved.
  </div>


<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>