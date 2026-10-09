<?php

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    echo "<h2>Penulis Berhasil Dihapus!</h2>";
    echo "<p>ID Penulis: " . htmlspecialchars((string) $id) . "</p>";
} else {
    echo "<h2>Gagal Menghapus Penulis</h2>";
    echo "<p>ID penulis tidak ditemukan.</p>";
}

?>