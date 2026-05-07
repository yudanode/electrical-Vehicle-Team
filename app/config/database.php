<?php

$conn = mysqli_connect("localhost", "root", "", "molikom-admin");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
