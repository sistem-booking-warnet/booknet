<?php
session_start();
include "koneksi_database.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "insert into pengguna(nama, email, password) values ('$nama','$email','$password')";
$exe=mysql_query($query);
echo "data berhasil disimpan ";

?>
