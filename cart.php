

<!DOCTYPE html>
<html class="no-js">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BdBooks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <link rel="stylesheet" href="font/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/menu.css">

    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <link rel="stylesheet" type="text/css" href="css/product-details.css">

  


</head>
<body>

<style type="text/css">
	
.fade{
	background:transparent;
}
.modal{
	background:rgba(1,1,1,0.5);
}



</style>

<div id="add_cart<?php echo $row['id']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width: 70%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add to Cart</h4>
			</div>
			<div class="modal-body">

			<form class="" id="cart_form<?php echo $row['id']; ?>" method="post" action="">
				<div class="col-md-12" style="background-color: #fff;padding-top: 20px;padding-bottom: 20px;">

					<div class="col-xs-1 col-sm-6 col-lg-6 product-item">
						<div class="" style="padding:15px;">
							<div class="item-slick2 p-l-15 p-r-15">
								<div class="">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/books/<?php echo $row['image']; ?>" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Add to Cart</button>
											</div>
										</div>
									</div>
									<div class="item_details"><?php echo $row['name']; ?>
										<span class="item_price">
											<?php echo $row['price']; ?> tk
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-1 col-sm-6 col-lg-6 product-item">
					  <div class="" style="padding:15px;">
					    <div class="">
					      <!-- Block2 -->
					      <div class="">
					        <div class="item_name">
					         <?php echo $row['name']; ?>
					          <span class="item_price"><?php echo $row['price']; ?>tk</span>
					        </div> 
					        <hr>
					        <p class="short_note"><?php echo $row['desp']; ?></p>
					        <hr>
					        <h4>Avability : <?php echo $row['amount']; ?></h4>


					        <input type="hidden" name="product" value="<?php echo $row['id']; ?>">
					    	

					        <div class="<?php echo $logged_in; ?>">
					          <div>Location </div> 
					          <div>
					            <select class="classic" name="location">
					              <option value="Inside Dhaka City">Inside Dhaka City</option>
					              <option value="Outside Dhaka City">Outside Dhaka City</option>
					            </select>
					          </div>
					        </div>
					        <br>

					        <div class="<?php echo $logged_in; ?>">
					          <div>Priority </div> 
					          <div>
					            <select class="classic" name="priority">
					              <option value="High">High</option>
					              <option value="Medium">Medium</option>
					              <option value="As Usual">As Usual</option>
					            </select>
					          </div>
					        </div>
					        <br>

					        <div class="<?php echo $logged_in; ?> classic">
					          <div class="">Amount </div> 
					          <div>
					            <input type="number" size="4" class="quantity-text" title="Qty" name="amount" value="1" >
					          </div>
					        </div>
					        <br>

					        <button type="submit" class="add-cart btn btn-primary <?php echo $logged_in; ?>" onclick="return add()">
					          Add to Cart
					        </button>

					        <div id="result<?php echo $row['id']; ?>" class="col-md-12" style="padding: 20px;font-size: 25px;"></div>
					       
					      </div>
					    </div>
					  </div>
					</div>
				</div>	

			</form>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
  function add(){

  var del=confirm("Are you sure to add this book to cart ?");
  if (del==true){

  	return true;


  }
  return false;
  }
</script>


<script>
	$('#cart_form<?php echo $row['id']; ?>').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "add_cart.php",
			data: $(this).serialize(),		
			success: function(data){
				$('#result<?php echo $row['id']; ?>').html(data);
			}					
		}).done(function() {
				$("#cart_form<?php echo $row['id']; ?>").trigger("reset");
			});
	});
</script>
	


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/animsition.min.js"></script>
<script src="js/cart.js"></script>

  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script src="js/product.js"></script>
</body>
</html>



