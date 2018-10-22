<?php
	
include('server.php');
session_start();
//im=nitializing variable
$firstname = "";
$lastname = "";
$username = "";
$email = "";
$password = "";
$phone = "";
$id = 0;


$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$email =$_POST['email'];
$password =$_POST['pass_one'];
$phone =$_POST['phone'];

$sql_u = "SELECT * FROM user WHERE username='$username'";
$sql_e = "SELECT * FROM user WHERE email='$email'";
$res_u = mysqli_query($db, $sql_u);
$res_e = mysqli_query($db, $sql_e);

if (mysqli_num_rows($res_u) > 0) {
	echo "<span style='color:red;'>Sorry !! Username already exists...</span>";
}else if(mysqli_num_rows($res_e) > 0){
	echo "<span style='color:red;'>Sorry !! Email already exists...</span>";
}else{
$query = "INSERT INTO user (firstname, lastname, username, email, password, phone) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$phone')";
$results = mysqli_query($db, $query);

$table_name = $username;

$sql = "CREATE TABLE $table_name (
	id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	product VARCHAR(20),
	amount VARCHAR(30),
	location VARCHAR(200),
	priority VARCHAR(50)
)";
if ($db->query($sql) === TRUE) {
    echo "<span style='color:green;'> Thank you , You are successfully registered... </span>";
} else {
    echo "Error creating table: " . $db->error;
}

//if ($db->query($results) === TRUE) {

//	$table_name = $username;

//	$sql = "CREATE TABLE $table_name (
//	id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//	product VARCHAR(20),
//	amount VARCHAR(30),
//	location VARCHAR(200),
//	priority VARCHAR(50)
//	)";
//
//	if ($db->query($sql) === TRUE) {
//		echo "<span style='color:green;'> Thank you , You are successfully registered... </span>";
//		echo "<span style='color:green;'> Go back to <a href='user_login.php'>login </a></span>";
//	} else {
//		mysqli_query($db, "DELETE FROM user WHERE username=$username");
//	    echo "Registration Failed... ! (C/T) " . $db->error;
//	}

//
//} else {
 //   echo "Registration Failed... ! (I/T) " . $db->error;
//}







$db->close();















   

}
  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

