<?php 
if (isset($_GET['id'])) { $id = $_GET['id']; 
echo "<h2>Buku Berhasil Dihapus!</h2>"; 
echo "<p>ID Buku: " . htmlspecialchars($id) . "</p>"; 
} 
else { 
    echo "<h2>Gagal Menghapus Buku</h2>";
    echo "<p>ID buku tidak ditemukan.</p>";
      } 
?>