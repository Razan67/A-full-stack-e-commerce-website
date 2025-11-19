<?php
include 'connect.php';
session_start();

if (isset($_GET['order_id'])) {
    $product_id = $_GET['order_id'];

    // Delete the product from the orders table
    $sql = "DELETE FROM orders WHERE order_id = $product_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Product removed from cart successfully!');</script>";
        header('Location: cart.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
    header('Location: cart.php');
}
?>
