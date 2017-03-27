<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<title>login</title>
</head>
<body>
    <?php
    mysql_connect("localhost","root","");
    mysql_select_db('testdb');
    $i="select * from example where email= '$_POST[name]'  ";
    $r=mysql_query($i);
    $z=mysql_fetch_assoc($r);

    if($z['Password']==$_POST['pwd'])
    {
    $_SESSION['name']=$z['Name'];
    header('location:userhome.php');
    }
    else{
    $_SESSION['error']="Invalid Username or Password";
    }
    ?>
	<h1>Hello</h1>
</body>
</html>