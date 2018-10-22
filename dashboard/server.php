<?php
	$db = mysqli_connect('localhost', 'root', '', 'bd_books');

	session_start();
    if(!isset($_SESSION["sess_admin"])){
    		header('location: error-404.php');
	}
?>
