<?php
include 'connect.php';
session_start ();
if(isset($_POST['send-message'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  
  if(isset($_SESSION['user'])){
    $username = $_SESSION['user'];

    // SQL query to insert feedback into the database
    $sql = "INSERT INTO feedback (`name`, `email`, `message`, `username`) VALUES ('$name', '$email', '$message', '$username')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<script>alert('Thank you for your feedback');</script>"; 
    } else {
        echo "Error: " . mysqli_error($con); 
    }
} else {
    echo "<script>alert('Please sign in to send feedback');</script>";
    header("Location:signin.php");
}}
    
  

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="shop.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>Contact page</title>

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
      <li><a href="#contact">Contact</a></li>
      <?php
if (isset($_SESSION['user'])) {
  // If the user is logged in, show the Cart link
  echo '<li><a href="cart.php">Cart</a></li>';
}
        ?>
      <?php
            if (!isset($_SESSION['user'])) {
                
                echo '<li><a href="signUp.php">Sign Up</a></li>';
                echo '<li><a href="signin.php">Sign In</a></li>';
            }
            ?>
    </ul>
  </nav>

</header>


<main>
  <section id="contact">
    <div class="contact-wrapper">
      <div class="contact-info">
        <h2>Contact Us</h2>
        <p>If you have any questions, suggestions, or just want to say hello, feel free to get in touch with us. We're here to help and love hearing from our customers!</p>
        
        <div class="contact-details">
          <p><strong>Address:</strong> Perfume Avenue, Fragrance City, St Scents</p>
          <p><strong>Email:</strong> support@mystiquescents.com</p>
          <p><strong>Phone:</strong> +1 (800) 123-4567</p>
        </div>
      </div>
  
      <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
  
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
  
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
  
          <button type="submit" name="send-message">Send Message</button>
        </form>
      </div>
    </div>
  </section>

</main>
<footer >
  <p>&copy; 2024 Mystique Scents. All Rights Reserved.</p>
</footer>
</body>

</html>