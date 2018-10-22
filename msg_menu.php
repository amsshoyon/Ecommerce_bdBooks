<?php
	
include('server.php');
if(!isset($_SESSION["sess_username"])){
	$num_cart ="";
	$user="";
	$id="";
	$image="";
	
}
else{
	$empty="";
	$user = $_SESSION["sess_username"];

	$cart_item_num = mysqli_query($db, "SELECT * FROM $user ");
	$num_cart = mysqli_num_rows($cart_item_num);



	$result_menu = mysqli_query($db, "SELECT * FROM $user LIMIT 9");

	if($num_cart == NULL){
	$empty="You did not add any Item to cart ";
	$empty_hide = "login";
	$empty_style= "padding: 20px;text-align: center;";
}


}




?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpiderWeb</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/slider.css" rel="stylesheet">
</head>

<body>

		<li class="cart-icon login <?php echo $logged_in; ?>">
			<i class="fa fa-envelope js-show-header-dropdown" style="font-size: 20px;padding: 5px;"></i>
			<span class="header-icons-noti"><?php echo $num_cart; ?></span>

			<!-- Header cart noti -->
			<div class="header-cart header-dropdown" style="width: 400px;overflow: hidden;padding: 0;margin: 0;">


				<div class=" <?php echo $logged_in; ?>" id="" >
					<div class="col-md-12 text-center" style="background-color: #009593;padding: 12px;">
						<a href="" style="color: #ffffff;">View All Messages</a>
					</div>
					<div class="messages" style="width:400px;padding: 20px;overflow-y: scroll;height: 400px;">
						<p style="float: left;text-align: right;width:90%;padding: 8px;border-radius: 10px;background: blue;color: white;">hi </p>
						<p style="float:right;text-align:left; width:90%;padding: 8px;border-radius: 10px;background: green;color: white">hellow </p>
						<p style="float: left;text-align: right;width:90%;padding: 8px;border-radius: 10px;background: blue;color: white;">What's Up ? </p>
						<p style="float:right;text-align:left; width:90%;padding: 8px;border-radius: 10px;background: green;color: white">Like a fog.. :( </p>
						<p style="float: left;text-align: right;width:90%;padding: 8px;border-radius: 10px;background: blue;color: white;">hi </p>
						<p style="float:right;text-align:left; width:90%;padding: 8px;border-radius: 10px;background: green;color: white">hellow </p>
						<p style="float: left;text-align: right;width:90%;padding: 8px;border-radius: 10px;background: blue;color: white;">What's Up ? </p>
						<p style="float:right;text-align:left; width:90%;padding: 8px;border-radius: 10px;background: green;color: white">Like a fog.. :( </p>
						<p style="float: left;text-align: right;width:90%;padding: 8px;border-radius: 10px;background: blue;color: white;">hi </p>
						<p style="float:right;text-align:left; width:90%;padding: 8px;border-radius: 10px;background: green;color: white">hellow </p>
						<p style="float: left;text-align: right;width:90%;padding: 8px;border-radius: 10px;background: blue;color: white;">What's Up ? </p>
						<p style="float:right;text-align:left; width:90%;padding: 8px;border-radius: 10px;background: green;color: white">Like a fog.. :( </p>
					</div>
					

					<div class="col-md-12" style="border-top: 1px solid #6C6D69;padding: 0px;margin: 0px;background-color: #EBEDEF;">
						<div  class="col-md-12">
						  <textarea type="text" name="message" placeholder="Write a message..." id="" value="" style=" margin:0 auto; height:70px;padding: 5px;width: 100%;border:none;background-color: transparent;margin: 0px;"></textarea>
						</div>
					</div>
				</div>
				


			<div class="<?php echo $login; ?>" style="text-align: center;">
				<p>Please Login First</p>
				<hr>
				<a href="user/user_login.php" class="btn btn-danger">Login</a>
			</div>
				
			</div>
		</li>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script >
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");

</script>

<!-- JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
