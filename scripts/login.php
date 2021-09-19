<?php session_start();
require '../configs/config.php';
require '../configs/connect.php';
$re=false;
$id=false;
// $role_id=NULL;
$uid = mysqli_real_escape_string($connect,$_POST['uid']);
$pass = mysqli_real_escape_string($connect,$_POST['pass']);

    //fucntion login nằm trong mysql.php
$sql="SELECT * FROM user WHERE userid ='$uid' AND password = '$pass'";
// $re=$sql; 
$result=mysqli_query($connect, $sql);
	    while ($value=mysqli_fetch_assoc($result)) {
       
        $id=$value['id'];       
		$ten=$value['ten'];
		

		    }
        if ($id!=false){
            $_SESSION['userid']=$id;
			$_SESSION['username']=$ten;
	date_default_timezone_set("Asia/Ho_Chi_Minh");
$time=date("Y-m-d H:i:s");

$sql = "INSERT INTO userlog (user_id, login_time) VALUES ('$id', '$time')"; 
mysqli_query($connect, $sql); $log_id = mysqli_insert_id($connect);
$_SESSION['log_id']=$log_id;		

            unset($_SESSION['error']);
         $re=$ten;   
        }
    
 else {
        $_SESSION['error']=1;
          
    }
echo $re;
?>

