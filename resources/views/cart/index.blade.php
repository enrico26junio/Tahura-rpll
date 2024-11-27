<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - RPLL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('storage/menu/tahura bg.webp') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: white;
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
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .cart-item img {
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            width: 100px;
        }
        .cart-item-details {
            flex: 1;
            padding-left: 15px;
        }
        .cart-item-name {
            font-weight: bold;
        }
        .cart-item-price {
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
        .total-price {
            font-weight: bold;
            font-size: 1.2rem;
            color: #00d1b2;
        }
    </style>
</head>
<body>
    <!-- Gambar Logo -->
    <div class="text-center my-3">
        <img src="{{ asset('storage/menu/logo tahura.png') }}" alt="Tahura Logo" style="width: 150px;">
    </div>

    <div class="container my-5">
        <div class="cart-container">
            <h3 class="text-center">Shopping Cart</h3>
            
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if (count($cart) > 0)
                @foreach ($cart as $item)
                    <div class="cart-item">
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                        <div class="cart-item-details">
                            <div class="cart-item-name">{{ $item['name'] }}</div>
                            <div class="cart-item-price">Rp {{ number_format($item['price'], 0, ',', '.') }}</div>
                        </div>
                    </div>
                @endforeach
                <div class="total-price">Total: Rp {{ number_format($total, 0, ',', '.') }}</div>
            @else
                <p class="text-center">Your cart is empty.</p>
            @endif
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
