<?php
// include database connection file
require ("config.php");

// Get id from URL to delete that user
$uid = $_GET['uid'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM user WHERE uid=$uid");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:displayUser.php");

$conn ->close();
?>
