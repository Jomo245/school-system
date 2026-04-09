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
            <li><a href="portal_login.php">STUDENT PORTAL</a></li>
            <li><a href="#" class="signIn">SignIn</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-----------CONTENT----------->
    <section class="content_section">

      <div class="container">
        <!----------STUDENT LOGIN------------>


        <div class="login-container" id="loginContainer">
          <div class="image">
            <div class="image_content">
              <h1>School Management System</h1>
              <p>Register, Access Courses, and Manage Your Academic Journey Easily</p>
            </div>
          </div>
          <div class="login-form">
            <h2>Student Login</h2>
            <form id="loginForm" action="login.php" method="post">
              <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="Index">Index</label>
                <input type="text" id="index" name="index" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">
              </div>

              <div class="role">
                <label for="login_us">Select Role</label>
                <select name="role" id="role">
                  <option value="">Select Role</option>
                  <option value="student">Student</option>
                  <option value="admin">Admin</option>
                  <option value="driver">Driver</option>
                  <option value="staff">Staff</option>
                </select>
              </div>
              <button type="submit" class="sbt_btn">Login</button>
              <div class="error">
                <p id="errorMessage"></p>
              </div>
              <div class="or">
                <p>Do you have account? <a href="#" id="registerLink">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-------------ADMIN LOGIN------------>

      <div class="admin_login">
        <div class="login-container" id="loginContainer">
          <div class="admin-image">
            <div class="image_content ">
              <h1>School Management System</h1>
              <p>Admin Login</p>
              <p>Manage Students • Teachers • Records</p>
            </div>
          </div>
          <div class="admin_form">
            <h2>Admin Login</h2>
            <form id="loginForm" action="login.php" method="post">
              <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" autocomplete="off">
              </div>


              <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">
              </div>

              <div class="role">
                <p>Login as <a href="#" onclick="showAdminLogin()" id="adminLink">Admin </a> Or <a href="#"
                    onclick="showUserLogin()" id="userLink"> User </a></p>
              </div>
              <button type="submit" class="sbt_btn">Login</button>
              <div class="error">
                <p id="errorMessage"></p>
              </div>
              <div class="or">
                <p>Do you have account? <a href="#" id="registerLink">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!----------DRIVER LOGIN------------>

      <div class="driver_login">
        <div class="login-container" id="loginContainer">
          <div class="driver-image">
            <div class="image_content ">
              <h1>School Management System</h1>
              <p>Driver Login</p>
              <p>Manage Bus Routes • Drivers • Students</p>
            </div>
          </div>
          <div class="driver_form">
            <h2>Driver Login</h2>
            <form id="loginForm" action="login.php" method="post">
              <div class="input-group">
                <label for="driver_name">Driver Name</label>
                <input type="text" id="driver_name" name="driver_name" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">
              </div>

              <div class="role">
                <p>Login as <a href="#" onclick="showAdminLogin()" id="adminLink">Admin </a> Or <a href="#"
                    onclick="showUserLogin()" id="userLink"> User </a></p>
              </div>
              <button type="submit" class="sbt_btn">Login</button>
              <div class="error">
                <p id="errorMessage"></p>
              </div>
              <div class="or">
                <p>Do you have account? <a href="#" id="registerLink">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!----------------STAFF LOGINS------------->

      <div class="staff_login">
        <div class="login-container" id="loginContainer">
          <div class="driver-image">
            <div class="image_content ">
              <h1>School Management System</h1>
              <p>Login As Staff</p>
              <p>Manage Bus Routes • Drivers • Students</p>
            </div>
          </div>
          <div class="driver_form">
            <h2>Staff Login</h2>
            <form id="loginForm" action="login.php" method="post">
              <div class="input-group">
                <label for="driver_name">Username</label>
                <input type="text" id="driver_name" name="driver_name" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="driver_name">TSE NO:</label>
                <input type="number" id="tse_number" name="tse_number" autocomplete="off">
              </div>

              <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">
              </div>

              <div class="role">
                <p>Login as <a href="#" onclick="showAdminLogin()" id="adminLink">Admin </a> Or <a href="#"
                    onclick="showUserLogin()" id="userLink"> User </a>Or</p>
              </div>
              <button type="submit" class="sbt_btn">Login</button>
              <div class="error">
                <p id="errorMessage"></p>
              </div>
              <div class="or">
                <p>Do you have account? <a href="#" id="registerLink">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!-- --------FORGOT PASSWORD------------>
      <div class="forgot_password">
        <div class="forgot_password_container">
          <h2>Forgot Password</h2>
          <form action="" method="post">
            <div class="input-group">
              <label for="index">Enter your Index Number:</label>
              <input type="number" id="index" name="index" required>
            </div>
            <button type="submit" class="sbt_btn">Reset Password</button>
          </form>
        </div>
      </div>
  </div>
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

</html>