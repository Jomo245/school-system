<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
  <title>Logins</title>
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
            <li><a href="portal_login.php">STUDENT PORTAL</a></li>
            <li><a href="#" class="signIn">SignIn</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-----------CONTENT----------->
    <section class="content_section">

      <div class="container">
        <!----------LOGIN------------>
        <div class="login-container" id="loginContainer">
          <div class="image">
            <div class="image_content">
              <h1>School Management System</h1>
              <p>Register, Access Courses, and Manage Your Academic Journey Easily</p>
            </div>
          </div>
          <div class="login-form">
            <h2>Login</h2>
            <form id="loginForm" action="login.php" method="post">
              <div class="input-group">
                <label for="login_us">Username</label>
                <input type="text" id="login_us" name="username" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="login_index">Index</label>
                <input type="text" id="login_index" name="index" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="login_pass">Password</label>
                <input type="password" id="login_pass" name="password" autocomplete="off">
              </div>

              <div class="role">
                <label for="login_role" id="roles">Select Role</label>
                <select name="role" id="login_role">
                  <option value="">Select Role----</option>
                  <option value="student">Student</option>
                  <option value="admin">Admin</option>
                  <option value="driver">Driver</option>
                  <option value="staff">Staff</option>
                </select>
              </div>
              <button type="submit" class="sbt_btn">Login</button>
              <div class="error">
                <p id="Login_error_Message"></p>
              </div>
              <div class="or">
                <p class="or-text">Do you have account? <a href="#" id="registerLink">Register</a></p>
                <p><a href="#" id="forgotPasswordLink">Forgot Password?</a></p>
              </div>
            </form>
          </div>
        </div>

        <!---REGISTER STARTS HERE---->

        <div class="register-container" id="registerContainer">
          <div class="register_image">
            <div class="image_content">
              <h1>School Management System</h1>
              <p>Register, Access Courses, and Manage Your Academic Journey Easily</p>
            </div>
          </div>
          <div class="register-form" id="registerFormContainer">
            <h2>Register</h2>
            <form id="register_Form" action="" method="post">

              <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required autocomplete="off">
              </div>

              <div class="input-group">
                <label for="reg_username">Username</label>
                <input type="text" id="reg_username" name="username" required autocomplete="off">
              </div>

              <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="reg_email" name="email" required autocomplete="off">
              </div>

              <div class="input-group">
                <label for="reg_index">Index Number</label>
                <input type="text" id="reg_index" name="index" required autocomplete="off">
              </div>

              <div class="input-group">
                <label for="reg_password">Password</label>
                <input type="password" id="reg_password" name="password" required>
              </div>

              <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
              </div>

              <div class="role">
                <label for="reg_role">Select Role</label>
                <select id="reg_role" name="role" required>
                  <option value="">Select Role</option>
                  <option value="student">Student</option>
                  <option value="admin">Admin</option>
                  <option value="staff">Staff</option>
                  <option value="driver">Driver</option>
                </select>
              </div>

              <button type="submit" class="sbt_btn">Register</button>


              <p class="or">
                Already have an account?
                <a href="#" id="backToLoginFromRegister">Login</a>
              </p>

              <p id="register_error_message"></p>
            </form>
          </div>
        </div>
        <br><br>
        <!-- --------FORGOT PASSWORD STARTS HERE------------>
        <div class="forgot_password" id="forgot_password">
          <div class="forgot_password_container">
            <h2>Forgot Password</h2>
            <form action="" method="post" id="forgot">
              <div class="input-group">
                <label for="forgot_email">Enter your Email:</label>
                <input type="email" id="forgot_email" name="email">
              </div>
              <button type="submit" class="sbt_btn">Reset Password</button>
              <p id="forgotPasswordMessage"></p>
            </form>
          </div>
        </div>
        <!-- --------FORGOT PASSWORD STARTS HERE------------>
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
          <a href="#">Home</a>
          <a href="#">About Us</a>
          <a href="#">Student Portal</a>
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
        <p>© 2026 John Isige Jomo. All rights reserved.</p>
      </div>
    </footer>
  </div>
  </div>
</body>

<script src="login.js?v=<?php echo time(); ?>"></script>

</html>