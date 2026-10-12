<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kedai Kopi Tobi - Pemesanan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Kedai Kopi Tobi</h2>
        
 
        <?php if (isset($_COOKIE['nama_pelanggan'])): ?>
            <div class="welcome" style="color: #2e7d32; font-weight: bold; margin-bottom: 15px;">
                Selamat datang kembali, <?= htmlspecialchars($_COOKIE['nama_pelanggan']) ?>!
            </div>
        <?php endif; ?>

        <h3>Daftar Menu</h3>
        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; margin-bottom: 20px;">
            <tr>
                <th>Menu</th>
                <th>Harga</th>
            </tr>
            <tr><td>Kopi Susu Tobi</td><td>Rp18.000</td></tr>
            <tr><td>Americano</td><td>Rp15.000</td></tr>
            <tr><td>Matcha Latte</td><td>Rp22.000</td></tr>
            <tr><td>Kopi Tubruk</td><td>Rp30.000</td></tr>
            <tr><td>Teh MGM</td><td>Rp100.000</td></tr>
        </table>

        <h3>Form Pemesanan</h3>
    
        <form action="../level2/hitung.php" method="POST">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama">Nama Pelanggan:</label><br>
                <input type="text" id="nama" name="nama" required style="width: 100%; padding: 8px;" value="<?= isset($_COOKIE['nama_pelanggan']) ? htmlspecialchars($_COOKIE['nama_pelanggan']) : '' ?>">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="menu">Pilih Minuman:</label><br>
                <select id="menu" name="menu" required style="width: 100%; padding: 8px;">
                    <option value="">-- Pilih Menu --</option>
                    <option value="Kopi Susu Tobi">Kopi Susu Tobi (Rp18.000)</option>
                    <option value="Americano">Americano (Rp15.000)</option>
                    <option value="Matcha Latte">Matcha Latte (Rp22.000)</option>
                    <option value="Kopi Tubruk">Kopi Tubruk (Rp30.000)</option>
                    <option value="Teh MGM">Teh MGM (Rp100.000)</option>
                </select>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="jumlah">Jumlah Gelas:</label><br>
                <input type="number" id="jumlah" name="jumlah" required style="width: 100%; padding: 8px;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="kategori">Kategori Pelanggan:</label><br>
                <select id="kategori" name="kategori" required style="width: 100%; padding: 8px;">
                    <option value="Reguler">Reguler</option>
                    <option value="Member">Member</option>
                </select>
            </div>

            <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; cursor: pointer;">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>