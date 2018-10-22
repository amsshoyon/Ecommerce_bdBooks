
<!DOCTYPE html>
<html lang="en">
<head>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">
<!--===============================================================================================-->
</head>
<body class="animsition">


	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<img src="images/writers/robindranath.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="all_books.php?id=Rabindranath_Tagore" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="padding: 10px;">
								Rabindranath Tagore 
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<img src="images/writers/kaji_najrul.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="all_books.php?id=Kazi_Nazrul_Islam" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="padding: 10px;">
								Kazi Nazrul Islam
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
						<img src="images/writers/humayunahmed.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="all_books.php?id=Humayun_Ahmed" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="padding: 10px;">
								Humayun Ahmed
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<img src="images/writers/jafar_iqbal.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="all_books.php?id=Muhammed_Zafar_Iqbal" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="padding: 10px;">
								Muhammed Zafar Iqbal
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<img src="images/writers/begum_rokea.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="all_books.php?id=Begum_Rokeya" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="padding: 10px;">
								Begum Rokeya
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<img src="images/writers/ahsan_habib.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="all_books.php?id=Imdadul_Haq_Milon" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="padding: 10px;">
								Ahsan Habib
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php 
  include ('server.php');
  $featured = mysqli_query($db, "SELECT * FROM books WHERE choice='featured' "); 
?>

	<!-- New Product -->
	<section class="newproduct" style="background-color: #EBEDEF;padding-top: 50px;padding-bottom: 50px;">
		<div class="container  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Books
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick1">
				<div class="slick1">

					<?php while($row = mysqli_fetch_array($featured)){ ?>
					<div class="item-slick1 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="images/books/<?php echo $row['image']; ?>" alt="IMG-PRODUCT" style="height: 400px;">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<br>
										<a href="book_details.php?id=<?php echo $row['id']; ?>" class="flex-c-m size1 bg4 hov1 s-text1 trans-0-4 btn btn-lg btn-success">
											Details
										</a>
									</div>
								</div>
							</div>
							
							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $row['name']; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<?php echo $row['price']; ?>tk
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				

				</div>
			</div>

		</div>
	</section>


<?php 
  include ('server.php');
  $recent = mysqli_query($db, "SELECT * FROM books WHERE choice='recent' "); 
?>

	<!-- New Product -->
	<section class="newproduct" style="background-color: #fff;padding-top: 50px;padding-bottom: 50px;">
		<div class="container  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Recent Books
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php while($row_r = mysqli_fetch_array($recent)){ ?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="images/books/<?php echo $row_r['image']; ?>" alt="IMG-PRODUCT" style="height: 400px;">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<br>
										<a href="book_details.php?id=<?php echo $row_r['id']; ?>" class="flex-c-m size1 bg4 hov1 s-text1 trans-0-4 btn btn-lg btn-success">
											Details
										</a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $row_r['name']; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<?php echo $row_r['price']; ?>tk
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				

				</div>
			</div>

		</div>
	</section>


<!--===============================================================================================-->
	<script type="text/javascript" src="js/popper.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/product.js"></script>

</body>
</html>
