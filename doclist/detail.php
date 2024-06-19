<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="detail.css">
<title>detail</title>

</head>

<body class="container display-4">

 <h1  class=" text-center font-weight-bold text-white ">Doctor's Information</h1><br/>
 

<?php 
 include("registration.php");
 
 $sql=mysqli_query($conn,"select * from doctor  inner join schedule on schedule.d_id=doctor.id WHERE s_id='$_GET[s_id]' ");
 $cnt=1;
 while($row=mysqli_fetch_array($sql))
 {

//  if(isset($_GET['s_id'])){



//  $id=mysqli_query($conn,$_GET['s_id']);
//  	$show_doctor_profile_query="select * from doctor inner join schedule on schedule.id=doctor.id WHERE s_id='$_GET[s_id]'" ;
// 	   $show_run_doctor_profile_query=mysqli_query($conn,$show_doctor_profile_query);
// 	      $row = mysqli_fetch_array($show_run_doctor_profile_query);

				?>
                        <!-- Grid -->
<div class="w3-row">



<div class="w3-col 18 s12">

  <div class="w3-card-4 w3-margin w3-black">
    <div class="w3-container">
                     <h1  class=" text-center text-black font-weight-bold">Personal Information</h1> <hr color="#333333" />
                             <h3 class="text-black ">ID :    <?php  echo  $row['id'] . "<br />";?></br></h3> 
                             <h3 class="text-black"> Name :  <?php  echo   $row['f_name']; echo  $row['l_name']. "<br />";?></br></h3>
                             <h3 class="text-black">Email/Gmail Address :     <?php   echo $row['email'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Contact Number :   <?php  echo   $row['contact'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Personal Address :   <?php  echo  $row['address'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Qualification :    <?php  echo  $row['qualification'] . "<br />";?></br></h3>
                             <h3 class="text-black"> BMDC Registration Number: <?php  echo  $row['bmdc_reg_num'] . "<br />";?></br></h3>
                              <h3 class="text-black"> Specialism :    <?php  echo  $row['specialist'] . "<br />". "<br />". "<br />";?></h3>
                       <h1 class=" text-center font-weight-bold ">  Home Visit /Appointment Information</h1> <hr color="#333333" />
                          <!-- <p class="text-white  font-weight-bold">Schedule ID :    <?php  echo  $row['s_id'] . "<br />";?></p> -->
                                    <li>  <?php   echo $row['Day_Time1'] . "<br />";?></br></li>
                                    <li>  <?php   echo $row['Day_Time2'] . "<br />";?></br></li>
                                    <li>  <?php   echo $row['Day_Time3'] . "<br />";?></br></li>
                                     <li><?php   echo $row['Day_Time4'] . "<br />";?></br></li>
                                    <li>  <?php   echo $row['Day_Time5'] . "<br />";?></br></li>
                                     <li> <?php   echo $row['Day_Time6'] . "<br />";?></br></li>
                                     <li> <?php   echo $row['Day_Time7'] . "<br />";?></br></br></li>
                        <?php
                      
						
					
				   } 
		   ?>
               </div>
      </div>
    </div>
  </div>

</body>
</html>
