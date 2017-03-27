<!DOCTYPE html>
<?php
session_start();
?>
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Shopping</title>
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="shopp.css" /> 
<style>
  ul li ul 
  {
  text-align:center;
  }
</style> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
  $("a").on('click', function(event) {

    
    if (this.hash !== "") {
      
      event.preventDefault();

      
      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top -1
      }, 1000, function(){
   
        
        window.location.hash = hash;
      });
    } 
  });
});
</script>
</head>
    <body>
    <div id="top">
	<div id="head" style="background-color: #64B681; margin-top: 0px; height: 100px; border: 2px;margin-right:-10px;" >
  <div id="header" style="border: 2px; height: 95px; width:215px;  background-image: url('http://res.cloudinary.com/nimishsrivastav/image/upload/v1483606618/logo_eclxm7.png');">
         <!--<img src="{!$Resource.shoppinglogo}" height="80px" width="175px"/>-->
  </div>
  </div>
   
         <div id="apple" style="margin-top:-82px">
            <div id="button1"    style="color:white; margin-left:1200px;display:inline;">
            <a href="logout.php" style="text-decoration: none;color: black;">Logout</a>
            </div>
            <?php
            echo $_SESSION['name'];
            ?>
            </div>
      
  <div id="hello"    style="margin-top: -2px;">
  <div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li>
                <a href="shop.php">Home</a>
            </li>
        </ul>
    </nav>
  </div>
  
  <div class="menu-wrap">
    <nav class="menu">         
        <ul class="clearfix">
            <li>
                <a href="#" style="padding: 5px 20px">Men Clothing <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="shirt.php"> Shirts </a></li>
                    <li><a href="Tshirt.php"> Tshirts </a></li>
                    <li><a href="Jeans.php"> Jeans </a></li>
                </ul>
            </li>
        </ul>
    </nav>
  </div>
    
  <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                  <a href ="#" style="padding: 5px 20px"> Women Clothing <span class="arrow">&#9660; </span></a>
                    
                  <ul class="sub-menu">
                      <li><a href="Tops.php"> Tops </a></li>
                      <li><a href="WJeans.php"> Jeans </a></li>
                      <li><a href="Dress.php"> Dresses </a></li>
                  </ul>
              </li>
          </ul>
      </nav>
  </div>
     
  <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                  <a href ="#" style="padding: 5px 20px"> Kids Clothing <span class="arrow">&#9660; </span></a>
                    
                  <ul class="sub-menu">
                      <li><a href="Boys.php"> Boys </a></li>
                      <li><a href="Girls.php"> Girls </a></li>
                  </ul>
              </li>
          </ul>
      </nav>
  </div>
     
  <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                  <a href ="#" style="padding: 5px 20px"> Books and More <span class="arrow">&#9660; </span></a>
                    
                  <ul class="sub-menu">
                      <li><a href="Book.php"> Books </a></li>
                      <li><a href="Music.php"> Music </a></li>
                  </ul>
              </li>
          </ul>
      </nav>
  </div>
    <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                  <a href ="#first" style="padding: 5px 20px">  Handpicked <span > </span></a>
              
              </li>
          </ul>
      </nav>
  </div>
    <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                  <a href ="#second" style="padding: 5px 20px"> Bestseller <span > </span></a>
                 
              </li>
          </ul>
      </nav>
  </div>
  
</div>
  </div>
    
    <div id="slider">
    <figure>
    
    <img src="images/slider1.jpg" width="1500px" height="300px"/>
   
    <img src="images/slider2.jpg" width="1500px" height="300px"/> 
	 <img src="images/slider3.jpg" width="1500px" height="300px"/>
	 <img src="images/slider4.jpg" width="1500px" height="300px"/>
	 <img src="images/slider5.jpg" width="1500px" height="300px"/>
</figure>	 
    </div>

    <div id="first">
 </br></br></br></br></br></br></br><h1 style="text-align: center;">HANDPICKED</h1>
<h2 style="text-align: center;">The best of global brands, at your doorstep!</h2>
<table align="center">
    <tr>
   <td><a href="Tshirt.php"><img src="images/puma.jpg" width="350px" height="250px"></a></td>
   
  <td><a href="Dresses.php"><img src="images/new.jpg" width="350px" height="250px" ></a></td>
  
  <td><a href="shirt.php"><img src="images/wills.jpg" width="350px" height="250px" ></a></td>
  </tr>
  <tr>
   <td><a href="Jeans.php"><img src="images/jeans.jpg" width="350px" height="250px"></a></td>
   
  <td><a href="Tops.php"><img src="images/gear.jpg" width="350px" height="250px" ></a></td>
  <td><a href="Tops.php"><img src="images/top.jpg" width="350px" height="250px" ></a></td>
  
  </tr>

   <tr>
   </table>
   </div>
   <div id="second">
   </br></br></br></br></br></br></br><h1 style="text-align: center;">BEST SELLER</h1>
   <table align="center">
   
   <tr>
  <td><a href="book.php"><img src="images/exam.jpg" width="550px" height="250px" ></a></td>
  </tr>
  </table>
  </div>

 <div class="icons">
 
    <div id="main" style="display:inline; margin-left:670px; ">
        <a href="http://www.instagram.com/"/>
            <img src="http://www.bobslittlesportshop.com/wp-content/uploads/2015/08/instagram.png"  width="25" height="25" class="add" />
        
    </div>
    <div id="sec"    style="display:inline; margin-left:670px; ">
        <a href="http://www.twitter.com/"/>
            <img src="http://www.rosslaresecurity.com/wp-content/uploads/2014/02/twitter-icon-1024x1024.png"  width="25" height="25" class="adr" />
        
    </div>
    <div id="third" style="display:inline; margin-left:670px; ">
        <a href="http://www.facebook.com/"/> 
         <img src="http://vignette3.wikia.nocookie.net/drunken-peasants-podcast/images/f/f3/Transparent-facebook-logo-icon1-1024x1024.png" height="25" width="25" class="ad"/>  
      
    </div>
	</div>
    <br></br>
    <br></br>
    <form>
    <div id="contactus">
        <a href="ContactUs.php">Contact Us</a>
    </div>
    </form>
    <div id="footer">
         <br><br>Copyright &copy; 2017 ShopWithUs</br></br>
    </div>
    <div id="back-to-top">
        <a href="#top"><i class="fa fa-3x fa-arrow-circle-up" aria-hidden="true" style="position: fixed;bottom: 20px;right: 20px;color:#64B681;"></i></a>
      </div>
     </body>
	 </html>


