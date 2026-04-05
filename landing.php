<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="landing.css?v=<?php echo time(); ?>">
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
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">STAFF</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#" class="signIn">SignIn</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-----------CONTENT----------->
    <section class="content_section">
      <div class="content">
        <h2><span>DO YOU NEED ANY HELP?</span></h2>
        <h1><span>WELCOME</span> TO OUR SCHOOL</h1>
        <p>We are here to help you succeed in your educational journey.</p>
        <p>Feel free to reach out if you have any questions or need assistance.</p>

        <div class="btn">
          <a href="login.php">Join Us</a>
        </div>

        <div class="mission_container">
          <div class="mission_box">
            <h2>Our Mission</h2>
            <p>To provide quality education and support to our students, fostering a nurturing environment for growth
              and
              learning.</p>
          </div>

          <div class="mission_box">
            <h2>Our Vision</h2>
            <p>To be a leading institution in providing innovative and accessible education to empower students for
              future
              success.</p>
          </div>

          <div class="mission_box">
            <h2>Our Motto</h2>
            <p>Excellence in Education</p>
          </div>
        </div>
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
          <p>© 2026 school system. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>