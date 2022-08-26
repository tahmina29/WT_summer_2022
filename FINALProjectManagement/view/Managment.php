<?php
require("../controller/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Managment</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/OverAll.css">
    <link rel="stylesheet" href="../CSS/extra.css">

</head>

<body>

     <div class="sticky">Welcome to Our Website!</div>


    <a class="linktag" href="Profile.php">Profile</a><br>
    <a class="linktag" href="Tournament.php">Tournament</a><br>
    <a class="linktag" href="TournamentDetails.php">Tourenament Details</a><br>
    <a class="linktag" href="Results.php">Results</a><br>
    <a class="linktag" href="../controller/LogOut.php">LogOut</a>




    <?php

        require_once 'static/Footer.php';
    ?>
</body>

</html>