
<!DOCTYPE html >
<html >
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<style>
h1{
font-size:50px;
text-align:center;
padding-top:20px;
color:black;
font-style:inherit;
text-shadow: 2px 2px black;
}
li{
font-size:24px;
}
ul{
font-size:28px;
color:black
}
ul h3{
font-size:30px;
}
th{
  color:black;
  font-size: 24px;
  

}

 
  /* body {
      font: 400 15px/1.8 Lato, sans-serif;
      color:beige;
  } */
body {margin:0;
padding:0;
width:100%;
height:100vh;
background-image:url(patient-bg.png);
background-size:cover;}
/* div ul
{
padding-bottom:70px;
} */
 table{
width: 70%;
height:8px;
border-radius: 6px;

background: linear-gradient(rgba(134, 185, 209, 0.8), rgba(103, 176, 209, 0.8))  center center;
 }
 .container-fluid{
  width: 70%;
  height:12%;
  /* margin-left: 300px; */
  margin-top: 20px;
  /* background: linear-gradient(rgba(134, 185, 209, 0.6), rgba(103, 176, 209, 0.6))  center center; */
  
 }
</style>

<body class="container-fluid">

<h1 class="text-monocase text-capitalize text-center text-dark">All The Doctor's Schedule List Of Orthopedic </h1>
    

<table border="2" 
class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col" >Name</th>
      
      <th scope="col" >Specialist</th>
      
      <th scope="col">Qualification</th>

    </tr>
  </thead>

<?php 
include("registration.php");

?><br/>
<?php 


       $query = "SELECT * 
                     FROM doctor inner join schedule on schedule.d_id=doctor.id  where permission='approved' AND specialist like'o%' OR permission='Added' AND specialist like'o%' ";
				   $run = mysqli_query($conn, $query);
				   while($row = mysqli_fetch_array($run))
				   {
				         
						  echo  "<h3><tr><th><a href='detail.php?s_id={$row['s_id']}'>{$row['f_name']}{$row['l_name']}</a></th></h3>";
						    
						   echo "<h3><th>". $row['specialist'] ." </th></h3>" ;
						   echo "<h3><th>". $row['qualification'] ." </th></tr></h3>";
						   
						  
				   }
				    
			   ?></table>
         </ul>
                   
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
 
  <li class="return "><a href="../Our_doctors.php">Return </a></li>
 
</ul></div>
	 
 
          
</body>
</html>
