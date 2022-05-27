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
			$fullname=$_POST['Fullname'];
			$mobile=$_POST['mobileno'];
			$email=$_POST['emailid'];
			$designation=$_POST['Designation'];
			$gender=$_POST['gender'];
			$bloodgroup=$_POST['bloodgroup'];
			$address=$_POST['address'];
		
			$file_name = $_FILES['img_name']['name'];
			$file_tmp_name = $_FILES['img_name']['tmp_name'];

		if( empty($file_name) && $gender == 'Male')
			{
			$file_name = 'avatar.jpg';
			}
		elseif( empty($file_name) && $gender == 'Female')
			{
			$file_name = 'awoman.jpg';
			}
		else
			{
			$location = "pic/".$file_name;
			move_uploaded_file($file_tmp_name, $location);
			}
		
			$status=1;
		
			$sql="INSERT INTO  tblblooddonars (FullName,MobileNumber,EmailId,Designation,Gender,BloodGroup,Address,photo,status) 
			VALUES(:fullname,:mobile,:email,:Designation,:gender,:bloodgroup,:address,:photo_name,:status)";
			$query = $dbh->prepare($sql);
			$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
			$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
			$query->bindParam(':email',$email,PDO::PARAM_STR);
			$query->bindParam(':Designation',$designation,PDO::PARAM_STR);
			$query->bindParam(':gender',$gender,PDO::PARAM_STR);
			$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
			$query->bindParam(':address',$address,PDO::PARAM_STR);
			$query->bindParam(':photo_name',$file_name,PDO::PARAM_STR);
			$query->bindParam(':status',$status,PDO::PARAM_STR);
			$query->execute();
			$lastInsertId = $dbh->lastInsertId();
		if($lastInsertId)
			{
			$msg=" Your info submitted successfully";
			header("refresh:3;add-teacher.php"); 
			}
		else 
			{
			$error=" Something went wrong. Please try again";
			header("refresh:3;add-teacher.php"); 
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
		
		<title>CKAMS| Admin Add Teacher</title>
	
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
	<script language="javascript">
	function isNumberKey(evt)
		  {
			 
			var charCode = (evt.which) ? evt.which : event.keyCode
					
			if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46)
			   return false;
	
			 return true;
		  }
		  </script>
	</head>
	
	<body>
		<?php include('includes/header.php');?>
		<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
			<div class="content-wrapper">
				<div class="container-fluid">
	
					<div class="row">
						<div class="col-md-12">
						
							<h2 class="page-title">Add Teacher</h2>
	
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
							<label class="col-sm-2 control-label">Mobile No<span style="color:red">*</span></label>
							<div class="col-sm-4">
							<input type="text" name="mobileno"  maxlength="15" class="form-control" required>
							</div>
							</div>
	
							<div class="form-group">
							<label class="col-sm-2 control-label">Email id </label>
							<div class="col-sm-4">
							<input type="email" name="emailid" class="form-control">
							</div>
							<label class="col-sm-2 control-label">Designation<span style="color:red">*</span></label>
							<div class="col-sm-4">
								<select name="Designation" class="form-control" required>
									<option value="">Select</option>
									<option value="প্রভাষক"> প্রভাষক </option>
									<option value="সহকারী মাওলানা">সহকারী মাওলানা</option>
									<option value="সহকারী মৌল্ভী">সহকারী মৌল্ভী</option>
									<option value="সহকারী শিক্ষক">সহকারী শিক্ষক</option>
									<option value="সহকারী শিক্ষিকা">সহকারী শিক্ষিকা</option>
									<option value="জুনিয়র শিক্ষক">জুনিয়র শিক্ষক</option>
									<option value="কম্পিউটার শিক্ষক">কম্পিউটার শিক্ষক</option>
									<option value="দপ্তরী">দপ্তরী</option>
									<option value="নৈশ্য প্রহরী">নৈশ্য প্রহরী</option>
								</select>
							<!--<input type="text" name="Designation" class="form-control" required>-->
							</div>
							</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Gender <span style="color:red">*</span></label>
			<div class="col-sm-4">
				<select name="gender" class="form-control" required>
					<option value="">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
		<label class="col-sm-2 control-label">Blood Group<span style="color:red">*</span></label>
			<div class="col-sm-4">
				<select name="bloodgroup" class="form-control" required>
					<option value="">Select</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="N/A">N/A</option>
				</select>
				</div>
				</div>
	
	
												
								<div class="hr-dashed"></div>
								<div class="form-group">
								<label class="col-sm-2 control-label">Address</label>
								<div class="col-sm-10">
								<textarea class="form-control" style="resize: none;" name="address" ></textarea>
								</div>
								</div>
	
									<!-- <div class="hr-dashed"></div> -->
									<div class="form-group">
									<label class="col-sm-2 control-label">Photo<span style="color:red">*</span></label>
									<div class="col-sm-10">
									<input class="form-control" type="file" id="myphoto" name= "img_name">
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
