<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "tictactoe";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Koneksi Gagal.')</script>");
}

?>