
<?php
include ('registration.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/suggest.css"> -->
	<title>Suggest Nurse</title>
	<link rel="stylesheet" href="css/suggest.css">
  <link rel="stylesheet" href="css/apointment.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="../sweet-alert.min.js"></script>
</head>

<?php

include 'siddebar.php';
?>

<style>
	h3 {
		font-size: 24px;
		letter-spacing: 4px;
	}

	th {
		font-size: 35px;
		text-align: center;
		padding-top: 20px;
		color: #000066;

	}

	body {
		background: linear-gradient(rgba(134, 185, 209, 0.6), rgba(103, 176, 209, 0.6)), url(pics/patient-bg.webp) center center;
		background-size: auto;
		background-attachment: inherit;

	}

	table {


		color: blueviolet;
		width: 100%;
		height: 80%;
		/* background-image:url(pics/patientloginbg.png); */
		background-size: contain;
		margin-left: 30px;
		border: 2px black;
		margin-top: -30px;

	}
</style>

<body class="container display-4">
	<script>
		var name1 = prompt('Are you experience any of these symptoms?\n\na) Personal Day care ,individuaized care  \n  Assestance with a dialy care like bathing ,eating , waling \n supervision for dimentia or alzirmers \n\n b) Chronic disese either cureable or uncurecble\n   medical assistance available for 24/7\n guides by doctors and in strict need of medical assistance \n\n c)Major Accident or injury \n post operation or surgery Care \n Fractures, Dislocation, Disabilities \n ');
		if (name1 == 'a') {
			alert('Contact with our Our Certified Nursing assistntant  \n for \n  Primary Health care');
		} else if (name1 == 'b') {
			alert('Contact with our Advanced Practice Registered Nurse \n for \n Hospis care and paliative care');
		} else if (name1 == 'c') {
			alert('Contact with our Licensed Practical Nurse \n for  \n Acidents or Injury Management');
		}
	</script>
<!--  -->



<table   class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col" class="text-center text-warning"> Nurses Specialization</th>

    </tr>
  </thead>




<tr><th class="text-center"><a href="">Primary Care and Companionship </a></th></tr>

<tr><th class="text-center"><a href="">Hospis Care and Paliative Care</a></th></tr>
<tr><th class="text-center"><a href="">Injury Management</a></th></tr>

<tr><th class="text-center"><a href="nurse-apoinment.php"><button class="button-90" role="button">Book An Appointment </button></a></th></tr>
<br><br>
<h2>
 

</h2>

</table>
</body>

</html>