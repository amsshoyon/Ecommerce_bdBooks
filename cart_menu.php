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
			<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
			<span class="header-icons-noti"><?php echo $num_cart; ?></span>

			<!-- Header cart noti -->
			<div class="header-cart header-dropdown">

			<div class="<?php echo $logged_in; ?>">
				<div class="login" style="<?php echo $empty_style;?>"><?php echo $empty;?></div>
			<?php while($row_menu = mysqli_fetch_array($result_menu)){ ?>

		    	<?php

					$id = $row_menu['id'];
					$result_get = mysqli_query($db, "SELECT * FROM $user WHERE id = $id"); 

					$record_id = mysqli_fetch_array($result_get);

					$item = $record_id['product'];

					$result_info = mysqli_query($db, "SELECT * FROM books WHERE id = $item"); 
					$record_info = mysqli_fetch_array($result_info);

					$image = $record_info['image'];


				?>


				<div class="" style="display: inline-block;">
					<img src="images/books/<?php echo $image; ?>" class="" alt="" style="width:80px;height:100px;padding: 10px;display: inline-block;">
				</div>
			<?php } ?>
				

				<div class="">
					<div class="">
						<!-- Button -->
						<a href="all_carts.php" type="button" class="btn btn-success" style="width:100%;">
							View All Carts
						</a>
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


<!-- JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
