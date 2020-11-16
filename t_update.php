<?php 
	include_once "vendor/autoload.php";
	use Crud\Controller\Teacher;
	$teacher = new Teacher;



	/**
	 * Update Profile:
	 */
	if (isset($_GET['up_id'])) {
		$up_id = $_GET['up_id'];

		$t_data = $teacher -> editTeacher($up_id);
		$up_data = $t_data -> fetch_assoc();
	}



	/**
	 * Form isseting:
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
			$notice = $teacher -> updateProfile($name, $email, $cell, $uname,$up_id);
		}

	}


	










?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher Update</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

	<div class="wrap">
		<a href="t_table.php" class="btn btn-sm btn-info">Back</a>
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
						<input name="name" value="<?php echo $up_data['name']; ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input value="<?php echo $up_data['email']; ?>" name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input value="<?php echo $up_data['cell']; ?>" name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input value="<?php echo $up_data['uname']; ?>" name="uname" class="form-control" type="text">
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