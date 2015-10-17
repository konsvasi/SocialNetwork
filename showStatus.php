<?php
//session_start();
require_once 'login.php';

$myUserID = $_SESSION['UserID'];

$conn = new mysqli($servername, $username, $password, $database);

$query = "SELECT Status FROM statusupdates WHERE UserID='{$myUserID}' ORDER BY timestamp DESC";
$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);

if(!$result)
	die("Invalid query: " . mysqli_error());

if($count > 0){
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<p id='status'>${row['Status']}</p>";
		echo "<br>";
	}

}

?>