<?php

include 'connect.php';

if(isset($_POST['Create-Account'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
  $result= mysqli_query($con,$sql);

  if($result){
    header("Location:signin.php");
  }else{
    mysqli_error($con);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>
<body>

  <header>
    <h2 class="tit">Mystique Scents</h2>
    <hr>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php
  if (isset($_SESSION['user'])) {
  // If the user is logged in, show the Cart link
   echo '<li><a href="cart.php">Cart</a></li>';
}
        ?>
        <?php
             // Ensure session is started
            if (!isset($_SESSION['user'])) {
                // If no user is logged in, show Sign Up and Sign In
                echo '<li><a href="signUp.php">Sign Up</a></li>';
                echo '<li><a href="signin.php">Sign In</a></li>';
            }
            ?>
      </ul>
    </nav>
  </header>



    <div class="form-container">
      <h2 class="form-header">New Customers</h2>
      <form method="POST">
          <input type="text" class="input-field" placeholder="username" name="username"required>
          <input type="password" class="input-field" placeholder="Password" name="password"required>
          <button type="submit" class="create-account-btn" name="Create-Account">Create Account</button>
      </form>
  </div>
  <footer >
    <p>&copy; 2024 Mystique Scents. All Rights Reserved.</p>
</footer>
</body>
</html>
