<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname="topupin";

$koneksi = mysqli_connect($server,$username,$password,$dbname)or die("Koneksi Gagal Ke Database");