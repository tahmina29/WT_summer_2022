<?php
  
  session_start();

require_once 'ValidUtility.php';
require_once '../model/DataAccess.php';
$tname=$ttype=$sname=$tdate=$ttime=$tplace= "";
 
if($_SERVER['REQUEST_METHOD'] === "POST"){

    $tname = cleanData($_POST['tname']);
    $ttype = cleanData($_POST['ttype']);
     $sname = cleanData($_POST['sname']);
     $tdate= cleanData($_POST['tdate']);                
     $ttime = cleanData($_POST['ttime']);        
     $tplace= cleanData($_POST['tplace']);
      
 }

//  var_dump($tname, $ttype, $sname);

 $validated = authorizedValidationT( $tname, $ttype, $sname, $tdate, $ttime, $tplace);

// var_dump($validated);

if($validated === true) {
    $data = array (
        't_name' =>  $tname,
        't_type' => $ttype,
        's_name' => $sname,
        't_date' => $tdate,
        't_time' => $ttime,
        't_place' => $tplace,
        
    );

    // var_dump($data);

    setTour($data);
    header("Location: ../view/TournamentDetails.php");
    exit();

}
else {
    var_dump("Unauthorized Access");
}



?>
