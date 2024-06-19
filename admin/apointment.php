<?php
include ('registration.php');
?>
<!DOCTYPE html>

<html>

<head>

 <title>Doctor Details</title>

 <link rel="stylesheet" href="css/apointment.css">

</head>
<?php

  include 'siddebar.php';
  ?>
<body>
<div class="container">

<div class="title"><h2>Doctor Apointments Table</h2> </div>
<hr>
</div>
 <table >

 
 
 <tr>

 <th>ID</th>




 <th>Specialization</th>
 <th>Name</th>

 <th>Age</th>


 <th>Contact</th>
 
 <th>Date </th>

 <th>Address </th>

 <th>Time</th>
 <th>Description</th>

 </tr>

 <?php
$sql=mysqli_query($conn,"select * from appointment");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
  <tr>

 <td><?php echo $cnt;?>.</td>

 <td><?php echo $row['specialization'];?></td>

 <td><?php echo $row['name'];?></td>

 <td><?php echo $row['age'];?></td>

<td><?php echo $row['contact'];?></td>

<td><?php echo $row['date'];?></td>

<td><?php echo $row['address'];?></td>

<td><?php echo $row['time'];?></td>

<td><?php echo $row['description'];?></td>

 </tr>


 


 <?php 
$cnt=$cnt+1;
											 }?>
 

 </table>


 </body>

</html>
