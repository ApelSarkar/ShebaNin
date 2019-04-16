<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

include_once("Config.php");

if(isset($_POST['Submit']))
{
    if(isset($_POST['type']))
        {
            echo "<span>You have selected :<b> ".$_POST['type']."</b></span>";

            $name=$_POST['name'];
            $address=$_POST['address'];
            
            $phone_number=$_POST['phone_number'];
            $password=md5($_POST['password']);
            $type=$_POST['type'];
            $balance="10";
            $valid="valid";








               $result=mysqli_query($con,"select phone_number from user");
                while ($res=mysqli_fetch_array($result)) {
                    if($res['phone_number']==$phone_number)
                    {
                        $valid="false";



                    }
                }
                echo $valid;

                if($valid=="valid")
                {
                    $result=mysqli_query($con,"INSERT INTO user(name,address,phone_number,password,role,status,balance) values('$name','$address','$phone_number','$password','$type','$valid','$balance')");
                    if($result)
                    {
                        header("Location: Login.php");
                        echo "<script>location='Login.php'</script>";

                    }
                }
        





    




        
           

           
        




        






       

        if($result)
        {
            echo " Insert Successful";
            header("Location: Login.php");
            echo "<script>location='Login.php'</script>";

        }else{
            echo "Insert Error";
            header("Location: index.html");
            echo "<script>location='index.html'</script>";
        }


        //header("Location: index.html");


        
        }


        

 


   
}

?>

</body>
</html>