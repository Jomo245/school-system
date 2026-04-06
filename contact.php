<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
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
      <section class="contact-header">
        <h1>CONTACT US</h1>
        <p>
          We’re always happy to connect with you! Whether you're a student, parent,
          or visitor, feel free to reach out with any questions, feedback, or support needs.
          Our team will get back to you as quickly as possible.
        </p>
      </section>

      <!-- CONTACT CARDS -->
      <section class="contact-container">

        <div class="contact-box">
          <i class="fa-solid fa-house"></i>
          <h3>Visit Us</h3>
          <p>International School Campus</p>
          <span><a href="https://www.google.com/maps?q=International+School+Campus" target="_blank">View on
              Map</a></span>
        </div>

        <div class="contact-box">
          <i class="fa-solid fa-phone"></i>
          <h3>Call Us</h3>
          <p>Office Hours: 8AM - 5PM</p>
          <span><a href="tel:+254712345678">+254 712 345 678</a></span>
        </div>

        <div class="contact-box">
          <i class="fa-solid fa-envelope"></i>
          <h3>Email Us</h3>
          <p>Admissions & Support</p>
          <span><a href="mailto:info@internationalschool.ac.ke">info@internationalschool.ac.ke</a></span>
        </div>

      </section>

      <!-- CONTACT FORM -->
      <section class="form-area">
        <div class="container">
          <!-- FORM -->
          <div class="form-section">

            <h2>Send Us a Message</h2>

            <form onsubmit="return validateForm()">

              <div class="input-box">
                <input type="text" required>
                <label>Full Name</label>
              </div>

              <div class="input-box">
                <input type="email" required>
                <label>Email Address</label>
              </div>

              <div class="input-box">
                <input type="tel" required>
                <label>Phone Number</label>
              </div>

              <div class="input-box">
                <textarea required></textarea>
                <label>Your Message</label>
              </div>

              <button type="submit">Send Message</button>

            </form>

          </div>

          <!-- INFO -->
          <div class="info-section">

            <div class="info">
              <i class="fa-solid fa-location-dot"></i>
              <p>International School<br>Nairobi, Kenya</p>
            </div>

            <div class="info">
              <i class="fa-solid fa-envelope"></i>
              <p>admissions@internationalschool.ac.ke</p>
            </div>

            <div class="info">
              <i class="fa-solid fa-phone"></i>
              <p>+254 712 345 678</p>
            </div>

            <div class="social">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>

            <div class="map">
              <iframe src="https://www.google.com/maps?q=Nairobi+Kenya&output=embed"></iframe>
            </div>
          </div>
        </div>
      </section>


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