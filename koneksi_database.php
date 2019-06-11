<?php
$servername = "localhost";
$database = "sbw";
$username = "root";
$password = "";

//nama database: sbw (sistem booking warnet)
// membuat koneksi
$conn = mysql_connect($servername, $username, $password);
mysql_select_db('sbw');
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysql_connect_error());
}
?>
