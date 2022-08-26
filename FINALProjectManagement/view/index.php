<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/OverAll.css">
</head>
<body>

    <?php
    session_start();
    
    if(isset($_COOKIE['logtime'])) {
        
        header("Location: ../view/Managment.php");
        exit();
    }

    ?>

<h1 class="titlecontent">LOGIN FORM</h1>

    <form id="loginform" name="loginform" action="../controller/LogValidation.php" method="post" novalidate
	enctype="application/x-www-form-urlencoded">

		
			<label for="uname">User Name:</label>
			<input type="text" name="uname" id="uname">
            <span class="error"> <?php  echo $_SESSION['unameErr'] ?? '' ?> </span> 
			
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
            <input type="checkbox" onclick="myFunction()">Show Password
            <script>
               function myFunction() {
              var x = document.getElementById("password");
                    if (x.type === "password") {
                          x.type = "text";
                              } else {
                             x.type = "password";
                                           }
                         }                        
             </script>
            
            <span class="error"> <?php  echo $_SESSION['passwordErr'] ?? '' ?> </span>
            <span class="error"> <?php  echo $_SESSION['log_error'] ?? '' ?> </span>

            <input type="checkbox" id="logon" name="logon" value="remember">
            <label for="remember"> Remember this ID?</label>
        <span class="error"></span>

        

            <input type="submit" name="submit" value="Submit">

        </form>
        <a class="linktag" href="RegForm.php">Register here!</a>

        <?php

            session_unset();
    

        ?>

    
</body>
</html>