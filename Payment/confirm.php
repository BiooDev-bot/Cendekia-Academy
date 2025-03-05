<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran - Cria Edukasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
            color: #2e7d32;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: auto;
        }
        .spinner {
            border: 4px solid #c8e6c9;
            border-top: 4px solid #2e7d32;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .message {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Pembayaran</h2>
        <p>Pembayaran Anda sedang dalam proses verifikasi.</p>
        <div class="spinner"></div>
        <p class="message">Proses ini memerlukan waktu yang cukup lama, anda dapat keluar ke menu beranda selagi menunggu</p>
        <p class="message">Konfirmasi akan dikirim melalui nomor WhatsApp berikut. <a href="#">+628592073445</a></p>
        <p>Jika ada kendala, hubungi <a href="#">+628592073445</a>.</p>
    </div>
</body>
</html>
