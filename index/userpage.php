<?php include_once ('../widgets/header.php');
  if (empty($_SESSION['userid'])) {
 ?>
<div id="maintest" class="col-sm-6">
<h3> Please login to view this page. </h3>
</div>
<?php 

  } else { ?>


<div id="maintest" class="col-sm-6">

<?php 
$uid=$_SESSION['userid'];
$sql="SELECT * FROM user WHERE id ='$uid'";
// $re=$sql; 
$result=mysqli_query($connect, $sql);
	    while ($value=mysqli_fetch_assoc($result)) {
       
        $id=$value['userid'];       
		$ten=$value['ten'];
		$hoten=$value['hoten'];
		$masv=$value['masv'];
		$lop=$value['lop'];
		$pass=$value['password'];

		    }
?>
<div  class="col-sm-4" style="background-color: #F5F5F5;">
							<p>1. UserID: <?php echo $id; ?></p>
							<p>2. Password: <?php echo $pass; ?></p>
							<p>3. Unit: <?php echo $lop; ?></p>
							<p>4. Name: <?php echo $hoten; ?></p>
							<p>5. ID: <?php echo $masv; ?></p>
							<p><a href="#" id="changepass">Change password</a></p>
							<p id="changesub" hidden>
							New password: <input id="newpass" type="password" ></input>
							Confirm New Password:<input id="confirm" type="password"></input>
							<button style="float: right;" onclick="changepassword('../scripts/changepass.php','<?php echo $uid; ?>','#newpass','#confirm');return false;">Save</button>
							</p>

    </div>
	
	<div  class="col-sm-8" >
	<h4>TESTS DONE:</h4>
<?php 
$sql="SELECT DISTINCT test FROM test_do WHERE user_id = '$uid'";
 $num=1;
$result=mysqli_query($connect, $sql);
$t=mysqli_num_rows($result);
if ($t!=0){

	    while ($value=mysqli_fetch_assoc($result)) {
			
        $testname=$value['test'];       
		$sql="SELECT tam.*,test.testname,test.time FROM (SELECT * FROM test_do WHERE user_id ='$uid'  and test='$testname' ) as tam left join test on tam.test=test.dataname order by mark desc";
// echo $sql;
		$re=mysqli_query($connect, $sql);
		$tt=mysqli_num_rows($re);
		$va=mysqli_fetch_assoc($re);
		$test_id=$va['id'];       
		$testname=$va['testname'];       
			 $mark=$va['mark'];       
			 $total_mark=$va['total_mark'];       
			 $starttime=$va['starttime'];     
				$start=date("H:m:s l, d/m/y",strtotime($starttime));
			 $endtime=$va['endtime'];       
			 $end=date("H:m:s l, d/m/y",strtotime($endtime));
			 $duration=strtotime($endtime)-strtotime($starttime);
				if ($endtime=="0000-00-00 00:00:00") {$duration=0;}			 
			  $mi=intval($duration/60);
			 $se=($duration%60);
		?>
		<div class="col-sm-12" style="border-style: ridge;">
			<p style="font-family: 'Times New Roman', Georgia, Serif;"><span style="font-weight: bold; font-family: 'Times New Roman', Georgia, Serif;">Test Name:</span> <?php echo $testname; ?></p>
			<p style="font-family: 'Times New Roman', Georgia, Serif;"><span style="font-weight: bold; font-family: 'Times New Roman', Georgia, Serif;">Best Mark:</span> <?php echo $mark."/".$total_mark; ?></p>
			<p style="font-family: 'Times New Roman', Georgia, Serif;"><span style="font-weight: bold; font-family: 'Times New Roman', Georgia, Serif;">Detail:</span> <a href="http://192.168.180.193/mmt/index/result.php?id=<?php echo $test_id; ?>">Go to result page!</a></p>
			<p style="font-family: 'Times New Roman', Georgia, Serif;"><span style="font-weight: bold; font-family: 'Times New Roman', Georgia, Serif;">Start time:</span> <?php echo $start; ?></p>
			<p style="font-family: 'Times New Roman', Georgia, Serif;"><span style="font-weight: bold; font-family: 'Times New Roman', Georgia, Serif;">Finish time:</span> <?php echo $end; ?></p>
			<p style="font-family: 'Times New Roman', Georgia, Serif;"><span style="font-weight: bold; font-family: 'Times New Roman', Georgia, Serif;">Duration:</span> <?php echo $mi." minutes ". $se." seconds . "; ?><span><a href="#" id="but<?php echo $num; ?>" > More...</a></span></p>
			</div>
			<div hidden id="sub<?php echo $num; ?>" class="col-sm-12">
			<h5 style="font-weight: bold;">Another times (<?php echo $tt-1; ?>)</h5>
			<?php
		
		 while ($va=mysqli_fetch_assoc($re)) {
			 $testname=$va['testname'];       
			 $mark=$va['mark'];   
			 $test_id=$va['id'];   
$total_mark=$va['total_mark'];  			 
			 $starttime=$va['starttime'];       
			 $endtime=$va['endtime']; 
			 $duration=strtotime($endtime)-strtotime($starttime);       
			 if ($endtime=="0000-00-00 00:00:00") {$duration=0;}	
			 $mi=intval($duration/60);
			 $se=($duration%60);
			 
		    ?>
				
				<div class="col-sm-1"> </div>
				<div class="col-sm-11"> 
			
			<p style="border-style: ridge;">Mark: <?php echo $mark."/".$total_mark; ?>. Time: <?php echo $starttime; ?>. Duration: <?php echo $mi." minutes ". $se." seconds. "; ?> <a href="http://192.168.180.193/mmt/index/result.php?id=<?php echo $test_id; ?>">Go to result page!</a></p>
			</div>
			
			<?php
		 }
		 ?>
		 </div>
		 <?php
			
			$num++;
}}
else {
?>	
<p>YOU HAVEN'T DONE ANY TEST YET.</p>
<?php
}
?>

    </div>
    </div>





  <?php } include_once ('../widgets/footer.php'); ?>
<script  type="text/javascript">
<?php 
for ($x = 1; $x <= $num; $x++) {
?>
$(document).ready(function(){
    $("#but<?php echo $x;?>").click(function(){
        $("#sub<?php echo $x;?>").slideToggle();
    });
});
<?php 
}
?>
$(document).ready(function(){
    $("#changepass").click(function(){
        $("#changesub").slideToggle();
    });
});
</script>