<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dbbukutabungan";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_errno($koneksi));

