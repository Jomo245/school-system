<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="portal.css?v=<?php echo time(); ?>">
  <title>Portal</title>
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
            <li><a href="portal_login.php" class="signIn">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-----------CONTENT----------->
    <section class="content_section">
      <div class="content">
        <aside class="sidebar">
          <h3>Dashboard</h3>
          <ul>
            <li><a href="#"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Fees Statement</a></li>
            <li><a href="#"><i class="fas fa-gavel"></i> Discipline</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i>Upcoming Events</a></li>
            <li><a href="#"><i class="fas fa-graduation-cap"></i> Results</a></li>
            <li><a href="#"><i class="fas fa-newspaper"></i> Newsletter</a></li>
            <li><a href="#"><i class="fas fa-graduation-cap"></i> KCSE</a></li>
            <li><a href="#"><i class="fa-solid fa-file-pen"></i> Assignments</a></li>
            <li><a href="#"><i class="fa-solid fa-money-bill"></i>  Fee Payment</a></li>
          </ul>
        </aside>


        <div class="main_content">
          <h2>Welcome to the Student Portal</h2>

          <!------RESULT FOR STUDENTS------>
          <div class="report-container">
            <div class="school-header">
              <h1>KCSE RESULTS SUMMARY 2026</h1>
              <p><strong>School Code:</strong> 12345678</p>
            </div>

            <div class="summary-cards">
              <div class="card">
                <h3>School Mean Grade</h3>
                <p class="stat">B+</p>
              </div>
              <div class="card">
                <h3>School Mean Score</h3>
                <p class="stat">9.42</p>
              </div>
              <div class="card">
                <h3>Entry</h3>
                <p class="stat">142</p>
              </div>
            </div>


            <table>
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>A</th>
                  <th>A-</th>
                  <th>B+</th>
                  <th>B</th>
                  <th>C+</th>
                  <th>C</th>
                  <th>C-</th>
                  <th>D+</th>
                  <th>D</th>
                  <th>D-</th>
                  <th>E</th>
                  <th>Mean Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mathematics</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>5</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>10.2</td>
                </tr>
                <tr>
                  <td>English</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
                </tr>

                <tr>
                  <td>Kiswahili</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
                </tr>

                <tr>
                  <td>Chemistry</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
                </tr>

                <tr>
                  <td>Biology</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
                </tr>

                <tr>
                  <td>Physics</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
                </tr>

                <tr>
                  <td>Geography</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
                </tr>

                <tr>
                  <td>Computer Studies</td>
                  <td>12</td>
                  <td>40</td>
                  <td>20</td>
                  <td>12</td>
                  <td>2</td>
                  <td>24</td>
                  <td>30</td>
                  <td>15</td>
                  <td>10</td>
                  <td>10</td>
                  <td>5</td>
                  <td>9.8</td>
              </tbody>
            </table>
          </div>
          <!------END OF RESULT FOR STUDENTS---->

          <!------DISCIPLINE REPORT FROM ADMIN-------->

          <div class="container">

            <h2>Student Discipline Record</h2>

            <form>

              <div class="input-box">
                <label>Student Name</label>
                <input type="text" value="John Mwangi" readonly>
              </div>

              <div class="input-box">
                <label>Admission Number</label>
                <input type="text" value="ADM1023" readonly>
              </div>

              <div class="input-box">
                <label>Case Committed</label>
                <textarea rows="5" readonly>Late reporting to school </textarea>
              </div>

              <div class="input-box">
                <label>Punishment Type</label>
                <input type="text" value="Community Service" readonly>
              </div>

              <button type="button">Back to Dashboard</button>

            </form>

          </div>

          <!------DISCIPLINE REPORT FROM ADMIN ENDS HERE-------->


          <!--------NEWSLETTER SECTION STARTS HERE--------->

          <div class="newsletter_container">

            <h2>Newsletter</h2>

            <form>

              <div class="input-box">
                <label>From</label>
                <input type="text" value="John Mwangi" readonly>
              </div>


              <div class="input-box">
                <label>Subject</label>
                <input type="text" value="School Closing date" readonly>
              </div>

              <div class="input-box">
                <label>Context</label>
                <textarea rows="5" readonly>
We are glad to inform both the teachers, parents and students that
after several consideration the school closing date would be on 27.July.2026
               </textarea>
              </div>



              <button type="button">Back to Dashboard</button>

            </form>

          </div>

           <!--------NEWSLETTER SECTION ENDS HERE--------->


           <!---------FEE STATEMENTS STARTS HERE---------->
<div class="fee_statement_container">
        <div class="fee-table">
        <table>
            
             <tr>
                <th>References</th>
                <th>Date</th>
                <th>Description</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Total</th>
             </tr>
             
             <tr>
                <td>0DR2RD3</td>
                <td>7/1/2024</td>
                <td>FEE-INVOICE</td>
                <td>10000.00</td>
                <td>0.00</td>
                <td>10000</td>
             </tr>
              <tr>
                <td>OBGDHWED</td>
                <td>25/1/2024</td>
                <td>MPESA-RECEIPT</td>
                <td>0.00</td>
                <td>5000.00</td>
                <td>5000.00</td>
             </tr>
              <tr>
                <td>OFGRTYRG</td>
                <td>4/2/2024</td>
                <td>BURSARY-RECEIPT</td>
                <td>0.00</td>
                <td>5500.00</td>
                <td>-500.00</td>
             </tr>
             <tr>
                <td>OGTREASI</td>
                <td>4/5/2024</td>
                <td>FEE-INVOICE</td>
                <td>7000.00</td>
                <td>0.00</td>
                <td>6500.00</td>
             </tr>
        </table>

    </div>

           <!---------FEE STATEMENTS ENDS HERE------------>


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
      <p>© 2026 John Isige Jomo. All rights reserved.</p>
    </div>
  </footer>
</div>
</div>
</body>

</html>