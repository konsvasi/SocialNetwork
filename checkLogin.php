<?php
//checkLogin.php
//Here is where I authenticate my users and if successfull I will show them their profile
require_once 'login.php';

$conn = new mysqli($servername, $username, $password, $database);

if(!$conn)
	die("Connection failed:" . mysqli_connect_error());

//Values from form
$myUsername = $_POST['Name'];
$myPassword = $_POST['Password'];

//sanitize input
sanitize($conn, $myUsername);
sanitize($conn, $myPassword);

//Query to see if user is in database
$query = "SELECT * FROM members WHERE Username='$myUsername' AND Password='$myPassword'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

$count = mysqli_num_rows($result);

//if the username and passwords match then there will be 1 row returned
if($count == 1){
	//session_register("myUsername");
	//session_register("myPassword");
	header("location:login_success.php");
}
else{
	echo "Wrong username or password";
}





//function to sanitize input
function sanitize($conn, $val){
	$val = stripslashes($val);
	$val = mysqli_real_escape_string($conn, $val);
}

?>