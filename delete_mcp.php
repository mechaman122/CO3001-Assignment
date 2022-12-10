<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM mcps WHERE mcp_id = '".$_GET['mcp_del']."'");
header("location:allmcp.php");  

?>
