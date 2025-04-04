<?php
	session_start();

	include("db.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$reg_no = $_POST['reg_no'];
		$password = $_POST['password'];
		if(!empty($reg_no) && !empty($password) && !is_numeric($reg_no))
		{
			$query = "SELECT * from registration WHERE Registration_no = '$reg_no' AND password = '$password'";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] == $password)
					{
						header("location: index.php");
						die;
					}
				}
			}
			echo "<script type='text/javascript'>alert('wrong username or password')</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('wrong username or password')</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index login style.css" >;
    <title>LOGIN FORM</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="reg_no">Registration No</label>
            <input type="text" name="reg_no" id="reg_no" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            
            <button type="submit">Login</button>
        </form>
		<p><a href="reset.php">Forgot password?</a></p>
        <p>Don't have an account? <a href="Registration form.php">Sign up now</a></p>
    </div>
    <script src="index login form script.js"></script>
</body>
</html>