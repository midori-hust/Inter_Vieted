<?php
	include "users.php";
	session_start();
	session_unset();
	session_destroy();
	Redirect("http://localhost/Inter_Vieted/FirstProject/index.php");
?>