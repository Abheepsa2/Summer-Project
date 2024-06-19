<?php
include ('registration.php');
?>
<!DOCTYPE html>

<html>

<head>

 <title>Nurse Table</title>

 <link rel="stylesheet" href="css/apointment.css">

</head>
<?php
 
  include 'siddebar.php';
  ?>
<body>
<div class="container">
<div class="title"><h2>Available nurses</h2>  <hr></div>

</div>

 <table >

 

 <tr>

 <th>ID</th>

 <th>Name</th>

 <th>Address</th>

 <th>Contact</th>
 <th>Category </th>

 <th>Email </th>

 <th>Gender</th>
 <th>Qualification</th>
 <th>Past_experience</th>

 </tr>

 <?php
$sql=mysqli_query($conn,"select * from nurse");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
  <tr>

 <td><?php echo $cnt;?>.</td>


 <td><?php echo $row['Name'];?></td>

<td><?php echo $row['address'];?></td>


<td><?php echo $row['contact'];?></td>
<td><?php echo $row['category'];?></td>

<td><?php echo $row['email'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['Qualification'];?></td>
<td><?php echo $row['past_experience'];?></td>
<!--  -->
 </tr>


 


 <?php 
$cnt=$cnt+1;
											 }?>
 

 </table>


 </body>

</html>
