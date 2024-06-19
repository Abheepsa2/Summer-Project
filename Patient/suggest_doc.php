<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/suggest.css">
<title>Available Doctors</title>
</head>

<?php
 
  include 'siddebar.php';
  ?>

 <style>

h3{
font-size:24px;
letter-spacing:4px;}
th{
	font-size:35px;
text-align:center;
padding-top:20px;
color:#000066;

}
body{
  background: linear-gradient(rgba(134, 185, 209, 0.6), rgba(103, 176, 209, 0.6)), url(pics/patient-bg.webp)   center center;
background-size:auto;
background-attachment:inherit;

}
table {
	
	
      color:blueviolet;
width:100%;
height:80%;
/* background-image:url(pics/patientloginbg.png); */
background-size:contain;
margin-left: 30px;
border: 2px black;
margin-top: -40px;



}


</style> 
<body class="container display-4">
<script>
var name1 = prompt('Are you experience any of these symptoms?\n\na) Fever, Cough, Headache, Abdominal pain, \n Yellow-eye, Vomiting, Constipation,\nLoose-motion,Burning chest, Itching, Skin-Lashion\n\n b) Chest pain, Breathlesness, Palpitation,\nVirtigo, Swelling leg, Senseless, Headache, Neck-pain\n\n c) Pregnency , P/V bleeding during pregnency,\nLess fatal movement, ecxcessive whitish discharge P/V, Severe lower abdominal pain puring menestrition, Lower abdominal pain\n \nd) Fractures, Dislocation, \nJoint pain, Swelling of joint, Bone Pain\n \ne) bleeding gum, gum-swelling,\n toothache, carries teeth  \n \n f) Experiencing any difftent symptoms than these ? \n ' );
//-------------If chose single option-----------------
if(name1=='a'){
 alert('Contact with our Medicine specialist...');
 }
		else if(name1=='b'){
		 alert('Contact with our Cardilogist...');
		 }
		else if(name1=='c'){
		 alert('Contact with our Gynocologist...');
		 }
		else if(name1=='d'){
	 alert('Contact with our Orthopedic ...');
 			}
				else if(name1=='e'){
	 alert('Contact with our Dentist...');
 			}
       else if(name1=='f'){
	 alert('Contact with our General Physician ......');
 			}
			//-------------If chose double options-----------------
						else if(name1=='ab'){
 			var name2= prompt('Are you experience any of these symptoms?\n\na) Fever, Cough, Abdominal pain, \n Yellow-eye, Vomiting, Constipation,\nLoose-motion,Burning chest, Itching, Skin-Lashion\n\n b) Chest pain, Breathlesness, Palpitation,\nVirtigo, Swelling leg, Senseless,  Neck-pain\n\n ');
		if(name2=='a'){
 alert('Contact with our Medicine specialist...');
			}
			else if(name2=='b')
 alert('Contact with our Cardilogist...');
			
			}
				else if(name1=='ac'){
	 alert('Contact with our Medicine specialist or  Gynocologist...');
 			}
			
				else if(name1=='ad'){
	 alert('Contact with our Medicine specialist or Orthopedic ...');
 			}
			
				else if(name1=='ae'){
	 alert('Contact with our Medicine specialist or  Dentist...');
 			}
							else if(name1=='bc'){
	 alert('Contact with our Cardilogist or  Gynocologist...');
 			}
			
				else if(name1=='bd'){
	 alert('Contact with our Cardilogist or Orthopedic ...');
 			}
			
				else if(name1=='be'){
	 alert('Contact with our Cardilogist or  Dentist...');
	
 			}
	else if(name1=='cd'){
	 alert('Contact with our Gynocologist or Orthopedic specialist ...');
 			}
			
				else if(name1=='ce'){
	 alert('Contact with our Gynocologist or  Dentist...');
	 }
				else if(name1=='de'){
	 alert('Contact with our Orthopedic specialist or  Dentist...');	
	 }
   else if(name1=='af'){
	 alert('Contact with our General Physician');	
	 }
///------- finish c----------------

</script>
<div class="container">
<!-- <div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path
      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Cardiologist</p>
    <p class="card__description">
      
    </p>
  </div>
</div>

<div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path
      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Cardiologist</p>
    <p class="card__description">
      
    </p>
  </div>
</div>
<div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path
      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Cardiologist</p>
    <p class="card__description">
     
    </p>
  </div>
</div>
<div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path
      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Cardiologist</p>
    <p class="card__description">
  
    </p>
  </div>
</div>
<div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path
      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Cardiologist</p>
    <p class="card__description">
  
    </p>
  </div>
</div>
<div class="card">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path
      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Cardiologist</p>
    <p class="card__description">
      
    </p>
  </div>
</div>
</div> -->

<table   class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col" class="text-center text-warning">Specialization</th>

    </tr>
  </thead>




<tr><th class="text-center"><a href="doclist/cardiologist.php">Cardiologist</a></th></tr>

<tr><th class="text-center"><a href="doclist/gynecologist.php">Gynecologist</a></th></tr>
<tr><th class="text-center"><a href="doclist/dentist.php">Dentist</a></th></tr>
<tr><th class="text-center"><a href="doclist/bone.php">Orthopedic</a></th></tr>

<tr><th class="text-center"><a href="doclist/medicine.php">Medicine</a></th></tr>
<tr><th class="text-center"><a href="apointment.php"><button class="button-90" role="button">Book An Appointment </button></a></th></tr>
<br><br>
<h2>
  <div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="index.php">Previous Page</a></li>
  <li class="next"><a href="../doctor_list.php">Next Page</a></li>
</ul></div>

</h2>

</table>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
</body>
</html>