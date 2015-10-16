<?php
session_start();

require_once 'login.php';
require_once 'helperFunctions.php';

$conn = new mysqli($servername, $username, $password, $database);

$myStatus = $_POST['status'];
$myUserID = $_SESSION['UserID'];

if(!isset($myStatus))
	print "Status wasn't set";


//Insert status into database
$query = "INSERT INTO statusupdates (Status, UserID) VALUES ('{$myStatus}', '{$myUserID}')";
$result = mysqli_query($conn, $query);







?>