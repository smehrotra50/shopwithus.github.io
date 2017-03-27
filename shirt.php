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
	<div id="head" style="background-color: #64B681; margin-top: 0px; height: 100px; border: 2px;margin-right:-10px;" >
  <div id="header" style="border: 2px; height: 95px; width:215px;  background-image: url('http://res.cloudinary.com/nimishsrivastav/image/upload/v1483606618/logo_eclxm7.png');">
         <!--<img src="{!$Resource.shoppinglogo}" height="80px" width="175px"/>-->
  </div>
   
         <div id="apple" style="margin-top:-82px">
            <div id="button1"    style="color:white; margin-left:1200px;display:inline;">
            <?php
            if(isset($_SESSION['name']))
            {

            echo "<a href='logout.php' style='text-decoration:none;color:Black;'> Logout  </a>";
            echo $_SESSION['name'];
          
        }
        else
        {
          
           echo "<a href='login.php' style='text-decoration:none;color:Black;'> Login      </a>";
           
           echo "<a href='Register.php' style='text-decoration:none;color:Black;'>    Register  </a>";
        }
        ?>
</div>
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
                <a href="#" >Men Clothing <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="shirt.php"> Shirts </a></li>
                    <li><a href="Tshirt.php"> Tshirts </a></li>
                    <li><a href="Jeans.html"> Jeans </a></li>
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
 <table align="center">
 <tr>
 
    <td><a href="s1.html"><img src="images/s1.jpg" width="250px" height="300px"></br></br></br></br>
    Flying Machine Men's Casual Shirt</br></br></br></br></a>Rs.1452</td>
   
	<td><a href="s2.html"><img src="images/s2.jpg" width="250px" height="300px" ></br></br></br>
    Mufti Men's Checkered Casual Multicolor Shirt</br></br></br></br>
    </a>Rs.2099</td>
	<td><a href="s3.html"><img src="images/s3.jpg" width="250px" height="300px" ></br></br></br></br>GAS Men's Checkered Casual White, Red Shirt</br></br></br>


    </a>Rs.2194</td>
	
</tr>
	
	
	
	
	
<tr>
	<td><a href="s4.html"><img src="images/s4.jpg" width="250px" height="300px"></br></br></br></br>Rodid Men's Casual Shirt</br></br></br></br>


    </a>Rs.1099</td>
	<td><a href="s5.html"><img src="images/s5.jpg" width="250px" height="300px"></br></br></br></br>Highlander Men's Solid Casual Black Shirt</br></br></br></br>


    </a>Rs.700</td>
	<td><a href="s6.html"><img src="images/s6.jpg" width="250px" height="300px"></br></br></br></br>
    Mufti Men's Solid Casual Light Blue Shirt</br></br></br></br>
</a>

    Rs.1034</td>
</tr>
	
	
<tr>
	<td><a href="s7.html"><img src="images/s7.jpg" width="250px" height="300px"></br></br></br></br>
    Flying Machine Men's Casual Dark Blue Shirt</br></br></br></br>
</a>

    Rs.1079</td>
	<td><a href="s8.html"><img src="images/s8.jpg" width="250px" height="300px"></br></br></br></br>Lee Men's Checkered Casual Blue, Pink Shirt</br></br></br></br></a>


    Rs.948</td>
	<td><a href="s9.html"><img src="images/s9.jpg" width="250px" height="300px"></br></br></br></br>Jack & Jones Men's Printed Casual White Shirt</br></br></br></br>


    </a>Rs.1497</td>
</tr>
	
	
<tr>
	<td><a href="s10.html"><img src="images/s10.jpg" width="250px" height="300px"></br></br></br></br>Jack & Jones Men's Solid Casual Blue Shirt</br></br></br></br></a>


    Rs.2495</td>
</tr>
</table>

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
    
    <div id="contactus">
        <a href="ContactUs.php">Contact Us</a>
    </div>
    
    <div id="footersss">
         <p>Copyright &copy; 2017 ShopWithUs</p>
    </div>
     </body>
	 </html>
