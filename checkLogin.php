<?php
//checkLogin.php
//Here is where I authenticate my users and if successfull I will show them their profile
require_once 'login.php';
require_once 'helperFunctions.php';

$conn = new mysqli($servername, $username, $password, $database);

if(!$conn)
	die("Connection failed:" . mysqli_connect_error());

//Values from form
$myUsername = $_POST['Name'];
$myPassword = $_POST['Password'];

//sanitize input
sanitize($conn, $myUsername);
sanitize($conn, $myPassword);

/*
//Query to see if user is in database
$isCorrectPassword = password_verify($myPassword, $hashedPass);

$query = "SELECT * FROM members WHERE Username='$myUsername' AND Password='$isCorrectPassword'";
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
*/

$query = "SELECT * FROM members WHERE Username='$myUsername'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if($count == 1){
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	print "hashedPass = ${row['Password']} <br />";
	print "myPassword: " . $myPassword . "<br />";
	if(password_verify($myPassword, $row['Password'])){
		print "Password match";
		header("refresh: 5; login_success.php");
	}
else
	print "The username or password do not match";
}

?>