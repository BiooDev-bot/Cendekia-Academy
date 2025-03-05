<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Manual</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

<div class="container">
    <h2>Pembayaran Manual</h2>
    <p>Silakan transfer ke rekening berikut:</p>
    <ul>
        <li><strong>BCA</strong>: 123-456-789 a/n EduTech.Tbk</li>
        <li><strong>Mandiri</strong>: 987-654-321 a/n Cendekia.Inc</li>
    </ul>

    <!-- Tombol untuk munculin QRIS -->
    <!-- Tombol untuk munculin pop-up QRIS -->
    <button id="showQRIS">Bayar via QRIS</button>

    <!-- Modal QRIS -->
    <div class="modal hidden" id="qrisModal">
        <div class="modal-content">
            <span class="close" id="closeQRIS">&times;</span>
            <h3>Scan QRIS</h3>
            <img src="qris.jpg" alt="QRIS Code">
        </div>
    </div>

    <h3>Konfirmasi Pembayaran</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="bukti">Upload Bukti Transfer:</label>
        <input type="file" id="bukti" name="bukti" accept="image/*" required>

        <button type="submit" onclick="window.location.href='confirm.php'">Kirim Konfirmasi</button>
    </form>
</div>

<script>
    document.getElementById("showQRIS").addEventListener("click", function() {
    document.getElementById("qrisModal").style.display = "flex";
});

document.getElementById("closeQRIS").addEventListener("click", function() {
    document.getElementById("qrisModal").style.display = "none";
});

// Tutup modal jika klik di luar area modal
window.onclick = function(event) {
    let modal = document.getElementById("qrisModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

</script>

</body>
</html>
