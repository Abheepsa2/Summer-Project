
<?php
include ('registration.php');
?><!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ADD PATIENT</title>
    <link rel="stylesheet" href="css/input.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div>
	<?php
	
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $conpassword=$_POST['conpassword'];
	$sql = "INSERT INTO doctor_details
	           (Specialization,Name,Address,Fees,Contact,Email,Password)
           VALUES
	            ('$name','$docspecialization','$address','$fees','$contact','$email','$password') ";
				$query = mysqli_query($conn, $sql);
				if($query)
{
	// echo "<script>alert('Successfully Registered. You can login now');</script>";
	// //header('location:user-login.php');
}
	}
	?>
</div>
  <?php
  include 'header.php';
  include 'sidebar.php';
  ?>
  <div class="container">
    <div class="title">ADD PATIENTS DETAILS</div>
    <div class="content">
      <form method="post"  name="adddoc" action="">
        <div class="user-details">
          <!-- <div class="input-box">
            <span class="details">DOCTOR SPECILIZATION</span>
            <input type="text" placeholder="Enter your name" required>
          </div> -->
          <div class="input-box">
            <span class="details">Patient Name</span>
            <input type="text" placeholder=" PATIENT NAME"  name="name"required>
          </div>
         
          <div class="input-box">
            <span class="details">Patient Address</span>
            <input type="address" name="address" placeholder="Enter your Address" required>
          </div>
          <!-- <div class="input-bo">
            <span class="detail"> Patient Gender</span>
            <br>
            <input type="radio" name="gender" required>MALE 
            <input type="radio" name="gender" required>FEMALE 
          </div> -->
          <div class="input-box">
            <span class="details"> Patient AGE</span>
            <input type="text" name="age"placeholder="General Consultancy Fees" required>
          </div>
          <div class="input-box">
            <span class="details">PATIENT Contact No</span>
            <input type="text" name="contact" placeholder="Enter Doctor Contact no" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details"> Password</span>
            <input type="text" name="password"placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details"> Confirm Password Password</span>
            <input type="text" name="conpassword"placeholder="Confirm your password" required>
          </div>
        </div>
       
        <div class="button">
          <button type="submiit" name="submit" >Submit
        </div>
      </form>
    </div>
  </div>
</body>
</html>