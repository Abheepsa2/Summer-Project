
<?php
include ('registration.php');
?><!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ADD Nurse</title>
    <link rel="stylesheet" href="css/add-doc.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="sweet-alert.min.js"></script>

   </head>
<body>
<div>
	<?php
	
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $category=$_POST['catego'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $quali=$_POST['quali'];
  $past=$_POST['past'];
	$sql = "INSERT INTO nurse
	           (Name,address,contact,category,email,gender,Qualification,past_experience)
           VALUES
	            ('$name','$address','$contact','$category','$email','$gender','$quali','$past') ";
				$query = mysqli_query($conn, $sql);
        if($query)
        {
          $_SESSION['status']="DATA INSERTED SUCESFULLY";
          $_SESSION['status_code']="success";
          // echo "<script>alert('Successfully Registered. You can login now');</script>";
          // //header('location:user-login.php');
        }
        else{
          $_SESSION['status']="DATA NOT  INSERTED SUCESFULLY";
          $_SESSION['status_code']="error";
      }
	}
	?>
</div>
  <?php
  
  include 'siddebar.php';
  ?>
  <div class="container">
    <div class="title">ADD Nurse</div>
    <div class="content">
      <form method="post"  name="adddoc" action="">
        <div class="user-details">
        
        <div class="input-box">
        <span class="details"> Nurse Name</span>
            <input type="text" name="name" placeholder="Enter Name" required>
        
          </div>
         
          <div class="input-box">
            <span class="details">Nurse Address</span>
            <input type="address" name="address" placeholder="Enter  Address" required>
          </div>
          
          <div class="input-box">
            <span class="details">Contact</span>
            <input type="number" name="contact" placeholder="Enter Contact" required>
          </div>
        
          <div class="input-box">
            <span class="details">Category</span>
            <select class="text-dark" name="catego"required>
            <option value= "" selected disabled>-----------------------------Select-----------------------------</option>
  <option value= "Primary_Care"required>Primary Care</option>
  <option value="Hospis_care"required>Hospice and Paliative Care</option>
  <option value="Injury_Management"required>Injury Management</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
          <span class="details">Gender</span>
            <select class="text-dark" name="gender"required>
            <option value= "" selected disabled>-----------------------------Select-----------------------------</option>
  <option value= "male"required>Male</option>
  <option value="female"required>Female</option>
  
            </select>
           
          </div>
          <div class="input-box">
            <span class="details"> Qualification</span>
            <input type="text" name="quali"placeholder="Enter Qualification" required>
          </div>
          <div class="input-box">
            <span class="details"> Past Experience</span>
           <textarea name="past" id=""></textarea>
          </div>
        </div>
       
        <div class="button">
        <button class="button-63"  name="submit" role="button">Submit </button>
         
          <!-- <button type="submiit" name="submit" >Submit
        -->
       
        </div>
      </form>
    </div>
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