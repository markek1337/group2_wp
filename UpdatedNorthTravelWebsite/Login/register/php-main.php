<?php 
session_start();

// A script to connect to a database
$db = mysqli_connect('db', 'root', 'password', 'multi_login');


$username = "";
$email    = "";
$errors   = array(); 

// Creating a function register that registers user
if (isset($_POST['register_btn'])) {
	register();
}

// Register
function register(){
	global $db, $errors, $username, $email;
	
	$username    =  mysqli_real_escape_string($db, $_POST["username"]);
	$email       =  mysqli_real_escape_string($db, $_POST["email"]);
	$password_1  =  mysqli_real_escape_string($db, $_POST["password_1"]);
	$password_2  =  mysqli_real_escape_string($db, $_POST["password_2"]);


	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = mysqli_real_escape_string($db, $_POST["user_type"]);
			$insert_query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $insert_query);
			$_SESSION['success']  = "New user successfully created!";
			header('location: admin/home.php');
		}else{
			$insert_query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $insert_query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "Log in was successful!";
			header('location: ../../index.php');				
		}
	}
}

// return user array from their id
function getUserById($user_ID){
	global $db;
	$select_query = "SELECT * FROM users WHERE user_ID=" . $user_ID;
	$result = mysqli_query($db, $select_query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}   
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: Login/register/register.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$select_query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $select_query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {
			// goes to admin page
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Log in was successful!";
				header('location: admin/home.php');		  
			}else{ // goes to user page
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Log in was successful!";
				header('location: ../../index.php');
			}
		}else {
			array_push($errors, "Wrong username or password");
		}
	}
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
