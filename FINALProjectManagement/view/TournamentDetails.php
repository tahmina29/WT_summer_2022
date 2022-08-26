<?php

require("../controller/header.php");

include("../controller/TournamentList.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Details</title>
    <link rel="stylesheet" href="../CSS/color.css">
</head>
<body>
<h1>Tournament Details</h1>

<table id="TournamentDetails">
  <tr>
    <th>Tournament Name</th>
    <th>Tournament Type</th>
    <th>Sports Name</th>
    <th> Date </th>
    <th>Tournament Time "starting-ending"</th>
    <th>Tournament Place</th>
  </tr>
  <?php
  foreach($results as $r)
  {
    echo "<tr>";
    echo "<td>",$r['t_name'],"</td>";
    echo "<td>",$r['t_type'],"</td>";
    echo "<td>",$r['s_name'],"</td>";
    echo "<td>",$r['t_date'],"</td>";
    echo "<td>",$r['t_time'],"</td>";
    echo "<td>",$r['t_place'],"</td>";
    echo "</tr>";
  }
  ?>
    <a class="linktag" href="Managment.php">Go Back</a>
</body>
</html>


