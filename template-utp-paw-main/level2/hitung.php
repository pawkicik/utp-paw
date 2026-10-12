<?php

$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];


$valid = true;
$pesangagal = "";

if ($jumlah <= 0) {
    $valid = false;
    $pesangagal = "Jumlah pesanan minimal 1 gelas! Masukkan angka yang valid.";
}

$daftarHarga = [
    "Kopi Susu Tobi" => 18000
    "Americano" => 15000
    "Matcha Latte" => 22000
    "Kopi Tubruk" => 30000
    "Teh MGM" => 100000
];


$harga = isset($daftarHarga[$menu]) ? $daftarHarga[$menu] : 0;
$subtotal = $harga * $jumlah;


$diskon = 0;
if ($kategori === "Member" && $jumlah >= 3) {
    $diskon = 0.10 * $subtotal;
}


$total = $subtotal - $diskon;


if (!$valid) {
    echo "<script>alert('$pesangagal'); window.location='../level1/form.php';</script>";
    exit;
}


session_start();
$_SESSION['transaksi'] = [
    'nama' => $nama,
    'menu' => $menu,
    'jumlah' => $jumlah,
    'kategori' => $kategori,
    'harga_satuan' => $harga,
    'subtotal' => $subtotal,
    'diskon' => $diskon,
    'total' => $total
];


$durasiCookie = 94920;
setcookie('nama_pelanggan', $nama, time() + $durasiCookie, "/");

header("Location: ../level3/struk.php");
exit;
?>
