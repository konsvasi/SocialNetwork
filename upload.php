<?php
session_start();

require_once 'login.php';

$conn = new mysqli($servername, $username, $password, $database);

$myUserID = $_SESSION['UserID'];


if(isset($_POST['btnUpload']))
{
	//query to change the old profile picture
    //Replace the isProfilePicture field of the old profile picture with 0 while the new one will be set to 1
	$changePic = "UPDATE profilepictures SET isProfilePicture ='0' WHERE isProfilePicture = '1'";
	$resultPic = mysqli_query($conn, $changePic);

	$fileTmp = $_FILES["fileImg"]["tmp_name"];
	$fileName = $_FILES["fileImg"]["name"];
	$filePath = "pictures/" . $fileName;
	$makeProfilePicture = 1;

	move_uploaded_file($fileTmp, $filePath);

	$query = "INSERT INTO profilepictures (userId, imageName, imagePath, isProfilePicture) 
			VALUES ('$myUserID', '$fileName', '$filePath', '$makeProfilePicture')";

	


	$result = mysqli_query($conn, $query);

	header("refresh: 1; login_success.php");
}



?>