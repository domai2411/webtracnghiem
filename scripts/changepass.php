<?php session_start();
require '../configs/config.php';
require '../configs/connect.php';
$re=false;
$uid = mysqli_real_escape_string($connect,$_POST['uid']);
$pass = mysqli_real_escape_string($connect,$_POST['pass']);
$conf = mysqli_real_escape_string($connect,$_POST['conf']);

if ($pass==$conf){
$sql = "UPDATE user set password ='$pass' where id='$uid' "; 
mysqli_query($connect, $sql); 
$re="Password Update Successful!";
} else {$re="Confirm password not match, try again!";}

echo $re;
?>

