<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        link {
            margin-top: 20px;
        }
        .link a {
            color: #ff5733;
            text-decoration: none;
            font-weight: bold;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to our e-commerce store! We are committed to providing the best quality products at the most affordable prices.</p>
        <p>Our mission is to make online shopping easy, secure, and enjoyable for everyone.</p>
        <p>We strive to offer a wide range of products to meet the needs of our diverse customer base.</p>
        <p>Thank you for choosing us for your shopping needs!</p>
        
        <h2>Terms and Conditions</h2>
        <p>By using our website, you agree to comply with our terms and conditions.</p>
        <p>All purchases made on our platform are subject to availability and pricing at the time of the transaction.</p>
        <p>We reserve the right to update our terms at any time without prior notice.</p>
        <p>Your personal data is handled with the utmost care and in compliance with privacy laws.</p>
        <p>If you have any questions regarding our terms, feel free to contact our support team.</p>
    </div>
    <div class="link">
           <li><a href = "<?= base_url('Terms_conditions') ?>">Read our Full Terms and Conditions</a></li>
    </div>
</body>
</html>
