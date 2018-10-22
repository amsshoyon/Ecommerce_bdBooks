


<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/hamburgers.css">
	<link rel="stylesheet" type="text/css" href="css/select2.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<style type="text/css">
	.go_back a:hover{
		color:red !important;
	}

</style>


<section class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="col-md-12 text-center go_back" style="margin-top: -100px;">
				<a href="../index.php" class="" style="font-size: 25px;color:#8254C8;">Go Back To BdBooks</a>
			</div>
			<div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
				<img src="assets/register.png" alt="IMG">
			</div>
			
			<form class="login100-form validate-form" id="reg_form" method="post" action="">
				<span class="login100-form-title" id="">
					User Registration
				</span>

				<div class="wrap-input100  ">
					<input class="input100" name="firstname" placeholder="First Name" value="" type="text" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="wrap-input100  ">
					<input class="input100" name="lastname" placeholder="Last Name"  value="" type="text" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="wrap-input100  ">
					<input class="input100" name="username" placeholder="Username"  value="" type="text" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="wrap-input100  ">
					<input class="input100" name="email" placeholder="Email" type="email"  value="" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100">
					<input class="input100" name="pass_one" placeholder="Password"  value="" type="password"required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="wrap-input100  " data-validate="Rewrite Password">
					<input class="input100" name="pass_two" placeholder="Rewrite Password"  value="" type="password" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="wrap-input100  " data-validate="Phone Number">
					<input class="input100" name="phone" placeholder="Enter Your Phone No."  value="" type="text" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="register" onclick="return myfn()">
						Register as User
					</button>
				</div>
				
				<div id='result' style="padding:15px;text-align:center;color:red;"></div>

				<div class="text-center p-t-12">
					<span class="txt1">
						If you are already Registered :
					</span>
					<a class="txt2" href="user_login.php">
						LOGIN
					</a>
				</div>

			</form>
		</div>
	</div>
</section>

   
<script type="text/javascript">


function myfn() {

	var firstname=document.forms["reg_form"]["firstname"].value;
	if (firstname==null || firstname=="")
	 {
	  document.getElementById("result").innerHTML = " Error : firstname must be filled...";
	  return false;
	 }
	 
	var lastname=document.forms["reg_form"]["lastname"].value;
	if (lastname==null || lastname=="")
	 {
	  document.getElementById("result").innerHTML = " Error : Lastname must be filled...";
	  return false;
	 }
	 
	 var username=document.forms["reg_form"]["username"].value;
	if (username==null || username=="")
	 {
	  document.getElementById("result").innerHTML = " Error : username must be filled...";
	  return false;
	 }
	 
	var x = document.forms["reg_form"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
	
	
	var b=document.forms["reg_form"]["email"].value;
	if (b==null || b=="")
	 {
	  document.getElementById("result").innerHTML = " Error : Email field must be filled...";
	  return false;
	 }else{
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			document.getElementById("result").innerHTML = " Error : Please Enter a valid Email Address .........";
			return false;
		}
	 }
	 
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById("result").innerHTML = " Error : Please Enter a valid Email Address .........";
        return false;
    }
	 
	
	 var pass_one=document.forms["reg_form"]["pass_one"].value;
	if (pass_one==null || pass_one=="")
	 {
	  document.getElementById("result").innerHTML = " Error : Password must be filled...";
	  return false;
	 }
	 
	 var pass_two=document.forms["reg_form"]["pass_two"].value;
	 if (pass_one != pass_two)
	 {
	  document.getElementById("result").innerHTML = " Error : Password must be Same...";
	  return false;
	 }

	var phone=document.forms["reg_form"]["phone"].value;
	if (phone==null || phone=="") {
	  document.getElementById("result").innerHTML = " Error : Phone must be filled...";
	  return false;
	}
	var elem = document.getElementById("result");
	elem.innerHTML = "Message is sending";
	elem.style.color = "#00BEFD";

	return( true );

			 
}
	
</script>	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
	$('#reg_form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "reg.php",
			data: $(this).serialize(),		
			success: function(data){
				$('#result').html(data);
			}					
		}).done(function() {
				$("#reg_form").trigger("reset");
			});
	});
</script>
	

<!--===============================================================================================-->
<script type="text/javascript" async="" src="js/analytics.js"></script><script src="js/jquery-3.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/select2.js"></script>
<script src="js/tilt.js"></script>

<script>
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	



</body></html>