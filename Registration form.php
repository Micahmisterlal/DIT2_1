<?php
	session_start();

	include("db.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $reg_no = $_POST['reg_no'];
        $access_no = $_POST['access_no'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $education_level = $_POST['education_level'];
        $year_joined = $_POST['year_joined'];
        $course_pursued = $_POST['course_pursued'];
        $password = $_POST['password'];
		

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query = "INSERT INTO `registration`(`firstname`, `lastname`, `gender`, `Registration no`, `Access no`, `email`, `telephone no`, `educational level`, `year joined`, `course pursued`, `password`) VALUES ('$fname','$lname','$gender','$reg_no','$access_no','$email','$telephone','$education_level','$year_joined','$course_pursued','$password')";

			mysqli_query($conn, $query);

			echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Please Enter some Valid Information')</script>";
		}


	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form style.css">
    <title>REGISTRATION FORM</title>
</head>
<body>
    <div class="registration">
        <h1>Register Form</h1>
        <form action="" method="post">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" required>

            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" required>

            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="reg_no">Registration No</label>
            <input type="text" name="reg_no" id="reg_no" required>

            <label for="access_no">Access No</label>
            <input type="text" name="access_no" id="access_no" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="telephone">Telephone No</label>
            <input type="tel" name="telephone" id="telephone" required>

            <label for="education_level">Education Level</label>
            <input type="text" name="education_level" id="education_level" required>

            <label for="year_joined">Year Joined</label>
            <input type="number" name="year_joined" id="year_joined" required>

            <label for="course_pursued">Course Pursued</label>
            <input type="text" name="course_pursued" id="course_pursued" required>

            <label for="password">Create Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="index login form.php">Sign in now</a></p>
    </div>
</body>
</html>