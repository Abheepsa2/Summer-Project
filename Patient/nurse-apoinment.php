<?php
include ('registration.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse-apointment</title>
    <link rel="stylesheet" href="css/apointment.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="sweet-alert.min.js"></script>
</head>
<body>
   
	<div>
		<?php
		if (isset($_POST['submit'])) {
			$spe = $_POST['special'];
			$name = $_POST['nurses'];
			$age = $_POST['age'];
			$contact = $_POST['contact'];
			
			$date = $_POST['date'];
			$date2 = $_POST['date2'];
            $address = $_POST['addr'];
			$description = $_POST['descrip'];
			$sql = "INSERT INTO nurse_appointment
	           (specialization,name,age,contact,date,date2,address,description)
           VALUES
	            ('$spe','$name','$age','$contact','$date','$date2','$address','$description') ";
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
	</div>
	<?php
	include 'siddebar.php';
	?>
	<div class="container">
		<div class="title">Book An Nurse  Appointment</div>
		<div class="content">
			<form method="post" name="adddoc" action="">
				<div class="user-details">
					<div class="input-box">
						<span class="details">Nurse Specialization </span>

						<select class="select" name="special" required>
							<option selected disabled>------------------------Select Speacilist------------------------</option>
							<option value="primary">Primary Care and companionship</option>
							<option value="hospis">Hospis and Palitive Care</option>
							<option value="injury">Injury Management</option>
						
						</select> <br />
						<!-- </div> -->
					</div>
					<div class="input-box">
						<span class="details">Nurse Name </span>

						<select class="select" name="nurses" required>
							<option selected disabled>------------------Select Name------------------------</option>
							<option value="Tamana joshi">Tamana joshi</option>
							<option value="dev dixit">dev dixit</option>
							<option value="saurabh">saurabh</option>
							<option value="Sonakshi">Sonakshi</option>
							<option value="anika shah">anika shah</option>
							<option value="alina">alina</option>
							<option value="Rhea singh">Rhea singh</option>
						</select> <br />
						
					</div>

					<div class="input-box">
						<span class="details"> Patient AGE</span>
						<input type="Number" name="age" placeholder="Age" required>
					</div>
					<div class="input-box">
						<span class="details">PATIENT Contact No</span>
						<input type="Number" name="contact" placeholder="Enter  Contact no" required>
					</div>

			
					<div class="input-box">
						<div class="form-group">
							<label for="AppointmentDate">
								Date From
							</label>
							<input type="date" class="form-control datepicker" name="date" required="required" data-date-format="yyyy-mm-dd">

						</div>

					</div>

			
					<div class="input-box">
						<div class="form-group">
							<label for="AppointmentDate">
								Date To
							</label>
							<input type="date" class="form-control datepicker" name="date2" required="required" data-date-format="yyyy-mm-dd">

						</div>

					</div>



					<div class="input-box">
						<span class="details">Address</span>
						<input type="text" name="addr" required>
					</div>
					<div class="input-box">
						<span class="details">Description</span>
						<!-- <input type="number" name="date" required> -->
						<textarea name="descrip" id=""> </textarea>
					</div>
				</div>

				<div class="button">
					<button class="button-29" name="submit" role="button">Submit</button>
					<!-- <button type="submiit" name="submit">Submit -->
				</div>
			</form>
		</div>
	</div>

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
</body>
</html>