<?php
	session_start();
?>
<!-- This php file will render the profile of the users -->

<div id="nav">
<ul>
	<li><a href="#">Profile</a></li>
	<li><a href="#">Photos</a></li>
	<li><a href="#">Messages</a></li>
</ul>
</div>

<div>
	<img id="profilePic" src="pictures/default_profile.jpg" alt="Profile picture"/>


<?php
	if(isset($_SESSION['Username']))
		echo "<h2 id='userName'>${_SESSION['Username']}</h2>";
	else
		echo "Error";
?>
</div>