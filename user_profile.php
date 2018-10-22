<?php

  include('server.php');
  include('session.php');

 //unset ($_SESSION["update_profile"]);


  $user_id = $_SESSION["sess_userid"];

  $result_pro = mysqli_query($db, "SELECT * FROM user WHERE id= '$user_id'");
  $profile = mysqli_fetch_array($result_pro);
  
  $firstname = $profile['firstname'];
  $lastname = $profile['lastname'];
  $username = $profile['username'];
  $phone = $profile['phone'];
  $pro_image = $profile['image'];
  $present_location  = $profile['present_location'];
  $permanent_location = $profile['permanent_location'];
  $pro_id = $profile['id'];

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




.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}



</style>




<script type="text/javascript">
  
$(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });



</script>


<div class="panel panel-default container" style="margin-top: 150px;margin-bottom: 150px;">
  <div class="panel-heading">
    <span style="font-size: 25px;">My Profile > <span style=""><?php echo $username;?></span> 
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_profile" style="float:right;">Edit Profile</button>
    </span>
    
  </div>
  <div class="panel-body">
    <div class="box box-info">
      <div class="box-body">

      <form id="pic_update" method="post" action="user_img_update.php" enctype="multipart/form-data">
       <div class="col-md-2">
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name="image">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id='img-upload' src="user/assets/images/profile/<?php echo $pro_image;?>" class="img-responsive" />

            </div>
            <input type="submit" name="update_img" id="insert" value="Update" onclick="return validateimg()" class="btn btn-info"/>
        </div>
      </form>

<script type="text/javascript">
  function validateimg() {

  var img=document.forms["pic_update"]["image"].value;
  if (img==null || img=="")
   {
    alert('Please insert an image !');
    return false;
   }


  return( true );
  }
  
</script> 


      <div class="col-sm-6" style="margin-left: 20px;margin-top: 20px;">
        <div class="col-sm-5 col-xs-6"><h4 style="color:#00b1b1;"><?php echo $fullname;?> </h4></span>
        <span><p>User</p></span> 
        </div>  
        <div class="clearfix"></div>
        <hr style="margin:5px 0 5px 0;">
          
                    
        <div class="col-sm-5 col-xs-6 tital " >First Name:</div>
        <div class="col-sm-7 col-xs-6 "><?php echo $firstname ; ?> </div>
        <div class="clearfix"></div>
        <div class="bot-border"></div>

        <div class="col-sm-5 col-xs-6 tital " >Last Name:</div>
        <div class="col-sm-7"> <?php echo $lastname ; ?> </div>
        <div class="clearfix"></div>
        <div class="bot-border"></div>

        <div class="col-sm-5 col-xs-6 tital " >Contact no:</div>
        <div class="col-sm-7"> <?php echo $phone ; ?> </div>
        <div class="clearfix"></div>
        <div class="bot-border"></div>

        <div class="col-sm-5 col-xs-6 tital " >Present Address:</div>
        <div class="col-sm-7"> <?php echo $present_location ; ?> </div>
        <div class="clearfix"></div>
        <div class="bot-border"></div>

        <div class="col-sm-5 col-xs-6 tital " >Parmanent Address:</div>
        <div class="col-sm-7"> <?php echo $permanent_location ; ?> </div>
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
        <h4 class="modal-title">Edit Profile <span id="pro_result" style="float: right;color:red;"></span></h4>
      </div>
      <div class="modal-body">

    <div class="">
      <form id="pro_update" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>" required>

        <fieldset class="file-input">
          <span class="input-title">First Name</span> 
          <input placeholder="First Name" type="text" name="firstname" tabindex="1" value="<?php echo $firstname; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Last Name</span> 
          <input placeholder="Last Name" type="text" name="lastname" tabindex="1" value="<?php echo $lastname; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Phone No.</span> 
          <input placeholder="Phone" type="text" name="phone" tabindex="1" value="<?php echo $phone; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Present Address</span> 
          <input placeholder="Present Address" type="text" name="present_location" tabindex="1" value="<?php echo $present_location; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <span class="input-title">Parmanent Address</span> 
          <input placeholder="Parmanent Address" type="text" name="permanent_location" tabindex="1" value="<?php echo $permanent_location; ?>" required>
        </fieldset>

        <fieldset class="file-input">
          <input type="submit" name="save" id="insert" value="Save" class="btn btn-info" onclick="return update_validate()"/>
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


function update_validate() {



  var firstname=document.forms["pro_update"]["firstname"].value;
  if (firstname==null || firstname=="")
   {
    document.getElementById("pro_result").innerHTML = " Error : Firstname must be filled...";
    return false;
   }

  var lastname=document.forms["pro_update"]["lastname"].value;
  if (lastname==null || lastname=="")
   {
    document.getElementById("pro_result").innerHTML = " Error : Lastname must be filled...";
    return false;
   }

   var phone=document.forms["pro_update"]["phone"].value;
  if (phone==null || phone=="")
   {
    document.getElementById("pro_result").innerHTML = " Error : Phone No Required...";
    return false;
   }

   var present_location=document.forms["pro_update"]["present_location"].value;
  if (present_location==null || present_location=="")
   {
    document.getElementById("pro_result").innerHTML = " Error : Present Location Required...";
    return false;
   }

   var permanent_location=document.forms["pro_update"]["permanent_location"].value;
  if (permanent_location==null || permanent_location=="")
   {
    document.getElementById("pro_result").innerHTML = " Error : Permanent Location Required...";
    return false;
   }
   
  

 
  var elem = document.getElementById("edit_result");

  return( true );

       
}
  
</script> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
  $('#pro_update').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "user_profile_update.php",
      data: $(this).serialize(),    
      success: function(data){
        $('#pro_result').html(data);
      }         
    }).done(function() {
        $("#pro_update").trigger("reset");
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

