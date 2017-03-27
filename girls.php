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
  
 <table align="center">
 <tr>
 
    <td><a href="g1.html"><img src="images/g1.jpg" width="250px" height="300px"></br></br></br></br>
    


Allen Solly Junior Skinny Girls Jeans










</br></br></br>
    </a>Rs.974</td>
   
	<td><a href="g2.html"><img src="images/g2.jpg" width="250px" height="300px" ></br></br></br>
   

Hello Kitty T- shirt For Girls (Pink)

</br></br></br></br>
    </a>Rs.314</td>
	
	<td><a href="g3.html"><img src="images/g3.jpg" width="250px" height="300px" ></br></br></br></br>Nike Action Capri For Girls (Blue)








</br></br></br>
	</a>Rs.508</td>
	
</tr>
	
	
<tr>
	<td><a href="g4.html"><img src="images/g4.jpg" width="250px" height="300px"></br></br></br></br>

United Colors of Benetton T- shirt For Girls


</br></br></br></br>
    </a>Rs.398</td>
	
	<td><a href="g5.html"><img src="images/g5.jpg" width="250px" height="300px"></br></br></br></br>


UCB Skinny Fit Girls Blue Trousers

</br></br></br></br>
   </a>Rs.1199</td>
	
	<td><a href="g6.html"><img src="images/g6.jpg" width="250px" height="300px"></br></br></br></br>FS Mini Klub Kids Nightwear (Girls)

</br></br></br></br>
    </a>Rs.367</td>
	
</tr>
	
	
<tr>
	<td><a href="g7.html"><img src="images/g7.jpg" width="250px" height="300px"></br></br></br></br>
Burdy Full Sleeve Solid Girls Jacket

</br></br></br></br>
   </a>Rs.1195</td>
	
	<td><a href="g8.html"><img src="images/g8.jpg" width="250px" height="300px"></br></br></br></br>People Skinny Fit Girls Pink Trousers


</br></br></br></br>
    </a>Rs.489</td>
	
	<td><a href="g9.html"><img src="images/g9.jpg" width="250px" height="300px"></br></br></br></br>

FS Mini Klub Girls jacket


</br></br></br></br>
    </a>Rs.1049</td>
	
</tr>
	<tr>
	<td><a href="g10.html"><img src="images/g10.jpg" width="250px" height="300px"></br></br></br></br>



Frozen T- shirt For Girls (White)




</br></br></br></br>
   </a>Rs.356</td>
	
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