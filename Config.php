
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname ="generics_shebanin";

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($con)
{
	echo "Connect Successful";
}else{
	echo "Connention Problem occured";
}
?>