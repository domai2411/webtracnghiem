<?php
//Require
//require '../configs/config.php';

//Kết nối
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die('Not connected DB!');
$db = mysqli_select_db($connect,DB_DATABASE) or die('Not selected DB!');

//Yêu cầu lưu trữ UTF8 (Tiếng Việt)
mysqli_query($connect,'SET NAMES UTF8');
?>
