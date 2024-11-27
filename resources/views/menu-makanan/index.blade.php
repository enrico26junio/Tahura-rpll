<!-- resources/views/menu-makanan/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPLL - Menu Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('storage/menu/tahura bg.webp') }}') no-repeat center center fixed;
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
        .menu-card img {
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            width: 100%;
        }
        .menu-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
        .menu-price {
            color: #005c28;
            font-weight: bold;
            margin-top: 5px;
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
                <!-- Iterasi data makanan -->
                @foreach ($menuMakanan as $menu)
                    <div class="col">
                        <div class="menu-card">
                            <!-- Menampilkan gambar -->
                            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="img-fluid">
                            <div class="menu-title">{{ $menu->name }}</div>
                            <div class="menu-price">Rp {{ number_format($menu->price, 0, ',', '.') }}</div>
                            <!-- Tombol Order -->
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                <button type="submit" class="btn btn-primary mt-2">Order</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav text-center">
        <a href="{{ route('menu.makanan') }}" class="me-3 active">Makanan</a>
        <a href="{{ route('menu.minuman') }}" class="me-3">Minuman</a>
        <a href="{{ route('cart') }}" class="cart-icon"><i class="bi bi-cart"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
