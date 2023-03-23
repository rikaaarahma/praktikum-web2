<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'rika' && $password == '12345') {
        $_SESSION['username'] = $username;
        header('location:home.php');
    } else {

        $_SESSION['gagal'] = '<span style="color: red;">username atau password salah</span>';
        header('location:index.php');
    }
}
?>