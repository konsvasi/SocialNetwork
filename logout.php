<?php
	if (!isset($_SESSION))
  {
    session_start();
  }

	session_destroy();
	header("refresh: 0; index.html");

?>