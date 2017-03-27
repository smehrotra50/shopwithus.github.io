<!DOCTYPE html>
<?php
session_start();
?>
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Shopping</title>
<link type="text/css" rel="stylesheet" href="logreg.css" /> 
<style>
  ul li ul 
  {
  text-align:center;
  }
  </style> 
</head>
    <body>
	<div id="head" style="background-color: #64B681; margin-top: 0px; height: 100px; border: 2px;margin-right:-15px;" >
  <div id="header" style="border: 2px; height: 95px; width:215px;  background-image: url('http://res.cloudinary.com/nimishsrivastav/image/upload/v1483606618/logo_eclxm7.png');">
         <!--<img src="{!$Resource.shoppinglogo}" height="80px" width="175px"/>-->
  </div>
  <div id="apple" style="margin-top:-82px">
            <div id="button1"    style="color:white; margin-left:1200px;display:inline;">
            <a href="login.php" style="text-decoration: none;color: black;">Login</a>
            </div>
            <div id="button2"    style="color:white; margin-left:5px; display:inline;">
            <a href="Register.php" style="text-decoration: none;color: black;">Register</a> 
            </div>
            </div>
   <div id="hello">
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
                <a href="#" >Men Clothing <span class="arrow">&#9660;</span></a>
 
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
                  <a href ="#" > Women Clothing <span class="arrow">&#9660; </span></a>
                    
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
                  <a href ="#" > Kids Clothing <span class="arrow">&#9660; </span></a>
                    
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
                  <a href ="#" > Books and More <span class="arrow">&#9660; </span></a>
                    
                  <ul class="sub-menu">
                      <li><a href="Book.php"> Books </a></li>
                      <li><a href="Music.php"> Music </a></li>
                  </ul>
              </li>
          </ul>
      </nav>
  </div>
    
  
</div>
  </div>
    <form   method="post" action="loginback.php">
    <div class="container">
      <h1> Login </h1><br></br><br></br>
          <label><b>Email:</b></label>
		  <input type="email" placeholder="Enter Email" name="name" required>
              <label><br><b>Password:</b></br></label>
		  <input type="password" placeholder="Enter Password" name="pwd" required>
              <br></br><br></br>
			  <button type="submit" >Login</button>
			  <input type="checkbox" checked="checkbox"> Remember me
			  </div>
			  
                 <div class="container">
				 
			 <span class="psw"><a href="#">Forgot password?</a></span>
			 </div>



<?php

if(isset($_SESSION['error']))
{
  echo $_SESSION['error'];
}

?>
       </form>
     
      <div class="icons">
   <div id="main" style="display:inline; margin-left:670px; ">
        <a href="http://www.instagram.com/"/>
            <img src="http://www.bobslittlesportshop.com/wp-content/uploads/2015/08/instagram.png"  width="25" height="25" class="add" />
        
    </div>
    <div id="sec" style="display:inline; margin-left:670px; ">
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
    <div id="footerss">
         <br><br>Copyright &copy; 2017 ShopWithUs</br></br>
    </div>
     </body>
     
	 </html>