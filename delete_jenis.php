<?php 
require_once 'dbkoneksi.php';

// Delete Id
$_iddel=$_GET['iddel'];

// Delete Jenis
$sql="DELETE FROM jenis_produk WHERE id=?";
$st = $conn->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:index.php?hal=jenis_produk');
?>