<?php include_once 'database.php'; ?>

<?php
$db->query("INSERT INTO produk VALUES('','$_POST[kode]','$_POST[nama]','$_POST[harga_jual]','$_POST[harga_beli]','$_POST[stok]','$_POST[min_stok]','$_POST[deskripsi]','$_POST[kategori_produk_id]')");

header("location: kelola_produk.php");
?>