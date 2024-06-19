<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/side.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="logo.png" alt=""></i>Lifeline Health Homecare
      </div>

      <div class="search_bar">
       <h1>Admin Dashboard</h1>
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
       

        <ul class="menu_items">
          
        <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->

        
            <li class="item">
            <a href="apointment.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink"> Doctors Appointments</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </a>
          </li> <li class="item">
            <a href="apointment-nurs.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink"> Nurses Appointments</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </a>
          </li>
          <li class="item">
            <a href="add_nurse.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Add-Nurse</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </a>
          </li>
            <li class="item">
            <a href="add_doctor.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Add-Doctor</span>
            </a>
          </li>
          <li class="item">
            <a href="nursetable.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Available-Nurses</span>
            </a>
          </li>
          <li class="item">
            <a href="doctable.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Available-Doctors</span>
            </a>
          </li>
          <li class="item">
            <a href="patientable.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Patient-Record</span>
            </a>
          </li>
            <!-- <ul class="menu_items submenu">
              <a href="doctable." class="nav_link sublink">Doctor-Details</a>
              <a href="#" class="nav_link sublink">View-patients</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul> -->
          </li>
         
          <!-- End -->

          
          <!-- <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">Filter</span>
            </a>
          </li> -->
          <!-- <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Upload new</span>
            </a>
          </li> -->
        </ul>
        <ul class="menu_items">
          <div class="menu_title menu_setting"></div>
          <li class="item">
            <a href="testtable.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-flag"></i>
              </span>
              <span class="navlink">Lab-test Table</span>
            </a>
          </li>
          <li class="item">
            <a href="rentaltable.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-medal"></i>
              </span>
              <span class="navlink">Rentl-table</span>
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