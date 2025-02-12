<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced E-Commerce Home Page</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Header Section */
        header {
            background-color: #444;
            color: white;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        nav {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #1e90ff;
        }

        /* Auth Buttons - Login and Register */
        .auth-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .auth-buttons button {
            padding: 10px 20px;
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s;
        }

        .auth-buttons button:hover {
            background-color: #0056b3;
        }

        /* Search Bar */
        .search-bar {
            margin-top: 15px;
            display: flex;
            justify-content: center;
        }

        .search-bar input {
            padding: 12px;
            width: 280px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-bar button {
            padding: 12px;
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        /* Main Section (Product Grid) */
        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 280px;
            margin: 20px;
            text-align: center;
            padding: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .product-card img:hover {
            transform: scale(1.05);
        }

        .product-card h3 {
            margin-top: 15px;
            font-size: 20px;
            color: #333;
        }

        .product-card p {
            font-size: 14px;
            color: #777;
            margin: 10px 0;
        }

        .product-card .price {
            font-size: 18px;
            color: #333;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-card .btn {
            background-color: #1e90ff;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-card .btn:hover {
            background-color: #0056b3;
        }

        /* Featured Section */
        .featured-products {
            background-color: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .featured-products h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .category-links {
            text-align: center;
            margin: 40px 0;
        }

        .category-links a {
            margin: 0 25px;
            font-size: 18px;
            color: #1e90ff;
            text-decoration: none;
            font-weight: bold;
        }

        .category-links a:hover {
            text-decoration: underline;
        }

        /* Footer Section */
        footer {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
       <!-- Header Section -->
    <header>
        <h1>My E-Commerce Store</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">Contact</a>
            <a href="#">Cart</a>
        </nav>

        <!-- Auth Buttons (Login & Register) -->
        <div class="auth-buttons">
           <a href="login.php"><button>Login</button></a>
           <a href="registration.php"><button>Register</button></a>
</div>

        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search for products...">
            <button>Search</button>
        </div>
    </header>

    <!-- Featured Products Section -->
    <div class="featured-products">
        <h2>Featured Products</h2>
        <div class="main-content">
            <!-- Product Card 1 -->
            <div class="product-card">
                <img src="https://home/stud/1/2125093/public_html/bhai/public/images/3.jpg" alt="Mobile">
                <h3>Iphone</h3>
                <p>High-quality item that meets all your needs.</p>
                <div class="price">£19.99</div>
                <button class="btn">Add to Cart</button>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card">
                <img src="https://home/stud/1/2125093/public_html/bhai/public/images/1.jpg" alt="Iphone">
                <h3>laptop</h3>
                <p>Durable and affordable. A must-have for everyone.</p>
                <div class="price">£150</div>
                <button class="btn">Add to Cart</button>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <img src="https://home/stud/1/2125093/public_html/bhai/public/images/2.jpg" alt="Washing Machine">
                <h3>Washing Machine </h3>
                <p>Stylish and functional. Perfect for any occasion.</p>
                <div class="price">£39.99</div>
                <button class="btn">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Product Categories Links -->
    <div class="category-links">
        <a href="#">Electronics</a>
        <a href="#">Clothing</a>
        <a href="#">Home & Kitchen</a>
        <a href="#">Sports</a>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>Thank You </p>
    </footer>

</body>
</html>
