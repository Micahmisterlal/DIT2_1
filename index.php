<?php
	session_start();

	include("db.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRACKING EXPENSES</title>
    <style>
        /* CSS Styles for Navigation Bar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image:url(ict.jpg);
            background-position:cover;

        }

        /* Navigation Bar Styles */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 18px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar .logout {
            float: right; /* Align logout to the right */
        }

        /* Main content styles */
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>WELCOME TO STUDENTS TRACKING EXPENSES OF UCU</h1>
    <p>This web helps you as a student to effectively amd effficeinty manage your finances</p>
    
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#expense-tracking">Expense Tracking</a>
        <a href="#budgeting">Budgeting</a>
        <a href="#reports">Reports</a>
        <a href="index login form.php" class="logout">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to tracking Expense</h1>
        <p>Use the navigation bar to manage your expenses, set budgets, and view reports.</p>
    </div>
</body>
</html>