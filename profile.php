<?php
	session_start();
?>
<!-- This php file will render the profile of the users -->

<h1>Your profile </h1>

<?php
	if(isset($_SESSION['Username']))
		echo "<h2>Hello ${_SESSION['Username']}</h2>";
	else
		echo "Error";
?>