
<?php
include ('registration.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    
 <link rel="stylesheet" href="css/testable.css">
</head>
<body>
<?php
  
  include 'siddebar.php';
  ?>
<div class="container">
  <h2>LAB TEST AND SAMPLE COLLECTION REQUEST</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Id</div>
      <div class="col col-3">Test Name</div>
      <div class="col col-3">Sample type </div>
      <div class="col col-4">Reporting time</div>
    </li>
    
 <?php
$sql=mysqli_query($conn,"select * from lab_test");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id"><?php echo $cnt;?></div>
      <div class="col col-3" data-label="Customer Name"><?php echo $row['name'];?></div>
      <div class="col col-3" data-label="Amount"><?php echo $row['sample'];?></div>
      <div class="col col-4" data-label="Payment Status"><?php echo $row['time'];?></div>
    </li>
    <?php 
$cnt=$cnt+1;
											 }?>
   
  </ul>
</div>
</body>
</html>