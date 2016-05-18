<?php
	include_once 'connect.inc.php';
	include_once 'filters.php';
	session_destroy();
	header('Location:../login.php');
?>