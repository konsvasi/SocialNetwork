<?php
	//File with functions used on different files

	//function to sanitize input
	function sanitize($conn, $val){
		$val = stripslashes($val);
		$val = mysqli_real_escape_string($conn, $val);
	}



?>