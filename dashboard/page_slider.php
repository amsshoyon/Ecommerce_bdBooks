
<?php
	//im=nitializing variable
	$title = "";
	$desp = "";
	$image = "";
	$id = 0;
	
	//connect to database
	include('server.php'); 
	
	//if save btn is clicked
	if(isset($_POST['insert'])){
		//path to store
		$target = "../images/slider/".basename($_FILES['image']['name']);
		
		//get all submitted data from the form
		$image = $_FILES['image']['name'];
		$title = $_POST['title'];
		$desp = $_POST['desp'];
		
		$sql = "INSERT INTO slider(image , title , desp) VALUES ('$image', '$title', '$desp')";
		mysqli_query($db , $sql); //stores the submitted data into database table:images
		
		//move the uploaded image to folder
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$msg = "image uploaded successfully ...";
		}else{
			$msg = "Failed to upload ... ";
		}
		header('location: page_slider.php');
	}
	
	//delete data
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		
	
		$result = mysqli_query($db, "SELECT * FROM slider WHERE id=$id");
		$row = mysqli_fetch_array($result);
		$image=$row['image'];
		unlink("../images/slider/".$image);
		mysqli_query($db, "DELETE FROM slider WHERE id=$id");
		
		$msg = "Address deleted" ;
		header('location: page_slider.php');
	}
	
	
		
		
	//retrive records
	$result = mysqli_query($db, "SELECT * FROM slider");
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
		Page Elements
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Home
		</small>
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Slider
		</small>
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#insert_videos">Insert Image</button>
		</small>
	</h1>
	<hr><br>
</div><!-- /.page-header -->

<section style="width:100%;display:block;overflow:hidden;">
	<?php while($row = mysqli_fetch_array($result)){ ?>
	<div class="col-md-2">
		<div class="well" style="margin:5px;padding:10px;">
			<img src="../images/slider/<?php echo $row['image']; ?>" class="img-responsive" alt="" style="width:100%; height: 150px;">
			<hr >
			<div class="slider_caption">
				<h4 style="color:green;font-weight:700;font-size:20px;"><?php echo $row['title']; ?></h4>
				<p><?php echo $row['desp']; ?></p>
			</div>
			<a href="page_slider.php?del=<?php echo $row['id']; ?>" onclick="return deleletconfig()" width="100%">
				Delete
			</a>
		</div>
		
	</div>
	<?php } ?>
</section>

<div id="insert_videos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert Videos</h4>
      </div>
      <div class="modal-body">

		<div class="">
			<form method="post" action="page_slider.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>" required>
				
				<fieldset class="file-input">
					<input type="file" name="image" id="image">
					<span class='button'>Choose an Image</span>
					<span class='label' data-js-label>No file selected</label>
				</fieldset>

				<fieldset  class="file-input">
					<input placeholder="Image Title ...." type="text" name="title" tabindex="1" required>
				</fieldset>

				<fieldset  class="file-input">
					<input placeholder="Short Note ...." type="text" name="desp" tabindex="1" required>
				</fieldset>

				<fieldset class="file-input">
					<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info"  class="btn btn-info" />
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