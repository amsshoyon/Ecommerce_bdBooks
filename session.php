<?php

$login="";
$logged_in="";


session_start();
if(!isset($_SESSION["sess_username"])){

	$login='visible';
	$logged_in="hidden";
}
else{

	$login='hidden';
	$logged_in="visible";
}






?>