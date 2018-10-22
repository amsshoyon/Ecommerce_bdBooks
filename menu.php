<?php

  include('server.php');

if(!isset($_SESSION["sess_userid"])){

  $user_id ="";
}
else{

  $user_id = $_SESSION["sess_userid"];

  $result_pro = mysqli_query($db, "SELECT * FROM user WHERE id= '$user_id'");
  $profile = mysqli_fetch_array($result_pro);
  
  $user_image = $profile['image'];

  if($user_image == null){
    $user_image ='default.png';
  }


}


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

	


</head>
<body>


 <header class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="top-nav">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class=""><span class="fa fa-phone"></span> <b>: +880-1722-937278</b></span></a></li>
        <li><a href="#"><span class=""><span class="fa fa-envelope"></span> <b>: amsshoyon@gmail.com</b></span></a></li>
         </ul>

      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
        <li><a href="" class="">About Us</a></li>
        <li><a data-toggle="modal" data-target="#contact">Contact Us</a></li> 
      </ul>
      

      </div>
      <!-- left nav top -->

    </div>
  </nav>
  <!-- down nav -->
 <nav class="navbar navbar-default navbar-static-top navbar-bottom" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">BDbooks</a>
    </div>
    <div class=" collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="activee"><a href="all_books.php">All Books</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catagories<b class="caret"></b></a> 
          <ul class="dropdown-menu">
            <li><a href="all_books.php?id=Fiction">Fiction</a></li>
            <li><a href="all_books.php?id=Drama">Drama</a></li>
            <li><a href="all_books.php?id=Poetry">Poetry</a></li>
            <li><a href="all_books.php?id=Political">Political</a></li>
            <li><a href="all_books.php?id=Adventure">Adventure</a></li>
            <li><a href="all_books.php?id=Biography">Biography</a></li>
            <li><a href="all_books.php?id=Mystery">Mystery</a></li>
            <li><a href="all_books.php?id=Child">Child</a></li>
            <li><a href="all_books.php?id=Horror">Horror</a></li>
            <li><a href="all_books.php?id=Others">Others</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Author<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="all_books.php?id=Humayun_Ahmed">Humayun Ahmed</a></li>
            <li><a href="all_books.php?id=Rabindranath_Tagore">Rabindranath Tagore</a></li>
            <li><a href="all_books.php?id=Humayun_Azad">Humayun Azad</a></li>
            <li><a href="all_books.php?id=Abdul_Hakim">Abdul Hakim</a></li>
            <li><a href="all_books.php?id=Ahsan_Habib">Ahsan Habib</a></li>
            <li><a href="all_books.php?id=Begum_Rokeya">Begum Rokeya</a></li>
            <li><a href="all_books.php?id=Imdadul_Haq_Milon">Imdadul Haq Milon</a></li>
            <li><a href="all_books.php?id=Jahanara_Imam">Jahanara Imam</a></li>
            <li><a href="all_books.php?id=Jahir_Raihan">Jahir Raihan</a></li>
            <li><a href="all_books.php?id=Kazi_Nazrul_Islam">Kazi Nazrul Islam</a></li>
            <li><a href="all_books.php?id=Mir_Mosharraf_Hossain">Mir Mosharraf Hossain</a></li>
            <li><a href="all_books.php?id=M_Sakhawat_Hossain">M Sakhawat Hossain</a></li>
            <li><a href="all_books.php?id=Munir_Chowdhury">Munir Chowdhury</a></li>
            <li><a href="all_books.php?id=Taslima_Nasrin">Taslima Nasrin</a></li>
            <li><a href="all_books.php?id=Muhammed_Zafar_Iqbal">Muhammed Zafar Iqbal</a></li>
          </ul>
        </li>

        <li><a data-toggle="modal" data-target="#contact"">Contact Us</a></li>
      </ul>

    <ul class="nav navbar-nav hidden-xs pull-right cart-menu">
      <li class="search">
      <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
      <button type="submit" class="btn btn-primary btn-sm">Search</button>
    </li>
    <li><span class="linedivide1"></span></li>

    <li  class="dropdown">
      <a href="#" class="dropdown-toggle <?php echo $login; ?>" data-toggle="dropdown">
        <img src="images/icons/icon-header-01.png" class="login" alt="ICON">
      </a>
      <a href="#" class="dropdown-toggle <?php echo $logged_in; ?>" data-toggle="dropdown">
        <img src="user/assets/images/profile/<?php echo $user_image; ?>" class="logged_in" alt="ICON" style="width: 30px;height:30px;border-radius: 50%;margin-top: 0px;">
      </a>
      <ul class="dropdown-menu">
          <li class="<?php echo $login; ?>"><a href="user/user_registration.php">Sign Up</a></li>
          <li class="<?php echo $login; ?>"><a href="user/user_login.php">Login</a></li>
          <li class="<?php echo $logged_in; ?>"><a href="user_profile.php">View Profile</a></li>
          <li class="<?php echo $logged_in; ?>"><a href="edit_profile.php">Profile Settings</a></li>
          <li class="<?php echo $logged_in; ?>"><a href="all_carts.php">My Products</a></li>
          <li class="<?php echo $logged_in; ?>"><a href="user/logout.php">Logout</a></li>

      </ul>

    </li> 
    <li><span class="linedivide1 <?php echo $logged_in; ?>"></span></li>
    
    <?php include('cart_menu.php'); ?>

    <li><span class="linedivide1 <?php echo $logged_in; ?>"></span></li>

    <?php include('msg_menu.php'); ?>



    </ul>

    </div>
    <!-- /.navbar-collapse -->

    </div>


  </nav>


</header> 
<?php include('message.php'); ?>

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

