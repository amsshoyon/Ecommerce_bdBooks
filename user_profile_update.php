

<?php

  include('server.php');
  include('session.php');

 //unset ($_SESSION["update_profile"]);


  $user_id = $_SESSION["sess_userid"];

  $result_pro = mysqli_query($db, "SELECT * FROM user WHERE id= '$user_id'");
  $profile = mysqli_fetch_array($result_pro);
  $id = $profile['id'];



  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $present_location  = $_POST['present_location'];
  $permanent_location = $_POST['permanent_location'];

    
  $profile_update = mysqli_query($db, "UPDATE user SET firstname='$firstname', lastname='$lastname', phone='$phone', present_location ='$present_location ' , permanent_location='$permanent_location' WHERE id=$id");
  
  if ($profile_update === TRUE) {
      echo "Profile Updated..";
  } else {
      echo "Error updating record: ";
  }

?>