<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPLL - Pembayaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="alert alert-success">
            <h2 class="text-center">Pembayaran Berhasil!</h2>
            <p>Metode Pembayaran: <strong>{{ ucfirst($payment['method']) }}</strong></p>
            <p>Total Pembayaran: <strong>Rp {{ number_format($payment['total_price'], 0, ',', '.') }}</strong></p>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3 w-100">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
