<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
        }
        .container {
            width: 100%;
            max-width: 400px;
            margin: auto;
            padding: 20px;
        }
        .product {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            text-align: center;
        }
        .product img {
            width: 100%;
            border-bottom: 1px solid #ddd;
        }
        .product h3 {
            padding: 10px;
        }
        .product p {
            color: #666;
            padding: 0 10px;
        }
        .product .price {
            font-size: 18px;
            font-weight: bold;
            color: #ff5733;
            margin: 10px 0;
        }
        .product button {
            background: #ff5733;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }
        .product button:hover {
            background: #e04d2b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product">
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/applewatch.png" alt="Apple Watch">
            <h3>Apple Watch</h3>
            <p>Fitness tracking, health-oriented capabilities, and wireless telecommunication</p>
            <div class="price">£1200</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/airpods.png" alt="AirPods">
            <h3>AirPods</h3>
            <p>Customize gestures exactly as you want them.</p>
            <div class="price">£79.99</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/powerbank.png" alt="PowerBank">
            <h3>PowerBank</h3>
            <p>Battery, circuitry, and one or more charging ports.</p>
            <div class="price">£99.99</div>
            <button>Add to Cart</button>
         </div>
</body>
</html>
