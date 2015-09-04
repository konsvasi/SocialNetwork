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
	//check if username already exists in database
	$query = "SELECT * FROM members WHERE Username='$myUsername'";
	$result = mysqli_query($conn, $query);

	$count  = mysqli_num_rows($result);

	if($count == 0){
		//username doesn't exist in database add
		//add user
		$query ="INSERT INTO members (Username, Password) VALUES ('{$myUsername}', '{$myPassword}')";
		$result = mysqli_query($conn, $query);

		//if some error occurs with the query I will print out the error message provided by mySQL
		if(!$result)
			die("Invalid query: " . mysqli_error());
		else{
			print "You are now a member or The Social Network";
			header("refresh: 5; login_success.php");
		}

	}
	else {
		print "Username already exists";
		header("refresh: 5; index.html");
	}

}





?>