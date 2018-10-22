<?php
	
include('server.php');

include ('session.php'); 

$user=$_SESSION["sess_username"];

$result_cart = mysqli_query($db, "SELECT * FROM $user");


//$result = mysqli_query($db, "SELECT * FROM $user LIMIT 5");
	

//delete data
if(isset($_GET['dell'])){
	$id_del = $_GET['dell'];
	mysqli_query($db, "DELETE FROM $user WHERE id=$id_del");
	header('location: all_carts.php');
}
	



?>



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

  


</head>
<body>

<?php include('menu.php');?>


<!--Container  -->
<style type="text/css">
  .product_catagory span{
      font-size: 30px;
      font-family: time romans;
      margin-left: -15px;
  }
  .product-item{
    margin-top: 30px;
  }
  .item_details{
    font-size: 20px !important;
    font-family: time new romans;
  }
  .item_price{
    font-size: 25px !important;
    font-family: time new romans;
    font-weight: 700;
    float: right;
  }
  .product{
    margin-top: 100px;
  }

  @media (max-width: 440px){
  .catagory-menu {
    display: none;
  }
  .product{
    margin-top: 50px;
  }
</style>

<section class="container-fluid product">

  <div class="col-xs-12 col-sm-4 col-lg-2 catagory-menu">
    <div>
      <div class="product_catagory">
        <span>By Catagories</span>
        <div class="list-group">
          <a href="all_books.php?id=Fiction" class="list-group-item list-group-item-action">Fiction</a>
          <a href="all_books.php?id=Drama" class="list-group-item list-group-item-action">Drama</a>
          <a href="all_books.php?id=Poetry" class="list-group-item list-group-item-action">Poetry</a>
          <a href="all_books.php?id=Political" class="list-group-item list-group-item-action">Political</a>
          <a href="all_books.php?id=Adventure" class="list-group-item list-group-item-action">Adventure</a>
          <a href="all_books.php?id=Biography" class="list-group-item list-group-item-action">Biography</a>
          <a href="all_books.php?id=Mystery" class="list-group-item list-group-item-action">Mystery</a>
          <a href="all_books.php?id=Child" class="list-group-item list-group-item-action">Child</a>
          <a href="all_books.php?id=Horror" class="list-group-item list-group-item-action">Horror</a>
          <a href="all_books.php?id=Others" class="list-group-item list-group-item-action">Others</a>
        </div>
      </div>
      
      <div class="product_catagory">
        <span>By Authors</span>
        <div class="list-group">
          <a href="all_books.php?id=Humayun_Ahmed" class="list-group-item list-group-item-action">Humayun Ahmed</a>
          <a href="all_books.php?id=Rabindranath_Tagore" class="list-group-item list-group-item-action">Rabindranath_Tagore</a>
          <a href="all_books.php?id=Humayun_Azad" class="list-group-item list-group-item-action">Humayun_Azad</a>
          <a href="all_books.php?id=Abdul_Hakim" class="list-group-item list-group-item-action">Abdul_Hakim</a>
          <a href="all_books.php?id=Ahsan_Habib" class="list-group-item list-group-item-action">Ahsan_Habib</a>
          <a href="all_books.php?id=Begum_Rokeya" class="list-group-item list-group-item-action">Begum_Rokeya</a>
          <a href="all_books.php?id=Imdadul_Haq_Milon" class="list-group-item list-group-item-action">Imdadul_Haq_Milon</a>
          <a href="all_books.php?id=Jahanara_Imam" class="list-group-item list-group-item-action">Jahanara_Imam</a>
          <a href="all_books.php?id=Jahir_Raihan" class="list-group-item list-group-item-action">Jahir_Raihan</a>
          <a href="all_books.php?id=Kazi_Nazrul_Islam" class="list-group-item list-group-item-action">Kazi_Nazrul_Islam</a>
          <a href="all_books.php?id=Mir_Mosharraf_Hossain" class="list-group-item list-group-item-action">Mir_Mosharraf_Hossain</a>
          <a href="all_books.php?id=M_Sakhawat_Hossain" class="list-group-item list-group-item-action">M_Sakhawat_Hossain</a>
          <a href="all_books.php?id=Munir_Chowdhury" class="list-group-item list-group-item-action">Munir_Chowdhury</a>
          <a href="all_books.php?id=Taslima_Nasrin" class="list-group-item list-group-item-action">Taslima_Nasrin</a>
          <a href="all_books.php?id=Muhammed_Zafar_Iqbal" class="list-group-item list-group-item-action">Muhammed_Zafar_Iqbal</a>
        </div>
      </div>
    </div>
  </div>

 
  <div class="col-xs-12 col-sm-8 col-lg-10 product-item">

    <div class="col-md-12" style="padding: 10px;margin-top: -15px;">
      <h3>All Carts</h3>
      <hr>
    </div>


    <?php while($row_cart = mysqli_fetch_array($result_cart)){ ?>

    	<?php

			$id = $row_cart['id'];
			$result_get = mysqli_query($db, "SELECT * FROM $user WHERE id = $id"); 

			$record_id = mysqli_fetch_array($result_get);

			$item = $record_id['product'];
			$amount = $record_id['amount'];

			$result_info = mysqli_query($db, "SELECT * FROM books WHERE id = $item"); 
			$record_info = mysqli_fetch_array($result_info);

			$image = $record_info['image'];
			$name = $record_info['name'];
			$price = $record_info['price'];


		?>
      <div class="col-md-3" style="padding:15px; height:480px;">
        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="">
            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
              <img src="images/books/<?php echo $image; ?>" alt="IMG-PRODUCT" style="width:100%; height:400px;overflow: hidden;">

              <div class="block2-overlay trans-0-4">
                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                </a>

                <div class="block2-btn-addcart trans-0-4">
                  <!-- Button -->
                  <a href="all_carts.php?dell=<?php echo $id;?>" class="hov1 btn btn-primary col-md-6" onclick="return deleletconfig()" style="width: 200px !important;">Delete From Cart</a>
                  <a href="book_details.php?id=<?php echo $item; ?>" class="hov1 btn btn-success col-md-6"  style="width: 200px !important;">View Details</a>
                </div>
              </div>
            </div>
            <div class="item_details">
              <a href="book_details.php?id=<?php echo $item; ?>" class=""><?php echo $name; ?></a>
              <span class="item_price">
                <?php echo "$amount * $price"; ?> tk
              </span>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>

</section>

<script>
	function deleletconfig(){

	var del=confirm("Are you sure you want to delete this record?");
	if (del==true){
	   alert ("record deleted")
	}
	return del;
	}
</script>

<?php include('footer.php');?>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/animsition.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>


