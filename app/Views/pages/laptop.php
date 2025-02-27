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
        max-width: 1200px;
        margin: auto;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .product {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        width: 100%;
        text-align: center;
        transition: transform 0.3s ease-in-out;
    }

    .product:hover {
        transform: translateY(-5px);
    }

    /* Set image size to a smaller value */
    .product img {
        width: 60%; /* Reduce width to 60% of the container */
        max-width: 150px; /* Limit the max width of the image to 150px */
        height: auto;
        border-bottom: 1px solid #ddd;
        margin: 10px 0;
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
        transition: background-color 0.3s;
    }

    .product button:hover {
        background: #e04d2b;
    }

    /* Responsive Design */
    @media screen and (max-width: 1024px) {
        .product {
            width: 48%; /* 2 items per row on medium screens */
        }
    }

    @media screen and (max-width: 768px) {
        .product {
            width: 100%; /* 1 item per row on tablets */
        }
    }

    @media screen and (max-width: 480px) {
        /* Further reduce image size for mobile */
        .product img {
            width: 50%; /* Even smaller image size on mobile */
            max-width: 120px; /* Limit the max width further */
        }

        .product .price {
            font-size: 16px;
        }

        .product button {
            font-size: 14px;
        }
    }
</style>
<body>
    <div class="container">
        <div class="product">
            <img src="images/apple watch.png" alt="Apple Watch">
            <h3>Apple Watch</h3>
            <p>Fitness tracking, health-oriented capabilities, and wireless telecommunication</p>
            <div class="price">£1200</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="images/airpods.png" alt="AirPods">
            <h3>AirPods</h3>
            <p>Customize gestures exactly as you want them.</p>
            <div class="price">£79.99</div>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="images/powerbank.png" alt="PowerBank">
            <h3>PowerBank</h3>
            <p>Battery, circuitry, and one or more charging ports.</p>
            <div class="price">£99.99</div>
            <button>Add to Cart</button>
         </div>
         <div class="product">
            <img src="images/powerbank.png" alt="PowerBank">
            <h3>PowerBank</h3>
            <p>Battery, circuitry, and one or more charging ports.</p>
            <div class="price">£99.99</div>
            <button>Add to Cart</button>
         </div>
         <div class="product">
            <img src="images/powerbank.png" alt="PowerBank">
            <h3>PowerBank</h3>
            <p>Battery, circuitry, and one or more charging ports.</p>
            <div class="price">£99.99</div>
            <button>Add to Cart</button>
         </div>



</body>
