 <?php

include 'connect.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
  echo "<script>alert('Please sign in to add products to your cart.');</script>";
    exit();
}

$user = $_SESSION['user'];



?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="cart.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
   
  <title>Cart</title>

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
            if (!isset($_SESSION['user'])) {
                
                echo '<li><a href="signUp.php">Sign Up</a></li>';
                echo '<li><a href="signin.php">Sign In</a></li>';
            }
            ?>
      </ul>
    </nav>

  </header>

  <main>
    
        
  <section id="cart">
    <h2>Your Shopping Cart</h2>
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $user = $_SESSION['user'];
            $sql = "SELECT * FROM orders WHERE username='$user';";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $total = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['order_id'];
                    $product_name = $row['productName'];
                    $product_price = $row['productPrice'];
                    $product_quantity = $row['product_quantity'];
                    
                  
                    $product_total_price = $product_price * $product_quantity;
                    $total += $product_total_price;

                    echo '<tr>
                            <td>' . $product_name . '</td>
                            <td>
                                <form action="updateItem.php" method="POST">
                                    <input type="number" name="product_quantity" value="' . $product_quantity . '" min="1">
                                    <input type="hidden" name="product_id" value="' . $id . '">
                                    <button type="submit" class="update-btn">Update</button>
                                </form>
                            </td>
                            <td>' . $product_price . ' JD</td>
                            <td>' . $product_total_price . ' JD</td>
                            <td>
                                <button class="delete-btn"><a href="deleteItem.php?order_id=' . $id . '">Delete</a></button>
                            </td>
                        </tr>';
                }
                echo '<tr>
                        <td colspan="3">Total</td>
                        <td colspan="2">' . $total . ' JD</td>
                      </tr>';
            }
            ?>
        </tbody>
    </table>
</section>
</main>


  <footer >
    <p>&copy; 2024 Mystique Scents. All Rights Reserved.</p>
</footer>
</body>

</html> 