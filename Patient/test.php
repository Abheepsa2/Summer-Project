<?php 
require_once('registration.php');
?>
<!-- import Swal from 'sweetalert2' -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEST</title>
	<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script src="sweetalert2.all.min.js"></script> -->
	<link rel="stylesheet" href="test.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../sweet-alert.min.js"></script>

</head>
<body>
<div>
	<?php
	
if(isset($_POST['create'])){
	$name=$_POST['testname'];
	$sample=$_POST['sample'];
    $time=$_POST['time'];
   
	$sql = "INSERT INTO lab_test
	           (name,sample,time)
           VALUES
	            ('$name','$sample','$time') ";
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
}
	}
	?>
</div>


<?php
 
  include 'siddebar.php';
  ?>

  <div class="container">
	<div class="row">
		<div>
			<h3>HOME LAB TEST AND SAMPLE COLLECTION</h3>
		</div>
		<div class="col-lg-6">
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
            Thyroid Function Test
              </div>
               <div class="card-body">
                   <h6 class="card-title">
                        Sample required : blood
                                          <br>
                          Empty stomach : Not required <br>
                            Reporting time : 12 hrs
                           </h6>
                      <p class="card-text">Thyroid function tests are a series of blood tests used to measure how well your thyroid gland is working. The thyroid is a small gland located in the lower-front part of your neck.</p>
					  <button type="submit"onclick="onclick()"  name="create" class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value=" Thyroid Function Test">
					  <input type="hidden"name="sample" value="blood">
					  <input type="hidden"name="time" value="12 hr">
                      </div>
 
               </div>

			</form>
			
		</div>
		<div class="col-lg-3">
			
			
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
			COMPLETE BLOOD COUNT
              </div>
               <div class="card-body">
                   <h6 class="card-title">
					<b>A complete blood count test measures the following</b>
					<ul> 
						<li>Red blood cells (RBC), which carry oxygen</li>
						<li>Hemoglobin(Hb), the oxygen-carrying protein </li>
						<li>Platelets, which help blood to clot</li>
						<li>Hematocrit, the amount of red blood cells in the blood</li>
					</ul>
				 
</h6>
                      <p class="card-text">A complete blood count (CBC) is a blood test. It's used to look at overall health</p>
					  <button type="submit"onClick="Insert()" function3() name="create" class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value=" Complete blood count">
					  <input type="hidden"name="sample" value="blood">
					  <input type="hidden"name="time" value="12 hr">
                      </div>
               </div>
			</form>
		</div>
		<div class="col-lg-6">
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
            Kidney Function Test
              </div>
               <div class="card-body">
                   <h6 class="card-title">
Sample required : blood
<br>
Empty stomach : Not required <br>
Reporting time : 6-7 hrs
</h6>
                      <p class="card-text">The tests measure levels of various substances, including several 
						minerals, electrolytes, proteins, and glucose (sugar), in the blood
						 to determine the current health of the kidneys.</p>
					  <button type="submit" function3() name="create" onClick="Insert()"class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value="Kidney Function Test">
					  <input type="hidden"name="sample" value="blood">
					  <input type="hidden"name="time" value="6-7 hr">
                      </div>
 
               </div>

			</form>
			
		</div>
		<div class="col-lg-3">
			
			
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
            Fasting Blood Sugar
              </div>
               <div class="card-body">
                   <h6 class="card-title">
Sample required : blood
<br>
Empty stomach :Required <br>
Reporting time : 12 hrs
</h6>
                      <p class="card-text">Blood Sugar Profile <br>
					  A fasting blood sugar test is the most common test done to screen for diabetes.
					  Before the test, you shouldn't have anything to eat or drink (except water) for 8 to 12 hours..</p>
					  <button type="submit" function3() name="create" onClick="Insert()"class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value=" Fasting Blood Sugar">
					  <input type="hidden"name="sample" value="blood">
					  <input type="hidden"name="time" value="12 hr">
                      </div>
 
               </div>

			</form>
			
		</div>
		<div class="col-lg-6">
			
			
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
			Urine Tests
              </div>
               <div class="card-body">
                   <h6 class="card-title">
                      Sample required : Urine
                         <br>
                         Empty stomach : Not required <br>
                               Reporting time : 1 day
                            </h6>
                      <p class="card-text">These tests examine urine samples to evaluate kidney function, detect infections, monitor certain medical conditions, and screen for drug use.</p>
					  <button type="submit" function3() name="create" onClick="Insert()"class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value="Urine Tests">
					  <input type="hidden"name="sample" value="Urine">
					  <input type="hidden"name="time" value="12 hr">
                      </div>
 
               </div>

			</form>
			
		</div>
		<div class="col-lg-6">
			
			
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
			Electrocardiogram (ECG)
              </div>
               <div class="card-body">
                   <h6 class="card-title">
Sample required : electrical activity of the heart
<br>
Empty stomach : Not required <br>
Reporting time : 1-2 hrs
</h6>
                      <p class="card-text">An electrocardiogram(ECG) is a painless, noninvasive way to help diagnose many
						 common heart problems. A health care provider might use an electrocardiogram to determine or detect:

Irregular heart rhythms (arrhythmias)</p>
					  <button type="submit" function3() name="create" onClick="Insert()"class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value="Electrocardiogram (ECG)">
					  <input type="hidden"name="sample" value="Electrical activity of the heart">
					  <input type="hidden"name="time" value="1- 2 hr">
                      </div>
               </div>
			</form>
		</div>
		<div class="col-lg-6">
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
			Vitamin D
              </div>
               <div class="card-body">
                   <h6 class="card-title">
				   Sample required : blood<br>
Empty stomach : Not required <br>
Reporting time : 12 hrs<br>
</h6>
                      <p class="card-text">Vitamin D is a nutrient your body needs for building and maintaining
						 healthy bones. That's because your body can only absorb calcium, 
						 the primary component of bone, when vitamin D is present</p>
					  <button type="submit" function3()  onClick="Insert()"name="create"class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value="Vitamin D">
					  <input type="hidden"name="sample" value="blood">
					  <input type="hidden"name="time" value="12 hr">
                      </div>
 
               </div>

			</form>
			
		</div>
		<div class="col-lg-3">
			
			
			<form method="post" action="">
			<div class="card ">
            <div class="card-header">
            Stool Routine Test
              </div>
               <div class="card-body">
                   <h6 class="card-title">
Sample required : stool
<br>
Empty stomach : Not required <br>
Reporting time : 12 hrs
</h6>
                      <p class="card-text">A stool routine test, also known as a fecal occult blood test or fecal immunochemical test (FIT), is a screening test used to detect the presence of blood in the stool, which can be an indicator of various gastrointestinal conditions.</p>
					  <button type="submit"  onClick="Insert()"name="create"class="btn btn-primary">PROCEED</button>
					  <input type="hidden"name="testname" value="Stool Routine Test">
					  <input type="hidden"name="sample" value=" stool">
					  <input type="hidden"name="time" value="12 hr">
                      </div>
 
               </div>

			</form>
			
		</div>
	</div>
  </div>

  <?php
  if(isset($_SESSION['status']) && $_SESSION['status']!='')
  {
// echo $_SESSION['status'];
?>
		<script>
			Swal.fire({
		title: '<?php echo $_SESSION['status'];?>',
		text'<?php echo $_SESSION['status_code'];?>',
		icon: "success"
		});
	</script>
<?php
unset($_SESSION['status']);
  }
  ?>
</body>
</html>
	