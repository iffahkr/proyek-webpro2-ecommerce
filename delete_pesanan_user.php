<?php include_once 'database.php'; ?>

<?php
$db->query("DELETE FROM pesanan WHERE id='$_GET[id]'");

header("location: confirmation.php");
?>