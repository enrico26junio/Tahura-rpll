<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan QR - TAHURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <style>
        body {
            background: url('/images/tahura-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .scanner-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .scanner-title {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }
        #reader {
            width: 100%;
            height: auto;
            margin: 0 auto;
        }
        .btn-custom {
            background-color: #005c28;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #00431f;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="scanner-container col-md-4">
            <img src="/images/tahura-logo.png" alt="TAHURA Logo" style="width: 50px;">
            <h1 class="scanner-title">Scan QR</h1>
            <div id="reader"></div>
            <button id="close-button" class="btn btn-danger mt-3">Cancel</button>
        </div>
    </div>

    <script>
        // Initialize HTML5 QR Code Scanner
        const html5QrCode = new Html5Qrcode("reader");

        html5QrCode.start(
            { facingMode: "environment" }, // Rear camera
            {
                fps: 10,
                qrbox: { width: 250, height: 250 }
            },
            (decodedText) => {
                // Handle successful scan
                alert("QR Code Scanned: " + decodedText);
                // Redirect or process the QR Code
                window.location.href = "/process-qr?data=" + encodeURIComponent(decodedText);
            },
            (errorMessage) => {
                // Optional: Log errors for debugging
                console.log(errorMessage);
            }
        ).catch((err) => {
            console.error("Unable to start scanning.", err);
        });

        // Stop scanning on button click
        document.getElementById("close-button").addEventListener("click", () => {
            html5QrCode.stop().then(() => {
                console.log("Scanning stopped.");
                window.location.href = "/login";
            }).catch((err) => {
                console.error("Error stopping scanner.", err);
            });
        });
    </script>
</body>
</html>
