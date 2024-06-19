<?php
include ('registration.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Book an Appointment</title>
  <link rel="stylesheet" href="css/apointment.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="sweet-alert.min.js"></script>
 
</head>

<body>
  <div>
    <?php
    if (isset($_POST['submit'])) {
      $spe = $_POST['special'];
      $name = $_POST['docname'];
    
      $age = $_POST['age'];
      $contact = $_POST['contact'];
      $date = $_POST['date'];
      $address = $_POST['addr'];
      $time = $_POST['time'];
      $description = $_POST['descrip'];
      $sql = "INSERT INTO appointment
	           (specialization,name,age,contact,date,address,time,description)
           VALUES
	            ('$spe','$name','$age','$contact','$date','$address','$time','$description') ";
      $query = mysqli_query($conn, $sql);
      if ($query) {
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
     <?php
  if(isset($_SESSION['status']) && $_SESSION['status']!='')
  {
echo $_SESSION['status'];
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
  </div>
  <?php
  include 'siddebar.php';
  ?>
  <div class="container">
    <div class="title">Book An Doctor  Appointment</div>
    <div class="content">
      <form method="post" name="adddoc" action="">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Doctors Specialization </span>

            <select class="select" name="special" required>
            <option selected disabled>------------------------Select Speacilist------------------------</option>
              <option value="medicine">Medicine</option>
              <option value="Orthopedic">Orthopedic</option>
              <option value="gynecologist">Gynecologist</option>
              <option value="dentist">Dentist</option>
              <option value="cardiologist">Cardiologist </option>
            </select> <br />
            <!-- </div> -->
          </div>
          <div class="input-box">
          <span class="details">Doctors Name </span>

<select class="select" name="docname" required>
<option selected disabled>------------------------Select Name------------------------</option>
  <option value="">Dr Santosh maharjan</option>
  <option value="Orthopedic">Dr.Siwet Gurung</option>
  <option value="gynecologist">Dr.Harsh Subedi </option>
  <option value="dentist">Dr addy Lama</option>
  <option value=" ">Dr Md Prapti Shresths</option>
  <option value="Orthopedic">Dr.Rushali Maharjan</option>
  <option value="gynecologist">Dr.Kritika singh</option>
  <option value="dentist">Dr. Ganesh Karki</option>
  <option value="cardiologist">Dr. Shayamali Debnath</option>
  <option value="gynecologist">Dr.Nasima Shaheen</option>
  <option value="dentist">Dr.Kasish Kapoor</option>
  <option value="cardiologist">Dr.Gulshan Ara</option>
  <option value="surgeon"> Dr Kavya Pradhan</option>
  <option value="dentist">Dr.Nikkii Subedi</option>
  <option value="cardiologist">Dr.Shobika Gurung</option>
  <option value="cardiologist">Dr.Rushali Shresths</option>
  <option value="surgeon"> Dr Nurul aman</option>
  <option value="dentist">Dr.Akriti shresths</option>
  <option value="cardiologist">Dr.Shobika Gurung</option>
</select> <br />
<!-- </div> --></div>

          <div class="input-box">
            <span class="details"> Patient AGE</span>
            <input type="Number" name="age" placeholder="Age" required>
          </div>
          <div class="input-box">
            <span class="details">PATIENT Contact No</span>
            <input type="Number" name="contact" minlength="10" maxlength="10" placeholder="Enter  Contact no" required>
          </div>

          <div class="input-box">
														
          <div class="form-group">
															<label for="Appointmenttime">
														
														Time
													
															</label>
			<input  type="time" class="form-control" name="time" id="timepicker1" required="required">eg : 10:00 PM
														</div>														
														

            <!-- <span class="details">Date</span>
            <input type="Date" name="date" required> -->
          </div>
          <div class="input-box">
          <div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
<input  type="date" class="form-control datepicker" name="date"  required="required" data-date-format="yyyy-mm-dd">
	
														</div>
           
          </div>
         


          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="addr" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <!-- <input type="number" name="date" required> -->
             <textarea  name="descrip" id=""> </textarea>
          </div>
        </div>

        <div class="button">
        <button class="button-29" name="submit" role="button">Submit </button>
        
          <!-- <button type="submiit" name="submit">Submit -->
        </div>
      </form>
    </div>
  </div>


 
</body>

</html>