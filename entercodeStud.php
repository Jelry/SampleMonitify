<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="stylesheet" href="entercode.css">
</head>
<body>
    <div class="wrapperRegister">
       

        <div class="loginFormPart">

        <label for="" class="logintext"><h4>Enter Account Creation Code</h4></label>
            <form method="POST" id="f1">
            <div>
                
                <input type="text" name="username" class="input" placeholder="code here..."required>
                
                </div>
                <div>
                <input type="submit" name="login" value="Proceed" class="btnLogin" required id="openModal" name="btnTeacher">
                </div>
            </form>
            <form method="POST">
               
               
                <div class="sideline">
               <div>
               <label for="pass"><p class="pp">You don't have a creation code?. Don't worry, just Enter your full name and an active phone number. We will send you the code once we confirmed your request! </p></label>
                <input type="text" name="pass" class="input" placeholder="Full Name"required>
                <input type="number" name="pass" class="input" placeholder="Phone Number"required maxlength = "5">
               </div>
               <div>
                 
               <label for="weekwhat" class="wwhat"><h4>School</h4></label>
               <p>Please select your school</p>
               <select name="weekwhat" id="weekwhat" class="dropdown" onchange="mydropdownFunction()" >
              <option value="volvo">Jolencio R. Alberca Elementary School
              (JRAES)5</option>
             
            </select>
               </div>
                <div>
                    <input type="submit" name="login" value="Request Code" class="btnLogin" required id="openModal" name="btnTeacher">
                   
                </div>

                <div>
                    <a href="login.php">Back to log in</a>
                </div>
                </div>
            </form>
           
        </div><!--end of registration form-->
        <div class="logoPartRegister">
            <img src="images/imglogo1.png" alt="can't load image">
        </div>
        
    </div><!--end of wrapper -->
        
<?php 

	//this code is for inserting data to database
		if(isset($_POST['btnTeacher'])){
          
			$subjectN= $_POST['subjectN'];
			$subjectD= $_POST['subjectD'];
		

		//	$sql=$link->query("INSERT INTO tbl_subjects values('Null','', '$subjectN', '$subjectD' )");
			
			if ($sql) {
				echo "
					<script>
					window.alert('Successfully added to Database');
					</script>
				";
			}
		}
   
            ?>
</body>

      <script>
      var drop = document.getElementById("weekwhat");
      function mydropdownFunction(val) {
       
     
        drop.style.outline="none";
        drop.style.borderBottomColor="hotpink";
      }
      </script>
</html>