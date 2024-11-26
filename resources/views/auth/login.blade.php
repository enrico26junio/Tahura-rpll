<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TAHURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/tahura-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        }
        .login-title {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-align: center;
        }
        .btn-custom {
            background-color: #005c28;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #00431f;
        }
        .forgot-password {
            color: #00d1b2;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-container text-white col-md-4">
            <div class="text-center mb-4">
                <img src="/images/tahura-logo.png" alt="TAHURA Logo" style="width: 50px;">
                <h1 class="login-title">LOGIN</h1>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3 text-center">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-custom">Login</button>
                </div>
            </form>
            <div class="mt-3 text-center">
                <a href="#" class="text-white me-3">Log In</a>
                <a href="{{ route('scan.qr') }}" class="btn btn-custom btn-sm">Scan QR</a>
                <a href="#" class="text-white">Sign In</a>
            </div>
        </div>
    </div>
</body>
</html>
