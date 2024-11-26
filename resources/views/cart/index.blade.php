<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPLL - Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Tambahkan link ke Bootstrap Icons -->
    <style>
        body {
            background: url('/images/tahura-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .cart-container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }
        .cart-item {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }
        .cart-title {
            font-size: 18px;
            font-weight: bold;
        }
        .cart-price {
            color: #005c28;
            font-weight: bold;
        }
        .total-price {
            font-size: 20px;
            font-weight: bold;
            color: #ff5733;
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
        <div class="cart-container text-white">
            @foreach ($cart as $item)
                <div class="cart-item">
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-fluid mb-2" style="width: 100px;">
                    <div class="cart-title">{{ $item['name'] }}</div>
                    <div class="cart-price">Rp {{ number_format($item['price'], 0, ',', '.') }}</div>
                    <div>Quantity: {{ $item['quantity'] }}</div>
                    <div>Subtotal: Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</div>
                </div>
            @endforeach
            <div class="total-price">
                Total: Rp {{ number_format($total, 0, ',', '.') }}
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('menu.makanan') }}" class="btn btn-outline-light">Batal</a>
                <button class="btn btn-custom">Bayar</button>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav text-center">
        <a href="{{ route('menu.makanan') }}" class="me-3">Makanan</a>
        <a href="{{ route('menu.minuman') }}" class="me-3">Minuman</a>
        <a href="{{ route('cart') }}" class="cart-icon"><i class="bi bi-cart"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
