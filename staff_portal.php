<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="staff_portal.css?v=<?php echo time(); ?>">
  <title>Staff Portal</title>
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
            <li><a href="#" class="logout">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>


    <!-----------CONTENT----------->
    <section class="content_section">

      <div class="container">
        <h2>Student Registration Form</h2>

        <section class="content">
          <div class="dashboard">
            <div class="boxes">
              <div class="dashboard-box_h2">
                <i class="fa-solid fa-chart-bar"></i>
                <h2>Dashboard</h2>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-circle-user"></i>
                <a href="#">Profile</a>
              </div>


              <div class="dashboard-box">
                <i class="fa-solid fa-calendar-days"></i>
                <a href="#">Class Schedule</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-jxl"></i>
                <a href="#">Update Grades</a>
              </div>


              <div class="dashboard-box">
                <i class="fa-solid fa-bullhorn"></i>
                <a href="#">Faculty Announcements</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <a href="#">Newsletter</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <a href="#">Indiscipline Report</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <a href="#">School Performance</a>
              </div>

              <div class="dashboard-box">
                <i class="fa-brands fa-bitbucket"></i>
                <a href="#">Repository</a>
              </div>
            </div>

            <div class="dashboard-content">
              <div class="dashboard-top">
                <div class="top">
                  <i class="fa-solid fa-envelope"></i>
                  <a href="#">Messages</a>
                </div>


              </div>
              <div class="dashboard-below">
                <div class="profile">

                  <div class="profile-pic">
                    <img src="" alt="">
                  </div>

                  <div class="profile-info">
                    <div class="info">
                      <h3>PERSONAL INFO:</h3>
                    </div>

                    <div class="info">
                      <h3>CONTACT:</h3>
                    </div>

                    <div class="info">
                      <h3>ACADEMIC BACKGROUND:</h3>
                    </div>

                    <div class="info">
                      <h3>SUBJECTS ASSIGNED:</h3>
                    </div>

                    <div class="info">
                      <h3>EMPLOYMENT STATUS:</h3>
                    </div>

                  </div>

                </div>


                <!----------RESULT REPORT----------->
                <div class="form-container">
                  <header>
                    <h1>Academic Performance Report</h1>
                    <p>EXAM RESULTS - 2026</p>
                  </header>

                  <form>
                    <fieldset>
                      <legend>Student Information</legend>
                      <div class="row">
                        <div class="input-group">
                          <label>Full Name:</label>
                          <input type="text" placeholder="">
                        </div>

                        <div class="input-group">
                          <label>Admission Number:</label>
                          <input type="text" placeholder="">
                        </div>

                        <div class="input-group">
                          <label>Class:</label>
                          <Select>
                            <option value="">Select Class---</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                          </Select>
                        </div>

                        <div class="input-group">
                          <label>Term:</label>
                          <Select>
                            <option value="">Select Term---</option>
                            <option value="term one">Term One</option>
                            <option value="term two">Term Two</option>
                            <option value="Term Three">Term Three</option>
                          </Select>
                        </div>


                      </div>
                    </fieldset>

                    <fieldset>
                      <legend>Subject Performance</legend>
                      <table>
                        <thead>
                          <tr>
                            <th>Subject</th>
                            <th>Score (100)</th>
                            <th>Grade</th>
                            <th>Remarks</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>MATHEMATICS</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                <option value="Missing Marks">Missing Marks</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>ENGLISH</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td>KISWAHILI</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td>CHEMISTRY</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td>BIOLOGY</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td>PHYSICS</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                              </select>
                            </td>
                          </tr>


                          <tr>
                            <td>COMPUTER STUDIES</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="text" class="small-input"></td>
                            <td>
                              <select name="remark" id="my_remark">
                                <option value="">Select Remark---</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                              </select>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </fieldset>

                    <div class="summary-footer">
                      <div class="summary_row">
                        <div class="summary_group">
                          <label>Mean Grade:</label>
                          <input type="text" placeholder="Grade">
                        </div>
                        <div class="summary_group">
                          <label>Total Marks:</label>
                          <input type="text" placeholder="Total">
                        </div>
                        <div class="summary_group">
                          <label>Class Position:</label>
                          <input type="text" placeholder="Pos">
                        </div>
                        <div class="summary_group">
                          <label>Stream Position:</label>
                          <input type="text" placeholder="Pos">
                        </div>
                      </div>


                      <button type="submit" class="submit-btn">Generate Report</button>
                  </form>
                </div>
              </div>


              <!------------END OF RESULTS------------>

              <!---------------KCSE RESULTS----------->
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
              <!---------------END OF KCSE RESULTS--------->

              <!------------REPORT DISCIPLINE  CASES----------->
              <div class="discipline_container">
                <form>

                  <h2>Disciplinary Form</h2>

                  <div class="input-box">
                    <input type="text" required>
                    <label>Full Name</label>
                  </div>

                  <div class="input-box">
                    <input type="number" required>
                    <label>Admission Number </label>
                  </div>

                  <div class="input-box">
                    <textarea required></textarea>
                    <label>Case Description </label>
                  </div>


                  <div class="input-box">
                    <input type="text" required>
                    <label>Punishment type</label>
                  </div>

                  <button type="submit">Report Case</button>

                </form>
              </div>

              <!------------REPORT DISCIPLINE  CASES ENDS HERE----------->


              <!---------UPLOAD ASSIGNMENT FORM------------->



              <section class="staff-assignment">
                <div class="assignment-container">
                  <form action="#">
                    <div class="create-assignment">
                      <h2>Create Assignment</h2>

                      <div class="form-input">
                        <label for="title">Title: </label>
                        <input type="text" name="title" required>
                      </div>

                      <div class="form-input">
                        <label for="grade">Grade: </label>
                        <select name="grade" id="class">
                          <option value="grade" name="class">Grade 10 blue</option>
                          <option value="grade" name="class">Grade 10 green</option>
                          <option value="grade" name="class">Grade 11 blue</option>
                          <option value="grade" name="class">Grade 11 green</option>
                          <option value="grade" name="class">Grade 12 blue</option>
                          <option value="grade" name="class">Grade 12 green</option>
                        </select required>
                      </div>

                      <div class="form-input">
                        <label for="date">Due date: </label>
                        <input type="date" name="date" required>
                      </div>

                      <div class="form-input">
                        <label for="file">Choose File:</label>
                        <input type="file" name="file" required>
                      </div>

                      <div class="form-input">
                        <label for="instructions">Instructions:</label>
                        <textarea id="instructions" name="instructions" rows="5"
                          placeholder="Enter assignment details here...">
                       </textarea>
                      </div>

                      <div class="btn">
                        <button type="submit">Post Assignment</button>
                      </div>

                    </div>

                  </form>
                </div>
              </section>
              <!---------UPLOAD ASSIGNMENT FORM ENDS HERE------------->


            </div>
          </div>
        </section>
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