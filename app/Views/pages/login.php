<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 380px;
            text-align: center;
        }

        h1 {
            font-size: 26px;
            color: #333;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .form-label {
            font-size: 14px;
            color: #555;
            font-weight: 500;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 14px;
            margin-bottom: 20px;
            width: 100%;
            transition: border 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 8px rgba(74, 144, 226, 0.4);
        }

        .btn-primary {
            background-color: #4a90e2;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 20px;
            width: 100%;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #357ab7;
            transform: scale(1.05);
        }

        .btn-primary:active {
            transform: scale(1);
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .footer-text {
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('login/do_login') ?>">
                <?= csrf_field() ?>
                <h1>Login</h1>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Your password" required>
                

                <div class="mb-3">
                    <input type="submit" value="Login" class="btn-primary">
                    
                </div>
                <div class="mb-3">
                    <input type="submit" value="Register" class="btn-primary">
                 </div>


            </form>
            <div class="footer-text">
                <p>Forgot your password? <a href="#">Reset here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
