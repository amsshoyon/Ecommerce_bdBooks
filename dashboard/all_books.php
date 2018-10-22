
<?php
	//im=nitializing variable
	$image = "";
	$name = "";
	$author = "";
	$desp = "";
	$price = "";
	$amount = "";
	$choice = "";
	$type = "";
	$id = 0;
	
	//connect to database
	include('server.php'); 
	
	//if save btn is clicked
	if(isset($_POST['insert'])){
		//path to store
		$target = "../images/books/".basename($_FILES['image']['name']);
		
		//get all submitted data from the form
		$image = $_FILES['image']['name'];
		$name = $_POST['name'];
		$author = $_POST['author'];
		$desp = $_POST['desp'];
		$price = $_POST['price'];
		$amount = $_POST['amount'];
		$choice = $_POST['choice'];
		$type = $_POST['type'];
		
		$sql = "INSERT INTO books(image , name, author, desp, price, amount, choice, type) VALUES ('$image', '$name', '$author', '$desp', '$price', '$amount', '$choice', '$type')";
		mysqli_query($db , $sql); //stores the submitted data into database table:images
		
		//move the uploaded image to folder
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$msg = "image uploaded successfully ...";
		}else{
			$msg = "Failed to upload ... ";
		}
		header('location: all_books.php');
	}
	
	//delete data
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		
	
		$result = mysqli_query($db, "SELECT * FROM books WHERE id=$id");
		$row = mysqli_fetch_array($result);
		$image=$row['image'];
		unlink("../images/books/".$image);
		mysqli_query($db, "DELETE FROM books WHERE id=$id");
		
		$msg = "Address deleted" ;
		header('location: all_books.php');
	}
	
	
		
		
	//retrive records
	$show = mysqli_query($db, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<script src="assets/js/jquery.js"></script>

</head>

<body>
<div class="">
	<h1>
		Upload
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Items
		</small>
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#insert_photos">Insert a Book</button>
		</small>
	</h1>
	<hr><br>
</div><!-- /.page-header -->



<section style="width:100%; display:block;overflow:hidden;">
	<?php while($row = mysqli_fetch_array($show)){ ?>
	<div class="col-md-2 well" style="padding:10px;">
		<div class="" style="width:100%;height:340px;overflow: hidden;">
			<img src="../images/books/<?php echo $row['image']; ?>" class="img-responsive" style="height:300px; width:100%;" alt="">
			
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#info<?php echo $row['id']; ?>" style="width: 100%;">See Details</button>
		</div>
		
		<div id="info<?php echo $row['id']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <img src="../images/books/<?php echo $row['image']; ?>" class="img-responsive" style="height:auto; width:60%;margin:0 auto;" alt="">
		      </div>
		      <div class="modal-body">
		      	<h4 class="modal-title" style="font-size: 35px;"><?php echo $row['name']; ?></h4>
		      	<p style="font-size:20px;">Short Note: <?php echo $row['desp']; ?></p>
		      	<hr>
		        <h4 style="font-size:20px;">Author: <?php echo $row['author']; ?></h4>
				<h4 style="font-size:20px;">Price: <?php echo $row['price']; ?> Taka</h4>
				<h4 style="font-size:20px;">Amount: <?php echo $row['amount']; ?></h4>
				<h4 style="font-size:20px;">Choice: <?php echo $row['choice']; ?></h4>
				<br>
				<a type="button" class="btn btn-danger" href="all_books.php?del=<?php echo $row['id']; ?>" onclick="return deleletconfig()"> Delete</a>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>
	</div>
	<?php } ?>
</section>




<div id="insert_photos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert Videos</h4>
      </div>
      <div class="modal-body">

		<div class="">
			<form method="post" action="all_books.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>" required>

				<fieldset class="file-input">
					<input type="file" name="image" id="image" />
					<span class='button'>Choose A Photo</span>
					<span class='label' data-js-label>No file selected</label>
				</fieldset>

				<fieldset class="file-input">
					<input placeholder="Book Name ...." type="text" name="name" tabindex="1" required>
				</fieldset>

				<fieldset class="file-input">
					<select name="author">
			            <option value="Humayun Ahmed" selected>Humayun Ahmed</option>
			            <option value="Rabindranath Tagore">Rabindranath Tagore</option>
			            <option value="Abdul Hakim">Abdul Hakim</option>
			            <option value="Ahsan Habib">Ahsan Habib</option>
			            <option value="Begum Rokeya">Begum Rokeya</option>
			            <option value="Imdadul Haq Milon">Imdadul Haq Milon</option>
			            <option value="Jahanara Imam">Jahanara Imam</option>
			            <option value="Jahir Raihan">Jahir Raihan</option>
			            <option value="Kazi Nazrul Islam">Kazi Nazrul Islam</option>
			            <option value="Mir Mosharraf Hossain">Mir Mosharraf Hossain</option>
			            <option value="M Sakhawat Hossain">M Sakhawat Hossain</option>
			            <option value="Munir Chowdhury">Munir Chowdhury</option>
			            <option value="Taslima Nasrin">Taslima Nasrin</option>
			            <option value="Muhammed Zafar Iqbal">Muhammed Zafar Iqbal</option>
			            <option value="Others">Others</option>
			        </select>
				</fieldset>

				<fieldset class="file-input">
					<input placeholder="Short Note ...." type="text" name="desp" tabindex="1" required>
				</fieldset>

				<fieldset class="file-input">
					<input placeholder="Price ...." type="text" name="price" tabindex="1" required>
				</fieldset>

				<fieldset class="file-input">
					<input placeholder="Amount ...." type="text" name="amount" tabindex="1" required>
				</fieldset>

				<fieldset class="file-input">
					<select name="choice">
			            <option value="favourite" selected>Favourite</option>
			            <option value="featured">Featured</option>
			            <option value="recent">Recent</option>
			        </select>
				</fieldset>

				<fieldset class="file-input">
					<select name="type">
			            <option value="Fiction" selected>Fiction</option>
			            <option value="Drama">Drama</option>
			            <option value="Poetry">Poetry</option>
			            <option value="Political">Political</option>
			            <option value="Adventure">Adventure</option>
			            <option value="Biography">Biography</option>
			            <option value="Mystery">Mystery</option>
			            <option value="Biography">Biography</option>
			            <option value="Child">Child</option>
			            <option value="Horror">Horror</option>
			            <option value="Encyclopedias‎">Encyclopedias‎</option>
			            <option value="Others">Others</option>
			        </select>
				</fieldset>

				<fieldset class="file-input">
					<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
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


<script src="assets/js/bootstrap.min.js"></script>

<script>
	function deleletconfig(){

	var del=confirm("Are you sure you want to delete this record?");
	if (del==true){
	   alert ("record deleted")
	}
	return del;
	}
</script>

<script type="text/javascript">
	// Also see: https://www.quirksmode.org/dom/inputfile.html

	var inputs = document.querySelectorAll('.file-input')

	for (var i = 0, len = inputs.length; i < len; i++) {
	  customInput(inputs[i])
	}

	function customInput (el) {
	  const fileInput = el.querySelector('[type="file"]')
	  const label = el.querySelector('[data-js-label]')
	  
	  fileInput.onchange =
	  fileInput.onmouseout = function () {
	    if (!fileInput.value) return
	    
	    var value = fileInput.value.replace(/^.*[\\\/]/, '')
	    el.className += ' -chosen'
	    label.innerText = value
	  }
	}
</script>

	
</body>
</html>