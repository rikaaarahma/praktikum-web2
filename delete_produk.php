<?php 
require_once 'dbkoneksi.php';

// Delete id
$_iddel=$_GET['iddel'];

// Delete Produk
$sql="DELETE FROM produk WHERE id=?";
$st = $conn->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:index.php?hal=home');
?>