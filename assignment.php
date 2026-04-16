<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assignment.css?v=<?php echo time(); ?>">
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
      <div class="assignment-portal">
        <h1>My Assignments</h1>

        <nav class="tabs">
          <button class="tab active" onclick="switchTab(event, 'open-list')">Assignments</button>
          <button class="tab" onclick="switchTab(event, 'closed-list')">Past Papers</button>
        </nav>


        <section class="assignment-section">
          <h2>Open Assignments</h2>
          <div class="assignment-table">
            <table>
              <thead>
                <tr>
                  <th>Class</th>
                  <th>Assignment</th>
                  <th>Submissions</th>
                  <th>Instructions</th>
                  <th>Download Assignment</th>
                  <th>State</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Grade 10 west</td>
                  <td>Mathematics</td>
                  <td>
                    <div class="due-date">Due: Fri 30 June 2023 @ 00:10</div>
                    <div class="status-note">Not submitted</div>
                  </td>
                  <td>Due: Fri 1 September 2023 @ 00:40</td>
                  <td><button class="btn btn-submit" download> <i class="fa-solid fa-download"></i> Download</button>
                  </td>
                  <td><button class="btn btn-submit"> <a href="submit_assignment.php"><i class="fa-solid fa-paper-plane"></i> Submit</a></button></td>
                </tr>
              </tbody>

              <tbody>
                <tr>
                  <td>Grade 11 East</td>
                  <td>Chemistry</td>
                  <td>
                    <div class="due-date">Due: Fri 30 June 2023 @ 00:10</div>
                    <div class="status-note">Not submitted</div>
                  </td>
                  <td>Due: Fri 1 September 2023 @ 00:40</td>
                  <td><button class="btn btn-submit" download> <i class="fa-solid fa-download"></i> Download</button>
                  </td>
                  <td><button class="btn btn-submit"> <a href="submit_assignment.php"><i class="fa-solid fa-paper-plane"></i> Submit</a></button></td>
              </tbody>

              <tbody>
                <tr>
                  <td>Grade 12 west</td>
                  <td>Chemistry</td>
                  <td>
                    <div class="due-date">Due: Fri 30 June 2023 @ 00:10</div>
                    <div class="status-note">Not submitted</div>
                  </td>
                  <td>Due: Fri 1 September 2023 @ 00:40</td>
                  <td><button class="btn btn-submit" download> <i class="fa-solid fa-download"></i> Download</button>
                  </td>
                  <td><button class="btn btn-submit"> <a href="submit_assignment.php"><i class="fa-solid fa-paper-plane"></i> Submit</a></button></td>
                </tr>
              </tbody>


              <tbody>
                <tr>
                  <td>Grade 10 west</td>
                  <td>Physics</td>
                  <td>
                    <div class="due-date">Due: Fri 30 June 2023 @ 00:10</div>
                    <div class="status-note">Not submitted</div>
                  </td>
                  <td>Due: Fri 1 September 2023 @ 00:40</td>
                  <td><button class="btn btn-submit" download> <i class="fa-solid fa-download"></i> Download</button>
                  </td>
                 <td><button class="btn btn-submit"> <a href="submit_assignment.php"><i class="fa-solid fa-paper-plane"></i> Submit</a></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        

        <section class="assignment-section">
          <h2>Submitted Assignments</h2>
          <table class="assignment-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Admission number</th>
                <th>Subject</th>
                <th>Assignment uploaded</th>
                <th>Grading</th>
                <th>Review</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>John Doe</td>
                <td>12345</td>
                <td>Chemistry</a></td>
                <td>
                  <div class="assignment-file">pdf</div>
                  <div class="status-note">submitted</div>
                </td>
                <td>B+</td>
                <td><a href="#">Review</a></td>
              </tr>
            </tbody>
          </table>
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