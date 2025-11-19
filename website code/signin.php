<?php
include 'connect.php';
session_start();

if(isset($_POST['signin'])){
  $username= $_POST['username'];
  $password= $_POST['password'];

  $sql= "SELECT * FROM users WHERE username='$username' and password='$password'";
  $result= mysqli_query($con,$sql);

  $userDetails= mysqli_fetch_assoc($result);

  $username=$userDetails['username'];

if($userDetails){
$_SESSION['user']=$username;
header("Location:index.php");
}else{
  echo "<script>alert('Invalid username OR password');</script>";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="signin.css">
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
        <!-- <li><a href="signUp.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a></li> -->
      </ul>
    </nav>
  </header>

  <main>
    <div class="form-container">
      <h2 class="form-header">Sign In to Your Account</h2>
      <form method="POST">
          <input type="text" class="input-field" placeholder="username" name="username" required>
          <input type="password" class="input-field" placeholder="Password" name="password" required>
          <button type="submit" class="sign-in-btn" name="signin">Sign In</button>
      </form>
    </div>
  </main>
  <footer >
    <p>&copy; 2024 Mystique Scents. All Rights Reserved.</p>
</footer>
</body>
</html>
