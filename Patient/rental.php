<?php
include ('registration.php');
?>
<!DOCTYPE html>

<html>

<head>

 <title>EQUIPMENT RENTAL</title>

 <link rel="stylesheet" href="css/rental.css">
 <!-- <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css
" rel="stylesheet"> -->
 <!-- <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css"> -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../sweet-alert.min.js"></script>

	
</head>
<?php
  
  include 'siddebar.php';
  ?>
<body>
  <?php

  ?>
  <div>
  <?php
if(isset($_POST['create'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
    $time=$_POST['time'];
   
	$sql = "INSERT INTO equipment_rental
	           (equipment_name,price,time)
           VALUES
	            ('$name','$price','$time') ";
				$query = mysqli_query($conn, $sql);
				if($query)
{ 

  if(isset($_POST['create'])){
    ?>
  <script>
 
  
  Swal.fire({
  title: "SUCESS!",
  text: "data inserted!",
  icon: "success",
  backdrop: `
    rgba(0,0,120,0.3)
  `
});


  </script>
  
  <?php 
  }
// function Insert(){
 
// }
}

}
?> 
</div>
<div class="tm-container">

 <h2> MEDICAL EQUIPMENT RENTAL</h2>
              <form  method="post" action="">
                <div class="tm-list-item">          
                  <img src="pics/oxygenn.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">OXYGEN CONCENTRATOR <span>  Rs 500 per day </span></h3>
                    <p class="tm-list-item-description">An oxygen concentrator is a medical device that gives
                       you extra oxygen. Air is made up of about 20% oxygen.<br>
                        An oxygen concentrator uses the air in the atmosphere,
                         filters it, and gives you air that is 90%-95% oxygen.</p>
                    </p>
                    <!-- <input type="button" name="buton" value="ORDER" class="buton" onClick="Insert()"> -->
                 <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
					  <input type="hidden"name="name" value=" OXYGEN CONCENTRATOR ">
					  <input type="hidden"name="price" value="Rs 500">
					  <input type="hidden"name="time" value=" per day basis">
                    <!-- <a href=""><button class="button"> ORDER</button></a> -->
                  </div>
                </div>
                </form>
                <form method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/medicalbed.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">MEDICAL BED<span> RS 4500 per month </span></h3>
                    <p class="tm-list-item-description">A medical bed, also known as a hospital bed, is a specialized bed designed for use in healthcare settings such as hospitals,
                       nursing homes, and home care environments. These beds are designed to provide comfort, support, and safety for patients who are ill, injured, or recovering from medical procedures.</p>
                       <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                      <!-- < button type="submit"function3()  name="create" class="btn btn-primary">PROCEED</button> -->
					  <input type="hidden"name="name" value=" MEDICAL BED">
					  <input type="hidden"name="price" value="RS 4500">
					  <input type="hidden"name="time" value="per month basis ">
                      </div>

                </div>
                </form>
                <form  method="POST"action="">
                <div class="tm-list-item">          
                  <img src="pics/iv stand.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">IV STAND <span>  RS 1500 per month</span></h3>
                    <p class="tm-list-item-description"> The IV stand is designed to securely hold IV bags or bottles at the correct height and position for easy administration of fluids and medications into a patient's bloodstream through a catheter.</p>
                 
                    <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                    <input type="hidden"name="name" value=" IV STAND">
					  <input type="hidden"name="price" value="RS 1500">
					  <input type="hidden"name="time" value="per month"> </div>
                </div>
                </form>
                <form  method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/suctionmachine.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">SUCTION MACHINE PORTABLE<span>  RS 200 per day </span></h3>
                    <p class="tm-list-item-description">A portable suction machine, also known as a portable suction unit or portable aspirator,
                       is a medical device used to remove mucus, saliva, blood, or other fluids from a patient's
                        airway or respiratory system. It is designed for use in emergency situations,
                         home care settings, clinics, hospitals, and other healthcare environments where suctioning may be required.</p>
                         <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>      
               
					  <input type="hidden"name="name" value=" SUCTION MACHINE PORTABLE">
					  <input type="hidden"name="price" value=" RS 200">
					  <input type="hidden"name="time" value="per day basis">
                        </div>
                </div> 
                </form>
                <form  method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/bipap machine.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">BIPAP MACHINE<span> RS 1000 PER DAY</span></h3>
                    <p class="tm-list-item-description">Bilevel positive airway pressure is a machine that helps you breathe. 
                      It’s a form of noninvasive ventilation that providers might use if you can breathe
                       on your own but aren’t getting enough oxygen or can’t get rid of carbon dioxide. 
                       Unlike invasive mechanical ventilation, which connects to a tube in your throat,
                        BiPAP delivers air through a mask on your face.</p>
                        <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                        <input type="hidden"name="name" value="BIPAP MACHINE">
					  <input type="hidden"name="price" value=" RS 1000 ">
					  <input type="hidden"name="time" value="per day basis">

                        </div>
                </div> 
                </form>
                <form  method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/commode-chair.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">COMMODE -CHAIR <span> RS 2000 per month</span></h3>
                    <p class="tm-list-item-description">A commode chair is a portable chair with a toilet seat and a 
                      container underneath that can be used as a portable toilet for individuals who have 
                      difficulty using a traditional bathroom. Commode chairs are designed to provide a 
                      convenient and safe solution for toileting needs for individuals with mobility issues,
                       disabilities, or those who are unable to easily access a regular toilet.</p>
                       <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                       <input type="hidden"name="name" value="COMMODE -CHAIR">
					  <input type="hidden"name="price" value="RS 2000">
					  <input type="hidden"name="time" value="per month">

                        </div>
                </div> 
                </form>
                <form  method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/infusionn.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Home Infusion Pumps<span> RS 2400 per month</span></h3>
                    <p class="tm-list-item-description">Infusion pumps deliver fluids, 
                      including medications or nutrients directly into a Patient’s body at a specific rate.
                        Most Infusion pumps can be used into the veins or circulatory system, or 
                         into the skin or soft tissue. Supplies are just as important as medication and receiving the right Infusion pump
                         Catheters ,IV Flushes ,IV Sets,Needles ,PICC Supplies, Port Care Supplies ,Valves </p>
                    </p>
                    <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                    <input type="hidden"name="name" value="Home Infusion Pumps">
					  <input type="hidden"name="price" value=" RS 2400">
					  <input type="hidden"name="time" value="12 hr">

                  </div>
                </div>
                </form>
                <form  method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/nubulizer.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">NEBULIZER<span>RS 200 per day</span></h3>
                    <p class="tm-list-item-description">A nebulizer is a medical device used to deliver medication in the 
                      form of a mist that can be inhaled into the lungs. It is commonly used to treat respiratory 
                      conditions such as asthma, chronic obstructive pulmonary disease (COPD), cystic fibrosis,
                       and other respiratory diseases that require medication to be inhaled directly into the lungs.</p>
                    </p>
                    <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                    <input type="hidden"name="name" value="NEBULIZER">
					  <input type="hidden"name="price" value="RS 200">
					  <input type="hidden"name="time" value="per day">

                  </div>
                </div>
                </form>
                <form  method="POST" action="">
                <div class="tm-list-item">          
                  <img src="pics/wheelchair.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">WHEELCHAIR<span> RS 3000 per month</span> </h3>
                    <p class="tm-list-item-description"> A wheelchair is a mobility device that is used by 
                      individuals who have difficulty walking or moving around independently. Wheelchairs 
                      provide seated mobility for people with disabilities, injuries, or conditions that 
                      limit their ability to walk or stand for prolonged periods.
                       They are designed to provide support, comfort, and independence to users who
                        need assistance with mobility.</p>
                        <a href="">
                        <button type="submit"  name="create"class="buton"  onClick="Insert()">PROCEED</button>
                        <input type="hidden"name="name" value="WHEELCHAIR">
					  <input type="hidden"name="price" value="RS 3000">
					  <input type="hidden"name="time" value="per month">

                  </div>
                </div> 
                </form>                    
             
        
  </div>

  
 </body>

</html>
