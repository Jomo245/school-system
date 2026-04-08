<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="admit.css?v=<?php echo time(); ?>">
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
        <form action="" method="post">

          <div class="form-section">
            <h3>Student Personal Details</h3>
            <div class="form-grid">
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
              </div>

              <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
              </div>

              <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                  <input type="radio" id="male" name="gender" value="male" required> <label for="male">Male</label>
                  <input type="radio" id="female" name="gender" value="female" required> <label for="female">Female</label>
                </div>
              </div>

              <div class="form-group">
                <label for="postal_address">Postal Address:</label>
                <input type="text" id="postal_address" name="postal_address" required>
              </div>

              <div class="form-group">
                <label for="birth_certificate">ID / Birth Cert No:</label>
                <input type="number" id="birth_certificate" name="birth_certificate"  required>
              </div>

              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
              </div>
            </div>
          </div>


          <div class="form-section">
            <h3>Parent / Guardian Details</h3>
            <div class="grid-container">
              <div class="form-item">
                <label for="guardian">Parent/Guardian Name:</label>
                <input type="text" id="guardian">
              </div>

              <div class="form-item">
                <label for="relationship">Relationship:</label>
                <select id="relationship">
                    <option>Select relationship - - -</option>
                    <option>Father</option>
                    <option>Mother</option>
                    <option>Guardian</option>
                </select>
              </div>

              <div class="form-item">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" required>
              </div>

              <div class="form-item">
                <label for="email">Email Address:</label>
                <input type="email" id="email"  required>
              </div>

            </div>
          </div>

          <div class="form-section">
            <h3>Academic Information</h3>
            <div class="grid-container">
              <div class="form-item">
                <label for="prev_school">Previous School:</label>
                <input type="text" id="prev_school" required>
              </div>
              <div class="form-item">
                <label for="last-grade">KPSEA Index Number:</label>
                <input type="number" id="kpsea_index" required>
              </div>

              <div class="form-item">
                <label for="course_pathway">Course Pathway:</label>
                <input type="text" id="course_pathway" required>
              </div>
              <div class="form-item">
                <label for="admission_year">Year of Admission:</label>
                <input type="text" id="admission_year" required>
              </div>
            </div>
          </div>

          <div class="form-section">
            <h3>Document Uploads</h3>
            <div class="upload-container">
              <div class="upload-row">
                <label>Student Photo:</label>
                <input type="file" id="my_  photo" name="student_photo" required>
              </div>
              <div class="upload-row">
                <label>Birth Certificate:</label>
                <input type="file" id="birth_cert" name="birth_cert" required>
              </div>
              <div class="upload-row">
                <label>Results Slip:</label>
                <input type="file" id="results_slip" name="results_slip" required>
              </div>
              <div class="upload-row">
                <label>Medical Report:</label>
                <input type="file" id="medical_report" name="medical_report" required>
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

          <div class="buttons">
            <button type="submit" id="my_submit" class="submit-btn">Submit Application</button>
            <button type="reset" id="my_reset" class="reset-btn">Reset Form</button>
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