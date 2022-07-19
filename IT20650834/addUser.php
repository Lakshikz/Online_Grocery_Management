 <?php
// import database connection file
include('config.php');

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$house_no = $_POST['house_no'];
		$street_name = $_POST['street_name'];
		$city = $_POST['city'];
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];
		
		// Insert user data into user table
		$result = mysqli_query($conn, "INSERT INTO user(first_name, last_name,username,phone,house_no,street_name,city,email_address,password) VALUES('$first_name','$last_name','$username','$phone','$house_no','$street_name','$city','$email_address','$password')");
		
		// Show message when user added
	//echo "User added successfully. <a href='index.php'>Welcome to Home Page</a>";
	header("Location:index.php");
	}
$conn ->close();
?>
	
 