<div class="col-sm-2 col-xs-1" >
 </div>
  <div class="col-sm-8 col-sm-10" style="font-size:1.2em;">
	<h3>Question <?php echo $s+1; ?></h3>
      <hr>
      <p id='ques'<?php echo $s; ?>><?php echo $ques[$s]; ?></p>
	  <?php if ($ima[$s]!=""): ?>
	 
<?php endif;?>	 
<form id="ax<?php echo $s;?>"> 
<?php
 $ch=$anw[$s]; 
 $rch=$ranw[$s]; 
// echo $ch;
?>
	  <div class="radio" <?php if ($rch==0) { ?> style="background-color:powderblue;" <?php } ?>>
  <label id="ldaA" ><input onclick="return false"; type="radio" name='radi' value="0" <?php if ($ch==0){echo "checked"; }?> > <?php echo "A. ".$r1[$s]; ?></label>
</div>	  
<div class="radio" <?php if ($rch==1) { ?> style="background-color:powderblue;" <?php } ?>>
  <label id="ldaB" ><input onclick="return false"; type="radio" id="da2<?php echo $s;?>" name='radi' value="1" <?php if ($ch==1){echo "checked"; }?>><?php echo "B. ".$r2[$s]; ?></label>
</div><div class="radio" <?php if ($rch==2) { ?> style="background-color:powderblue;" <?php } ?>>
  <label id="ldaC" ><input onclick="return false"; type="radio" id="da3<?php echo $s;?>" name='radi' value="2" <?php if ($ch==2){echo "checked"; }?>><?php echo "C. ".$r3[$s]; ?></label>
</div><div class="radio" <?php if ($rch==3) { ?> style="background-color:powderblue;" <?php } ?>>
  <label id="ldaD" ><input onclick="return false";  id="da4<?php echo $s;?>" type="radio" name='radi' value="3" <?php if ($ch==3){echo "checked"; }?> ><?php echo "D. ".$r4[$s]; ?></label>
</div>
</form>
<div class="row" style="margin-top: 10px;"></div>
</div>
	 <div class="col-sm-2 col-xs-1">
 </div>
	
	 <div class="row">
 </div>