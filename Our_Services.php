<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="stylesheet" href="our_Services.css">
</head>
<body>
<?php 
     include 'nav.php';
    ?>
     <h1>SERVICES</h1>

<div class="main">
  <ul class="cards">

  <li class="cards_item" id="item_salad">
      <div class="card">
       
        <div class="card_image"><img src="pics/nursing.png" alt="mixed vegetable salad in a mason jar. "></div>
        <div class="card_content">
          <h2 class="card_title">NURSING SERVICE</h2>
          <div class="card_text">
            <p> Home nursing care refers to the medical and non-medical support provided by nurses to individuals, aiming to maintain their health and well-being in the comfort of their homes . <br>
            </p>
           </div>
          <a href="services/nursing.php">
          <button class="button" role="button"> Read-More </button></a>
        </div>
      </div>
    </li>
    <li class="cards_item" id="item_salad">
      <div class="card">      
        <div class="card_image"><img src="pics/visit.png" alt="mixed vegetable salad in a mason jar. "></div>
        <div class="card_content">
          <h2 class="card_title">HOME DOCTOR CONSULTANCY</h2>
          <div class="card_text">
          <p>Our Home Doctor Visit and Consultation services are designed to provide convenient and personalized medical care in the comfort of your own home. <br>
. <br>
</p>
          </div>
          <a href="services/homevisit.php">
          <button class="button" role="button"> Read-More </button>
          </a>
        </div>
      </div>
    </li>
    <li class="cards_item" id="item_salad">
      <div class="card">
       
        <div class="card_image"><img src="pics/lab.png"></div>
        <div class="card_content">
          <h2 class="card_title">HOME LAB TEST </h2>
          <div class="card_text1" style:   width: 100%>
           
          We provide accurate and reliable diagnostic testing to help identify and understand various health conditions through our lab testing and diagnosis service. .<br>
                                   
          </div>
          <a href="services/lab.php">
          <button class="button" role="button"> Read-More </button>
          </a>
        </div>
      </div>
    </li>
  
    <!-- <li class="cards_item" id="item_salad">
      <div class="card"> -->
        <!-- <div class="card_image"><img src="pics/pharmacy.png" alt="mixed vegetable salad in a mason jar. "></div>
        <div class="card_content">
          <h2 class="card_title">PHARMACY</h2>
          <div class="card_text">
            <p>
          Our pharmacy is staffed with highly trained pharmacists and technicians who are dedicated to ensuring the safe and effective use of medications.
        
          </div>
          <a href="services/pharmacy.php">
          <button class="button" role="button"> Read-More </button>
          </a>
        </div>
      </div>
    </li> -->
    <li class="cards_item" id="item_reuben">
      <div class="card">
       
        <div class="card_image"><img src="pics/Rental.png" alt="a Reuben sandwich on wax paper. "></div>
        <div class="card_content">
          <h2 class="card_title">RENTAL</h2>
          <div class="card_text">
            <p>Our Medical Equipment Rental Service provides a wide range of medical equipment for short-term and long-term rentals
            </p>
          
          </div>
          <a href="services/rental.php" class="read-more">
        <button class="button" role="button"> Read-More</button>
        </a>
        </div>
      </div>
    </li>
   
  </ul>
</div>
</body>
</html>