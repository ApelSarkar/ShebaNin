<?php
/**
 * Created by PhpStorm.
 * User: al-amin
 * Date: 2/27/19
 * Time: 9:06 AM
 */



include_once("Config.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/alamin.css">
	<title>EmptySession</title>
</head>
<body>
<?php
	if(isset($_SESSION['valid'])) {
	    
          echo "<h1>Wellcome here".$_SESSION['NAME']."</h1>";
          echo "<a href='logout.php'>Logout</a>";
          
          
          
          
          if(isset($_POST['loadsb'])){
            //add service location
            echo "loadsb ";

            $mechanic_id=$_SESSION['id'];
            $mobile=$_POST['mobile'];
            $receipt_id="nil";
            $transection_id=$_POST['transection_id'];
            $money=$_POST['money'];
            $sb=$money/10;
            echo $sb;


            $result=mysqli_query($con,"INSERT INTO `receipts`( `transection_id`,`mobile`,`sb`) VALUES ('$transection_id','$mobile','$sb')");
            
            
            
            if($_SESSION['role']=="admin"){
                //header("Location: Dashboard.php");
                echo "<script>location='Dashboard.php'</script>";
            }


        }


        if(isset($_POST['distribute'])){
            //add service location
            echo "submit_money";

            
            
            if($_SESSION['role']=="mechanic"){
                //header("Location: MechanicDashboard.php");
                echo "<script>location='MechanicDashboard.php'</script>";
            }else if($_SESSION['role']=="client"){
                //header("Location: ClientDashboard.php");
                echo "<script>location='ClientDashboard.php'</script>";
            }else
                echo "<script>location='Dashboard.php'</script>";


        }
?>
//HTML START






<?php
      }else{
        	header("Location: Login.php");
        	echo "<script>location='Login.php'</script>";
        }

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
