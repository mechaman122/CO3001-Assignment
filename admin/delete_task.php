<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM tasks WHERE task_id = '".$_GET['task_del']."'");
header("location:all_task.php");  

?>
