<?php
include_once "vendor/autoload.php";
use Crud\Controller\Student;
$student = new Student;


if (isset($_GET['edit_id'])) {
	$edit_id = $_GET['edit_id'];

	$data = $student -> editStudent($edit_id);
	$edit_data = $data -> fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 

/**
 * Student Form:
 */
if (isset($_POST['submit'])) {

	// Get Values:
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];
	$uname = $_POST['uname'];

	// Main Validation:
	if (empty($name) || empty($email) || empty($cell) || empty($uname) ) {
		
		$notice = '<p class="alert alert-danger">All Fields are Required !! <button class="close" data-dismiss="alert">&times;</button> </p>';
	}else{
		$notice = $student -> updateStudent($name, $email, $cell, $uname, $edit_id);
	}










}
	?>
	

	<div class="wrap">
		<a class="btn btn-sm btn-primary" href="students.php">All Students</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Update Profile</h2>

				<?php 
					if (isset($notice)) {
						echo $notice;
					}
				?>
				
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" value="<?php echo $edit_data['name']; ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input value="<?php echo $edit_data['email']; ?>" name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input value="<?php echo $edit_data['cell']; ?>" name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input value="<?php echo $edit_data['uname']; ?>" name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Update">
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