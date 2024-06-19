
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admlogin.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
<form method="post" action="process.php"  class="pt-6">
<div class="col-md-12  d-flex  justify-content-center align-items-center register-right" style="margin-top: -25px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 50%;">
                            <li class="nav-item">
                                <a class="nav-link " href="../Patient/patient-login.php" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="../Doctor/doctor-login.php" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link active"  href="admin-login.php" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
</div>
	<div class="wrapper bg-white">
		
		<div class="h1 text-center">ADMIN LOGIN </div>
		<div class="h6 text-muted text-center pt-2">Enter your login details</div>
		
			<div class="form-group py-2">
				<div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="email"placeholder="Username or Email Address" required > </div>
			</div>
			<div class="form-group py-1 pb-2">
				<div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"name="password" placeholder="Enter your Password" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
			</div>
			<div class="d-flex align-items-start">
				
				<!-- <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div> -->
				<div class="text-center mb-5 text-black">Not registered yet
						
		       	</div>
				   <a class="login-link" href="admin-register.php">Register here</a>
			</div>
			 <button class="btn btn-block text-center my-3">Log in</button>
		</form>
	</div>
</body>
</html>