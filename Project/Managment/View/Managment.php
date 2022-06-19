<?php

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:ManagmentLogin.php"); 
}
else
{
    $cookie_value=$_SESSION["username"];
}
$cookie_name = "ManagementAdmin";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}



echo "<h1> Managment Login Success !!! </h1>";

?>

<a href="Profile.php"> <input name="profile" type="submit" value="Profile"> </a>

<br> <br>
<a href="Addmember.php"> <input name="addmember" type="submit" value="Add member"> </a>

 <h3><a href="../Control/logout.php">logout</a> </h3>