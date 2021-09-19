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
// date_default_timezone_set("Asia/Ho_Chi_Minh");
// $starttime=date('Y-m-d H:i:s');
$user_id=$_SESSION['userid'];
$test_do_id=$_GET['id'];
// $sql="SELECT * FROM test where dataname='$quiz'";
// $ktt=mysqli_query($connect, $sql); 
// $trytime=mysqli_fetch_assoc($ktt)['trytime']; 	
$sql="SELECT * FROM test_do where id='$test_do_id'";
$ktt=mysqli_query($connect, $sql);
$kt=mysqli_fetch_assoc($ktt);
$mark=$kt['mark'];
$quiz=$kt['test'];
$total_mark=$kt['total_mark'];
$sqlk="SELECT * FROM test where dataname='".$quiz."'";
$rk=mysqli_query($connect, $sqlk);
$num=mysqli_fetch_assoc($rk)['num'];
// echo $num;

// $num=$_GET['num'];
// $timer2=$_GET['time'];
// $sql = "INSERT INTO test_do (user_id,starttime,endtime,mark,test,total_mark) VALUES ('$user_id', '$starttime','$starttime','0','$quiz','$num')"; 
// mysqli_query($connect, $sql); $test_id = mysqli_insert_id($connect);
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
$ranw=array();
$canw=array();
// $ran = array(1,2,3,4);
// $sqllv="SELECT * FROM linhvuc where test='$quiz'";
// $lv=mysqli_query($connect, $sqllv);

$sql="SELECT * FROM 
(SELECT * FROM test_des where test_do_id='$test_do_id') as tam
inner join ".$quiz." on ".$quiz.".id=tam.num";
// echo $sql;
$nu=0;
$result=mysqli_query($connect, $sql);
	    while ($value=mysqli_fetch_assoc($result)) {
		$ques[]=$value['question'];
		
		
		$ima[]=$value['question'];
		$s[1]=$value['A'];
		
		$s[2]=$value['B'];
		$s[3]=$value['C'];
		$s[4]=$value['D'];
		$ra=$value['array'];
		$answer=$value['answer'];
		$ran=str_split($ra,1);
		$ch=array_search($answer,$ran);
		
		if ($answer==100) {$ch=100;}
		$anw[]=$ch;
		$rch=array_search('1',$ran);
		$ranw[]=$rch;
		if ($answer==1) {$canw[]=true;} else {$canw[]=false;}
		// shuffle($ran);

		
		$a="";
		foreach ($ran as $val)
		{$a=$a.$val;}
		$right_answer=array_search("1",$ran);
		$ques_id=$value['id'];
		// $sql = "INSERT INTO test_des (test_do_id,quiz,num,array) VALUES ('$test_id','$quiz','$ques_id','$a')"; 
		// mysqli_query($connect, $sql);
		$last_id = mysqli_insert_id($connect);
		echo "<input id=b".$nu." hidden value=".$last_id.">";
$r1[]=$s[$ran[0]];
$k1[]=$ran[0];

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
<h3 style='font-family: &#34;Times New Roman&#34;, Georgia, Serif;'> Your score is: <?php echo $mark; ?>/<?php echo $total_mark; ?> . </h3> <p>For More Infomations.  <a href='userpage.php' id='butti'>Click here.</a> </p>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" style=" width:100%; min-height: 400px !important;">
  <!-- Indicators -->
    
  <ol class="carousel-indicators carousel-indicators-numbers">
  <li id='li1' data-target="#myCarousel" data-slide-to="0"  <?php if ($canw[0]==false) {echo 'class="wronga"';} else {echo 'class="righta"';}  ?>>1</li>
 <?php 
for ($x = 1; $x < $num; $x++) { 
?>
    <li id="li<?php echo $x+1; ?>" <?php if ($canw[$x]==false) {echo 'class="wronga"';} else {echo 'class="righta"';}  ?> data-target="#myCarousel" data-slide-to="<?php echo $x; ?>"><?php echo $x+1; ?></li>  
<?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
	<?php
	$s=0;
	include ('../scripts/solution_code2.php'); ?> 
       
    </div>
 <?php 
for ($x = 1; $x < $num; $x++) { 
?>
    <div class="item">
      <?php
	$s=$x;
	include ('../scripts/solution_code2.php'); ?> 
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
  
    </div>





  <?php  } include_once ('../widgets/footer.php'); ?>


