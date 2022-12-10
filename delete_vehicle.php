<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM vehicle WHERE License_plates = '".$_GET['vehicle_del']."'");
header("location:all_vehicle.php");  

?>
