<?php
session_start();
error_reporting(0);
include('includes/config.php');
	
	if(strlen($_SESSION['alogin'])==0)
		{	
		header('location:index.php');
		}
	else{ 
	
		if(isset($_POST['submit']))
	  		{
			$name=$_POST['Fullname'];
			$class=$_POST['class'];
			$roll=$_POST['roll'];
			$year=$_POST['year'];
			$grade=$_POST['grade'];
			$gpa=$_POST['gpa'];
			$result=$_POST['result'];			
			$status=1;
		
			$sql="INSERT INTO  studentresult(name,class,roll,year,grade,gpa,result) 
			VALUES(:name,:class,:roll,:year,:grade,:gpa,:result)";
			$query = $dbh->prepare($sql);
			$query->bindParam(':name',$name,PDO::PARAM_STR);
			$query->bindParam(':class',$class,PDO::PARAM_STR);
			$query->bindParam(':roll',$roll,PDO::PARAM_STR);
			$query->bindParam(':year',$year,PDO::PARAM_STR);
			$query->bindParam(':grade',$grade,PDO::PARAM_STR);
			$query->bindParam(':gpa',$gpa,PDO::PARAM_STR);
			$query->bindParam(':result',$result,PDO::PARAM_STR);
			$query->execute();
			$lastInsertId = $dbh->lastInsertId();
		if($lastInsertId)
			{
			$msg=" Your info submitted successfully";
			header("refresh:3;studentresult.php"); 
			}
		else 
			{
			$error=" Something went wrong. Please try again";
			header("refresh:3;studentresult.php"); 
			}
	
		}
	}
	?>
	<!doctype html>
	<html lang="en" class="no-js">
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">
		
		<title>CKAMS| Student result</title>
	
		<!-- Font awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="css/style.css">
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
		.succWrap{
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			
	}
	</style>
	</head>
	
	<body>
		<?php include('includes/header.php');?>
		<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
			<div class="content-wrapper">
				<div class="container-fluid">
	
					<div class="row">
						<div class="col-md-12">
						
							<h2 class="page-title">Add Student Result</h2>
	
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">Basic Info</div>
					<?php if($error){?><div class="errorWrap"><strong>ERROR </strong>: <?php echo htmlentities($error); ?> </div><?php } 
					else if($msg){?><div class="succWrap"><strong>SUCCESS </strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	
										<div class="panel-body">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
							<label class="col-sm-2 control-label">Full Name<span style="color:red">*</span></label>
							<div class="col-sm-4">
							<input type="text" name="Fullname" class="form-control" required>
							</div>
							<label class="col-sm-2 control-label">Class<span style="color:red">*</span></label>
							<div class="col-sm-4">
							<select name="class" class="form-control" required>
									<option value="">Select</option>
									<option value="দ্বাদশ">দ্বাদশ</option>
									<option value="একাদশ">একাদশ</option>
									<option value="দশম">দশম</option>
									<option value="নবম">নবম</option>
									<option value="অষ্টম">অষ্টম</option>
									<option value="সপ্তম">সপ্তম</option>
									<option value="ষষ্ঠ">ষষ্ঠ</option>
									<option value="পঞ্চম">পঞ্চম</option>
									<option value="চতুর্থ">চতুর্থ</option>
									<option value="তৃতীয়">তৃতীয়</option>
									<option value="দ্বিতীয়">দ্বিতীয়</option>
									<option value="প্রথম">প্রথম</option>
								</select>
							</div>
							</div>
	
							<div class="form-group">
							<label class="col-sm-2 control-label">Roll <span style="color:red">*</span></label>
							<div class="col-sm-4">
							<input type="text" name="roll" class="form-control">
							</div>
							<label class="col-sm-2 control-label">Year<span style="color:red">*</span></label>
							<div class="col-sm-4">
								<select name="year" class="form-control" required>
									<option value="">Select</option>
									<option value="2021">2021</option>
									<option value="2020">2020</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
								</select>
							
							</div>
							</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Grade <span style="color:red">*</span></label>
			<div class="col-sm-4">
			<input type="text" name="grade" class="form-control">
				<!-- <select name="grade" class="form-control" required>
					<option value="">Select</option>
					<option value="Male">A+</option>
					<option value="Male">A</option>
					<option value="Male">A-</option>
					<option value="Male">Male</option>
					<option value="Male">Male</option>
					<option value="Male">Male</option>				
					<option value="Female">Female</option>
				</select> -->
			</div>
		<label class="col-sm-2 control-label">gpa<span style="color:red">*</span></label>
			<div class="col-sm-4">
			<input type="text" name="gpa" class="form-control">
				</div>
				</div>
	
	
												
								<div class="hr-dashed"></div>
								<div class="form-group">
								<label class="col-sm-2 control-label">Result Roll <span style="color:red">*</span></label>
								<div class="col-sm-10">
								<input type="text" name="result" class="form-control">
								</div>
								</div>
	
									
	
	
	
									<div class="form-group">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn btn-default" type="reset">Cancel</button>
											<button class="btn btn-primary" name="submit" type="submit">Save</button>
										</div>
									</div>
	
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Loading Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/fileinput.js"></script>
		<script src="js/chartData.js"></script>
		<script src="js/main.js"></script>
	</body>
	</html>
