<?php

include_once("Config.php");
session_start();


	if(isset($_SESSION['valid'])) {

    if(isset($_GET['done']))
          {
            $id=$_GET['done'];

            $result=mysqli_query($con,"UPDATE accepted_service_info SET status='done' where service_id=$id");
            if($result)
              {
                header("Location: MechanicDashboard.php");
                echo "<script>location='MechanicDashboard.php'</script>";
              }
            

          }
    
      }