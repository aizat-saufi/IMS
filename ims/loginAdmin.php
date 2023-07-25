<?php 
ob_start();
session_start();
include('inc/header.php');
$loginError = '';

if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Inventory.php';
	$inventory = new Inventory();
	$login = $inventory->login($_POST['email'], $_POST['pwd']); 
	if(!empty($login)) {
		$_SESSION['userid'] = $login[0]['userid'];
		$_SESSION['name'] = $login[0]['name'];			
		// Check if the user is an admin
		if ($login[0]['role'] === 'admin') {
			header("Location:admin.php"); // Redirect to the admin page
		} else {
			header("Location:index.php"); // Redirect to the user page
		}
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>

<style>
html,
body,
body>.container {
	height: 95%;
	width: 100%;
	background-color: #FFCAC0;
	background-image: url('welcome.jpg');
}

body>.container {
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content:center;
	background-color: #7E645F;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	
	
}
#title{
	text-shadow:2px 2px 5px #000;
	font-size: 24px;
	color: #333333;
	margin-bottom: 20px;
	
} 
</style>




<?php include('inc/container.php');?>

<h1 class="text-center my-4 py-3 text-light" id="title">Inventory Management System - AA Customs</h1>	
<div class="col-lg-4 col-md-5 col-sm-10 col-xs-12">

	<div class="card rounded-0 shadow">
		<div class="card-header">
			<div class="card-title h3 text-center mb-0 fw-bold">Staff Login</div>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<form method="post" action="">
					<div class="form-group">
						<?php if ($loginError ) { ?>
							<div class="alert alert-danger rounded-0 py-1"><?php echo $loginError; ?></div>
						<?php } ?>
					</div>
					<div class="mb-3">
						<label for="email" class="control-label">Email</label>
						<input name="email" id="email" type="email" class="form-control rounded-0" placeholder="Email address" autofocus="" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
					</div>
					<div class="mb-3">
						<label for="password" class="control-label">Password</label>
						<input type="password" class="form-control rounded-0" id="password" name="pwd" placeholder="Password" required>
					</div>  
					<div class="d-grid">
						<button type="submit" name="login" class="btn btn-primary rounded-0">Login</button>
					</div>
			
				</form>
			</div>
			<a href="welcome.php" class="login-button">Back to homepage</a>
		</div>
	</div>
</div>

<?php include('inc/footer.php');?>

