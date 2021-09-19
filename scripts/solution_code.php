<div class="col-sm-2 col-xs-1" >
 </div>
  <div class="col-sm-8 col-sm-10" style="font-size:1.2em;">
	<h3>Question <?php echo $s+1; ?></h3>
      <hr>
      <p id='ques'<?php echo $s; ?>><?php echo $ques[$s]; ?></p>
	  <?php if ($ima[$s]!=""): ?>
	 <img class="two" src="../data/images/<?php echo $ima[$s]; ?>" height="200">
<?php endif;?>	 
<form id="ax<?php echo $s;?>"> 
	  <div class="radio">
  <label id="ldaA" ><input onchange="checkdone(<?php echo $num; ?>);return false;" id="da1<?php echo $s;?>" type="radio" name='radi' value="0"> <?php echo "A. ".$r1[$s]; ?></label>
</div>	  
<div class="radio">
  <label id="ldaB" ><input onchange="checkdone(<?php echo $num; ?>);return false;" type="radio" id="da2<?php echo $s;?>" name='radi' value="1"><?php echo "B. ".$r2[$s]; ?></label>
</div><div class="radio">
  <label id="ldaC" ><input onchange="checkdone(<?php echo $num; ?>);return false;" type="radio" id="da3<?php echo $s;?>" name='radi' value="2"><?php echo "C. ".$r3[$s]; ?></label>
</div><div class="radio">
  <label id="ldaD" ><input onchange="checkdone(<?php echo $num; ?>);return false;"  id="da4<?php echo $s;?>" type="radio" name='radi' value="3"><?php echo "D. ".$r4[$s]; ?></label>
</div>
</form>
<div class="row" style="margin-top: 10px;"></div>
</div>
	 <div class="col-sm-2 col-xs-1">
 </div>
	
	 <div class="row">
 </div>