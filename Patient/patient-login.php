<?php 
require_once('registration.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Login </title>
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
                                <a class="nav-link active" href="patient-login.php" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="../Doctor/doctor-login.php" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link "  href="../admin/admin-login.php" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
</div>
	<div class="wrapper bg-white">
		
		<div class="h1 text-center">PATIENT LOGIN </div>
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
				   <a class="login-link" href="patient-register.php">Register here</a>
			</div>
			 <button class="btn btn-block text-center my-3">Log in</button>
		</form>
	</div>
</body>
</html>




<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="patientlogin.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../sweet-alert.min.js"></script>

    <title> LOGIN</title>
</head>
<body>
    <form method="POST" action="process.php">
<div class="wrapper" style="background-image: url('patient-bg.webp');">
   

     <div  class="container d-flex justify-content-center align-items-center min-vh-100">
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
        
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" >
           <div class="featured-image mb-3">
            <img src="patientlogin.jpeg" class="img-fluid" style="width: 420px; height:420px;">
           </div>
          </div> 
       <div class="col-md-6  right-box">
       <div class="col-md-12  d-flex  justify-content-center align-items-center register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
</div>
          <div class="row align-items-center">
            
                <div  class="header-text mb-4">
                    
                     <h2 > LOGIN</h2>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="Email address">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                   
                    <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                </div>
               
                <div class="row">
                    <p>Don't have account? <a href="patient-register.php">Register</a></p>
                </div>
           </div>
          </div> 

           </div> 
      
           </form>
           
    

</body>
</html> -->