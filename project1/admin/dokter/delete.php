<?php
// Memanggil file koneksi database
require '../dbkoneksi.php';

// Memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Menonaktifkan sementara constraint foreign key
        $dbh->exec("SET FOREIGN_KEY_CHECKS=0");

        // Query untuk menghapus data dokter berdasarkan id
        $sql = "DELETE FROM dokter WHERE id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$id]);

        // Mengaktifkan kembali constraint foreign key setelah penghapusan selesai
        $dbh->exec("SET FOREIGN_KEY_CHECKS=1");

        // Redirect ke halaman index.php setelah proses penghapusan selesai
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        // Tangani kesalahan jika ada
        echo "Error: " . $e->getMessage();
        exit();
    }
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
