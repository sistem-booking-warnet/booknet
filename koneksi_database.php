<?php
$servername = "localhost";
$database = "sbw";
$username = "root";
$password = "";

//nama database: sbw (sistem booking warnet)
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);

?>