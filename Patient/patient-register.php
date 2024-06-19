<?php 
require_once('registration.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATIENT REGISTER</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../sweet-alert.min.js"></script>

<link rel="stylesheet" href="patientregister.css">

<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
</head>
<body   style="background-image: url('pics/patient-bg.png');">

<div>
	<?php
	
if(isset($_POST['create'])){
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
	$email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['confirmpassword'];
    // echo $firstname."  ". $lastname."  " . $address."  " . $contact."  " . $specialization."  " .$email."  " . $password."  " . $conpassword;

	$insert_query = "INSERT INTO patient_register
	           (firstname,lastname, address,number,gender,email,password,confirmpassword)
           VALUES
           ('$firstname','$lastname','$address','$number','$gender','$email','$password','$conpassword') ";
				$insert_query_run = mysqli_query($conn, $insert_query);
				if($insert_query_run)
{
    $_SESSION['status']="DATA INSERTED SUCESFULLY";
    $_SESSION['status_code']="success";
    // header('location:patient-login.php');
	// echo "<script>alert('Successfully Registered. You can login now');</script>";
    // echo"  ";

}
else{
    $_SESSION['status']="DATA NOT  INSERTED SUCESFULLY";
    $_SESSION['status_code']="error";
}
	}
    
	?>
</div>

<div class="wrapper"> 
    <form method="post" onSubmit="return validate();" action="">
    
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="../pics/logo.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Create your account and join with us </p>
                        <a href="patient-login.php">
                        <button class="butn" role="button">LOGIN
                        </a>
                        </button>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">REGISTER AS A PATIENT </h3>
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
                                           PASSWORD <input type="password" class="form-control" name="password"  id="password"required placeholder="Password *" value="" />
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                           LASTNAME <input type="text" class="form-control"  name="lastname"required placeholder="Last Name *" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                           CONTACT NUMBER  <input type="number" minlength="10" maxlength="10"required name="number" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                        <!-- gender <input type="text" required name="gender" class="form-control" placeholder="enter your gender" />
                                        -->
                                        <span class="details">Gender </span>

<select class="select" name="gender" required>
  <option selected disabled>-----------------Select Gender--------------</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
                                    </div>
                                        <div class="form-group">
                                         CONFIRM PASSWORD :  <input type="password" class="form-control"required name="confirmpassword" id="confirm_password" placeholder="Confirm Password *" value="" />
                                        </div>
                                      <!-- <a href="registerprocess.php"> -->
                                        <button type="submit" name="create"  id="register" class="btnRegister" >Register</button>
                                    </div>
                                </div>
                            </div>
                           
    </form>
</div>
<?php
  if(isset($_SESSION['status']) && $_SESSION['status']!='')
  {
// echo $_SESSION['status'];
?>
		<script>
			Swal.fire({
		title: '<?php echo $_SESSION['status'];?>',
		icon:'<?php echo $_SESSION['status_code'];?>',
		button: "success"
		});
	</script>
<?php
unset($_SESSION['status']);
  }
  ?>
</body>
</html>