<?php   include "..\Control\ManagmentRegValidation.php" ; ?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>


<form action="..\Control\process.php" method="post" enctype="multipart/form-data">
<tr>
<td>
<fieldset>
<h1>Managment Sign Up</h1>
<table>
<tr>
<td>Name : </td>
<td><input type="text" placeholder="Enter your Name" name="name"> <?php echo $ValidName; ?></td>
</tr>


<tr>
<td> Email :  </td>
<td><input type="text" placeholder="Enter Email" name="email"> <?php echo $validateemail; ?></td>
</tr>

<tr>
<td> Username :  </td>
<td><input type="text" placeholder="Set Your Username" name="Username"> <?php echo $ValidUser; ?></td>
</tr>



<tr>
<td>Password :  </td>
<td><input type="password" placeholder="Enter Password" name="password"><?php echo $validatepassword; ?></td>
</tr>


<tr>
<td>Confirm Password :  </td>
<td><input type="password" placeholder="Enter Confirm Password" name="confirmpassword"><?php echo $validateconfirmpassword; ?></td>
</tr>


<tr>
<td>Phone: </td>
<td> <input type="text" placeholder="Enter Phone Number" id="phone" name="phone"><?php echo $ValidPhone; ?></td>
</tr>

<tr >
					<td> Address : </td>
					<td><input type="text" placeholder="Street Address" name="street"> <?php echo $ValidStreet ?> 
					
				

			  
           
				 <input type="text" placeholder="City" name="city"><?php echo $ValidCity ?>  

			  <input type="text" placeholder="Postal/Zip Code" name="postal" > <?php echo $ValidPostal ?> </td>
					
				

<tr>
<td>Date of Birth</td>
<td> <input type="date" id="birthday" name="birthday"><?php echo $Date; ?></td>
</tr>

<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other <br> <?php echo $validateradio; ?><br>
</td>
</tr>

<tr>
<td>Club Type:</td>
<td>

<input type="checkbox"  name="Football club" value="Football club"> Football club
<input type="checkbox" name="Cricket club" value="Cricket club">Cricket club
<input type="checkbox" name="Badminton club" value="Badminton club">Badminton club <br> <?php echo $validatecheckbox; ?>

</td>
</tr>


<tr>
<td> <label for="file ">Please Choose a Photo : </label> </td>
<td><input type="file" name="fileupload"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>

</tr>
</table>

</fieldset>
<td><h4> <a href="ManagmentLogin.php">Login</a></h4></td>
 <td><h4><a href="Managment.php">Home</a></h4></td>
</form>
</body>
</html>