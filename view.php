<?php include_once "vendor/autoload.php"; ?>
<?php 

use Crud\Controller\Student;
$student = new Student;


if (isset($_GET['pro_id'])) {
	$pro_id = $_GET['pro_id'];

	$data = $student -> viewProfile($pro_id);
	$all_data = $data -> fetch_assoc();
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
	
	

	<div class="wrap">
		<div class="card shadow">
			<div class="card-body">
				<h2>Student Profile</h2>
				<table class="table table-striped">
					<tbody>
						<tr>
							<th>ID</th>
							<td> <?php echo $all_data['id']; ?> </td>
						</tr>
						<tr>
							<th>Name</th>
							<td> <?php echo $all_data['name']; ?> </td>
						</tr>
						<tr>
							<th>Email</th>
							<td> <?php echo $all_data['email']; ?> </td>
						</tr>
						<tr>
							<th>Cell</th>
							<td> <?php echo $all_data['cell']; ?> </td>
						</tr>
						<tr>
							<th>Username</th>
							<td> <?php echo $all_data['uname']; ?> </td>
						</tr>
					</tbody>
				</table>
			</div>
			<a href="students.php" class="btn btn-sm btn-info">Back</a>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>