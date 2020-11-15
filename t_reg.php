<?php 
	include_once "vendor/autoload.php";
	use Crud\Controller\Teacher;
	$teacher = new Teacher;
?>


<?php 

/**
 * Form isseting:
 */
if (isset($_POST['submit'])) {

	// Get Values:
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];
	$uname = $_POST['uname'];

	// Validation:
	if (empty($name) || empty($email) || empty($cell) || empty($uname) ) {
		$notice = '<p class="alert alert-danger">All Fields are Required !! <button class="close" data-dismiss="alert">&times;</button> </p>';
	}else{
		$notice = $teacher -> addTeacher($name, $email, $cell, $uname);
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher Registration</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
	<div class="wrap">
		<a class="btn btn-sm btn-primary" href="t_table.php">All Teachers</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Teacher</h2>

				<?php
					if (isset($notice)) {
					 	echo $notice;
					 } 

				?>
				
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>