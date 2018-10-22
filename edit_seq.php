<?php

  include('server.php');
  include('session.php');





    $edit_username = $_POST['username'];
    $edit_email = $_POST['email'];
    $pass = $_POST['edit_pass_one'];
    $edit_id = $_POST['edit_id'];

      
   $edit_update = mysqli_query($db, "UPDATE user SET username='$edit_username', email='$edit_email', password='$pass' WHERE id=$edit_id");

    //echo "<span style='color:green;'> Security system is Updated... </span>";


//$edit_update = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($edit_update === TRUE) {
    echo "Security system is Updated";
} else {
    echo "Error updating record ";
}
  


?>
