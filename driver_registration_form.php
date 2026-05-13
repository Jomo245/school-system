<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="driver_registration_form.css?v=<?php echo time(); ?>">
  <title>Driver Registration</title>
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

      <section class="driver-registration">
        <div class="driver-registration-container">
          <h2>School Driver's registration form</h2>

          <form action="" id="driver_registration" method="post">
            <h3>Personal details</h3>
            <div class="form-container personal">

              <div class="inputs">
                <label for="myname">Full Name</label>
                <input type="text" name="myname" id="myname" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="my_id_number">National Id</label>
                <input type="number" name="ID_number" id="my_id_number" autocomplete="off">
              </div>

              <div class="radio">

                <div class="gender-option">
                  <label>Gender:</label>
                  <label for="male">Male</label>
                  <input type="radio" id="male" name="gender" value="male">

                  <label for="female">Female</label>
                  <input type="radio" id="female" name="gender" value="female">
                </div>
              </div>

              <div class="inputs">
                <label for="my_date_of_birth">Date of birth</label>
                <input type="date" id="my_date_of_birth" name="my_date_of_birth" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="phone_number">Phone Number</label>
                <input type="number" id="phone_number" name="phone_number" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="my_email">Email</label>
                <input type="email" id="my_email" name="my_email" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="my_passport">Attach Passport</label>
                <input type="file" id="my_passport" name="my_passport" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="my_home_address">Home Address</label>
                <input type="text" id="my_home_address" name="my_home_address" autocomplete="off">
              </div>

            </div>


            <h3>Employment Details</h3>
            <div class="form-container employment-details">

              <div class="inputs">
                <label for="employee_id">Employee Id</label>
                <input type="number" id="employee_id" name="employee_Id" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="employment_date">Employment Date</label>
                <input type="date" id="employment_date" name="employment-date" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="position">Position Employed</label>
                <input type="text" id="position" name="position" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="status">Status</label>
                <select name="status" id="status" name="my_status">
                  <option value="status">---Choose Status---</option>
                  <option value="status">Active</option>
                  <option value="status">Inactive</option>
                </select>
              </div>
            </div>


            <h3>Driver's Credentials</h3>
            <div class="form-container driving-credentials">

              <div class="inputs">
                <label for="driving_license">Driving License Number</label>
                <input type="number" id="driving_license" name="driving_license" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="license_expiry">Driving License Expiry</label>
                <input type="date" id="license_expiry" name="license_expiry" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="license_category">License Category</label>
                <select name="dl-category" id="license_category">
                  <option value="dl-category">--Choose Your Category</option>
                  <option value="dl-category">D1</option>
                  <option value="dl-category">D2</option>
                  <option value="dl-category">D3</option>
                </select required>
              </div>

              <div class="inputs">
                <label for="vehicle">Vehicle Assigned </label>
                <select name="vehicle" id="vehicle">
                  <option value="vehicle">---Choose Vehicle Assigned---</option>
                  <option value="vehicle">School Bus Only</option>
                  <option value="vehicle">School Van Only</option>
                  <option value="vehicle">Both School Bus and Van</option>
                  <option value="vehicle">School Staff Vehicle</option>
                </select required>
              </div>

              <div class="inputs">
                <label for="medical_record">Medical Report</label>
                <input type="file" id="medical_record" name="medical_record" autocomplete="off">
              </div>

              <div class="inputs">
                <label for="police_clearance">Police Clearance Certificate</label>
                <input type="file" id="police_clearance" name="police_clearance" autocomplete="off">
              </div>
              </div>

            <div class="error">
              <p id="error_message">All Field Required</p>
            </div>

            <div class="btn">
              <button type="reset" class="reset_btn" id="reset_btn">Reset</button>
              <button type="submit" class="submit_btn" id="submit_btn">Submit</button>
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
  </section>

  <script src="driver_registration_form.js?v=<?php echo time(); ?>"></script>
</body>
</html>