<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="portal_login.css?v=<?php echo time(); ?>">
  <title>Portal</title>
</head>

<body>
  <div class="home_container">
    <div class="portal_login">
      <h2>Welcome to the Student Portal</h2>
      <div class="login_form">
        <form action="portal.php" method="post">
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Username" required>
          <label for="password">Index Number</label>
          <input type="password" name="password" placeholder="Index Number" required>
          <p class="forget"><a href="forgot_password.php">Forget Password?</a></p>
          <button type="submit"><a href="students_portal.php">Login</a></button>
          <p>Do you have an account? <a href="register.php">Register here</a></p>
        </form>
      </div>
    </div>
</body>

</html>