<html>
<head>
 
</head>
<body>
   
<div class="regform">
<h1>Registration Form </h1>
<hr>
</div>
    
    <!-- enctype use when use $_FILES -->
    <form action="" method="POST" enctype ="multipart/form-data" onsubmit="return formcheck()" >
        <table>
            
            <tr>
                <td>
                    First Name :
                </td>
                <td>
                    <input type="text"  name = "fname" id="fa1" placeholder="Enter your fastname" onkeyup="fastnameval()"  >
                </td>
                
            </tr>
            <tr>
                <label id="lnameerror"></label>
                <td>
                    Last Name :
                </td>
                <td>
                    <input type="text"  name = "lname" id="la1" placeholder="Enter your lastname" onkeyup="lastnameval()" >
                </td>
               
            </tr>
            <tr>
                <td>
                    Age :
                </td>
                <td><input type="text" name="age" id="ag1" placeholder="Enter your age" onkeyup="ageval()"></td>
            </tr>
            <tr>
                <td>
                    Designation :
                </td>
                <td><input type="radio" name="designation" value="Junior Programmer" id="Junior" onclick="getradioval()" >Junior Programmer
                <input type="radio" name="designation" value="Senior Programmer" id="Senior" onclick="getradioval()">Senior Programmer
                <input type="radio" name="designation" value="Project Lead" id ="PL" onclick="getradioval()">Project Lead
            </td>
                <p id="radiovalue"></p>
            </tr>
            <tr>
                <td>Preferred Language : </td>
                <td><input type="checkbox" name="skills[]" value="Java" id="java" onclick="checkval()" >Java
                   <input type="checkbox" name="skills[]" value="PHP" id="php" onclick="checkval()">PHP
                   <input type="checkbox" name="skills[]" value="C++" id="cplusplus" onclick="checkval()">C++</td>
                   <p id="checkvalue"></p>
            </tr>
            <tr>
                <p id="mailerror"></p>
                <td>Email :</td>
                <td>
                    <input type="text`" name="email" id="mail" placeholder="Enter your email" onkeyup="emailcheck()">
                </td>
            </tr>
            <label id="nameerror"></label>
            <tr>
                <p id="passw"></p>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="pass" id="pa1" placeholder="Enter your password" onkeyup="passval()">
                </td>
            </tr>
            <tr>
                <p id="Fileerror"></p>
                <td>
                    Please choose a file : 
                </td>
                <td>
                <input type="file" name="myfile" id="f1" onclick="fileval()">
                </td>
            </tr>
            
            <p id="submit"></p>
        </table>
        
                <input type="submit" name="submit" class="button" value="Submit">
                
                
              
                <input type="reset" name="reset" class="button" value="Reset">
                
    </form>
    <script src="../JavaS/jsv.js"></script>
    
</body>
</html>