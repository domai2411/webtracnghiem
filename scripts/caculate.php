<?php session_start();
require '../configs/config.php';
require '../configs/connect.php';

$mark=0;

$num = mysqli_real_escape_string($connect,$_POST['num']);
$test_id = mysqli_real_escape_string($connect,$_POST['test_id']);
$quiz = mysqli_real_escape_string($connect,$_POST['quiz']);
$uid = $_SESSION['userid'];
for ($x=0; $x<$num; $x++) {
$s= mysqli_real_escape_string($connect,$_POST['sans'.$x]);
  
$ques_id= mysqli_real_escape_string($connect,$_POST['quesid'.$x]); 
$sql = "SELECT * FROM test_des where id='$ques_id'"; 
$re=mysqli_query($connect, $sql);
$res=mysqli_fetch_assoc($re);
// $result=$res['user_answer'];
$ar=$res['array'];
if ($s!=100){
$choose_answer=substr($ar,$s,1);} else {$choose_answer=100;}
if ($choose_answer==1){
$mark=$mark+1;
}
$sql = "UPDATE test_des set answer='$choose_answer' where id='$ques_id'"; 
mysqli_query($connect, $sql);
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
$endtime=date('Y-m-d H:i:s');
$m=$mark;
$n=$num;
$sql = "UPDATE test_do set endtime='$endtime', mark='$m', total_mark='$n' where id='$test_id'"; 
mysqli_query($connect, $sql);
echo $test_id;
// echo $mark;
?>

