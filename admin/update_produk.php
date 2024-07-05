<?php include_once 'database.php'; ?>

<?php
$db->query("UPDATE produk SET kode='$_POST[kode]', nama='$_POST[nama]', harga_jual='$_POST[harga_jual]', harga_beli='$_POST[harga_beli]', stok='$_POST[stok]', min_stok='$_POST[min_stok]', deskripsi='$_POST[deskripsi]', kategori_produk_id='$_POST[kategori_produk_id]'");

header("location: kelola_produk.php");
?>
