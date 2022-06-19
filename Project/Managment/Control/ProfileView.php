<?php

$unameOfUser=$cu=$pu=$nameOfUser=$emailOfUser=$contactOfUser=$passOfUser=$addressOfUser=$dobOfUser=$error=$errorPrf=$myobject="";
$count=0;

session_start(); 
if(!empty($_SESSION["username"])) 
{ 
$unameOfUser=$_SESSION["username"];
    $passOfUser=$_SESSION["password"];
}

if (!empty($unameOfUser) && !empty($passOfUser))
{
    
$data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
  

    foreach($mydata as $myobject)
    {
        $count++;
    }

    for($i=0;$i<$count;$i++)
    {
        $cu=$mydata[$i]->Username;
        $pu=$mydata[$i]->Password;
        if( $cu==$unameOfUser && $pu==$passOfUser) 
        {
            $nameOfUser=$mydata[$i]->Name;
            $unameOfUser=$mydata[$i]->Username;
            $emailOfUser=$mydata[$i]->Email;
            $contactOfUser=$mydata[$i]->Phone;
            $passOfUser=$mydata[$i]->Password;
            $addressOfUser=$mydata[$i]->Address;
            $dobOfUser=$mydata[$i]->DOB;
        }
    }
}

?>