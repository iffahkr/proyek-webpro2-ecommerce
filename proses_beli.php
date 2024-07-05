<?php include_once 'database.php'; ?>

<?php
$db->query("INSERT INTO pesanan VALUES('','$_POST[tanggal]','$_POST[nama_pesanan]','$_POST[alamat_pesanan]','$_POST[no_hp]','$_POST[email]','$_POST[jumlah_pesanan]','$_POST[deskripsi]','$_POST[produk_id]')");

header("location: confirmation.php");
?>