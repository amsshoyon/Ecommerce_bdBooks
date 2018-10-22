<?php

  include ('server.php');
  include ('session.php');
   $id = $_GET['id'];

  $result = mysqli_query($db, "SELECT * FROM books WHERE id=$id "); 

  $record = mysqli_fetch_array($result);
  $image_detail = $record['image'];
  $name = $record['name'];
  $desp = $record['desp'];
  $price = $record['price'];
  $author = $record['author'];
  $amount = $record['amount'];
  $type = $record['type'];
  $item_book = $record['id'];



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
  <link rel="stylesheet" type="text/css" href="css/product-details.css">

  


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
    font-size: 20px; 
  }
  .item_details{
    font-size: 20px !important;
    font-family: time new romans;
  }
  .item_price{
    font-size: 30px !important;
    font-family: time new romans;
    font-weight: 700;
    float: right;
  }
  .item_name{
    font-size: 25px;
    font-style: 400;
  }
  .short_note{
    font-size: 15px;
    color:#6C6D69;
     font-style: italic;
  }
</style>





<section class="container" style="margin-top: 80px;background-color: #fff;padding-top: 50px;padding-bottom: 50px;">

      <form class="" id="cart_form" method="post" action="">
        <div class="col-md-12" style="background-color: #fff;padding-top: 20px;padding-bottom: 20px;">

          <div class="col-xs-1 col-sm-6 col-lg-6 product-item">
            <div class="" style="padding:15px;">
              <div class="item-slick2 p-l-15 p-r-15">
                <div class="">
                  <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                    <img src="images/books/<?php echo $image_detail; ?>" alt="IMG-PRODUCT">

                    <div class="block2-overlay trans-0-4">
                      <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                      </a>

                    </div>
                  </div>
                  <div class="item_details">
                    <span class="item_price">
                      <?php echo $price; ?> tk
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
                   <?php echo $name; ?>
                    <span class="item_price"><?php echo $price; ?>tk</span>
                  </div> 
                  <hr>
                  <p class="short_note"><?php echo $desp; ?></p>
                  <hr>
                  <h4>Avability : <?php echo $amount; ?></h4>


                  <input type="hidden" name="product" value="<?php echo $item_book; ?>">
                

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

                  <div id="result_add" class="col-md-12" style="padding: 20px;font-size: 25px;"></div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>  

      </form>
  
</section>

<script>
  function add(){

  var del=confirm("Are you sure to add this book to cart ?");
  if (del==true){

    $('#cart_form').submit(function(event) {
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "add_cart.php",
        data: $(this).serialize(),    
        success: function(data){
          $('#result_add').html(data);
        }         
      }).done(function() {
          $("#cart_form").trigger("reset");
        });
    });


  }
  return del;
  }
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



<script>
var input = document.getElementById('theInput');
document.getElementById('plus').onclick = function(){
    input.value = parseInt(input.value, 10) +1
}
document.getElementById('minus').onclick = function(){
    input.value = parseInt(input.value, 10) -1
}
</script>







<!-- New Product -->
  <section class="newproduct" style="background-color: #EBEDEF;padding-top: 50px;padding-bottom: 50px;">
    <div class="container">
      <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center">
          Semilar Catagories - <span style="color: #CA0035; font-style: italic;"> <?php echo $type; ?> </span>
        </h3>
      </div>

      <!-- Slide2 -->
      <div class="wrap-slick2">
        <div class="slick2">


         <?php $similar = mysqli_query($db, "SELECT * FROM books WHERE type='$type' ");  ?>
         <?php while($row_s = mysqli_fetch_array($similar)){ ?>
          <div class="item-slick2 p-l-15 p-r-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                <img src="images/books/<?php echo $row_s['image']; ?>" alt="IMG-PRODUCT">

                <div class="block2-overlay trans-0-4">
                  <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                  </a>

                  <div class="block2-btn-addcart w-size1 trans-0-4">
                    <br>
                    <a href="book_details.php?id=<?php echo $row_s['id']; ?>" class="flex-c-m size1 bg4 hov1 s-text1 trans-0-4 btn btn-lg btn-success">
                      Details
                    </a>
                  </div>
                </div>
              </div>

              <div class="block2-txt p-t-20">
                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                  <?php echo $row_s['name']; ?>
                </a>

                <span class="block2-price m-text6 p-r-5">
                 <?php echo $row_s['price']; ?>tk
                </span>
              </div>
            </div>
          </div>

        <?php } ?>      

   
        </div>
      </div>

    </div>
  </section>





<?php include('footer.php');?>
<!-- jQuery -->
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

