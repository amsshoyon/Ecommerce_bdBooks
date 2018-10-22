<?php
	
$db = mysqli_connect('localhost', 'root', '', 'bd_books');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>