<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPLL - Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/tahura-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .menu-container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }
        .menu-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }
        .menu-title {
            font-size: 18px;
            font-weight: bold;
        }
        .menu-price {
            color: #005c28;
            font-weight: bold;
        }
        .bottom-nav {
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px 0;
            color: #fff;
        }
        .bottom-nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        .bottom-nav a.active {
            color: #00d1b2;
        }
        .cart-icon {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="menu-container text-white">
            <div class="row row-cols-2 row-cols-md-3 g-3">
                @foreach ($menuMinuman as $menu)
                    <div class="col">
                        <div class="menu-card">
                            <img src="{{ $menu->image }}" alt="{{ $menu->name }}" class="img-fluid mb-2">
                            <div class="menu-title">{{ $menu->name }}</div>
                            <div class="menu-price">Rp {{ number_format($menu->price, 0, ',', '.') }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav text-center">
        <a href="{{ route('menu.makanan') }}" class="me-3">Makanan</a>
        <a href="{{ route('menu.minuman') }}" class="me-3 active">Minuman</a>
        <a href="{{ route('cart') }}" class="cart-icon"><i class="bi bi-cart"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
