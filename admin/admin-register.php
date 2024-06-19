<?php 
require_once('registration.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="admin-register.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>

<div>
	<?php
	
if(isset($_POST['create'])){
	$name=$_POST['fname'];
	$email=$_POST['email'];
    $password=$_POST['pass'];
    $conpassword=$_POST['conpass'];
	$sql = "INSERT INTO admin_register
	           (name,email,password,confirm_password)
           VALUES
	            ('$name','$email','$password','$conpassword') ";
				$query = mysqli_query($conn, $sql);
				if($query)
{?>
	<script>
function function3() { 
	swal("Success!", "Your data have been saved. Thank you!", "success");
}

	</script>
	<?php
	//header('location:user-login.php');
}
	}
	?>
</div>

	<div class="container-fluid">
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">					
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="logo.png" width="150px">
					</div>
					<div class="text-center mb-4">
				    <h4>Create an Account</h4>
				  </div>
					<!-- Form -->
					<form class="px-3" method="POST"  >
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							 <input type="text" name="fname" placeholder="Full Name" tabindex="10" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							 <input type="email" name="email" placeholder="Email Address" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="pass" placeholder="Password" required>
						</div>
                        <div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="conpass" placeholder="CONFIRM Password" required>
						</div>
						<!-- Register Button -->
				    <div class="mb-3"> 
							<button type="submit" onclick="function3()"name="create"  class="btn btn-block">Register</button>
						</div>
                        <div class="text-center mb-5 text-white">Already have an account?
							<a class="login-link" href="admin-login.php">Login here</a>
		       	</div>
						
					</form>
				</div>
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
</body>
</html>