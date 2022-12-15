<?php
require_once'../koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);

$sql = "INSERT INTO memberacc (fullname, email, username, password, cpassword) VALUES ('$nama', '$email', '$username', '$pass', '$cpass')";

if ($koneksi -> query($sql) === TRUE) {
    echo "</br>". "Registrasi Akun Anda Berhasil";
} else {
    echo "Terjadi Kesalahan:".$sql."</br>".$koneksi -> error;
}

$koneksi -> close();
?>