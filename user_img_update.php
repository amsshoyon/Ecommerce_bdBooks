
<?php

  include('server.php');
  include('session.php');

 //unset ($_SESSION["update_profile"]);

  $user_id = $_SESSION["sess_userid"];

  $result_pro = mysqli_query($db, "SELECT * FROM user WHERE id= '$user_id'");
  $profile = mysqli_fetch_array($result_pro);
  $image = $profile['image'];
  $id = $profile['id'];


  if(isset($_POST['update_img'])){
    //path to store
    $target = "user/assets/images/profile/".basename($_FILES['image']['name']);
    
    //get all submitted data from the form
    $image = $_FILES['image']['name'];
    

    $img_update = mysqli_query($db, "UPDATE user SET image='$image' WHERE id=$id");
    
    if ($img_update === TRUE) {

      if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){

          header('location: user_profile.php');

        }else{

          $msg = "Failed to upload ... ";

        }

    } else {
        echo "Error updating record: ";
    }
    
    //move the uploaded image to folder

    
  }

  


?>
