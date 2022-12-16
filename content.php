<?php
$con =  mysqli_connect ('localhost','root');

if($con){
	echo "Connection Succesful  ";
	
}else{
	echo "not connected"; 
}

mysqli_select_db($con,'bdtravel');

$Place = $_POST['place'];
$number = $_POST['guests'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];

$query = "INSERT INTO bdtraveluser (placename,guest,phone,traveldate) VALUES ('$Place','$number','$mobile','$date')";

mysqli_query($con,$query);

echo "$query";

?>