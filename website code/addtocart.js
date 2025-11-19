document.addEventListener("DOMContentLoaded", function() {
    // Select all "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    // Add click event listener to each button
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Show the alert
            alert("Please log in or sign up if you dont have an account to add items to your cart.");
        });
    });
});
