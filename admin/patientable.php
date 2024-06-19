<?php
include ('registration.php');
?>
<!DOCTYPE html>

<html>

<head>

 <title>Patient Table</title>

 <link rel="stylesheet" href="css/apointment.css">

</head>
<?php

  include 'sidDebar.php';
  ?>
<body>
<div class="container">

<div class="title"><h2>Available  Patients </h2>  <hr></div>
</div>

 <table >

 

 <tr>

 <th>ID</th>

 <th>firstName</th>
 <th>LastName</th>

 <th>Address</th>



 <th>Contact</th>
 <th>Gender </th>

 <th>Email </th>

 <th>Password</th>
 

 </tr>

 <?php
$sql=mysqli_query($conn,"select * from patient_register");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
  <tr>

 <td><?php echo $cnt;?>.</td>


 <td><?php echo $row['firstname'];?></td>

<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['address'];?></td>

<td><?php echo $row['number'];?></td>

<td><?php echo $row['gender'];?></td>

<td><?php echo $row['email'];?></td>

<td><?php echo $row['password'];?></td>
<!--  -->
 </tr>


 


 <?php 
$cnt=$cnt+1;
											 }?>
 

 </table>


 </body>

</html>
