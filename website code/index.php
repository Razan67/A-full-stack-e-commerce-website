<?php

include("connect.php");
session_start();

?>



<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="reader" content="Razan">
  <link rel="shortcut icon" href="icon.jpg">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>Perfumes|frgrances</title>

</head>

<body>


  <header>
  
    <h2 class="tit">Mystique Scents</h2>
    <hr>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
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
            if (!isset($_SESSION['user'])) {
                
                echo '<li><a href="signUp.php">Sign Up</a></li>';
                echo '<li><a href="signin.php">Sign In</a></li>';
            }
            
            ?>
      
      </ul>
    </nav>
  </header>
  <br>


<?php


if(isset($_SESSION['user'])){
  $username2=$_SESSION['user'];
  echo "Hello $username2, <a href='signout.php'>Sign Out</a>";
}


?>

  <main>
    <section id="home">

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../project/assets/c3.avif" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../project/assets/good girl.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../project/assets/s.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="text">
        <h1>Mystique <br>Scents </h1>
        <p>Welcome to Mystique Scents store, where every fragrance tells a story.
          Our carefully curated collection of exquisite perfumes is designed to captivate the senses and evoke
          emotions.
          Whether you're seeking a signature scent or a special gift, our diverse range offers something for every
          personality and occasion.
          Immerse yourself in the art of fragrance and discover a world where luxury meets individuality. At Mystique
          Scents store, we believe that scent is more than just a fragrance—it's an experience, a memory, a moment</p>
      </div>

      <div class="imgs">
        <img src="../project/assets/Sauvage.jpg" alt="Sauvage perfume">
        <img src="../project/assets/coco.jpg" alt="coco chanel perfume">
        <div class="ava">
          
          <a href="shop.php"><button class="btn1">Available Now</button></a>
        </div>

      </div>


    </section>
  </main>
  <footer >
    <p>&copy; 2024 Mystique Scents. All Rights Reserved.</p>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>