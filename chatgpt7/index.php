<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - WhatsApp Clone</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(to right, #25D366, #128C7E);
            font-family: 'Poppins', sans-serif;
            padding: 0 15px;
            margin: 0;
        }
        .wrapper {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 100%;
            max-width: 450px;
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
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .form header img:hover {
            transform: scale(1.1);
        }
        .form .link {
            margin-top: 15px;
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
            display: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>
                <img src="javahero.png" alt="Java Hero Logo">
                Made with ChatGPT
            </header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>
