<?php include_once ('../widgets/header.php');
  if (empty($_SESSION['userid'])) {
 ?>
<div id="maintest" class="col-sm-6">
<h3> Please login first. Then, choose the test again. </h3>
</div>
<?php 

  } else {
  ?>



<?php 
date_default_timezone_set("Asia/Ho_Chi_Minh");
$starttime=date('Y-m-d H:i:s');
$user_id=$_SESSION['userid'];
$quiz=$_GET['quiz'];
$sql="SELECT * FROM test where dataname='$quiz'";
$ktt=mysqli_query($connect, $sql); 
$trytime=mysqli_fetch_assoc($ktt)['trytime']; 	
$sql="SELECT * FROM test_do where user_id='$user_id' and test='$quiz'";

$ktest=mysqli_query($connect, $sql);
if (mysqli_num_rows($ktest)>=$trytime){
?>
<div id="maintest" class="col-sm-6">
<h3> You had reached the maximum test times. (If not, please contact your admin to reset). </h3>
</div>
<?php 
	
} else { 

$num=$_GET['num'];
$timer2=$_GET['time'];
$sql = "INSERT INTO test_do (user_id,starttime,endtime,mark,test,total_mark) VALUES ('$user_id', '$starttime','$starttime','0','$quiz','$num')"; 
mysqli_query($connect, $sql); $test_id = mysqli_insert_id($connect);
$ques=array();
$ima=array();
$r1=array();
$r2=array();
$r3=array();
$r4=array();
$k1=array();
$k2=array();
$k3=array();
$k4=array();
$anw=array();
$ran = array(1,2,3,4);
$sqllv="SELECT * FROM linhvuc where test='$quiz'";
$lv=mysqli_query($connect, $sqllv);
$sql="";
while ($lvr=mysqli_fetch_assoc($lv))
{
$lve=$lvr['linhvuc'];
$numlv=$lvr['numlv'];
$sqlt="(SELECT * FROM ".$quiz." where linhvuc='$lve' ORDER BY RAND() LIMIT ".$numlv.")";	
// echo $sqlt;
if($sql=="") {$sql=$sqlt;} else {$sql=$sql." UNION ".$sqlt;}

}
$sql="SELECT * FROM ( ".$sql. ") as tam ORDER BY RAND()";
// echo $sql;
// $sql="SELECT * FROM ".$quiz." ORDER BY RAND() LIMIT ".$num;
$nu=0;
$result=mysqli_query($connect, $sql);
	    while ($value=mysqli_fetch_assoc($result)) {
		$ques[]=$value['question'];
		
		
		$ima[]=$value['image'];
		$s[1]=$value['A'];
		
		$s[2]=$value['B'];
		$s[3]=$value['C'];
		$s[4]=$value['D'];
		shuffle($ran);
		$a="";
		foreach ($ran as $val)
		{$a=$a.$val;}
		$right_answer=array_search("1",$ran);
		$ques_id=$value['id'];
		$sql = "INSERT INTO test_des (test_do_id,quiz,num,array) VALUES ('$test_id','$quiz','$ques_id','$a')"; 
		mysqli_query($connect, $sql);
		$last_id = mysqli_insert_id($connect);
		echo "<input id=b".$nu." hidden value=".$last_id.">";
$r1[]=$s[$ran[0]];
$k1[]=$ran[0];
$anw[]=$ran[0];
// echo "<input id=a".$nu." hidden value=".$ran[0].">";
$r2[]=$s[$ran[1]];
$k2[]=$ran[1];
$r3[]=$s[$ran[2]];
$k3[]=$ran[2];
$r4[]=$s[$ran[3]];
$k4[]=$ran[3];
$nu++;		
}
$sql="SELECT * FROM test where dataname='$quiz'";
$result=mysqli_query($connect, $sql);
	    $testname=mysqli_fetch_assoc($result)['testname'];
?>
<div id="maintest" class="col-sm-6" style="overflowe:auto;">
<h1>Home Examination. </h1>

      <p>You're doing "<?php echo $testname;?>" Test. Choose only the best solution.</p>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" style=" width:100%; min-height: 400px !important;">
  <!-- Indicators -->
    
  <ol class="carousel-indicators carousel-indicators-numbers">
  <li id='li1' data-target="#myCarousel" data-slide-to="0" class="active checked">1</li>
 <?php 
for ($x = 1; $x < $num; $x++) { 
?>
    <li id="li<?php echo $x+1; ?>" class="checked" data-target="#myCarousel" data-slide-to="<?php echo $x; ?>"><?php echo $x+1; ?></li>  
<?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
	<?php
	$s=0;
	include ('../scripts/solution_code.php'); ?> 
       
    </div>
 <?php 
for ($x = 1; $x < $num; $x++) { 
?>
    <div class="item">
      <?php
	$s=$x;
	include ('../scripts/solution_code.php'); ?> 
    </div>
<?php } ?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="row" style="margin-top: 10px;">
    <div class="col-sm-3" align="center" style="font-size:1.2em; background-color:#f9ecf9;">
	
 Remaining Time:
	</div>
    <div class="col-sm-2">
<div class="countdown" align="center" style="font-size:1.2em; background-color:#f9ecf9;"></div>
<script>
var timer2 = "<?php echo $timer2; ?>";
var timer1 = "<?php echo $timer2; ?>";
var timer = timer1.split(':');
 
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  var sec=(minutes*60+seconds)*1000;
var setid=setTimeout(function() {
    alert ("Time is out! You must finish the test now!");
	$('#calcubut').trigger('click');
}, sec);

var interval = setInterval(function() {


  var timer = timer2.split(':');
  //by parsing integer, I avoid all extra string processing
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  --seconds;
  minutes = (seconds < 0) ? --minutes : minutes;
  if (minutes < 0) clearInterval(interval);
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  $('.countdown').html(minutes + ':' + seconds);
  timer2 = minutes + ':' + seconds;
}, 1000);


window.onbeforeunload = function() {

    return "You're about to end your session, are you sure?";
}
</script>
	 </div> 	
  <div class="col-sm-3">
   </div> 
   <div class="col-sm-4" align="right">
<form>		
						<div id='calcubut1' ><button hidden type="submit" id='calcubut' class="btn btn-default" onclick="calculatemark('../scripts/caculate.php',<?php echo $num; ?>,<?php echo $test_id; ?>,'<?php echo $quiz; ?>');hidebutton();return false;">
						Done</button></div>
						<p id='calcubut2' hidden>Processing... Please wait!</p>
					</form>
    </div>
    </div>
    </div>





  <?php } } include_once ('../widgets/footer.php'); ?>


