<?php include('../php-main.php') ?>
<!DOCTYPE html>
<html style="background: white;">
<head>
	<title>Create a new user</title>
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
<body style="background: white;">
<div class="create_user" style="width: 40%;
	position: relative;
	top:24%;
	margin: 50px auto 0px;
	font-family: Roboto;
	font-weight: bold;	
	color: white;
	background: -webkit-linear-gradient(top, #58b8df, #44df9e);
	text-align: center;
	border-bottom: none;
	border-radius: 20px 10px 0px 0px;
	padding: 20px;">
		<h2>Create a new user</h2>
	</div>
	
	<form method="post" action="create_user.php" style="border-top:none; position:relative; top:30px; left: 450px">

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
			<button type="submit" class="btn" name="register_btn" style="position:relative; border:none; font-size:20px; top: 30px; width: 200px; color:white; left:180px; background: #44df9e; padding:10px;"> Create a user</button>
		</div>
	</form>
</body>
</html>