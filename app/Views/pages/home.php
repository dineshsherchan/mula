<style>
        body {
            background-color: #e1f2e8;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }

        .hero {
            text-align: center;
            padding: 50px;
            background-color: #cce7d0;
        }

        .hero h1 {
            font-size: 36px;
        }

        .container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 40px 0;
        }

        .product {
            width: 250px;
            background: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 18px;
            margin: 15px 0;
        }

        .product p {
            font-size: 16px;
            color: #555;
        }

        .product button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .product button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?= base_url('Mobile') ?>">Mobile</a>
        <a href="<?= base_url('Laptop') ?>">Laptop</a>
        <a href="<?= base_url('Gadgets') ?>">Gadgets</a>
        <a href="<?= base_url('About') ?>">About</a>
        <a href="<?= base_url('contact') ?>">Contact</a>
    </nav>

    <div class="hero">
        <h1>Your wish our wish.</h1>
        <p>Buy our products with ease.</p>
    </div>

    <section class="container">
        <div class="product">
            <img src="<?= base_url('images/iphone16pro.png') ?>" alt="Iphone 16pro ">
            <h3>Guitar</h3>
            <p>$200 - Buy</p>
            <button>Buy Now</button>
            
        </div>

        <div class="product">
            <img src="<?= base_url('images/macbookairpro.png') ?>" alt="Macbook AIrPro">
            <h3>Electric Guitar</h3>
            <p>$400 - Buy</p>
            <button>Buy Now</button>
            
        </div>

        <div class="product">
            <img src="<?= base_url('images/ipad.png') ?>" alt="Ipad">
            <h3>Drums</h3>
            <p>$600 - Buy</p>
            <button>Buy Now</button>
            
        </div>
    </section>
</body>