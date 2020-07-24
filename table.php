<?php require_once 'dbconnect.php'; ?>
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
	<div class="wrap-table shadow">
		<div class="card">
				<a class="btn btn-sm btn-info" href="index.php">Add Student</a>
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Age</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$i=1; 
							$sql = "SELECT * FROM students ORDER BY name ASC";  //name ar assending order
							//$sql = "SELECT * FROM students LIMIT 4";  //Limit for data showing in one page
							$data = $connection -> query($sql);
							while ( $final_data = $data ->fetch_assoc() ) :
						 ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $final_data['name']; ?></td>
							<td><?php echo $final_data['email']; ?></td>
							<td><?php echo $final_data['cell']; ?></td>
							<td><?php echo $final_data['age']; ?></td>
							<td><img src="assets/img/<?php echo $final_data['photo']; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
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
</body>
</html>