<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPLL - Metode Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/tahura-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .payment-container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            color: white;
        }
        .payment-option {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
        }
        .payment-option:hover {
            background-color: #00d1b2;
            color: white;
        }
        .payment-option input {
            margin-right: 10px;
        }
        .payment-option ul {
            margin-top: 10px;
            margin-left: 25px;
            padding-left: 15px;
        }
        .payment-option ul li {
            list-style-type: square;
            color: #333;
        }
        .payment-option ul li:hover {
            color: white;
        }
        .total-price {
            font-size: 20px;
            font-weight: bold;
            color: #ff5733;
            text-align: right;
            margin-top: 20px;
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
        <div class="payment-container">
            <h2 class="text-center">Pilih Metode Pembayaran</h2>
            <form action="{{ route('process.payment') }}" method="POST">    
                @csrf
                <div class="payment-option">
                    <input type="radio" name="payment_method" id="transfer" value="transfer" required>
                    <label for="transfer">Transfer</label>
                    <ul>
                        <li>BCA</li>
                        <li>Mandiri</li>
                        <li>BRI</li>
                    </ul>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment_method" id="qris" value="qris" required>
                    <label for="qris">QRIS</label>
                </div>
                <div class="payment-option">
                    <input type="radio" name="payment_method" id="cash" value="cash" required>
                    <label for="cash">Cash</label>
                </div>
                <div class="total-price">
                    Total Pembayaran: Rp {{ number_format($total ?? 0, 0, ',', '.') }}
                </div>
                <button type="submit" class="btn btn-success w-100 mt-3">Bayar</button>
            </form>
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
