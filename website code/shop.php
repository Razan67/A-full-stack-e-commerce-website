<?php
include 'connect.php';
session_start();



if (isset($_POST['add-to-cart'])) {
    if(isset($_SESSION['user'])){

        $username = $_SESSION['user'];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $product_quantity=1;
        // Insert product info into the orders table
        $sql = "INSERT INTO orders (productName, productPrice, username,product_quantity) VALUES ('$productName', $productPrice, '$username',$product_quantity);";
        $result= mysqli_query($con,$sql);
        if ($result) {
            echo "<script>alert('Product added to cart successfully!');</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }

} else {
    echo "<script>alert('Please sign in to add products to your cart.');</script>";
}
}
?>

<!DOCTYPE html>
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

  <title>Shop page</title>

</head>

<body>

  <header>
    <h2 class="tit">Mystique Scents</h2>
    <hr>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#shop">Shop</a></li>
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

  <main>

    <section id="shop">


      <div class="available">
        <h2>Most Popular</h2>
        <div class="row">
          <div class="column">
            <div class="product">
              <img src="../project/shop-pics/sauvage.jpg" alt="Sauvage perfume">
              <div class="product-info">
                <h3>Sauvage</h3>
                <p>$120</p>
                <form method="POST">
                  <input type="hidden" name="productName" value="Sauvage">
                  <input type="hidden" name="productPrice" value="120">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              
              </div>
            </div>
          </div>

          <div class="column">
            <div class="product">
            <img src="../project/shop-pics/sauvage eau de perfume.jpg" alt="sauvage de perfume perfume">
            <div class="product-info">
              <h3>Sauvage Eau de Parfum</h3>
              <p>$130</p>
              <form method="POST">
                  <input type="hidden" name="productName" value="Sauvage Eau de Parfum">
                  <input type="hidden" name="productPrice" value="130">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
             
          </div>
          </div>
        </div>
        <div class="column">
        <div class="product">
          <img src="../project/shop-pics/coco modemoiselle.jpg" alt="Coco modemoiselle perfume">
          <div class="product-info">
             <h3>Coco Mademoiselle</h3>
                  <p>$140</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Coco Mademoiselle">
                  <input type="hidden" name="productPrice" value="140">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/coco 2.jpg" alt="Coco modemoiselle v2 perfume">
              <div class="product-info">
                  <h3>Coco Mademoiselle V2</h3>
                  <p>$145</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Coco Mademoiselle V2">
                  <input type="hidden" name="productPrice" value="145">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="unisex">
  <h2>Unisex Perfumes</h2>
  <div class="row">
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/tobacco vanille.jpg" alt="Tobacco Vanille perfume">
              <div class="product-info">
                  <h3>Tobacco Vanille</h3>
                  <p>$150</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Tobacco Vanille">
                  <input type="hidden" name="productPrice" value="150">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/baccarat_Rouge.jpg" alt="Baccarat Rouge perfume">
              <div class="product-info">
                  <h3>Baccarat Rouge</h3>
                  <p>$200</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Baccarat Rouge">
                  <input type="hidden" name="productPrice" value="200">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/lost-cherry.jpg" alt="Lost Cherry perfume">
              <div class="product-info">
                  <h3>Lost Cherry</h3>
                  <p>$180</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Lost Cherry">
                  <input type="hidden" name="productPrice" value="180">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/olimpia.jpg" alt="Olimpia perfume">
              <div class="product-info">
                  <h3>Olimpia</h3>
                  <p>$160</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Olimpia">
                  <input type="hidden" name="productPrice" value="160">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="women">
  <h2>For Women</h2>
  <div class="row">
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/alien.jpg" alt="Alien perfume">
              <div class="product-info">
                  <h3>Alien</h3>
                  <p>$170</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Alien">
                  <input type="hidden" name="productPrice" value="170">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/bright-crystal.jpg" alt="Bright Crystal perfume">
              <div class="product-info">
                  <h3>Bright Crystal</h3>
                  <p>$110</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Bright Crystal">
                  <input type="hidden" name="productPrice" value="110">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/black-opium.jpg" alt="Black Opium perfume">
              <div class="product-info">
                  <h3>Black Opium</h3>
                  <p>$130</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Black Opium">
                  <input type="hidden" name="productPrice" value="130">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/burrbery.jpg" alt="Burberry perfume">
              <div class="product-info">
                  <h3>Burberry</h3>
                  <p>$120</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Burberry">
                  <input type="hidden" name="productPrice" value="120">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/libre.jpg" alt="Libre perfume">
              <div class="product-info">
                  <h3>Libre</h3>
                  <p>$115</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Libre">
                  <input type="hidden" name="productPrice" value="115">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/crystak-noir.jpg" alt="Crystal Noir perfume">
              <div class="product-info">
                  <h3>Crystal Noir</h3>
                  <p>$125</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Cryatal Noir">
                  <input type="hidden" name="productPrice" value="125">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/poison-girl.jpg" alt="Poison Girl perfume">
              <div class="product-info">
                  <h3>Poison Girl</h3>
                  <p>$135</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Poison Girl">
                  <input type="hidden" name="productPrice" value="135">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/bombshell.jpg" alt="BOMBSHELL">
              <div class="product-info">
                  <h3>BOMBSHELL</h3>
                  <p>$140</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="BOMBSHELL">
                  <input type="hidden" name="productPrice" value="140">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/prada.jpg" alt="Prada perfume">
              <div class="product-info">
                  <h3>Prada</h3>
                  <p>$160</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Prada">
                  <input type="hidden" name="productPrice" value="160">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/flora-gorgeous.jpg" alt="Flora Gorgeous perfume">
              <div class="product-info">
                  <h3>Flora Gorgeous</h3>
                  <p>$150</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Flora Gorgeous">
                  <input type="hidden" name="productPrice" value="150">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/gucci-bloom.jpg" alt="Gucci Bloom perfume">
              <div class="product-info">
                  <h3>Gucci Bloom</h3>
                  <p>$165</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Gucci Bloom">
                  <input type="hidden" name="productPrice" value="165">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/valentino-women.jpg" alt="Valentino perfume">
              <div class="product-info">
                  <h3>Valentino</h3>
                  <p>$155</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Valentino">
                  <input type="hidden" name="productPrice" value="155">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="men">
  <h2>For Men</h2>
  <div class="row">
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/blue chanel.jpg" alt="Blue Chanel perfume">
              <div class="product-info">
                  <h3>Blue Chanel</h3>
                  <p>$175</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Blue Chanel">
                  <input type="hidden" name="productPrice" value="175">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/ly.jpg" alt="LY perfume">
              <div class="product-info">
                  <h3>LY</h3>
                  <p>$180</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="LY">
                  <input type="hidden" name="productPrice" value="180">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/creed-aventus.jpg" alt="Creed Aventus perfume">
              <div class="product-info">
                  <h3>Creed Aventus</h3>
                  <p>$190</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Creed Aventus">
                  <input type="hidden" name="productPrice" value="190">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/polo-oud.jpg" alt="POLO Oud perfume">
              <div class="product-info">
                  <h3>POLO Oud</h3>
                  <p>$185</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="POLO Oud">
                  <input type="hidden" name="productPrice" value="185">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/dior-fahrenheit.jpg" alt="Fahrenheit Dior perfume">
              <div class="product-info">
                  <h3>Fahrenheit Dior</h3>
                  <p>$170</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Fahrenheit Dior">
                  <input type="hidden" name="productPrice" value="170">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/eros-men.jpg" alt="Eros perfume">
              <div class="product-info">
                  <h3>Eros</h3>
                  <p>$165</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Eros">
                  <input type="hidden" name="productPrice" value="165">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/polo.jpg" alt="POLO perfume">
              <div class="product-info">
                  <h3>POLO</h3>
                  <p>$160</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="POLO">
                  <input type="hidden" name="productPrice" value="160">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
      <div class="column">
          <div class="product">
              <img src="../project/shop-pics/hugo.jpg" alt="Hugo Boss Bottled perfume">
              <div class="product-info">
                  <h3>Hugo Boss Bottled</h3>
                  <p>$155</p>
                  <form method="POST">
                  <input type="hidden" name="productName" value="Hugo Boss Bottled">
                  <input type="hidden" name="productPrice" value="155">
                  <button type="submit" class="add-to-cart" name="add-to-cart">Add to Cart</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>

    </section>
  </main>
  
  <!-- <script src="addtocart.js"> </script> -->
 
</body>


</html>