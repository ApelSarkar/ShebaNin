<?php
phpinfo();
include_once("Config.php");
session_start();
$result=mysqli_query($con,"select *from user");
if($result)
{
    echo " successful";
    
    while ($res=mysqli_fetch_array($result)) {
        echo $res['name']."</br>";
    }
}else
{
    echo " error";
}



?>