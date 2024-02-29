<?php
session_start();
include_once("config.php");
$_SESSION['seedmail'] = "no";
$email = $_POST['forgot'];
$emailseed = $_POST['forgot'];
$_SESSION['seedmail'] = $email;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            width: 300px;
        }

        h3 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        input[type="password"] {
            width: 93%; /* Adjust this value to make the textbox shorter */
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #03b42c;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #026A1A;
        }
    </style>
</head>

<body>
    <form action="reset.php" method="post">
        <h3>Reset Password</h3>
        <input type="password" name="password" placeholder="New password" required>
        <input type="submit" name="check" value="Reset Password" class="btn">
    </form>
</body>

</html>