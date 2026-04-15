<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="submit_assignment.css?v=<?php echo time(); ?>">
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

      <!------------ASSIGNMENT FORM STARTS HERE------------------>

      <div class="assignment-container">
        <div class="header">
          <h2>Student Assignment Portal</h2>
        </div>

        <form>
          <div class="input-group">
            <label>Students Name:</label>
            <input type="text" required>
          </div>

          <div class="input-group">
            <label>Admission No:</label>
            <input type="number" required>
          </div>

          <div class="input-group">
            <label for="formSelect">Select Form</label>
            <select id="formSelect" required>
              <option value="">-- Select Form --</option>
              <option>Form 1</option>
              <option>Form 2</option>
              <option>Form 3</option>
              <option>Form 4</option>
            </select>
          </div>


          <div class="input-group">
            <label>Select Stream</label>
            <select id="streamSelect" required>
              <option value="">-- Select Form First --</option>
              <option>Stream A</option>
              <option>Stream B</option>
              <option>Stream C</option>
              <option>Stream D</option>
            </select>
          </div>


          <div class="input-group">
            <label>Select Subject</label>
            <select required>
              <option value="">-- Choose Subject --</option>
              <option>Mathematics</option>
              <option>English</option>
              <option>Biology</option>
              <option>Chemistry</option>
              <option>Physics</option>
              <option>History</option>
              <option>Geography</option>
              <option>Computer Studies</option>
            </select>
          </div>




          <div class="input-group">
            <label>Upload Completed Assignment</label>
            <input type="file" required>
          </div>

          <button type="submit" class="upload-btn">
            Submit Assignment
          </button>

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
          <p>© 2026 school system. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>