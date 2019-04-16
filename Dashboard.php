<?php
session_start();
include_once("Config.php");
 

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
	<title>Admin Dashboard</title>
	
	<style type="text/css">
    b {
    color: red;
    }
    u {
    color: green;
    } 
    .product-holder {
    position: relative;
    display: block;
}

.plus-image {
    left: 5%;
    top: 5%;
    position: absolute;
    margin-top: -5px;
    margin-left: -5px;
}
  </style>
</head>
<body>
<?php
	if(isset($_SESSION['valid'])) {
          echo "<h1>Wellcome ".$_SESSION['name']."</h1>";
          if($_SESSION['role']!="admin"){
                
                echo "<script>location='Login.php'</script>";
            }
          
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
                                <a class="nav-link active text-dark" href="Dashboard.php"><i class="fa fa-fw fa-desktop"></i>Dashboard<span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#" ><i class="fa fa-fw fa-user"></i>Clients<span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#" ><i class="fa fa-fw fa-user-circle"></i>Mechanics<span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#" data-toggle="modal" data-target="#LoadSBCoins"><i class="fa fa-fw fa-money-bill-alt"></i>Load $B Coins<span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item ">
                                
                                <a class="nav-link text-dark" href="#" data-toggle="modal" data-target="#distributesb"><i class="fa fa-fw fa-money-bill-alt" ></i>Distribute $B Coint<span class="badge badge-success"></span></a>
                                
                                
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#"><i class="fa fa-fw fa-user-circle"></i>Stuffs<span class="badge badge-success"></span></a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="#" ><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#" ><i class="fas fa-fw fa-table"></i>Tables</a>
                                
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#" ><i class="fas fa-fw fa-file"></i> Pages </a>
                                
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
                                	Sheba-nin
                                </h2>
                                <div class = "row text-center" style="">
                                    <div class="col-xs-6 text-center" style="background-color:none; margin-top:10px;">
                                        <div class='product-holder'>
                                            <img src="image/cover-header-road-twitter-headphoto.jpg" width="100%"  class="product-image rounded .mx-auto">
                                            <img src="aboutme/alamin.jpg" width="170px" height="150px" class="plus-image rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Sheba-nin.org</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Gross Income</h5>
                                        <h6 class="text-muted">for provided services</h6>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">
                                            $B 0.00 Coins
                                            </h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Expences</h5>
                                        <h6 class="text-muted">for maintenance purpose</h6>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">
                                            $B 0.00 Coins
                                            </h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Loaded Coins</h5>
                                        <h6 class="text-muted">Loaded by Clients & Mechanics</h6>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">$B 
                                            <?php 
                                            
                                            $result=mysqli_query($con,"SELECT * FROM receipts");
                                            $c=0;
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c+=$row['sb'];
                                              }     
                                             }
                                            echo $c;
                                            echo " Coins";
                                            ?>
                                            
                                            </h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Balance</h5>
                                        <h6 class="text-muted">for Clients & Mechanics</h6>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">$B
                                            <?php 
                                            
                                            $result=mysqli_query($con,"SELECT * FROM user");
                                            $c=0;
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c+=$row['balance'];
                                              }     
                                             }
                                            echo $c;
                                            echo " Coins";
                                            ?>
                                            </h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                                        <!-- total orders  -->
                            <!-- ============================================================== -->
                            
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Clients</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php 
                                            
                                            $result=mysqli_query($con,"SELECT * FROM user where role='client'");
                                            $c=0;
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c++;
                                              }     
                                             }
                                            echo $c;
                                            ?>
                                            </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">
                                            <?php
                                                echo $c/4000000;
                                                echo " ";
                                                ?>
                                            %</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Mechanics</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php 
                                            
                                            $result=mysqli_query($con,"SELECT * FROM user where role='mechanic'");
                                            $c=0;
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c++;
                                              }     
                                             }
                                            echo $c;
                                            ?>
                                            </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">
                                                <?php
                                                echo $c/4000000;
                                                echo " ";
                                                ?>
                                                %</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1340</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1340</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Requests</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php 
                                            
                                            $result=mysqli_query($con,"SELECT * FROM requests ");
                                            $c=0;
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c++;
                                              }     
                                             }
                                            echo $c;
                                            ?>
                                            </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Receipts</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php 
                                            
                                            $result=mysqli_query($con,"SELECT * FROM receipts ");
                                            $c=0;
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c++;
                                              }     
                                             }
                                            echo $c;
                                            ?>
                                            </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Valid Payments</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php 
                                            $n=null;
                                            $result=mysqli_query($con,"SELECT * FROM payment where receipt_id='$n' ");
                                            $c=0;
                                            
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c++;
                                              }     
                                             }
                                            echo $c;
                                            ?>
                                            </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Invalid Payments</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php 
                                            $n=null;
                                            $result=mysqli_query($con,"SELECT * FROM payment where receipt_id!='$n' ");
                                            $c=0;
                                            
                                            if($result)
                                             {
                                                while($row=mysqli_fetch_assoc($result))
                                              {
                                                    $c++;
                                              }     
                                             }
                                            echo $c;
                                            ?>
                                            </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->
  
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">HR by Category</h5>
                                    <div class="card-body">
                                        <div id="c3chart_category" style="height: 420px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Total Net-Incomes</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$B 0.00 Coins</span><span class="text-success float-right">+0.0%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Get in touch By Social Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 followers</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 followers</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 followers</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 followers</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 followers</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->





                            </div>
                            
                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019 Concept. All rights reserved by <a href="www.genericsoftware.xyz">Generic Software</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

<!--Load SB Coins-->

            <div class="modal fade" id="LoadSBCoins" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-dark ">
                            <h5 class="modal-title " id="exampleModalLabel">Load <b>S</b>he<b>B</b>a  Coin. </br>Rate: <u>10 BDT</u>=<b>1 SB</b> Coin.</br> And <b>1 SB </b>Coin= <b>1</b> Service.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            
                        

                            <form action="loadsbcoin.php" method="post">
                                <div class="form-group">
                                    <table class="table"><tr>
                                    <div class="input-group mb-3">
                                        

                                        <td><h3>Sender Mobile Number:</h3></td><td><input type="text" class="form-control" id="email" name="mobile"></td>
                                    </div></tr>
                                    <tr>
                                    <div class="input-group mb-3">

                                        <td><h3>Transection ID: </h3></td><td><input type="text" class="form-control" id="email" name="transection_id"></td>
                                    </div></tr>
                                    <tr>
                                    <div class="input-group mb-3">

                                        <td><h3>Sended Amount: </h3></td><td><input type="text" class="form-control" id="email" name="money"></td>
                                    </div></tr>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary  active" name="loadsb" value="Add" />


                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


<!--/Load SB Coins-->




<!--distribute SB Coins-->

            <div class="modal fade" id="distributesb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-dark ">
                            <h5 class="modal-title " id="exampleModalLabel">Load <b>S</b>he<b>B</b>a  Coin. </br>Rate: <u>10 BDT</u>=<b>1 SB</b> Coin.</br> And <b>1 SB </b>Coin= <b>1</b> Service.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            
                        

                            <form action="Dashboard.php" method="post">
                                <div class="form-group">
                                    
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary  active" name="distribute" value="Distribute All the Coins to it's Owner" />


                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


<!--/distribute SB Coins-->
<php
if(isset($_POST['distribute'])){
            //add service location
            echo "<script>location='index.html'</script>";
            


        }

?>


















<?php           
      }else{
        	header("Location: Login.php");
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
