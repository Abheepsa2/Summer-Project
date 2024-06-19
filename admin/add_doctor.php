<?php
include('registration.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>ADD Doctor</title>
  <link rel="stylesheet" href="css/add-doc.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="sweet-alert.min.js"></script>
<style>
  


</style>
</head>

<body>
  <div>
    <?php

    if (isset($_POST["submit"])) {
      // $d_id = $_POST['id'];
      $d_f_name = $_POST['f_name'];
      $d_l_name = $_POST['l_name'];
      $d_email = $_POST['email'];
      $d_cone = $_POST['contact'];
      $d_specialist = $_POST['specialist'];
      $d_qualification = $_POST['qualification'];
      $d_dob = $_POST['dob'];
      $d_gender = $_POST['gender'];
      $d_reg = $_POST['reg'];
      $d_addr = $_POST['addr'];
      $d_pswd = $_POST['pswd'];
      $date = $_POST['date'];
      $d_per = $_POST['permision'];
      // $d_pswd_len=strlen($d_pswd);

      //  $date = date("y/m/d") ;

      //   $_POST[".$date."];

      $sql = "INSERT INTO doctor(f_name,l_name,email,contact,specialist,qualification,DOB,gender,bmdc_reg_num,address,pswd,date,permission) 

	      VALUES('$d_f_name','$d_l_name','$d_email','$d_cone','$d_specialist','$d_qualification','$d_dob','$d_gender','$d_reg','$d_addr','$d_pswd','$date','$d_per')";
      $query = mysqli_query($conn, $sql);
      if ($query) {
        $_SESSION['status'] = "DATA INSERTED SUCESFULLY";
        $_SESSION['status_code'] = "success";
        // echo "<script>alert('Successfully Registered. You can login now');</script>";
        // //header('location:user-login.php');
      } else {
        $_SESSION['status'] = "DATA NOT  INSERTED SUCESFULLY";
        $_SESSION['status_code'] = "error";
      }
    }
    ?>
  </div>
  <?php

  include 'siddebar.php';
  ?>
  <div class="container">
    <div class="title">ADD DOCTOR DETAILS</div>
    <div class="content">
      <form method="post" name="adddoc" action="">
        <div class="user-details">
          <div class="input-box">
            <label for="f_name"><b>First Name:</b></label><br /><br /><input class="text-dark" type="text" placeholder="Enter  First Name" name="f_name" required><br /><br />
          </div>
          <div class="input-box">
            <label for="f_name"><b>Last Name:</b>
              <input class="text-dark" type="text" placeholder="Enter  Last Name" name="l_name" required><br /><br />
          </div>
          <div class="input-box">
            <label for="email"><b>Email:</b></label><br /><br /><input type="email" placeholder="Enter Email" name="email" required><br /><br />
          </div>
          <div class="input-box">
            <label for="email"><b>Contact:</b></label><br /><br /><input class="text-dark" type="number" placeholder="Enter Contct" name="contact" required><br /><br />
          </div>
          <div class="input-box">
          <label for="specialist"><b>Specialist:</b></label><br /><br />
          <select  name="specialist" required>

            <option value="medicine" required>Medicine</option>
            <option value="Orthopedic" required>Orthopedic</option>
            <option value="gynecologist" required>Gynecologist</option>
            <option value="dentist" required>Dentist</option>
            <option value="cardiologist" required>Cardiologist </option>


            <option value="surgeon" required>Surgeon </option>
          </select> <br /><br />
          </div>

          <div class="input-box">
            <span class="details">Doctor Qualification</span>
            <input type="text" placeholder="Enter your Qualification" required name="qualification">
          </div>

          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="Date" required name="dob">
          </div>
          <div class="input-box">
          <span class="details">Gender </span>

<select class="select" name="gender" required>
  <option selected disabled>------------------------Select Gender------------------------</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>

<br />
          </div>
          <div class="input-box">
            <span class="details">Registration Number</span>
            <input type="number" required placeholder="56***" name="reg">
          </div>
          <div class="input-box">
            <span class="details">address</span>
            <input type="text" required name="addr">
          </div>

          <!--        -->
          <div class="input-box">
            <!-- <label for="pswd"> -->
            <b>Create New Password :</b></label><br /><br /><input type="password" placeholder="Create  Password" name="pswd" required>
            <p> password should be more than 8 characters long
            </p>
            <br /><br />
          </div>
          <div class="input-box">
            <span class="details">Date of Registration</span>
            <input type="Date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Permision </span>

            <select class="select" name="permision" required>
              <option selected disabled>------------------------Select Permision level------------------------</option>
              <option value="medicine">Aproved</option>
              <option value="Orthopedic">Pending</option>
              <option value="gynecologist">verefied</option>
            </select> <br />
            <!-- </div> -->
          </div>
          <!-- <div class="input-box">
            <span class="details"> Confirm Password Password</span>
            <input type="text" name="conpassword"placeholder="Confirm your password" required>
          </div> -->
        </div>

        <div class="button">
        <button class="button-63"name="submit" role="button">Submit </button>
         
        </div>
      </form>
    </div>
  </div>


  <?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    // echo $_SESSION['status'];
  ?>
    <script>
      Swal.fire({
        title: '<?php echo $_SESSION['status']; ?>',
        icon: '<?php echo $_SESSION['status_code']; ?>',
        button: "success"
      });
    </script>
  <?php
    unset($_SESSION['status']);
  }
  ?>
</body>

</html>