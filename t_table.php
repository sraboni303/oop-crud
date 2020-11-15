<?php 
	include_once "vendor/autoload.php";
	use Crud\Controller\Teacher;
	$teacher = new Teacher; 
?>

<?php 
	/**
	 * Delete Teacher:
	 */
	if (isset($_GET['delete_id'])) {
		$delete_id = $_GET['delete_id'];

		$teacher -> deleteTeacher($delete_id);
		header("location:t_table.php");
	}






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teachers Table</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table">
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>


						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							$i = 1;
							$data = $teacher -> selectTeacher();
							while( $all_data = $data -> fetch_assoc() ) :
						?>

						<tr>
							<td> <?php echo $i; $i++; ?> </td>
							<td> <?php echo $all_data['name']; ?> </td>
							<td> <?php echo $all_data['email']; ?> </td>
							<td> <?php echo $all_data['cell']; ?> </td>
							<td> <?php echo $all_data['uname']; ?> </td>
							<td>
								<a class="btn btn-sm btn-info" href="t_profile.php?pro_id=<?php echo $all_data['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="t_update.php?up_id=<?php echo $all_data['id']; ?>">Edit</a>
								<a id="delete_btn" class="btn btn-sm btn-danger" href="?delete_id=<?php echo $all_data['id']; ?>">Delete</a>
							</td>
						</tr>

					<?php endwhile; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
	    $('a#delete_btn').click(function(){

	        let con_msg = confirm('Are you sure ?');
	        if (con_msg == true) {
	          return true;
	        }else{
	          return false;
	        }

	    });
	</script>
</body>
</html>