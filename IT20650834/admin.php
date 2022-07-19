<?php
require_once("header.php");
?> 
<!DOCTYPE html>
<html>
<head>
	 
	<title>Admin Profile</title>
	 
	<style>
body{
	background-image:url("images/ad.jpg");
	 
	 
}
table { border-collapse: collapse;}
	   td, th { border: 1px solid white; padding:5px;}
	   ul.menu
 
{
	list-style-type: none;
	margin: 0;
	padding: 0;
	background-color:#333;
	overflow:hidden;
}

li.menu
{
	float:left;
}

li a
{
	display: block;
	color: white;
	text-align:center;
	padding: 14px 16px;
	text-decoration:none;
}

li a:hover
{
	background-color: #111;
}
#A{
	background-image: url('Images/fun.jpg');
	bacground-position: center;
	background-size: cover;
	margin-top:40px;

}
 
	</style>
</head>
<div id="A">
<body>
	<center>
       <h1 style="color:white;text-align:center;font-size:60px;">  Admin Page</font></h1>
 </center>
	<ul class="menu">
 	 <li class="menu"><a href="index.php">Home</a></li>
	 <li class="menu"><a href="">Feedback</a></li>
	 <li class="menu"><a href="">Supplier</a></li>
	 <li class="menu"><a href="">Products</a></li>
    <li class="menu"><a href="displayUser.php">UserDetails</a></li>
 </ul>
 <br><br><br> 
  <h1><center><font color="white">Welcome to Admin Page!!!!</font></center></h1>
<br><br><br>
 <?php
  require_once("footer.php");
 ?>
 
 </body>
</html>