<?php
 require ("config.php");
  
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
        $uid=$_POST['uid'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$username = $_POST['username'];
		
	// update user data
	
	$result = mysqli_query($conn, "UPDATE user SET first_name='$first_name',last_name='$last_name',phone='$phone',password='$password',username='$username' WHERE uid='$uid';");
	
	// Redirect to homepage to display updated user in list
	header("Location:displayUser.php");
}

//$conn ->close();

?>
 <?php
//require_once ("header.php");
//include_once("config.php"); 

// Display selected user data based on id
// Getting id from url
$uid = $_GET['uid'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM user WHERE uid=$uid");

while($row = mysqli_fetch_array($result))
{
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$phone = $row['phone'];
	$password = $row['password'];	
	$username = $row['username'];

}

?>
<html>
<head>	
	<title>User Profile</title>
<style>
body{
	background-image:url("images/vegetables.jpg"); 
	opacity:0.9;
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
    
     
}

#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
} 
</style>
</head>

<body>
<div class="container">
<div class="card">
	<a href="index.php">Home</a>
	<br/><br/>
	 
	<h1><center><i>Update User Details..</i></center></h1>
	<form name="update_user" method="POST" action="UserProfile.php">
		 
			  <h4>
				 User First Name <br>
				 <input type="text" name="first_name" value=<?php echo $first_name;?>> <br><br>
			 
				 User Last Name <br>
				 <input type="text" name="last_name" value=<?php echo $last_name;?>> <br><br>
				 
			     Phone <br>
				 <input type="text" name="phone" value=<?php echo $phone;?>><br><br> 
			 
				 Password <br>
				 <input type="text" name="password" value=<?php echo $password;?>> <br><br>
				 
				 Username <br>
				 <input type="text" name="username" value=<?php echo $username;?>> <br><br>
				 
			    <input type="hidden" name="uid" value=<?php echo $_GET['uid'];?>> 
				 <input type="submit" name="update" value="Update"id="btn"> 
			 
		 </h4>
	</form>
	
	</div>
	</div>
</body>
</html>
<?php
$conn ->close();
  
?>