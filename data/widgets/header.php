<?php  
require '../configs/config.php';
require '../configs/connect.php';
require '../configs/session.php';



?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Transmission</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../css/custom.css" rel="stylesheet">
<link href="../styles/animate.css" rel="stylesheet" type="text/css"/>	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Telecommunication Transmission	</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>

                </ul>

				<!-- Search -->


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-3">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Dream Big - Study Smart</h1>
				</div>
				<div class="list-group">
					
					<a href="doc.php" class="list-group-item">Document Download</a>
					<a href="#" id="butti" class="list-group-item">Test</a>
					<p id="submenu" hidden>
			<?php 
$sql="SELECT * FROM test order by remark asc";
// $re=$sql; 
$result=mysqli_query($connect, $sql);
	    while ($value=mysqli_fetch_assoc($result)) {
       
        $quiz=$value['dataname'];
        $name=$value['testname'];
        $num=$value['num'];
        $tim=$value['time']; ?>
   
			<a href="testdo.php?quiz=<?php echo $quiz."&time=".$tim."&num=".$num; ?>" class="list-group-item"><?php echo $name; ?></a>
			
		<?php	
			}
						?>
						
					
					</p>
				</div>
			</div>

			<!-- Text Panel -->
			

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-bullhorn"></span> 
						Announcement
					</h3>
				</div>
				
				
				<div id='flash' class="panel-body">
					<p style="font-size:1em;">TEST START AT 00:00 AM 16/03/2018 AND END AT 24:00 PM 18/03/2018.</p>
					<p style="font-size:1em;">TRY TO LOGIN YOUR ACCOUNT AND CONTACT TEACHER IF YOU HAVE ANY PROBLEM.</p>
					<p style="font-size:1em;">PLEASE PRINT OUT THE DOCUMENT: "Giáo trình kỹ thuật truyền dẫn - Trương Quang Trung".</p>
					
					
					
				</div>
			</div>	
				
		</div><!--/Left Column-->
  
  
		<!-- Center Column -->

		
			
