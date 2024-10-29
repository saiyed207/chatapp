<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WhatsApp Clone</title>
    <link rel="stylesheet" href="styles.css"> <!-- Your existing CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(to right, #25D366, #128C7E);
            font-family: 'Poppins', sans-serif;
            padding-right: 15px; /* Adjusted padding for better alignment */
            padding-left: 15px; /* Added left padding for symmetry */
        }
        .wrapper {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            max-width: 100%; /* Ensures responsiveness on smaller screens */
        }
        .form {
            text-align: center;
        }
        .form header {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form header img {
            width: 60px; /* Adjust size as needed */
            height: 60px; /* Adjust size as needed */
            border-radius: 50%; /* Makes the image circular */
            margin-right: 10px; /* Space between image and text */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Shadow effect */
            transition: transform 0.3s ease; /* Smooth transition for animation */
        }
        .form header img:hover {
            transform: scale(1.1); /* Scale up on hover */
        }
        .field.input {
            position: relative;
            margin-bottom: 15px;
        }
        .field input {
            width: 100%;
            height: 40px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s ease;
        }
        .field input:focus {
            border-color: #25D366;
            outline: none;
        }
        .button input {
            width: 100%;
            height: 45px;
            border: none;
            border-radius: 5px;
            background: #25D366;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .button input:hover {
            background: #128C7E;
        }
        .link a {
            color: #128C7E;
            text-decoration: none;
            font-weight: 600;
        }
        .link a:hover {
            text-decoration: underline;
        }
        .error-text {
            color: #721c24;
            background: #f8d7da;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: none; /* Set to block when needed */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>
                <img src="javahero.png" alt="Logo"> <!-- Place the image here -->
                Made with ChatGPT
            </header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
  
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>
