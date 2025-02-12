<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
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
            margin-bottom: 18px;
            width: 100%;
            transition: border 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 0;
            width: 100%;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-primary:active {
            transform: scale(1);
        }

        .error {
            color: red;
            font-size: 12px;
            visibility: hidden;
        }

        .form-control:invalid {
            border-color: red;
        }

        .form-control:invalid + .error {
            visibility: visible;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <form id="myForm" method="post" action="<?= site_url('registration/do_register') ?>">
                <h2>Register</h2>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                    <span class="error" id="name_error">Please enter a valid name.</span>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Your password" required>
                </div>

                <div class="form-group">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Mobile Number" required>
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="address" placeholder="Your Address" required>
                </div>

                <div class="form-group">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input name="dob" type="date" class="form-control" id="dob" required>
                </div>

                <div class="form-group">
                    <?= csrf_field() ?>
                    <input type="submit" value="Register" class="btn-primary">
                </div>
            </form>
            <div class="footer-text">
                <p>Already have an account? <a href="<?= site_url('login') ?>">Login here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
