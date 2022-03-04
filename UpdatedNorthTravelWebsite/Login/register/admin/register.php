<?php include('php-main.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="adminhome">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
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
		<label>Password</label>
		<input type="password" name="password_first">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_second">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="register.php">Sign in</a>
	</p>
</form>

</body>
</html>