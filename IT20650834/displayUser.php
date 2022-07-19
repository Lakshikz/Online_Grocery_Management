<?php
  //include('config.php');
 require ("config.php");
 require_once("header.php");
?>
<!DOCTYPE html>
<head>
  <title>User Details Table</title>
  <style>
  body{
	background-image:url("images/vegetables.jpg");
	opacity:0.9; 
  }
  .card{
	display:flex;
	flex-direction:column;
	align-items: center;
	background:grey;
	height:fix;
	width:1500px;
    border-radius:25px;
    padding:20px 0px;
    
     
}
.container{
	display: flex;
	align-items: center;
	justify-content:center;
	margin:4rem 0;
	border-radius:25px;
	 
}
  </style>
</head>
<body>
   <div class="container">
    <div class="card">
    <h1><i><center> User Details Table</i> </h1> <br>
     <table border='2'>
	  
	<tr>
        <th>User ID</th>
        <th>User First Name</th>
        <th>User Last Name</th>
		<th>User Name</th>
        <th>Phone Number</th>
		<th>House No</th>
		<th>Street Name</th>
		<th>City</th>
		<th>Email Address</th>
		<th>User Password</th>
		<th>Update / Delete</th>
		
		
    </tr>
<?php
//Fetch all salary data from salary table
$sql= "SELECT * FROM user ";
$result = mysqli_query($conn, $sql);
 
if($result->num_rows > 0){
	 
      
	  
    while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>". $row['uid']. "</td>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['last_name'] . "</td>";
	  echo "<td>" . $row['username'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
	  echo "<td>" . $row['house_no'] . "</td>";
	  echo "<td>".$row['street_name']."</td>";
	  echo "<td>".$row['city']."</td>";
	  echo "<td>".$row['email_address']."</td>";
	  echo "<td>".$row['password']."</td>";
	  echo "<td><a href='UserProfile.php?uid=$row[uid]'>Edit</a> | <a href='userDelete.php?uid=$row[uid]'>Delete</a></td>";
      echo "</tr>";
}

//echo "</table>";

}else{
echo "no results";
}
 

?>
</table>

<hr border='3'>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <h1><center><i>Search User Data</i></center> </h1>
	
    Enter User Name :<input type="text" name="username">
    <input type="submit" value="Submit" name="btnSubmit">
    <input type="reset" value="Reset">
	<br>
	<h3>Results.....</h3>
	
</form>
<?php
    if(isset($_POST["btnSubmit"])){
		
         $username = $_POST["username"];
         $sql= "SELECT * FROM user where username LIKE '%$username%'";
		 
    if($result=$conn->query($sql)){
    if($result->num_rows > 0){
    echo ("<table border='1'>");
         while($row = $result->fetch_assoc()){
            echo ("<tr>");
            echo "<td>". $row['uid']. "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
			echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
	        echo "<td>" . $row['house_no'] . "</td>";
	        echo "<td>".$row['street_name']."</td>";
	        echo "<td>".$row['city']."</td>";
	        echo "<td>".$row['email_address']."</td>";
	        echo "<td>".$row['password']."</td>";
			echo "<td><a href='UserProfile.php?uid=$row[uid]'>Edit</a> | <a href='userDelete.php?uid=$row[uid]'>Delete</a></td>";
            echo ("<tr>");
}
echo ("</table>");
}
	}
	 
else{
echo "no results";
}
	}
?>
<br><br>
</div>
</div>
</html>
<?php
include_once('footer.php');
$conn ->close();

?>