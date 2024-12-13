

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jsw shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" href="logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    
 
</head>
<body>
  <header class="header">
    <img src="logo.png" alt="jsw Logo" />
   
    <navbar class="nav">
    <a href="index.html"><b>home</b></a>
    <a href="index1.html"><b>about</b></a>
    <a href="projects.html"><b>projects</b></a>
    <a href="shop.php"><b>shop</b></a>
    <a href="blogs.html"><b>blogs</b></a>
    <a href="contactus.html"><b>contact</b></a>
    
    <form id="logoutForm" action="login.php" method="POST">
    <button type="submit" name="logout" id="logoutBtn"><b>Logout</b></button>
    
</form>


  
    </navbar>
    <?php
session_start();
if (isset($_SESSION['user_email'])) {
    echo '<div id="loginMessage"><b>' . $_SESSION['user_email'] . ' logged in</b></div>';
}
?> 
   
</header>

<div class="navbar1">
  <div class="subnav">
    <button class="subnavbtn">Mild Steel <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="hotrolled.html">Hot rolled</a>
      <a href="coldrolled.html">Cold rolled</a>
      <a href="wireroads.html">Wire rods</a>
      <a href="coated.html">Coated</a>
      <a href="colourcoated.html">Colour coated</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Stainless Steel <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="hotrolledsheet.html">Hot rolled sheets</a>
      <a href="hotrolledcoils.html">Hot rolled coils</a>
      <a href="coldrolledsheets.html">Cold rolled sheets</a>
      <a href="coldrolledcoils.html">Cold rolled coils</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Structural Steel <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="angles.html">Angles</a>
      <a href="channels.html">Channels</a>
      <a href="beamsandcolumns.html">Beams and Columns</a>
    </div>
  </div>
  <a href="tmt.html">TMT</a>
</div>


<div style="padding:30px 16px">
</div>


    

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="shopimg/banners/1.jpg" alt="" style="width:100%;">
            <div class="carousel-caption">
              <a href="register.html"> <h3 style="color: #17469E;"><u>Register</u></h3></a>
            </div>
          </div> 
          
        
    
          <div class="item">
            <img src="shopimg/banners/2.jpg" alt="Machinery" style="width:100%;">
            <div class="carousel-caption">
              <a href="shop.html"> <h3 style="color: #17469E;"><u>Shop Now</u></h3></a>
            </div>
          </div>
          
        
          <div class="item">
            <img src="shopimg/banners/3.jpg" alt="" style="width:100%;">
            <div class="carousel-caption">
              <a href="contactus.html"> <h3 style="color: #17469E;"><u> Contact us</u></h3></a>
            </div>
          </div>
          
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <section id="product1" class="section-p1">
      
      <div class="pro-container">
        <div class="pro">
        <a href="stmt.html"> <img src="shopimg/featured/1.jpg" alt=""></a> 
          <div class="des">
            <span>JSW STEELS</span>
            <h4>TMT Rebars</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
      
            </div>
            <h4><i class="fas fa-rupee-sign"></i> - <i class="fas fa-rupee-sign"></i></h4> 
          </div>
          <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
          <a href="sproduct1.html"> <img src="shopimg/featured/2.png" alt=""></a>
          <div class="des">
            <span>JSW STEELS</span>
            <h4>Hot rolled</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
      
            </div>
            <h4><i class="fas fa-rupee-sign"></i> - <i class="fas fa-rupee-sign"></i></h4> 
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
          <a href="neosteeltmt.html"><img src="shopimg/featured/4.jpeg" alt=""></a>
          <div class="des">
            <span>JSW STEELS</span>
            <h4>Neosteel TMT Bars</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
      
            </div>
            <h4><i class="fas fa-rupee-sign"></i> - <i class="fas fa-rupee-sign"></i></h4> 
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
         <a href="steelwirerod.html"><img src="shopimg/featured/5.avif" alt=""></a> 
          <div class="des">
            <span>JSW STEELS</span>
            <h4> Steel Wire Rod</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
      
            </div>
            <h4><i class="fas fa-rupee-sign"></i> - <i class="fas fa-rupee-sign"></i></h4> 
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
          <a href="GalvanizedSteel.html"><img src="shopimg/featured/7.jpg" alt=""></a>
          <div class="des">
            <span>JSW STEELS</span>
            <h4>Galvanized steel</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
      
            </div>
            <h4><i class="fas fa-rupee-sign"></i> - <i class="fas fa-rupee-sign"></i></h4> 
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
          <img src="shopimg/featured/6.jpeg" alt="">
          <div class="des">
            <span>JSW STEELS</span>
            <h4>Special alloy steel</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
      
            </div>
            <h4><i class="fas fa-rupee-sign"></i> - <i class="fas fa-rupee-sign"></i></h4> 
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        
     </div>

    </section>





<!-- use bootstrap-->

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Copyright © JSW 2024 All rights reserved
    <a class="text-reset fw-bold" href="https://www.jswsteel.in/dolvi-works">jswsteel.in</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<script>
    // JavaScript function to hide the login message
    function hideLoginMessage() {
        document.getElementById("loginMessage").style.display = "none";
    }
</script>
</body>
</html>

