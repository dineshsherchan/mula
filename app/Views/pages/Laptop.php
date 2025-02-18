<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop</title>
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
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/macbookair.png" alt="Macbook Air Pro">
            <h3>Macbook Air Pro</h3>
            <p>Apple Silicon Porcessor</p>
            <div class="price">£1200</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/samsunggalaxy.png" alt="Samsung">
            <h3>Samsung Galaxy Book</h3>
            <p>Customize gestures exactly as you want them.</p>
            <div class="price">£79.99</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/lenovo.png" alt="Lenovo">
            <h3>Lenovo</h3>
            <p>4GB RAM/64 GB eMMC .</p>
            <div class="price">£99.99</div>
            <button>Add to Cart</button>

        </div>
        <div class="product">
            <img src="/home/stud/1/2125093/public_html/bhai/public/images/asus.png" alt="ASUS Chromebook">
            <h3>Best Laptop ever found</h3>
            <p>AUSU Gaming Business Education Latops.</p>
            <div class="price">£89.99</div>
            <button>Add to Cart</button>
            
        </div>
    </div>
</body>
</html>
