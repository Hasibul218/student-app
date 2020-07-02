<?php include_once 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php 
		/**
		 * Student Data Collect
		 */
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];
			$age = $_POST['age'];

			/**
			 * Name Empty Check
			 */
			if (empty($name)) {
				$mesg = "<p class='alert alert-danger'>*Name requeired<button class='close' data-dismiss='alert'>&times;</button></p>";
			}
			/**
			 * Email Empty Check With Validate
			 */
			if (empty($email)) {
				$mesg = "<p class='alert alert-danger'>*Email requeired<button class='close' data-dismiss='alert'>&times;</button></p>";
			}elseif (emailValidate($email) == false) {
				$mesg = "<p class='alert alert-danger'>*Unvalid email<button class='close' data-dismiss='alert'>&times;</button></p>";
			}elseif (emailRestrict($email) == false) {
				$mesg = "<p class='alert alert-danger'>Only for aiub.com<button class='close' data-dismiss='alert'>&times;</button></p>";
			}
			/**
			 * Cell No. Empty Check With Validate
			 */
			if (empty($cell)) {
				$mesg = "<p class='alert alert-danger'>*Cell no. requeired<button class='close' data-dismiss='alert'>&times;</button></p>";
			}
			/**
			 * Age Empty Check With Validate
			 */
			if (empty($age)) {
				$mesg = "<p class='alert alert-danger'>*Age requeired<button class='close' data-dismiss='alert'>&times;</button></p>";
			}
			/**
			 * Successful Message
			 */
			if (empty($mesg)) {
				$mesg = "<p class='alert alert-success'>Registerd sucessful<button class='close' data-dismiss='alert'>&times;</button></p>";
			}
		}
			
	 ?>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Add Student</h2>
				<?php 
				/**
				 * Error message show
				 */
					if (isset($mesg)) {
						echo $mesg;
					}
				 ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" placeholder="Name" value="<?php oldData('name') ?>">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" placeholder="Email" value="<?php oldData('email') ?>">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" placeholder="Cell no." value="<?php oldData('cell') ?>">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text" placeholder="Age" value="<?php oldData('age') ?>">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Add Student">
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