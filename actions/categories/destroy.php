<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "<h2>Data Kategori Diterima</h2>";
    echo "<p>ID Kategori: " . htmlspecialchars($id) . "</p>";
} else {
    echo "<h2>ID Kategori Tidak Ditemukan</h2>";
}

?>