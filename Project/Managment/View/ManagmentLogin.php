<?php   include "..\Control\ManagmentLoginValidation.php" ; ?>

<!DOCTYPE html>
<html>
<head>

<title>Login Form </title>

</head>
<body>

<?php echo $loginerror ?>

<form action="" method="post">
<tr>
<td>
<h1 mlign="Center">Managment Login</h1>

<table>
<tr>
<td> Usrename :  </td>
<td><input type="text" placeholder="Enter Username" name="user"> <?php echo $validateemail; ?></td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password" placeholder="Enter Password" name="password"><?php echo $validatepassword; ?></td>
</tr>


<tr>
<td> <input type="submit" name="Login"> 
<input type="reset" name="Reset"></td>
<td>
<h4> <a href="ManagmentRegistration.php">Registration</a></h4>
</td>
</tr>
</table>
</form>
</body>
</html>