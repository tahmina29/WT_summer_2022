<?php

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:ManagmentLogin.php"); 
}

?>

<html>
    <head>
        <title> Addmember </title>
</head>
<body>
<h1> This page is for adding member </h1>

<h4> <a href="Managment.php">Home</a></h4>

</body>
</html>