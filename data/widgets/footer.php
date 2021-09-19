

<!--/Center Column-->
	  <!-- Right Column -->
	  <div class="col-sm-3">

			<!-- Form --> 
			<div id="login" class="panel panel-default">
<?php 
if((isset($_SESSION['userid']))&&($_SESSION['userid']!=false)){
include_once ('../widgets/logout_view2.php');} else {
include_once ('../widgets/login_view.php');}

 ?>
 
 
			</div>
<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-info-sign"></span> 
						Page Infomation
					</h3>
				</div>
				
				<?php 
$sql="SELECT views FROM view";
// $re=$sql; 
$result=mysqli_query($connect, $sql);
	    while ($value=mysqli_fetch_assoc($result)) {
       
        $views=$value['views'];

		    }
						?>
				<div class="panel-body">
					<p>For "Transmission" Subject's Homework. Internal circulation only.</p>
					<p>Contact: domai2411@gmail.com/0916141360</p>
					<p>Interactive: <?php echo $views; ?>.</p>
					<div class="btn-group" role="group">
					</div>
				</div>
			</div>	
 
			<!-- Progress Bars -->




	  </div><!--/Right Column -->

	</div><!--/container-fluid-->
	
	<footer>
		
				<!-- /.row -->	


        
        <div class="small-print" style="">
        	<div class="container">
        		<p>Terms &amp; Conditions |</p>
        		<p>Copyright &copy; green_flower_1987 </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="../js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="../js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="../js/holder.min.js"></script>
		<script src="../js/bootstrap-notify.min.js"></script>
		<script src="../scripts/Function.js" type="text/javascript"></script>
		<script  type="text/javascript">

$(document).ready(function(){
    $("#butti").click(function(){
        $("#submenu").slideToggle();
    });
	$("#flash").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
});


		</script>
</body>

</html>
