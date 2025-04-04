<?php
	session_start();

	include("db.php");
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        /* styles.css */

        body {
            font-family: Arial, sans-serif;
            background-color:rgb(92, 82, 226);
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: yellow;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(189, 17, 17);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color:rgb(168, 19, 19);
        }

        p {
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function validateForm() {
            const phoneInput = document.querySelector('input[name="Number"]');
            const phonePattern = /^\d{10}$/; // Adjust the pattern as needed for your requirements

            if (!phonePattern.test(phoneInput.value)) {
                alert("Please enter a valid 10-digit telephone number.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Reset Your Password</h1>
    <form method="POST" onsubmit="return validateForm()">
        <label for="telephonenumber">Telephone No:</label>
        <input type="tel" name="Number" required placeholder="Enter your 10-digit number"><br>
        <label for="password">New Password:</label>
        <input type="password" name="password" required placeholder="Enter your new password"><br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>