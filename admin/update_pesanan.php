<?php include_once 'database.php'; ?>

<?php
$db->query("UPDATE pesanan SET tanggal='$_POST[tanggal]', nama_pesanan='$_POST[nama_pesanan]', alamat_pesanan='$_POST[alamat_pesanan]', no_hp='$_POST[no_hp]', email='$_POST[email]', jumlah_pesanan='$_POST[jumlah_pesanan]', deskripsi='$_POST[deskripsi]', produk_id='$_POST[produk_id]'");

header("location: kelola_pesanan.php");
?>