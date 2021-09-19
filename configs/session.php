<?php
if (!isset($_SESSION)) {session_start();}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 4800)) {
    // last request was more than 30 minutes ago
    
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time=date("Y-m-d H:i:s");
$id=$_SESSION['log_id'];
$sql = "UPDATE userlog SET logout_time='$time' where id='$id'"; 
mysqli_query($connect, $sql);
session_unset();     // unset $_SESSION variable for the run-time 
session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
if (isset($_SESSION['log_id'])){
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time=date("Y-m-d H:i:s");
$id=$_SESSION['log_id'];
$sql = "UPDATE userlog SET logout_time='$time' where id='$id'"; 
mysqli_query($connect, $sql);
}
$sql="UPDATE view SET views = views+1";mysqli_query($connect, $sql);
?>