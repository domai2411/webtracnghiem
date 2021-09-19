						<?php 
if (!isset($_SESSION)) {session_start();}

				
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

		    }
						?>
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						User Infomation
					</h3>
				</div>
				<div class="panel-body">
					<form>
						
						
							<p>1. Unit: <?php echo $lop; ?></p>
							<p>2. Name: <?php echo $hoten; ?></p>
							<p>2. ID: <?php echo $masv; ?></p>
							<p><a href="userpage.php" id="butti">Click To View User Infomations.</a></p>
							
						
						<button type="submit" class="btn btn-default" onclick="callphp('../scripts/logout.php');return false;">
						Log Out</button>
					</form>
				</div>