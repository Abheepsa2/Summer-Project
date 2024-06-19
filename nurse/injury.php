<?php 
include("../Patient/registration.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary</title>
    <link rel="stylesheet" href="primary.css">
  
</head>

<body>
<?php  include 'nav.php'; ?>

<div class="blog-container">
  
  <div class="blog-header">
    <div class="blog-coverr">
      <div class="blog-author">
        <h3>Injury Management </h3>
        <h2>
        Licensed Vocational Nurse (LVN) <br>or<br> Licensed Practical Nurse (LPN)
        </h2>
<div class="summary">
  <p>Licensed vocational and practical nurses work under the supervision of an Registered nurse . An LVN or LPN is able to monitor and record a patient’s vital signs and observe their patient’s progress. They can talk to the family about that progress. They can administer medications and insert catheters if needed</p>
<p> Short-term, physician-directed care designed to help a patient prevent or recover from an illness, injury, or hospital stay<br>
<p>Medicare-certified home health care, intermittent skilled care, or visiting nurse services</p>
<p>Home health care needs to be prescribed by a doctor. Care is provided through visits from specialized clinicians that last up to an hour, on a short-term basis until individual goals are met.</p>
    
      <h2>Injury Management services may include:</h2>


<ul>

<li>
Need help managing a chronic condition to avoid an unnecessary hospitalization

</li>
<li>
Need continued recovery care at home following a hospital stay, illness, or injury
</li>
</ul>




</div>

</div>
      </div>

    </div>
  </div>
</div>


<div class="blog-containerr">
  
  <div class="blog-header">
    <div class="blog-author">
        <h2>Available Nurses </h2>
    </div>
  </div>

  <div class="blog-body">
  

  <table border="2" 
class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col" >Name</th>
     
     
      <th scope="col" >Category</th>
      <th scope="col">Qualification</th>
      <th scope="col" >Past Experience</th>

    </tr>
  </thead>

<br/>
<?php

$query = "SELECT * 
              FROM nurse where category like'i%' ";
    $run = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($run))
    { 
        echo "<h3><tr><th >". $row['Name'] ." </th></h3>" ;
       
        echo "<h3><th>". $row['category'] ." </th></h3>";
        echo "<h3><th>". $row['Qualification'] ." </th></h3>";
        echo "<h3><th >". $row['past_experience'] ." </th></tr></h3>" ;
    }
     
  ?></table>
  </div>
  </div>
 
</div>

</body>
</html>