# A-full-stack-e-commerce-website
# Overview
This repository contains the source code for `Mystique Scents`, a full-stack e-commerce website specializing in perfumes and fragrances. The application is built using PHP for the backend logic and MySQL for data persistence, with a modern, responsive frontend powered by HTML, CSS, JavaScript, and Bootstrap 5.

The project implements core e-commerce functionalities, including product browsing, user authentication, a shopping cart system, and a contact form.

# Key Features
•	`Product Catalog:` Browse a variety of perfumes and fragrances on the shop.php page.
•	`User Authentication:` Secure sign-up (signUp.php) and sign-in (signin.php) functionality with session management.
•	`Shopping Cart:` Users can add, update, and remove items from their cart (cart.php, addtocart.js, updateItem.php, deleteItem.php).
•	`Informational Pages:` Dedicated pages for "About Us" (about.php) and "Contact" (contact.php).
•	`Responsive Design:` Utilizes Bootstrap 5 and custom CSS for a mobile-friendly experience.

		

| Component|Technology |Details |
| :--- | :--- | :--- |
| `Backend` | PHP | PHP	Used for server-side logic, session management, and database interaction.
| `Database` | MySQL | The application connects to a database named perfume_shop. |
| `Frontend` | HTML5, CSS3, JavaScript | 	Standard web technologies. |
| `Framework` | Bootstrap 5.3.3 | Used for responsive layout and pre-styled components. |
| `Database Driver` | mysqli | PHP extension for connecting to the MySQL database. |


# Installation and Setup
To run this project locally, you will need a local web server environment that supports PHP and MySQL, such as XAMPP, WAMP, or MAMP.
`1. Database Setup`
1	Create a new MySQL database named perfume_shop.
2	You will need to create the necessary tables (e.g., users, products, cart_items) and populate them with data. Note: The SQL schema is not included in the provided files, so you will need to create it manually based on the application's logic (e.g., the users table for sign-up/sign-in).

`2. Code Deployment`
3	Place the contents of the project directory into your web server's document root (e.g., htdocs for XAMPP).
4	Ensure the file permissions are correct for the web server to read the files.

`3. Configuration`
The database connection is configured in connect.php.
<?php
$con=new mysqli('localhost','root','','perfume_shop');
// ... rest of the file
?>

`4. Running the Application`
5	Start your Apache and MySQL services in your local server environment (XAMPP/WAMP/MAMP).
6	Open your web browser and navigate to the project's URL (e.g., http://localhost/project/ or similar, depending on your setup).

The project is organized as follows:

## Project Structure

The project is organized as follows:

```
project/
├── index.php             # Homepage
├── shop.php              # Product listing page
├── cart.php              # Shopping cart page
├── signin.php            # User sign-in page
├── signUp.php            # User sign-up page
├── about.php             # About Us page
├── contact.php           # Contact page
├── connect.php           # Database connection configuration
├── addtocart.js          # JavaScript for cart functionality
├── style.css             # Global styles
├── cart.css              # Cart-specific styles
├── shop.css              # Shop-specific styles
├── signin.css            # Sign-in specific styles
├── signup.css            # Sign-up specific styles
├── assets/               # General images (logo, icons, featured products)
└── shop-pics/            # Product images```

