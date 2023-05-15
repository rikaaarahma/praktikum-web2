<?php 
require_once 'dbkoneksi.php';

// Delete Id
$_iddel=$_GET['iddel'];

// Delete Pelanggan
$sql="DELETE FROM pelanggan WHERE id=?";
$st = $conn->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:index.php?hal=pelanggan');
?>