<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="profile.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Profile</title> 
    <script src="push.min.js"></script>
    <script src="push.js"></script>
    <style>
     

/* CSS */
.container{
  margin-left: 350px;
  margin-top: -20px;
}

.button-66 {
  margin-top: -12px;
  background-color: initial;
  background-image: linear-gradient(#8614f8 0, #760be0 100%);
  border-radius: 12px;
  border: 0;
  box-shadow: rgba(1,60,136,.5) 0 -1px 3px 0 inset,rgba(0,44,97,.1) 0 3px 6px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inherit;
  font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 20px;
  font-weight: 700;
  line-height: 24px;
  margin: 0;
  min-height: 62px;
  min-width: 120px;
  padding: 24px 28px;
  position: relative;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  transition: all .2s cubic-bezier(.22, .61, .36, 1);
}

.button-66:hover {
  background-color: #065dd8;
  transform: translateY(-15px);
}

@media (min-width: 768px) {
  .button-66 {
    padding: 16px 44px;
    min-width: 150px;
  }
}
.col-md-2{
  margin-right: 100px;
  margin-top: -72px;
}

    </style>
</head>
<body>
   
   
  <?php  
  include 'siddebar.php';
  ?>
    <section class="dashboard">
       
       
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
        <h2>LIFELINE HEALTH HOMECARE SERVICES </h2>
          <h3>YOUR HEALTH IS OUR PRIORITY </h3>
          <br>
          <p> Lifeline Health Home Care Team would like to thank our customer for their trust and belief <br>from the very beginning of our journey</p>
          
         <p> Our organization is dedicated to providing comprehensive and professional healthcare  services  <br>
          directly to your doorstep, making us the Best home care service provider
          We provide services of<br> our doctors, nurses and physiotherapists at your doorstep. <br>
           We also facilitate lab tests at home and provide medical equipment on rent as well as <br>
           purchase in order to make hospital-like quality care at home. .</p>
          <!-- <a class="cta-btn" href="#">Call To Action</a> -->
        </div>

      </div>
    </section>


        <div></div>
    </section>

    <script src="script.js"></script>

    <script>
        function start(){
	Push.create("Welcome Admin!", {
		body: "Check the Doctors Apointment Request '!!",
		icon: 'doc-time.png',
		timeout: 4000,
		onClick: function () {
			window.location="apointment.php";
			this.close();
		}
	});
}
function start1(){
	Push.create("Welcome Admin!", {
		body: "Check the Nurse Apointment Request '!!",
		icon: 'nurse-time.jpg',
		timeout: 4000,
		onClick: function () {
			window.location="apointment-nurs.php";
			this.close();
		}
	});
}
function start2(){
	Push.create("Welcome Admin!", {
		body: "Check the Equipment Rental  Request '!!",
		icon: 'equipment.jpg',
		timeout: 4000,
		onClick: function () {
			window.location="rentaltable.php";
			this.close();
		}
	});
}
function start3(){
	Push.create("Welcome Admin!", {
		body: "Check the Lab Test Request '!!",
		icon: 'lab-time.png',
		timeout: 4000,
		onClick: function () {
			window.location="testtable.php";
			this.close();
		}
	});
}



        // Push.create('Checkout the  Equipment Rental Request !! ');
        Push.create("Welcome Admin!", {
		body: "Checkout the Equipment Rental Request'!!",
		icon: 'logo.png',
		timeout: 4000,
		
	});
    </script>
  
<div class="container">
<div class="row">
  <div class="col-md-2" >
  <a href="javascript:void(0)" onclick="start()">
  <button class="button-66" role="button">DOCTORS APOINTMENT</button>
  </a>
  </div>
  <div class="col-md-2">
  <a href="javascript:void(0)" onclick="start1()">
  <button class="button-66" role="button">NURSE APOINTMENT</button>
  </a>
  </div>
  <div class="col-md-2">
  <a href="javascript:void(0)" onclick="start2()">
  <button class="button-66" role="button">EQUIPMENT RENTAL</button>
  </a>
  </div>
  <div class="col-md-2">
  <a href="javascript:void(0)" onclick="start3()">
  <button class="button-66" role="button">LAB TEST REQUEST</button>
  </a>
 
  </div>
</div>

</div>

    <a href="javascript:void(0)" onclick="start()">Start</a>
    <a href="javascript:void(0)" onclick="clear()">Clear</a>
 
  
</body>
</html>
