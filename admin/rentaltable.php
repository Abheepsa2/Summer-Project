
<?php
include ('registration.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
    
 <link rel="stylesheet" href="css/testable.css">
</head>
<body>
<?php

  include 'siddebar.php';
  ?>
<div class="container">
  <h2>MEDICAL EQUIPMENT RENTAL </h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Id</div>
      <div class="col col-3">Equipment Name</div>
      <div class="col col-3">PRICE </div>
      <div class="col col-4">Renting Period</div>
    </li>
    
 <?php
$sql=mysqli_query($conn,"select * from equipment_rental");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id"><?php echo $cnt;?></div>
      <div class="col col-3" data-label="Customer Name"><?php echo $row['equipment_name'];?></div>
      <div class="col col-3" data-label="Amount"><?php echo $row['price'];?></div>
      <div class="col col-4" data-label="Payment Status"><?php echo $row['time'];?></div>
    </li>
    <?php 
$cnt=$cnt+1;
											 }?>
   
  </ul>
</div>
</body>
</html>