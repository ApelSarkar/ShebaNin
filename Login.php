<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">


    <style type="text/css">
    h4 {
    color: white;
    }
  </style>
</head>
<body> 
	<form class="box" action="Login.php" method="post">
		<h1>Longin</h1>
		<input type="text" name="phone_number" placeholder="phone_number" required="true" pattern="[0-9]{11}">
		<input type="password" name="password" placeholder="password" required="true">

        
        
        
		



        <center>
            <table>
                <tr>
                    <td>
                        <input type="radio" name="type"  value="admin" required="true">
                    </td>
                    <td>
                        <h4>I am a Admin.</h4>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="type"  value="client" required="true">
                    </td>
                    <td>
                        <h4>I am a Client.</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="type"  value="mechanic" required="true">
                    </td>
                    <td>
                        <h4>I am a Mechanic.</h4>
                    </td>
                </tr>
            </table>
        </center>

        <input type="submit" name="Submit" value="Login">






        
        <a  type="home" class="nav-item nav-link active bg-white" href="index.html" style="color: white">Home</a>

		
	</form>


	<?php
include_once("Config.php");
 
session_start(); 





if(isset($_POST['Submit']))
{
    if(isset($_POST['type']))
        {
            $phone_number=$_POST['phone_number'];
            $password=md5($_POST['password']);
            $type=$_POST['type'];
            
           
            $result=mysqli_query($con,"select *from user");
            
            while ($res=mysqli_fetch_array($result)) {
                $a=$res['phone_number'];
                $b=$res['password'];
                //echo $a." ".$b."</br>";
                if($a==$phone_number&&$b==$password)
                {
                    
                    $name= $res['name'];
                            
                    $address= $res['address'];
    
                    $_SESSION['id']= $res['id'];
                            
                    $_SESSION['name'] = $res['name'];
                    $_SESSION['address'] = $res['address'];
                            
                            
                    $_SESSION['valid'] = $phone_number;
                    $_SESSION['password']= $res['password'];
                    $_SESSION['role']=$res['role'];
                    $_SESSION['balance']=$res['balance'];
                    
                    //echo $_SESSION['name']."</br> done </br>";
                    //echo $_SESSION['valid']."</br> done </br>";
                    //echo $_SESSION['password']."</br> done </br>";
                    //echo $_SESSION['role']."</br> done </br>";
                    
                }
                    
                    
                

            }
            if(isset($_SESSION['valid'])) {
                echo "valid";
                if($_SESSION['role']=="admin"){
                    echo $_SESSION['role'];
                    header('Location: Dashboard.php');
                    echo "<script>location='Dashboard.php'</script>";
                }
                elseif ($_SESSION['role']=="client")
                {
                    echo $_SESSION['role'];
                    header('Location: ClientDashboard.php');
                    echo "<script>location='ClientDashboard.php'</script>";
                }
                elseif ($_SESSION['role']=="mechanic")
                {
                    echo $_SESSION['role'];
                    header('Location: MechanicDashboard.php');
                    echo "<script>location='MechanicDashboard.php'</script>";
                }




            }else{
                echo "are u hacker?";
            }

        
        }


}


 
?>

</body>
</html>