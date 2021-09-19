


<div id="maintest" class="col-sm-12" style="overflowe:auto;">
<?php 
require '../configs/config.php';
require '../configs/connect.php';
require '../configs/session.php';
$quiz='sheet4'; 
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
$num=20;
$ran = array(1,2,3,4); 
$sql="SELECT * FROM ((SELECT * FROM $quiz order by RAND() LIMIT $num) as tam) order by id ";
echo $sql;
$nu=0;
$result=mysqli_query($connect, $sql);
$num=mysqli_num_rows($result);
	    while ($value=mysqli_fetch_assoc($result)) {
		$ques[]=$value['question'];
		
		
		$ima[]=$value['question'];
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

?>
<h1>Home Examination. </h1>

    
 <?php 
for ($x = 0; $x < $num; $x++) { 
?>
    <div class="item">
      <?php
	$s=$x;
	?>
<div class="col-sm-2 col-xs-1" >
 </div>
  <div class="col-sm-8 col-sm-10" style="font-size:1.2em;">
	<p style="font-weight: bold;"><?php echo $s+1; ?>.
     
      <?php echo $ques[$s]; ?></p>
	  <?php if ($ima[$s]!=""): ?>
	 
<?php endif;?>	 

 <p>
  <label id="ldaA" <?php if ($k1[$s]==1) {?>style="font-weight: bold;" <?php }?>> <?php echo "a. ".$r1[$s]; ?><?php if ($k1[$s]==1) {echo "" ;}?> </label>
</p>	

  
<p>
  <label id="ldaB" <?php if ($k2[$s]==1) {?>style="font-weight: bold;" <?php }?> ><?php echo "b. ".$r2[$s]; ?><?php if ($k2[$s]==1) {echo "" ;}?></label>
</p>

<p>
  <label id="ldaC" <?php if ($k3[$s]==1) {?>style="font-weight: bold;" <?php }?>><?php echo "c. ".$r3[$s]; ?><?php if ($k3[$s]==1) {echo "" ;}?></label>
</p>

<p>
  <label id="ldaD" <?php if ($k4[$s]==1) {?>style="font-weight: bold;" <?php }?>><?php echo "d. ".$r4[$s]; ?><?php if ($k4[$s]==1) {echo "" ;}?></label>
</p>

</div>

</form>
</div>
	 <div class="col-sm-2 col-xs-1">
 </div>
	
	 <div class="row">
 </div>	
   
<?php } ?>

