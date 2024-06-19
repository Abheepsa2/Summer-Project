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
<title>nurse detail</title>

</head>

<body class="container display-4">

 <h1  class=" text-center font-weight-bold text-white ">Nurse's Information</h1><br/>
 

<?php 
 include("registration.php");
 
 $sql=mysqli_query($conn,"select * from nurse ");
 $cnt=1;
 while($row=mysqli_fetch_array($sql))
 {


				?>
          
          <h1  class=" text-center text-black font-weight-bold">Personal Information</h1> <hr color="#333333" />
                             
                             <h3 class="text-black"> Name :  <?php  echo   $row['Name']; echo  "<br />";?></br></h3>
                             <h3 class="text-black"> Address :     <?php   echo $row['address'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Contact Number :   <?php  echo   $row['contact'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Category:   <?php  echo  $row['category'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Email    <?php  echo  $row['email'] . "<br />";?></br></h3>
                             <h3 class="text-black"> Gender <?php  echo  $row['gender'] . "<br />";?></br></h3>
                              <h3 class="text-black"> Qualification :    <?php  echo  $row['Qualification'] .  "<br />". "<br />";?></h3>
                              <h3 class="text-black"> Past Experience:    <?php  echo  $row['past_experience'] . "<br />". "<br />". "<br />";?></h3>
                     <!-- Grid -->
                     <?php
                      
						
					
                    } 
                ?>
<div class="w3-row">



<div class="w3-col 18 s12">

 
   
                    
                
              
     
    </div>
  </div>

</body>
</html>
