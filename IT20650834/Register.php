<?php
require_once ("header.php");
?>
 
<html>
 <head>
    <title>Register </title>
	 <script src="js/myScript.js"> </script>
	<style>
body{
	background-image:url("images/logg.jpg");
	 
	 
}
.h1{
	text-shadow: 1px 1px 1px 3px #aaa;

}
.container{
	display: flex;
	align-items: center;
	justify-content:center;
	margin:4rem 0;
	border-radius:25px;
}
.card{
	display:flex;
	flex-direction:column;
	align-items: center;
	background:grey;
	height: 100%;
	width:600px;
    border-radius:25px;
    padding:20px 0px;
    opacity:0.8;
     
}

#btn1{
	margin: 12px 0;
	padding: 8px 70px;
	color:#000000;
	border:5;
	border-radius: 20px; 
}
 
    </style>
 </head>
   <body >
   	<div class="container">
  	<div class="card">
  		 
  	
     <h1 align="left" class="h1"> Sign up </h1>
     
	 <form action="addUser.php"    method="POST" onsubmit="return checkPassword()">
	 <label>First Name</label><br>
	 <input type="text"  name="first_name" style="width:500px;" placeholder="First Name" required> <br><br>
	 LastName<br>
	 <input type="text"  name="last_name" style="width:500px;" placeholder="Last Name"required><br><br>
	 UserName<br>
	 <input type="text"  name="username" style="width:500px;" placeholder="User Name"required><br><br>
	  Mobile Number<br>
	  <input type="text" name="phone" style="width:500px;" pattern="[0-9]{10}" placeholder="Mobile Number"required><br><br>
     House No or Lane*<br>
	  <input type="text"  name="house_no" style="width:500px;"  placeholder="House No or Lane*" required> <br><br>
      Street Name*<br>
	  <input type="text"  name="street_name" style="width:500px;" placeholder="Street Name*"required><br><br>
      City*<br>
	  <input type="text"  name="city" style="width:500px;" placeholder="City*"required><br><br>


	  Email Address<br>
	 <input type="text"  name="email_address" style="width:500px;" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" placeholder="Email" required><br><br>
	 
	  
	 Password<br>
	 <input type="password" id="pwd" name="password" style="width:500px;" pattern="[A-Za-z0-9]{5,8}" placeholder="Password" required><br><br>
	 Confirm Password<br>
	 <input type="password" id="rpwd" name="rpwd" style="width:500px;"  pattern="[A-Za-z0-9]{5,8}" placeholder="Confirm Password"required><br><br>
	  Accept privacy policy terms
	 <input type="checkbox" id="policy" name="policy" required onclick="enableButton()"><br><br>
	 
	 
	 <input type="submit" id="btn1" name="Submit" value="Register Now" disabled class="submit-btn">
	  
	 </form>

	 </div>
  	
  </div>

</body>
</html>
<?php
include_once('footer.php');
?>