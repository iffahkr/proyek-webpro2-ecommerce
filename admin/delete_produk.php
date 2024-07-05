<?php include_once 'database.php'; ?>

<?php
$db->query("DELETE FROM produk WHERE id='$_GET[id]'");

header("location: kelola_produk.php");
?>