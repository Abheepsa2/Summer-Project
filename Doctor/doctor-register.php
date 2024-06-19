<?php 
require_once('registration.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCTOR REGISTER</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="doc_register.css">
</head>
<body>

<div>
	<?php
	
if(isset($_POST['create'])){
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $contact=$_POST['phone'];
    $Special=$_POST['special'];
	$email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['confirmpassword'];
    // echo $firstname."  ". $lastname."  " . $address."  " . $contact."  " . $specialization."  " .$email."  " . $password."  " . $conpassword;

	$sql = "INSERT INTO doctor_register
	           (firstname,lastname, address,number,specializ,email,password,confirmpassword)
           VALUES
           ('$firstname','$lastname','$address','$contact','$Special','$email','$password','$conpassword') ";
				$query = mysqli_query($conn, $sql);
				if($query)
{
	// echo "<script>alert('Successfully Registered. You can login now');</script>";
    // echo"  ";
	//header('location:user-login.php');
}
	}
	?>
</div>

<div class="wrapper" style="background-image: url('backgrounddoc.jpeg');">
    <form method="post"  action="">
    
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="../pics/logo.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Create your account and join with us </p>
                        <a href="doctor-login.php">
                        <button class="butn" role="button">LOGIN
                        </a>
                        </button>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">REGISTER AS A DOCTOR </h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           FIRSTNAME <input type="text" class="form-control"  name="firstname" required placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                          ADDDRESS  <input type="text" class="form-control"  name="address" required placeholder="Enter Your Answer *" value="" />
                                        </div>
                                        <div class="form-group">
                                          EMAIL  <input type="email" class="form-control"  name="email"required placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                           PASSWORD <input type="password" class="form-control" name="password" required placeholder="Password *" value="" />
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                           LASTNAME <input type="text" class="form-control"  name="lastname"required placeholder="Last Name *" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                           CONTACT NUMBER  <input type="text" minlength="10" maxlength="10"required name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                        specialization <input type="text" minlength="10" maxlength="10"required name="special" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                         CONFIRM PASSWORD :  <input type="password" class="form-control"required name="confirmpassword" placeholder="Confirm Password *" value="" />
                                        </div>
                                      <!-- <a href="registerprocess.php"> -->
                                        <button type="submit" name="create"  id="register" class="btnRegister" >Register</button>
                                    </div>
                                </div>
                            </div>
                           
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script type="text/javascript">
$(function(){
$('#register').click(function(){
    Swal.fire({
  title: "SUCESSFULLY REGISTERED!",
  text: "Procees to Login!",
  icon: "success"
});
}
);




}); -->
</script>
</body>
</html>