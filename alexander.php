<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="alexander.css">
</head>
<body>
       <!----------RESULT REPORT----------->
                <div class="section form-container" id="ResultsSection">
                  <header>
                    <h1>Academic Performance Report</h1>
                    <p>EXAM RESULTS - 2026</p>
                  </header>

                  <form>
                    <fieldset>
                      <legend>Teacher's Information</legend>
                      <div class="row">
                        <div class="input-group">
                          <label>Full Name:</label>
                          <input type="text" placeholder="">
                        </div>

                        <div class="input-group">
                          <label>Grade:</label>
                            <Select>
                            <option value="">Select Class---</option>
                            <option value="grade">Grade 10</option>
                            <option value="grade">Grade 11</option>
                            <option value="grade">Grade 12</option>
                          </Select></Select>
                        </div>

                        <div class="input-group">
                          <label>stream:</label>
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
                            <th>Student Names</th>
                            <th>Admission</th>
                            <th>Mathematics</th>
                            <th>English</th>
                            <th>Kiswahili</th>
                            <th>Chemistry</th>
                            <th>Biology</th>
                            <th>Physics</th>
                            <th>Computer Studies</th>
                            <th>Total</th>
                            <th>Remarks</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Alexander Muita</td>
                            <td>C0122</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                             <td><input type="number" min="0" max="100"></td>
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
                            <td>John Isige</td>
                            <td>C0123</td>
                             <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                             <td><input type="number" min="0" max="100"></td>
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
                            <td>Brian okot</td>
                            <td>C0124</td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                             <td><input type="number" min="0" max="100"></td>
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
                            <td>Ken munene</td>
                            <td>C0125</td>
                             <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                            <td><input type="number" min="0" max="100"></td>
                             <td><input type="number" min="0" max="100"></td>
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

</body>
</html>