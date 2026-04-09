<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="staff_portal.css?v=<?php echo time(); ?>">
  <title>JOMO School</title>
</head>

<body>
  <div class="home_container">
    <div class="header_section">
      <div class="logo">
        <h3>JOMO</h3>
      </div>
      <div class="nav">
        <nav>
          <ul>
            <li><a href="landing.php">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="#">STAFF</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#" class="signIn">SignIn</a></li>
          </ul>
        </nav>
      </div>
    </div>


    <!-----------CONTENT----------->
    <section class="content_section">

      <div class="container">
        <h2>Student Registration Form</h2>

        <section class="content">
          <div class="dashboard">
            <div class="boxes">
              <div class="dashboard-box_h2">
                <i class="fa-solid fa-chart-bar"></i>
                <h2>Dashboard</h2>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-circle-user"></i>
                <a href="#">Profile</a>
              </div>


              <div class="dashboard-box">
                <i class="fa-solid fa-calendar-days"></i>
                <a href="#">Class Schedule</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-jxl"></i>
                <a href="#">Update Grades</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-gavel"></i>
                <a href="#">Discipline report</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-bullhorn"></i>
                <a href="#">Faculty Announcements</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <a href="#">Newsletter</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <a href="#">Results</a>
              </div>  
            </div>

            <div class="dashboard-content">
              <div class="dashboard-top">
                <div class="top">
                  <i class="fa-solid fa-envelope"></i>
                  <a href="#">Messages</a>  
                </div>

                <div class="top">
                  <i class="fa-solid fa-calendar-days"></i>
                  <a href="#">Upcoming Class</a>                                  
                </div>

                <div class="top">
                  <i class="fa-solid fa-hexagon-nodes"></i>
                  <a href="#">Assignment grading</a>            
                </div>

                <div class="top">
                  <i class="fa-brands fa-bitbucket"></i>
                  <a href="#">Repository</a>
                </div>

              </div>
              <div class="dashboard-below">

                <div class="profile">
                  <div class="profile-pic">
                    <img src="" alt="">
                  </div>

                  <div class="profile-info">
                      <div class="info">
                        <h3>PERSONAL INFO:</h3>
                      </div>
                      
                      <div class="info">
                        <h3>CONTACT:</h3>
                      </div>

                      <div class="info">
                        <h3>ACADEMIC BACKGROUND:</h3>
                      </div>

                      <div class="info">
                        <h3>SUBJECTS ASSIGNED:</h3>                    
                      </div>

                    <div class="info">
                      <h3>EMPLOYMENT STATUS:</h3>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-------FOOTER----------->

    <div class="footer_container">
      <footer class="footer">
        <div class="footer-container">

          <div class="footer-box">
            <h2>School System</h2>
            <p>Efficient, secure, and easy-to-use school management platform.</p>
            <p>Empowering education through digital innovation.</p>
          </div>

          <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="landing.php">Home</a>
            <a href="#">About Us</a>
            <a href="portal_login.php">Student Portal</a>
            <a href="#">Contact</a>
          </div>

          <div class="footer-box">
            <h3>Services</h3>
            <p>Student Registration</p>
            <p>Grade Management</p>
            <p>Attendance Tracking</p>
            <p>Parent Communication</p>
            <p>Academic Records Management</p>

          </div>

          <div class="footer-box">
            <h3>Contact</h3>
            <p>Email: school@example.co.ke</p>
            <p><a href="tel:+254123456789" target="_blank">Phone: +254 123 456 789</a> </p>
            <p><a href="https://maps.google.com/?q=school" target="_blank">Location: 123 School Street, City</a> </p>
          </div>

        </div>

        <div class="footer-bottom">
          <p>© 2026 School System. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>