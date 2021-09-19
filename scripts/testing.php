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
        $mssv=$value['userid'];       
		$ten=$value['ten'];
		

		    }
        if ($id!=false){

	date_default_timezone_set("Asia/Ho_Chi_Minh");
$time=date("Y");
$ms=($mssv+11);
$secret="YOUR SECRET CODE IS: ".$ms.$time;  
        }
    
 else {
        $_SESSION['error']=1;
          
    }
$re=$secret;
echo $re;
?>

