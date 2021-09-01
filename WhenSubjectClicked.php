<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="dash"><input type="checkbox" id="check">
            <label for="check" >
              <i class="fas fa-bars" id="btn"> </i>
              <i class="fas fa-times" id="cancel"></i>
            </label>
          </div>
            <h2><img src="images/imglogo1.png" alt="can't load image" class="logo"></h2>
            <h2><a href=""></a><img src="images/3dashbar.png" alt="can't load image" class="dashlogo">
            </a>
            </h2>
            <ul>
                <li><a href="dashboardT.php"><i class="fas fa-home"></i>My Subjects</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fas fa-address-card"></i>Notifications</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i>Reports</a></li>
                <li><a href="#"><i class="fas fa-blog"></i>Announcements</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Other Teachers</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Log</a></li>
            </ul> 
          
        </div>
        

         

        

        <div class="main_contentt">
          <div class="firstpart">
          <div class="subjectinfo">
            <h2 class="subjectname"> Grade 1 English    
            </h2>
            <div class="weekdowndrop">
            <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
              <option value="volvo">Week 1 to 5</option>
              <option value="saab">Week 5 to 6</option>
              <option value="mercedes">Week 6 to 8</option>
              <option value="audi">Week 8 to 10</option>
            </select>
          </div>
              
          <div class="addnew-btn" id="myBtn1"> 
            <button><h3>Change uploaded Module</h3></button>
             
         </div>
          <div class="addnew-btn" id="myBtn2">  
          <button><h3>Add new for another week</h3></button>
             
         </div> 
        
            <div class="addnew-btn" id="myBtn3">
            <button><h3>Add new student for this subject</h3></button>
              
          </div>
          </div><!-- end of subject info-->
          
         
            
            
           
          <div class="reportgraph">
            <h2>Pie Graph</h2>
            <section>
              <div class="pieID">
                
              </div>
              <ul class="pielegend" >
               
                <li class="ontime">
                  On time
                  
                </li>
                <li class="late ">
                  Late
          
                </li>
                <li class="lack">
                  Lacking
                  
                </li>
               
              </ul>
            </section>
            <div class="piechart">
              <div class="pieinnercircle">
                
              </div>
            </div>
            
          </div>
         
          </div><!--end of first part-->
            <div class="secondpart">
              <div class="fortable">
                <h4>Grade 1 English Week 1 to 5</h4>
                <table id="studentmodule">
                  <tr>
                    <th>Student Name</th>
                    <th>Claim Status</th>
                    <th>Submission Status</th>
                    <th>Online Claiming Status</th>
                    <th> Online Submission Status</th>
                  </tr>
                  <tr>
                    <td>Alfred Fajardo</td>
                    <td>
                      <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Berto Li</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Maximo Baltan</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Ernesto Bacuod</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Isla May Bertoldo</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Edwin Lukarte</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>May Kris Bandolor</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Mark Magaso</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Nick Tusing</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Paris Magtibay</td>
                    <td>
                    <button id="myBtn1" class="myBtnTbl"> <h4> unclaimed </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      
                      </select>
                    </td>
                    <td> <button id="myBtn1" class="myBtnTbl"> <h4> uncomplied </h4></button>
                      <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                    <td>
                    <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" name="School">
                      <option value="Green">On time</option>
                      <option value="Yellow">Late</option>
                      <option value="Red">Lacking</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
        </div><!-- end of main_content -->
        
       
        
      
    </div><!-- end of wrapper-->
          
            <!-- The Modal -->
            <div id="myModal1" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <h2> </h2>
            <div class="modalformwrapper">
              <div class="title">
                Upload New Module For Week 1 to 5 
              </div>
              <div class="form">
              <form action="" method="POST">
                 <div class="inputfield">
                    <label>Current Module</label>
                    <input type="text" class="input" id="subjectN" placeholder="Week One Module" name="subjectN" required>
                 </div> 
                
                  
                   

                 
              

                <div class="inputfield">
               
                  
                  <input type="submit" name="myBtn"id=myBtn class="btn" value="Proceed"> 
                </div>
                </form>
              </div><!-- end of div form -->
           
          </div><!-- end of modal1 form wrapper-->
            </div><!-- end of modal1 content--> 

            </div><!--end of modal 1-->

                  
            <!-- The Modal -->
            <div id="myModal2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close2">&times;</span>
            <h2> </h2>
            <div class="modalformwrapper">
              <div class="title">
                Adding new week for Grade 1 English
              </div>
              <div class="form">
              <form action="" method="POST">
                 <div class="inputfield">
                    <label>Week Name</label>
                    <input type="text" class="input" id="subjectN" placeholder="example: Week 1 to 3..." name="subjectN" required>
                  </div>
                  <div class="inputfield">
                    <label>Upload Module</label>
                    <input type="text" class="input" id="subjectN" placeholder="..." name="subjectN" required>
                  </div>
                   

                 
              

                <div class="inputfield">
               
                  
                  <input type="submit" name="myBtn"id=myBtn class="btn" value="Proceed"> 
                </div>
                </form>
              </div><!-- end of div form -->
  
          </div><!-- end of modalweek form wrapper-->
            </div><!-- end of modalweek content--> 

            </div><!--end of modal for adding new week-->

              <!-- The Modal -->
              <div id="myModal3" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close3">&times;</span>
        <h2> </h2>
        <div class="modalformwrapper">
        <div class="title">
        Adding new student for Grade 1 English
        </div>
        <div class="form">
        <form action="" method="POST">
        <div class="inputfield">
        <label>Student Name</label>
        <input type="text" class="input" id="subjectN" placeholder="" name="subjectN" required>
    
        </div>
       

     
  

        <div class="inputfield">
   
      
      <input type="submit" name="myBtn"id=myBtn class="btn" value="Proceed"> 
    </div>
    </form>
  </div><!-- end of div form -->

</div><!-- end of modalstudent form wrapper-->
</div><!-- end of modalstudent content--> 

</div><!--end of modal for adding new student-->
    <!-- for dropdown styel-->
    <script>
      var drop = document.getElementById("weekwhat");
      function mydropdownFunction(val) {
       
     
        drop.style.outline="0px";
        drop.style.borderBottomColor="hotpink";
      }
      </script>
     
</body>
<script>
      // Get the modal
      var modal = document.getElementById("myModal1");
      var modal2 = document.getElementById("myModal2");
      var modal3 = document.getElementById("myModal3");
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn1");
      var btn2 = document.getElementById("myBtn2");
      var btn3 = document.getElementById("myBtn3");
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      var span2 = document.getElementsByClassName("close2")[0];
      var span3 = document.getElementsByClassName("close3")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      btn2.onclick = function() {
        modal2.style.display = "block";
      }
      btn3.onclick = function() {
        modal3.style.display = "block";
      }
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      span2.onclick = function() {
        modal2.style.display = "none";
      }
      span3.onclick = function() {
        modal3.style.display = "none";
      }

     
      </script>
      
</html>