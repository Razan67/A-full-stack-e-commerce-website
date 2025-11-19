<?php
include 'connect.php';
session_start();


if (isset($_POST['product_id']) && isset($_POST['product_quantity'])) {
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    // Update the quantity of the product in the orders table
    $sql = "UPDATE orders SET product_quantity = $product_quantity WHERE order_id = $product_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Product quantity updated successfully!');</script>";
        header('Location: cart.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
    header('Location: cart.php');
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="cart.css">
  

</head>
