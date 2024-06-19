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
    <div class="blog-coverrr">
      <div class="blog-author">
        <h3>Hospis Care And Paliative Care </h3>
        <h2>
        Registered Nurse (RN) <br>or <br>Advanced Practice Registered Nurse (APRN)
        </h2>
        
<div class="summary">
  <p>
  Registered nurses work with doctors. They are able to complete many other advanced nursing tasks like setting up IV lines, administering injections, giving medications and infusions, and observing the patients.
  </p>
  <p>
  RNs consult with doctors to adjust care plans as needed. They can set up and operate medical equipment, draw blood for diagnostic purposes, and teach family caregivers what to do to help care for their parent.
  </p>
  <p>
  Advanced practice registered nurses have specialized training in a specific area. Some are nurse midwives or nurse anesthetists, but some are nurse practitioners who take on some of the job duties doctors perform.
  </p>
<p> Our Hospis care and Paliative Service is a Health Care Service Specially for Chronic disease Management Long-term, hourly nursing care at home for adults with a chronic illness, injury, or disability.</p>

    <p>
    Private duty nursing care needs to be prescribed by a doctor. Care is provided primarily in shifts, up to 24 hours a day, 7 days a week.
    </p>
    <p>
    Hospice care is specialized care that provides physical comfort and emotional, social and spiritual support for people nearing the end of life. Your hospice team includes doctors, nurses, social workers and home health aides who provide care that centers on your comfort and dignity.
    </p>
      <h2>Hospis Care And Paliative Care services may include:</h2>
<ul>
  <li>
  Care for diseases and conditions such as Traumatic brain injury (TBI), Spinal cord injury (SCI), ALS, MS
  </li>
  <li>
  Ventilator care
  </li>
  <li>Tracheostomy care</li>
  <li>Monitoring vital signs</li>
  <li>Administering medications</li>
  <li>Ostomy/gastrostomy care</li>
  <li>Feeding tube care</li>
  <li>Catheter care</li>
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
              FROM nurse where category like'H%' ";
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