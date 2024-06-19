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
    <div class="blog-cover">
      <div class="blog-author">
        <h3>PERSONAL CARE AND COMPANIONSHIP</h3>
        <h2>Licensed Nursing Assistant (LNA)<br> or <br> Certified Nursing Assistant (CNA)</h2>
<div class="summary">
  <p>
  Licensed or certified nursing assistants handle the lowest level of home health care tasks and work under the supervision of an LPN or LVN. Typically, they can dress wounds, take blood pressure and pulse, and hand medications to a patient to take
  </p>
<p> Our Personal Care and Companionship  Service is a Health Care Service Specially For Elderly Old age people whose Family are unable to give time to  atheir Family Member .It is a type of  Non-medical care, home health aide services, senior care, homemaker care, assistive care, or companion care to provide a Quality Care to the Patient <br><br>
Personal care and companionship does not need to be prescribed by a doctor. Care provided on an ongoing basis on a schedule that meets a client’s needs, up to 24 hours a day, 7 days a week, including possible live-in care.</p>
<p>
At AMG Home Care, we understand there are multiple issues a family faces to care for their loved one. We all live busy lives, and it is difficult to find the right person, company, and up-to-date information that will show compassionate and experienced care. When we are suddenly thrust into caring for our elderly parents or loved ones, it is absolutely crucial to choose a dual team of a care provider and a Caregiver who are both considerate, compassionate, and can deliver the finest quality care you can admire and trust. AMG Home Care and its Caregivers are here, devoted for that purpose.
</p><p>
Families who are separated by great distances must make hard choices to provide care. Sometimes, nursing Care or special care seem to be the only options. You have a choice, and we can help. We provide a range of personal care services to promote health, dignity, and independence of our , which makes it possible for them to age where they want to – at home. From companionship and personal care to meal preparation and transportation services, our goal is to provide exceptional care for the aged, ill, or disabled. We want to help them maintain independence of their daily routines in familiar surroundings, and enjoy an increase in quality of life.
</p>
<br>
    
      <h2>Personal Care and Companionship services may include:</h2>
<ul>
  <li>
  Assistance with self-care, such as grooming, bathing, dressing, and using the toilet
Enabling safety at home by assisting with ambulation, transfer (eg, from bed to wheelchair, wheelchair to toilet), and fall prevention

  </li>
  <li>
  Assistance with meal planning and preparation, light housekeeping, laundry, errands, medication reminders, and escorting to appointments

  </li>
  <li>
  Companionship and engaging in hobbies and activities

  </li>
  <li>
  Supervision for someone with dementia or Alzheimer's disease


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
              FROM nurse where category like'P%' ";
    $run = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($run))
    { 
      echo  "<h3><tr><th><a href='detail.php?s_id={$row['id']}'>{$row['Name']}</a></th></h3>";
        
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