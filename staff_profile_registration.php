<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="staff_profile_registration.css?v=<?php echo time(); ?>">
  <title>Admit</title>
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
            <li><a href="students_portal.php" class="signIn">SignIn</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-----------CONTENT----------->
    <section class="content_section">


      <div class="staff_form">
        <h2>Staff Registration Form</h2>
        <form action="" method="post">

          <div class="form-section">
            <h3>Staff Personal Details</h3>
            <div class="form-grid">
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
              </div>

              <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>
              </div>

              <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                  <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label>
                  <input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>
                </div>
              </div>
              <div class="form-group">
                <label for="homeaddress">Home Address:</label>
                <input type="text" id="home_address" name="home_address">
              </div>

              <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="text" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email">
              </div>
            </div>
          </div>


          <div class="form-section">
            <h3>Academic Qualifications</h3>
            <div class="grid-container">
              <div class="form-item">
                <label for="guardian">Highest Level of Education:</label>
                <input type="text" id="education">
              </div>

              <div class="form-item">
                <label for="tsc">TSC Number:</label>
                <input type="number" id="tsc_number">
              </div>

              <div class="form-item">
                <label for="phone">Teaching Subjects:</label>
                <input type="text" id="teaching_subjects">
              </div>
              <div class="form-item">
                <label for="email">Specialization Area:</label>
                <input type="text" id="specialization">
              </div>
            </div>
          </div>

          <div class="form-section">
            <h3>Employment Details</h3>
            <div class="grid-container">
              <div class="form-item">
                <label for="date_posted">Date Posted:</label>
                <input type="date" id="date_posted">
              </div>
              <div class="form-item">
                <label for="employment_type">Employment Type:</label>
                <input type="number" id="employment_type">
              </div>

              <div class="form-item">
                <label for="department">Department:</label>
                <input type="text" id="department">
              </div>
              <div class="form-item">
                <label for="current_rank">Current Rank:</label>
                <input type="text" id="current_rank">
              </div>
            </div>
          </div>

          <div class="form-section">
            <h3>Document Uploads</h3>
            <div class="upload-container">
              <div class="upload-row">
                <label>Passport:</label>
                <input type="file" name="passport">
              </div>
              <div class="upload-row">
                <label>TSC Card</label>
                <input type="file" name="TSC_card">
              </div>
            </div>
          </div>

          <div class="form-section">
            <h3>Declaration</h3>
            <div class="declaration-box">
              <div class="checkbox-row">
                <input type="checkbox" id="confirm" required>
                <label for="confirm">I confirm that the information provided is true and correct.</label>
              </div>

            </div>
          </div>

          <button type="submit" class="submit-btn">Submit Application</button>
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