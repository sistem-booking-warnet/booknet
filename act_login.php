<?php
session_start();
include "koneksi_database.php";

if(isset($_POST["login"])) {
        $email   = $_POST["email"];
        $password   = $_POST["password"];
}

?>

