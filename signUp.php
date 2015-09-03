<?php
//signUp.php
//Here is where I add a user in my database
//I validate the input, confirm that the password is written like it should be
//check if a user with the same username exists in the database
//if all checks out I will add the user in the database
//and redirect the user to his profile
require_once 'login.php';

$conn = new mysqli($servername, $username, $password, $database);

if(!$conn)
	die("Connection failed:" . mysqli_connect_error());


$myUsername = $_POST['Name'];
$myPassword = $_POST['Password'];
$myConfirm = $_POST['conPass'];

//check if the two passwords are the same
if($myPassword != $myConfirm){
	print "Your passwords don't match";
	header("refresh: 5; index.html");
}
else{
	//check username in database
	print "OK";
}





?>