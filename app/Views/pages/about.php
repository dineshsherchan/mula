
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f7f6;
            text-align: center;
            padding: 40px 20px;
            font-size: 16px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: scale(1.02);  /* Subtle scaling effect on hover */
        }

        h1, h2 {
            color: #333;
            margin-bottom: 15px;
            font-size: 2.2em;
        }

        p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 1em;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-bottom: 20px;
        }

        li {
            color: #555;
            font-size: 1em;
            margin-bottom: 10px;
            transition: background-color 0.3s ease-in-out; /* Smooth transition on hover */
        }

        li:hover {
            background-color: #f2f2f2;  /* Highlight list item on hover */
            padding-left: 10px;  /* Slight indentation for hover effect */
        }

        .link {
            margin-top: 30px;
            font-size: 1.1em;
        }

        .link a {
            color: #ff5733;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out, text-decoration 0.3s ease-in-out;
        }

        .link a:hover {
            color: #d94f2d;
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 30px;
            }
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1.1em;
            }
            .link a {
                font-size: 1.2em;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px;
            }
            .container {
                width: 100%;
                padding: 20px;
            }
            h1 {
                font-size: 1.8em;
            }
            p {
                font-size: 1em;
            }
            .link a {
                font-size: 1.1em;
            }
        }
    </style>

<body>
    <div class="container">
        <h1>About Us</h1>
    <ul>
        <li>Welcome to our e-commerce store! We are committed to providing the best quality products at the most affordable prices.</li>
        <li>Our mission is to make online shopping easy, secure, and enjoyable for everyone.</li>
        <li>We strive to offer a wide range of products to meet the needs of our diverse customer base.</li>
        <li>Thank you for choosing us for your shopping needs!</li>
    </ul>
        
        <h2>Terms and Conditions</h2>
        
        <ul>
            <li>By using our website, you agree to comply with our terms and conditions.</li>
            <li>All purchases made on our platform are subject to availability and pricing at the time of the transaction.</li>
            <li>We reserve the right to update our terms at any time without prior notice.</li>
            <li>Your personal data is handled with the utmost care and in compliance with privacy laws.</li>
            <li>If you have any questions regarding our terms, feel free to contact our support team.</li>
        </ul>
    
        <div class="link">
            <a href="<?= base_url('Terms') ?>">Read our Full Terms and Conditions</a>
        </div>
    </div>
</body>

