<?php
session_start();
require '../configs/config.php';
require '../configs/connect.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time=date("Y-m-d H:i:s");
$id=$_SESSION['log_id'];
$sql = "UPDATE userlog SET logout_time='$time' where id='$id'"; 
mysqli_query($connect, $sql);
session_unset();
session_destroy();
echo 1;
?>