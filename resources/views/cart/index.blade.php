<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPLL - Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-item .item-name {
            font-size: 16px;
            font-weight: bold;
        }
        .cart-item .item-price {
            color: #005c28;
            font-weight: bold;
        }
        .cart-item .quantity {
            display: flex;
            align-items: center;
        }
        .cart-item .quantity input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }
        .cart-item .remove-btn {
            color: red;
            cursor: pointer;
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
            <!-- Cart Items -->
            <div class="cart-item">
                <div class="item-name">Nama Makanan/Minuman</div>
                <div class="item-price">Rp 15,000</div>
                <div class="quantity">
                    <button class="btn btn-outline-secondary btn-sm">-</button>
                    <input type="number" value="1" min="1" class="form-control form-control-sm" />
                    <button class="btn btn-outline-secondary btn-sm">+</button>
                </div>
                <div class="remove-btn">X</div>
            </div>

            <div class="cart-item">
                <div class="item-name">Nama Makanan/Minuman</div>
                <div class="item-price">Rp 10,000</div>
                <div class="quantity">
                    <button class="btn btn-outline-secondary btn-sm">-</button>
                    <input type="number" value="1" min="1" class="form-control form-control-sm" />
                    <button class="btn btn-outline-secondary btn-sm">+</button>
                </div>
                <div class="remove-btn">X</div>
            </div>

            <!-- Total Pembayaran -->
            <div class="d-flex justify-content-between mt-3">
                <div class="text-white">Total Pembayaran:</div>
                <div class="text-white font-weight-bold">Rp 25,000</div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-outline-light">Batal</button>
                <button class="btn btn-custom">Bayar</button>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav text-center">
        <a href="{{ route('menu.makanan') }}" class="me-3">Makanan</a>
        <a href="{{ route('menu.minuman') }}" class="me-3">Minuman</a>
        <a href="{{ route('cart') }}" class="cart-icon active"><i class="bi bi-cart"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
