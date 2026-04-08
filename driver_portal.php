<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="driver_portal.css?v=<?php echo time(); ?>">
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

        <!-- REPORT SECTION -->
        <div class="card">
          <h2>Driver Dashboard</h2>

          <div class="portal-buttons">
            <button>School Events</button>
            <button>School Results</button>
            <button>Transport Reports</button>
            <button>Profile</button>
          </div>

        </div>

        <!-- FORM SECTION -->
        <div class="card">
          <h2>Transport Activity Form</h2>

          <form>

            <div class="driver_box">
              <label for="driver-name">Driver Name</label>
              <input type="text" id="driver-name" placeholder="Enter driver name" required>
            </div>

            <div class="driver_box">
              <label for="destination">Destination</label>
              <input type="text" id="destination" placeholder="Enter destination" required>
            </div>

            <div class="driver_box">
              <label for="expenses">Expenses (KES)</label>
              <input type="number" id="expenses" placeholder="Enter expenses">
            </div>

            <div class="driver_box">
              <label for="date">Date</label>
              <input type="date" id="date" required>
            </div>

            <div class="driver_box">
              <label for="time-out">Time Out</label>
              <input type="time" id="time-out" required>
            </div>

            <div class="driver_box">
              <label for="time-in">Time In</label>
              <input type="time" id="time-in" required>
            </div>

            <div class="full">
              <label for="function-remarks">Function / Remarks</label>
              <textarea id="function-remarks" rows="4" placeholder="Describe activity or function..."></textarea>
            </div>

            <div class="sbt">
              <button type="submit" class="submit-btn">Submit Report</button>
            </div>

          </form>
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