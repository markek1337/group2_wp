<?php include('../php-main.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="create_user" style="width: 40%;
	margin: 50px auto 0px;
	font-family: Roboto;
	font-weight: bold;	
	color: white;
	background: -webkit-linear-gradient(top, #58b8df, #44df9e);
	text-align: center;
	border: none;
	border-bottom: none;
	border-radius: 20px 10px 0px 0px;
	padding: 20px;">
		<h2>Create a new user</h2>
	</div>
	
	<form method="post" action="create_user.php" style="border:none;">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn" style="position:relative; font-size:20px; top: 10px; color:white; left:250px; background: #44df9e; padding:10px;"> Create a user</button>
		</div>
	</form>
</body>
</html>