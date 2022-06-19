<?php   include "..\View\ManagmentRegistration.php" ; ?>
<?php   include "ManagmentRegValidation.php" ; ?>

<?php 
$v1="";
$v2="";
$v3="";
$validateradio="";
$validatecheckbox="";
$Name=$_REQUEST["name"]; 
$Email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];
$Phone=$_REQUEST["phone"];
$Street=$_REQUEST["street"];
$City=$_REQUEST["city"];
$Postal=$_REQUEST["postal"];
$User=$_REQUEST["Username"];
$Date = date('Y-m-d', strtotime($_POST['birthday']));


if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}

    if(isset($_REQUEST["Football club "]))
    {
        $v1= $_REQUEST["Football club"];
       
    }
    if(isset($_REQUEST["Cricket club"]))
    { 
        $v2= $_REQUEST["Cricket club"];
      
    }
    if(isset($_REQUEST["Badminton club"]))
    {
     $v3= $_REQUEST["Badminton club"];
     
    }




    $formdata = array(
        'Name'=> "$Name",
        'Email'=> "$Email",
        'Username'=> "$User",
        'Password'=>"$Password",
        'Phone'=>"$Phone",
        'Address'=>"$Street , $City,$Postal",
        'Gender'=>"$validateradio",
        'DOB'=>"$Date",
        'Managment_Type'=>"$v1,$v2,$v3",
       
    
     );
    
    
     $existingdata = file_get_contents('../File/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("../File/data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";
    
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
    
    
    foreach($mydata as $myobject)
    {
    foreach($myobject as $key=>$value)
    {
      echo "your ".$key." is ".$value."<br>";
    } 
    echo "<br>";
    }
    


}

?>
