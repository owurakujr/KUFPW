<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username === 'admin' && $password === '12345') {
		$_SESSION['username'] = $username;
		header('Location: project 2.1.php');
		exit;
	} else {
		$error = 'Invalid username or password!';
	}
}
?>


<!DOCTYPE html>
<html>
    
<head>
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		form {
			width: 300px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		.error {
			color: red;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h2>Login</h2>
		<?php if(isset($error)): ?>
			<p class="error"><?php echo $error; ?></p>
		<?php endif; ?>
		<label>Username:</label>
		<input type="text" name="username" required>
		<label>Password:</label>
		<input type="password" name="password" required>
		<a href= "project 2.1.html"><input type="submit" value="Login"></a>
		
	</form>
</body>
</html>
