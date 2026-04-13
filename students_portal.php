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
  <link rel="stylesheet" href="students_portal.css?v=<?php echo time(); ?>">
  <title>Students Portal</title>
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
            <li><a href="#"><i class="fa-solid fa-money-bill"></i> Fee Payment</a></li>
          </ul>
        </aside>


        <div class="main_content">
          <h2>Welcome to the Student Portal</h2>

          <!-------PROFILE SECTION STARTS HERE------------>

          <div class="profile_container">
            <div class="edit">
              <h3>Student Profile</h3>
              <button type="" class="edit_btn"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</button>
            </div>
            <div class="image_and_class">
              <div class="students_image">
                <img src="images\jomo.jpeg" alt="">
              </div>
              <div class="students_class">
                <ul>
                  <li>NAME: <span>JOHN JOMO</span></li>
                  <li>ADMISSION NO: <span>BBITC01/3242/2022</span></li>
                  <div class="class_container">
                    <li class="form_and_class"><i class="fa-solid fa-layer-group"></i>FORM: <strong>3</strong></li>
                    <li class="form_and_class_2">CLASS: <strong>3 RED </strong></li>
                  </div>
                </ul>
              </div>
            </div>

            <div class="profile_and_contact">
              <div class="profile">
                <h2>Profile</h2>
                <ul>
                  <li><i class="fa-sharp fa-solid fa-hashtag"></i> Admission Number: <strong>BBITC01/3242/2022</strong>
                  </li>
                  <li><i class="fa-duotone fa-solid fa-person-half-dress"></i> Gender: <strong>Male</strong></li>
                  <li><i class="fa-chisel fa-regular fa-calendar"></i> Date of Birth: <strong>March 19, 2001</strong>
                  </li>
                  <li><i class="fa-solid fa-flag-usa"></i> Nationality: <strong>Kenyan</strong></li>
                  <li><i class="fa-solid fa-address-book"></i> Home Address: <strong>123 Nairobi St, Nairobi
                      Kenya</strong></li>
                </ul>
              </div>

              <div class="profile">
                <h2>Contact Information</h2>
                <ul>
                  <li><i class="fa-solid fa-phone"></i>Phone: <strong>0741504282</strong></li>
                  <li><i class="fa-solid fa-envelope"></i>Email: <strong>johnisige2020@gmail.com</strong></li>
                  <li><i class="fa-sharp fa-solid fa-person-breastfeeding"></i>Parent/Guardian: <span>Joseph Jomo</span>
                    <strong>0728620910</strong>
                  </li>
                </ul>
              </div>
            </div>


          </div>

          <!-------PROFILE SECTION ENDS HERE------------>


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
              <div class="fee_header">
                <h3>FEE STATEMENTS</h3>
              </div>
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
          </div>
          <!------------FEE STATEMENTS ENDS HERE----------->


          <!---------UPCOMING EVENTS-------------------->

          <div class="upcoming_events_container">

            <div class="upcoming-events">
              <div class="header">
                <h2>UPCOMING EVENTS.</h2>
              </div>

              <div class="contents">
                <div class="content-box">
                  <div class="date">
                    <p>3-5 May <strong>1900</strong></p>
                    <span>1pm-2pm</span>
                  </div>
                  <div class="event">
                    <h3>Back To School</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum architecto minima quia dolorum
                      repudiandae temporibus eum officiis rem quas sint.</p>
                  </div>
                </div>

                <div class="content-box">
                  <div class="date">
                    <p>7-9 March <strong>2025</strong></p>
                    <span>1pm-2pm</span>
                  </div>
                  <div class="event">
                    <h3>Parent meeting</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In magnam explicabo illum quod omnis
                      aut nulla facilis esse fugit at.</p>
                  </div>
                </div>

                <div class="content-box">
                  <div class="date">
                    <p>13-16 April <strong>2026</strong></p>
                    <span>3pm-4pm</span>
                  </div>
                  <div class="event">
                    <h3>Inter Games and music events</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi labore quia cum sunt
                      veniam doloremque ipsum pariatur quaerat fugit.</p>
                  </div>
                </div>


                <div class="newsletter">
                  <a href="#">Back to Dashboard </a>
                </div>
              </div>
            </div>
          </div>
          <!---------UPCOMING EVENTS ENDS HERE-------------------->


          <!------------ASSIGNMENT FORM STARTS HERE------------------>


          <div class="assignment-container">

            <h2>Student Assignment Portal</h2>

            <form>

              <!-- FORM DROPDOWN -->
              <div class="input-group">
                <label>Students Name:</label>
                <input type="text"  required>
              </div>

              <div class="input-group">
                <label>Admission No:</label>
                <input type="number"  required>
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

              <!-- STREAM -->
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

              <!-- SUBJECT DROPDOWN -->
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

            

              <!-- FILE UPLOAD -->
              <div class="input-group">
                <label>Upload Completed Assignment</label>
                <input type="file" required>
              </div>

              <button type="submit" class="upload-btn">
                Submit Assignment
              </button>

            </form>

          </div>
</body>

</html>

<!------------ASSIGNMENT FORM ENDS HERE------------------>

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