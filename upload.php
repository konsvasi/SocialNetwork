<?php
session_start();

require_once 'login.php';

$conn = new mysqli($servername, $username, $password, $database);

$myUserID = $_SESSION['UserID'];


if(isset($_POST['btnUpload']))
{
	$fileTmp = $_FILES["fileImg"]["tmp_name"];
	$fileName = $_FILES["fileImg"]["name"];
	$filePath = "pictures/" . $fileName;

	move_uploaded_file($fileTmp, $filePath);

	$query = "INSERT INTO profilepictures (userId, imageName, imagePath) 
			VALUES ('$myUserID', '$fileName', '$filePath')";

	$result = mysqli_query($conn, $query);

	header("refresh: 1; login_success.php");
}



?>