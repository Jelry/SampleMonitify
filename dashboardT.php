<?php
  
include 'connDB.php';
?>
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
                <li><a href="#"><i class="fas fa-home"></i>My Subjects</a></li>
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fas fa-address-card"></i>Notifications</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i>Reports</a></li>
                <li><a href="#"><i class="fas fa-blog"></i>Announcements</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Other Teachers</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Log out</a></li>
            </ul> 
           
        </div>
        <div class="main_content">
            
           <!-- <div class="addnew-btn"> <h4> <a href="" >Add new</a> </h4 > </div>   -->
           <div id="myBtn">
           <button > <h3> Add New Subject </h3></button>
           </div>
             
            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
            <span class="close">&times;</span>
            <h2> </h2>
            <div class="modalformwrapper">
              <div class="title">
                Input Subject Details
              </div>
              <div class="form">
              <form action="" method="POST">
                 <div class="inputfield">
                    <label>Subject Name</label>
                    <input type="text" class="input" id="subjectN" placeholder="example: Grade 1 Math..." name="subjectN" required>
                 </div> 
                 <div class="inputfield">
                  <label>Subject Description</label>
                  <textarea class="textarea" id="subjectD" name="subjectD" required></textarea>
               </div> 
                  
                   

                 
              

                <div class="inputfield">
               
                  
                  <input type="submit" name="myBtn"id=myBtn class="btn" value="Proceed"> 
                </div>
                </form>
              </div><!-- end of div form -->
              <?php 
	
	
	//this code is for inserting data to database
		if(isset($_POST['myBtn'])){
			$subjectN= $_POST['subjectN'];
			$subjectD= $_POST['subjectD'];
			
			$sql=$link->query("INSERT INTO tbl_subjects values('Null','', '$subjectN', '$subjectD' )");
			
			if ($sql) {
			 "
					<script>
					window.alert('Successfully added to Database');
					</script>
				";
			}
		}
   
            ?>
          </div><!-- end of modal1 form wrapper-->
            </div><!-- end of modal1 content--> 

            </div><!--end of modal 1-->


         
          
        </div>
        
         
        <div class="secondcontentwrapper">
        <?php
          include 'loadsubjects.php';
          ?>
        </div>
    </div><!-- end of wrapper-->
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
     
      </script>
      
     
</body>
</html>