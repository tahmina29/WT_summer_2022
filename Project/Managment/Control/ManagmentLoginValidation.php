<?php
$Name="";
$email="";
$Password="";
$validatepassword="";
$validateemail="";
$_Email="";
$_Password="";
$Error=false;
$count=0;
$login_Error=true;
$Photo="";
$loginInfo="";
$loginerror="";
$mydata="";

session_start(); 

if(isset($_POST["Login"]))	{

$user=$_REQUEST["user"]; 
$Password=$_REQUEST["password"];


if(empty($user))
{
    $Error=true;
    $validateemail="You Must Enter Valid username";
}



if(strlen($Password)<6 || empty($Password))
{
    $hasError=true;
    $validatepassword=" Password Must Contain 8 character!!";
}
else{
    $_Password=$Password;
}


if($Error==false)
{
    
    
    $data = file_get_contents("../File/data.json");
    $mydata = json_decode($data);
  

    foreach($mydata as $myobject)
    {
        $count++;
    }

    for($i=0;$i<$count;$i++)
    {
        if($mydata[$i]->Username==$user && $mydata[$i]->Password==$Password) 
        {
            $Name=$mydata[$i]->Name;
            $_SESSION["username"]=$mydata[$i]->Username;
            $_SESSION["password"]=$mydata[$i]->Password;
            $Photo=$mydata[$i]->File_Path;
            $login_Error=false;
            header("location: ../View/Managment.php");
        }
        else
        {
        $loginerror="Username or password invalid";
        }

    }
     
}

}

?>