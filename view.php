<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost:8000/PHP/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8000/PHP/css/alamin.css">
</head>
<body>
<?php
include_once("Config.php");

$ID = $_GET[id];
$result=mysqli_query($con,"SELECT * FROM Student WHERE ID=$ID");
while ($res=mysqli_fetch_array($result)) {
    $Name=$res[Name];
    $Email=$res[Email];
    $Password=$res[Password];

    $ID=$res[ID];
}
echo "<center style='color: green;'>";
echo "<h1 style='color: Black;'>User Information</h1>";
echo "<h3> ID: ".$ID."</h3>";
echo "<h3> Name: ".$Name."</h3>";
echo "<h3> Email: ".$Email."</h3>";
echo "<h3> Password: ".$Password."</h3>";






?>
<a class="btn btn-primary" href="Student.php">Back</a>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://localhost:8000/PHP/js/jquery-3.3.1.slim.min.js"></script>
<script src="http://localhost:8000/PHP/js/popper.min.js"></script>
<script src="http://localhost:8000/PHP/js/bootstrap.min.js"></script>


</body>
</html>

