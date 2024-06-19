<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Patients Dashboard</title>
    <link rel="stylesheet" href="side.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="logo.png" alt=""></i>Lifeline Health Homecare
      </div>

      <div class="search_bar">
       <h1>Patient Dashboard</h1>
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
       
        
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
       

        <ul class="menu_items">
          
        <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
         
          <!-- <li class="item">
            <a href="profilee.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">Profile</span>
            </a>
          </li> -->
          <li class="item">
            <a href="suggest_doc.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Suggest Doctors</span>
            </a>
          </li>
          <li class="item">
            <a href="suggest_nurse.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Suggest Nurse</span>
            </a>
          </li>
          <!-- <li class="item">
            <a href="view.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">MEDICINE</span>
            </a>
          </li> -->
          <!-- <li class="item">
            <a href="doctable.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Available Doctors</span>
            </a>
          </li> -->
          <li class="item">
            <a href="nurse-apoinment.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Nurse-Appointment</span>
            </a>
          </li>
          <li class="item">
            <a href="apointment.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Doctor-Appointment</span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
          <div class="menu_title menu_setting"></div>
          <li class="item">
            <a href="rental.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-flag"></i>
              </span>
              <span class="navlink">Equipment Rental</span>
            </a>
          </li>
          <li class="item">
            <a href="test.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-medal"></i>
              </span>
              <span class="navlink">Lab-Test</span>
            </a>
          </li>
          <!-- <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cog"></i>
              </span>
              <span class="navlink">Setting</span>
            </a>
          </li> -->
          <!-- <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-layer"></i>
              </span>
              <span class="navlink">Features</span>
            </a>
          </li> -->
        </ul>

        <!-- Sidebar Open / Close -->

        
        <div class="bottom_content">
        <li class="item">
            <a href="logout.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-medal"></i>
              </span>
              <span class="navlink">LOG OUT</span>
            </a>
          </li>
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>