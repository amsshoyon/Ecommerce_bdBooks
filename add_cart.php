<?php
	
include('server.php');

session_start();
if(!isset($_SESSION["sess_username"])){
	echo '<span style="color:red;">Please login/Register...</span>';
}
else{

	$user_name = $_SESSION["sess_username"] ;

	$product = "";
	$amount = "";
	$location = "";
	$priority = "";
	$id = 0;


	$product =$_POST['product'];
	$amount =$_POST['amount'];
	$location =$_POST['location'];
	$priority =$_POST['priority'];

	$query = "INSERT INTO $user_name (product, amount, location, priority) VALUES ('$product', '$amount', '$location', '$priority')";
	$results = mysqli_query($db, $query);
 echo "<span style='color:red;'>Added to cart...</span>";


}





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

