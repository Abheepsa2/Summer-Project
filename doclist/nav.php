<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/nav.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../sweet-alert.min.js"></script>
<style>
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    }
    body{
    font-family: montserrat;
    }
    nav{
    background: #0082e6;
    height: 90px;
    width: 100%;
    }
    label.logo{
      margin-top: 2%;
    color: white;
    line-height: 80px;
    padding: 0 100px;
    
    }
    nav ul{
    float: right;
    margin-right: 32px;
    }
    nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
    }
    nav ul li a{
    color: white;
    font-size: 17px;
    padding: 11px 20px;
    border-radius: 25px;
    text-transform: uppercase;
    }
    a.active,a:hover{
    background: #1b9bff;
    transition: .5s;
    }
    
    #check{
    display: none;
    }
    @media (max-width: 952px){
    label.logo{
    font-size: 30px;
    padding-left: 50px;
    }
    nav ul li a{
    font-size: 16px;
    }
    }
    @media (max-width: 858px){
    .checkbtn{
    display: block;
    }
    ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
    }
    nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
    }
    nav ul li a{
    font-size: 20px;
    }
    a:hover,a.active{
    background: none;
    color: #0082e6;
    }
    #check:checked ~ ul{
    left: 0;
    }
    }
   
  
    
   /* navbar bhitra ko button  */
    /* CSS */
    .buttoon {
      align-items: center;
      appearance: none;
      background-color: #2be3f0;
      background-image: linear-gradient(1deg, #d9a0e8, #ffffff );
      background-size: calc(100% + 20px) calc(100% + 20px);
      border-radius: 100px;
      border-width: 0;
      box-shadow: none;
      box-sizing: border-box;
      color: #0a0a0a;
      cursor: pointer;
      font-weight: bold;
      display: inline-flex;
      font-family: montserrat;
      font-size: 1rem;
      height: auto;
      justify-content: center;
      line-height: 1.5;
      padding: 10px 25px;
      margin-top: 2%;
      position: relative;
      text-align: center;
      text-decoration: rgb(7, 7, 7);
      transition: background-color .2s,background-position .2s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      vertical-align: top;
      white-space: nowrap;
    }
    
    .buttoon:active,
    .buttoon:focus {
      outline: none;
    }
    
    .buttoon:hover {
      background-position: -20px -20px;
    }
    
    .buttoon:focus:not(:active) {
      box-shadow: rgba(51, 53, 54, 0.25) 2px 2px 2px 2px .125em ;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">



<label class="logo">
<img src="logo.png" style="width:4% ; height: auto">
</label>

<ul>
<li><a class="active" href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="our_Services.php">Services</a></li>
<li><a href="Our_doctors.php">Our Doctors</a></li>
<li><a href="nurses.php">Our Nurse</a></li>
<li><a href="contact.php">Contact</a></li>

<a href="Patient/patient-login.php"><button class="buttoon" role="button">LOGIN/SIGNUP</button></a>

</ul>
</nav>
</body>
</html>