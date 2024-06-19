<?php
include ('registration.php');
?>
<!DOCTYPE html>

<html>

<head>

 <title>Doctor Details</title>

 <link rel="stylesheet" href="css/doctable.css">

</head>
<?php
  include 'header.php';
  include 'sidebar.php';
  ?>
<body>
<div class="container">

<div class="title">  DOCTOR DETAILS</div>
</div>
 <table >

 
 
 <tr>

 <th>ID</th>



 <th>Name</th>
 <th>Specialization</th>

 <th>Address</th>

 <th>Fees </th>

 <th>Contct</th>

 <th>Email </th>

 <th>Password</th>

 </tr>

 <?php
$sql=mysqli_query($con,"select * from doctor_details");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
  <tr>

 <td><?php echo $cnt;?>.</td>

 <td><?php echo $row['Specialization'];?></td>

 <td><?php echo $row['Name'];?></td>

<td><?php echo $row['Address'];?></td>
<td><?php echo $row['Fees'];?></td>

<td><?php echo $row['Contact'];?></td>

<td><?php echo $row['Email'];?></td>

<td><?php echo $row['Password'];?></td>

 </tr>


 


 <?php 
$cnt=$cnt+1;
											 }?>
 

 </table>


 </body>

</html>
