<?php
// Your PHP code here (database connection, user registration logic)
// ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

<div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px;">
    <h2 style="text-align: center; color: #333;">Register</h2>
    
    <?php if (isset($_GET['error'])): ?>
        <p style="color: red; text-align: center;"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>

    <form method="POST" action="" style="display: flex; flex-direction: column;">
        <input type="text" name="fname" placeholder="First Name" required style="margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        
        <input type="text" name="lname" placeholder="Last Name" required style="margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        
        <input type="email" name="email" placeholder="Email" required style="margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        
        <input type="password" name="password" placeholder="Password" required style="margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        
        <button type="submit" style="padding: 10px; background-color: #28a745; color: #fff; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;">Register</button>
        
        <p style="text-align: center; margin-top: 10px;">
            Already have an account? <a href="login.html" style="color: #007bff; text-decoration: none;">Login</a>
        </p>
    </form>
</div>

</body>
</html>
