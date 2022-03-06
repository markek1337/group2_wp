<?php 
include('../php-main.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../register.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../register.php");
}
?>
<!DOCTYPE html>
<html style="background: white;">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body style="background: white;">
<div class="adminhome" style="width: 30%;
	margin: 50px auto 0px;
	font-family: Roboto;
	font-weight: bold;	
	color: white;
	background: -webkit-linear-gradient(top, #58b8df, #44df9e);
	text-align: center;
	border-color:black;
	border: 2px;
	border-radius: 20px 10px 0px 0px;
	padding: 20px;">
		<h2>Admin page</h2>
	</div>
	<div class="content" style="
	width: 30%;
	font-family: Roboto;
	font-weight: bold;
	margin: 0px auto;
	padding: 20px;
	background: white;
	border-radius: 0px 0px 20px 20px;
">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" style="position:relative; left:50px; color: #44df9e; width:360px; background-color: white !important; border: none; padding:none;">
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../../images/admin_profile.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="position:relative; top:10px;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="position:relative; top:10px; color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a class="btn" href="home.php?logout='1'" style="position:relative; left:130px; bottom:15px; color: white; padding:7px; background: #44df9e;">Log out</a>
                       &nbsp; <a class="btn" href="create_user.php" style="position:relative; left:130px; bottom:15px; color: white; padding:7px;   background: #58b8df;"> Create a user</a>
					   &nbsp; <a class="btn" href="prices.php" style="position:relative; left:130px; bottom:15px; color: white; padding:7px;   background: #58b8df;"> Add pricelist</a>

					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>