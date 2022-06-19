<?php include('../Control/ProfileView.php'); ?>
<!DOCTYPE html>
<html>

<body>
<h1> USER PROFILE </h1>
<form name="profile" action="" method="post">
<br>
<label> Name : <?php echo $nameOfUser; ?> <br>
<br>
Username : <?php echo $unameOfUser; ?> <br>
<br>
Email : <?php echo $emailOfUser; ?> <br>
<br>
Contact : <?php echo $contactOfUser; ?> <br>
<br>
Password : <?php echo $passOfUser; ?> <br>
<br>
Address : <?php echo $addressOfUser; ?> <br>
<br>
Date of Birth : <?php echo $dobOfUser; ?> <br>
<br>

<br>
</form>

<h4> <a href="Managment.php">Home</a></h4>
<h4> <a href="../Control/logout.php">Log Out</a></h4>

</body>
</html>