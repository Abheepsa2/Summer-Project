<?php
include ('registration.php');
?>
<!DOCTYPE html>

<html>

<head>

 <title>Doctor Details</title>

 <link rel="stylesheet" href="css/doctable.css">
<style>
  body{
    margin-top: 30px;
  }
</style>
</head>
<?php

  include 'siddebar.php';
  ?>
<body>
<div class="container">

<div class="title">  DOCTOR DETAILS</div>
</div>

<table border="2" 
class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col" >Name</th>
      <th scope="col" >Specialist</th>
      
      <th scope="col">Qualification</th>

    </tr>
  </thead>
<div class="data">

<?php 
include("registration.php");

?><br/>
<?php 


       $query = "SELECT * 
                     FROM doctor inner join schedule on schedule.d_id=doctor.id  where permission='approved'  ";
				   $run = mysqli_query($conn, $query);
				   while($row = mysqli_fetch_array($run))
				   {    
						  echo  "<h3><tr><th><a href='detail.php?s_id={$row['s_id']}'>{$row['f_name']}{$row['l_name']}</a></th></h3>";
						   echo "<h3><th>". $row['specialist'] ." </th></h3>" ;
						   echo "<h3><th>". $row['qualification'] ." </th></tr></h3>";
						   
						  
				   }
				    
			   ?>
         
         </div></table>

 </body>

</html>
