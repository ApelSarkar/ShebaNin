<?php
session_start();
include_once("Config.php");
$client_id;
$mechanic_id;
$service_location;
$service_type;
$service_description;
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



    <!--downloaded extra-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Dashboard</title>
</head>
<body>
<?php
if(isset($_SESSION['valid'])) {


?>
//HTML START













<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header ">
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <a class="navbar-brand text-warning" href="index.html">Dashboard</a>



            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">

                    <a class="navbar-brand text-warning" href="logout.php">Logout<i class="fas fa-power-off mr-2"></i></a>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar bg-warning text-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-dark" href="ClientDashboard.php"><i class="fa fa-fw fa-desktop"></i>Dashboard<span class="badge badge-success"></span></a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-dark" data-toggle="modal" data-target="#SM"><i class="fa fa-fw fa-search" ></i>Search Mechanics<span class="badge badge-success"></span></a>


                        </li>



                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">
                                <?php echo "<h1>Wellcome ".$_SESSION['name'].". You are our Client.</h1>"; ?>
                            </h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a></li>



                                        <?php
                                        if(isset($_POST['search_mechanic'])){
                                            ?>


                                            <h2>Send Request to Mechanic</h2>



                                            <table class="table" border="1" >
                                                <thead class="thead-dark">
                                                <tr>

                                                    <th scope="col ">Name</th>
                                                    <th scope="col ">Mobile</th>
                                                    <th scope="col ">location</th>
                                                    <th scope="col">type</th>
                                                    <th scope="col">Options</th>
                                                </tr>


                                                </thead>


                                                <tbody>











                                                <?php















                                                $service_location=$_POST['service_location'];
                                                $service_type=$_POST['service_type'];
                                                //$service_location="Dhaka";
                                                // $service_type="Refrigerator";


                                                $result=mysqli_query($con,"select name, id,phone_number, service_location,service_type,status from user ,mechanic_service_info where id=mechanic_id and service_location='$service_location' and service_type='$service_type'");

                                                while ($res=mysqli_fetch_array($result)) {
                                                    ?>


                                                    <tr>

                                                        <td scope="row"><?php echo $res['name']?></td>
                                                        <td scope="row"><?php echo $res['phone_number']?></td>
                                                        <td scope="row"><?php echo $res['service_location']?></td>
                                                        <td scope="row"><?php echo $res['service_type']?></td>


                                                        <?php

                                                        $client_id=$_SESSION['id'];
                                                        $mechanic_id=$res['id'];
                                                        $service_location=$res['service_location'];
                                                        $service_type=$res['service_type'];


                                                        ?>



                                                        <td scope="row"><button href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#send_request">Send Request</button></td>
                                                    </tr>

                                                    <?php

                                                }

                                                ?>

                                                </tbody>



                                            </table>

                                            <?php

                                        }

                                        ?>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->


            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->







        <!--Add service location-->

        <div class="modal fade" id="SM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-dark ">
                        <h5 class="modal-title " id="exampleModalLabel">Add your Service Location </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form action="ClientDashboard.php" method="post" >
                            <div class="form-group">
                                <div class="input-group mb-3">

                                    <select class="custom-select" id="inputGroupSelect01" name="service_location" id="service_location" value="<?php echo $service_location;?>">
                                        <option selected>Select Division</option>
                                        <option value="Dhaka" >Dhaka</option>
                                        <option value="Khulna" >Khulna</option>
                                        <option value="Rangpur" >Rangpur</option>
                                        <option value="Mymansing" >Mymansing</option>
                                        <option value="Rajshahi" >Rajshahi</option>
                                        <option value="Barishal" >Barishal</option>
                                        <option value="Chittagong" >Chittagong</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">

                                    <select class="custom-select" id="inputGroupSelect01" name="service_type" id="service_type" value="<?php echo $service_type;?>">
                                        <option selected>Select Service Type</option>
                                        <option value="AC" >AC</option>
                                        <option value="Refrigerator" >Refrigerator</option>
                                        <option value="Television" >Television</option>
                                        <option value="Computer" >Computer</option>

                                    </select>
                                </div>




                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"  name="search_mechanic" data-toggle="modal" data-target="#SMTable">Search</button>
                                <!--<input type="submit" class="btn btn-primary  active" name="submit" value="Search" data-toggle="modal" data-target="#SMTable" />    -->



                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!--/Add service location-->

        <!--request table-->


        <div class="modal fade" id="SMTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-dark ">
                        <h5 class="modal-title " id="exampleModalLabel">Add your Service Location </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form action="ClientDashboard.php" method="post" >
                            <div class="form-group">
                                <div class="input-group mb-3">

                                    <select class="custom-select" id="inputGroupSelect01" name="service_location" id="service_location" value="<?php echo $service_location;?>">
                                        <option selected>Select Division</option>
                                        <option value="Dhaka" >Dhaka</option>
                                        <option value="Khulna" >Khulna</option>
                                        <option value="Rangpur" >Rangpur</option>
                                        <option value="Mymansing" >Mymansing</option>
                                        <option value="Rajshahi" >Rajshahi</option>
                                        <option value="Barishal" >Barishal</option>
                                        <option value="Chittagong" >Chittagong</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">

                                    <select class="custom-select" id="inputGroupSelect01" name="service_type" id="service_type" value="<?php echo $service_type;?>">
                                        <option selected>Select Service Type</option>
                                        <option value="AC" >AC</option>
                                        <option value="Refrigerator" >Refrigerator</option>
                                        <option value="Television" >Television</option>
                                        <option value="Computer" >Computer</option>

                                    </select>
                                </div>




                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"  name="search_mechanic" data-toggle="modal" data-target="#SMTable">Search</button>
                                <!--<input type="submit" class="btn btn-primary  active" name="submit" value="Search" data-toggle="modal" data-target="#SMTable" />    -->



                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!--request-->

        <div class="modal fade" id="send_request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-dark ">
                        <h5 class="modal-title " id="exampleModalLabel">Add your Service Location </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form action="ClientDashboard.php" method="post" >



                            <input type="text" value="Location:                  Problems:  " name="service_description">





                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <!--<button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#SMTable" name="submit_searchMechanic" value="Search">Search</button>-->
                        <!--<input type="submit" class="btn btn-primary  active" name="submit" value="Search" data-toggle="modal" data-target="#SMTable" />    -->
                        <input type="submit" class="btn btn-primary  active" name="submit_request" value="Send Request" />


                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>






    <!--/Add service location-->








    <!--call send request-->

    <?php
    if(isset($_POST['submit_request'])){




        $service_description=$_POST['service_description'];
        echo $service_description;

        $result=mysqli_query($con,"INSERT INTO requests(`client_id`,`mechanic_id`, `service_location`,`service_type`, `service_description`) values('$client_id','$mechanic_id','$service_location','$service_type','$service_description')");


        ?>




        <?php

    }

    ?>
    <!--/call send request-->










    <?php
    }else{
        header("Location: Login.php");
        echo "<script>location='your_url.com'</script>";
    }

    ?>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--downloaded extra-->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
</html>
