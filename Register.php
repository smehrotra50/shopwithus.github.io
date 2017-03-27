<!DOCTYPE html>

<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Registration page</title>
<link type="text/css" rel="stylesheet" href="logreg.css" /> 
<style>
  ul li ul 
  {
  text-align:center;
  }
  </style> 

<style>
body{
   background-color:#e6f2ff;
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
                  <a href ="#" style="padding: 5px 20px">  Handpicked <span > </span></a>
              
              </li>
          </ul>
      </nav>
  </div>
    <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                  <a href ="#" style="padding: 5px 20px"> Bestseller <span > </span></a>
                 
              </li>
          </ul>
      </nav>
  </div>
  
</div>
  </div>

   
     <form   method="post">
    <div class="container">
    <h1>Register</h1><br></br><br></br>
    <label><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	</br>
    <label><b>Email:</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required> 
    <label><b>Confirm Password:</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <label><br><b>Phone No: </b></br></label>
      <input type="phone" placeholder="Enter Phone" name="phone" required>
	  <br></br>
	  <input type="checkbox" checked="checked"> Remember me
	  <p>By creating an account you agree to our<a href="#">Terms & Privacy</a>.</p>
    <div class="clearfix">
	<button type="cancel" class="cancelbtns">Cancel</button>
   <button type="submit" class="signupbtn">Sign Up</button>
    </div>
    </div>
      <?php
  
      $servername = "localhost";
      $username = "root";
       $password = "";
       $dbname = "testdb";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      } 


      if (isset($_POST["name"]))
      {
      
        $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["psw"];
    $confirm=$_POST["psw-repeat"];
    $phone=$_POST["phone"];



  $sql = "INSERT INTO example VALUES ('$name','$email','$password','$confirm','$phone')";
      if($conn->query($sql))
     {
       echo ("<SCRIPT LANGUAGE='JavaScript'>
             window.alert('Succesfully Registered')
             </SCRIPT>");
     }
      else if ($conn->query($sql)== FALSE)
      {echo ("Username exists!");}
    
     }

     ?>
    

 </form>
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
  <div id="footerss">
         <br><br>Copyright &copy; 2016 ShopWithUs</br></br>
    </div>
</body>
</html>
 
     
