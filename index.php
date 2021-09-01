<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div class="wrapper">
        <div class="logoPart">
            <img src="images/imglogo1.png" alt="can't load image">
        </div>

        <div class="loginFormPart">

        <label for="" class="logintext"><h4>Login</h4></label>
            <form method="POST">
               
                <div>
                <label for="username"><h4>Username</h4></label>
                <input type="text" name="username" class="input" required>
                </div>
               <div>
               <label for="pass"><h4>Password</h4></label>
                <input type="password" name="pass" class="input" required id="pass">
                <div class="eyee" conclick="eyeFunction"><input type="checkbox" onclick="eyeFunction()" class="eyecle"></div>
               </div>
              
                <div>
                   
                    <input type="submit" name="login" value="Login" class="btnLogin" required>
                    
                </div>
               
                <div class="reg">
                    <a href="registerOption.php">Register</a>
                </div>
            </form>
            <?php 
            include 'connDB.php';
	
	//this code is for loggin in
		if(isset($_POST['login'])){
			$userN= $_POST['username'];
			$userP= $_POST['pass'];
			
			
			$sqll=$link->query("SELECT * FROM `user` WHERE `UserName` LIKE '$userN' AND `PassWord` LIKE '$userP'");
			if ($sql) {
			 "
					<script>
					window.alert('Successfully added to Database');
					</script>
				";
			}
            if($sqll){
                header("Location: dashboardT.php");
                exit();
            }
            else{
                echo "
                <script>
                window.alert('account doesn't exist');
                </script>
            ";
            }
		}
   
            ?>
        </div>
        
    </div>
</body>
<script>
    function eyeFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>