<?php

  include('server.php');
  include('session.php');

 //unset ($_SESSION["update_profile"]);


  $user_id = $_SESSION["sess_userid"];

  $result_pro = mysqli_query($db, "SELECT * FROM user WHERE id= '$user_id'");
  $profile = mysqli_fetch_array($result_pro);
  
  $firstname = $profile['firstname'];
  $lastname = $profile['lastname'];
  $edit_username = $profile['username'];
  $edit_email = $profile['email'];
  $phone = $profile['phone'];
  $pro_image = $profile['image'];
  $edit_id = $profile['id'];

  $fullname = $firstname.' '.$lastname ;


?>


<!DOCTYPE html>
<html class="no-js">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BdBooks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="font/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="dashboard/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="dashboard/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="dashboard/assets/css/style.css">

  
</head>
<body>

<?php include('menu.php');?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<style type="text/css">
    
  input.hidden {
    position: absolute;
    left: -9999px;
  }

  #profile-image1 {
    cursor: pointer;
    width: 100px;
    height: 100px;
    border:2px solid #03b1ce ;
  }
  .tital{ 
    font-size:16px; 
    font-weight:500;
  }
  .bot-border{ 
    border-bottom:1px #f8f8f8 solid;  
    margin:5px 0  5px 0;
  } 

</style>



</style>


<div class="panel panel-default container" style="margin-top: 150px;margin-bottom: 150px;">
  <div class="panel-heading">
    <span style="font-size: 25px;">My Profile > <span style=""><?php echo $user;?></span> 
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_profile" style="float:right;">Edit Setting</button>
    </span>
    
  </div>
  <div class="panel-body">
    <div class="box box-info">
      <div class="box-body">

        <div class="col-xs-1 col-sm-6 col-md-3">
            <img alt="User Pic" src="user/assets/images/profile/<?php echo $pro_image ; ?>" id="" class="img-responsive"> 
        </div>

        <div class="col-sm-6">
          <div class="col-sm-5 col-xs-6">
            <h4 style="color:#00b1b1;"><?php echo $fullname;?> </h4></span>
            <span><p>User</p></span>            
          </div>
          <div class="clearfix"></div>
          <hr style="margin:5px 0 5px 0;">
              
                        
          <div class="col-sm-5 col-xs-6 tital " >Username:</div>
          <div class="col-sm-7 col-xs-6 "><?php echo $edit_username ; ?> </div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Email:</div>
          <div class="col-sm-7"> <?php echo $edit_email ; ?> </div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Phone:</div>
          <div class="col-sm-7"> <?php echo $phone ; ?> </div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>
         </div>

      </div>
    </div>
  </div> 
</div>


<style type="text/css">
  
  .file-input input{
    border:1px solid #DBDDE0;
    border-radius: 5px;
    width:96%;
    float: right;
  }
  .file_input span{
    display: inline-block;
  }
.input-title{
  font-size: 18px;
  font-family: time romans;
  padding: 8px;
}

</style>


<div id="edit_profile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile<span style="color:red;float: right" id="edit_result"></span></h4>
      </div>
      <div class="modal-body">

    <div class="">
      <form id="edit_form" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>" required>

        <fieldset class="file-input">
          <span class="input-title">Username</span> 
          <input placeholder="User Name" type="text" name="username" tabindex="1" value="<?php echo $edit_username; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Email</span> 
          <input placeholder="Email" type="text" name="email" tabindex="1" value="<?php echo $edit_email; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Password</span> 
          <input placeholder="Password" type="password" name="edit_pass_one" tabindex="1" value="" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Confirm Password</span> 
          <input placeholder="Confirm Password" type="password" name="edit_pass_two" tabindex="1" value="" required>
        </fieldset>

        <fieldset class="file-input">
          <input type="submit" name="save" id="insert" value="Save" class="btn btn-info" onclick="return myfn()"/>
        </fieldset>
      </form>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">


function myfn() {

   
   var username=document.forms["edit_form"]["username"].value;
  if (username==null || username=="")
   {
    document.getElementById("edit_result").innerHTML = " Error : username must be filled...";
    return false;
   }
   
  var x = document.forms["edit_form"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
  
  
  var b=document.forms["edit_form"]["email"].value;
  if (b==null || b=="")
   {
    document.getElementById("edit_result").innerHTML = " Error : Email field must be filled...";
    return false;
   }else{
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
      document.getElementById("edit_result").innerHTML = " Error : Please Enter a valid Email Address .........";
      return false;
    }
   }
   
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById("edit_result").innerHTML = " Error : Please Enter a valid Email Address .........";
        return false;
    }
   
  
   var pass_one=document.forms["edit_form"]["edit_pass_one"].value;
  if (pass_one==null || pass_one=="")
   {
    document.getElementById("edit_result").innerHTML = " Error : Password must be filled...";
    return false;
   }
   
   var pass_two=document.forms["edit_form"]["edit_pass_two"].value;
   if (pass_one != pass_two)
   {
    document.getElementById("edit_result").innerHTML = " Error : Password must be Same...";
    return false;
   }

 
  var elem = document.getElementById("edit_result");

  return( true );

       
}
  
</script> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
  $('#edit_form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "edit_seq.php",
      data: $(this).serialize(),    
      success: function(data){
        $('#edit_result').html(data);
      }         
    }).done(function() {
        $("#edit_form").trigger("reset");
      });
  });
</script>

<?php include('footer.php');?>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/animsition.min.js"></script>
<script src="js/cart.js"></script>

  <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>

</body>
</html>

