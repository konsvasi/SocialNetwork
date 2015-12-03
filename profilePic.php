<?php
//In this file we will retrieve the users profile picture and display it on his profile
//session_start();

require_once 'login.php';

$myUserID = $_SESSION['UserID'];

$conn = new mysqli($servername, $username, $password, $database);

$query = "SELECT imagePath FROM profilepictures WHERE  UserID='{$myUserID}' AND isProfilePicture = '1'";
$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);

if($count > 0){
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$profilePicture = $row['imagePath'];
		//echo $profilePicture;
	}

}

?>