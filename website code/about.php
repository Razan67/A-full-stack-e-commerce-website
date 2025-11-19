<?php
session_start ();
?>

<!DOCTYPE html >

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="shop.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>About Us</title>
</head>

<body>
  
  <header>
    <h2 class="tit">Mystique Scents</h2>
    <hr>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="#about">About Us</a></li>
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

  <main>

    <section id="about">
    <div class="content-wrapper">
      <div class="text-content">
       
        <h3>Our Story</h3>
        <p>Founded with a passion for the art of fragrance, Mystique Scents has been curating unforgettable olfactory experiences for over a decade. What began as a small boutique with a vision to bring the world’s most exquisite perfumes to discerning customers has grown into a beloved online destination for fragrance enthusiasts worldwide.</p>
        <p>Our journey started with a simple belief: that scent has the power to evoke memories, emotions, and a sense of identity. From our humble beginnings, we have partnered with master perfumers and prestigious brands to offer a diverse collection that celebrates the artistry of perfume-making. Each fragrance we offer is handpicked for its unique character, quality, and ability to captivate the senses.</p>
        <p>Over the years, we have remained committed to our founding principles of quality, craftsmanship, and customer satisfaction. As we continue to evolve, our dedication to bringing you the finest fragrances remains unchanged. Mystique Scents is not just a shop—it's a journey through the world of scent, where every bottle tells a story and every fragrance becomes a part of your own.</p>
      </div>
      <div class="image-content">
        <img src="../project/assets/bmb.png" alt="Company Profile">
        <p class="est">est. 1987</p>
      </div>
    </div>
    </section>
  </main>
  <footer >
    <p>&copy; 2024 Mystique Scents. All Rights Reserved.</p>
</footer>
</body>

</html>