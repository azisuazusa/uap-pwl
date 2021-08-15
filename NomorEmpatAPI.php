<?php

include "NomorTiga.php";

$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$harga = $_POST['harga_barang'];
$jumlah = $_POST['jumlah_barang'];
$executeQuery;
$action = isset($_GET['action']) ? $_GET['action'] : "";
switch ($action) {
    case 'create':
        $executeQuery = mysqli_query($conn, "INSERT INTO table_barang VALUES ('$kode', '$nama', '$harga', '$jumlah')");
    break;
    case 'update':
        $executeQuery = mysqli_query($conn, 
            "UPDATE table_barang " .
            "SET nama_barang = '$nama', " .
                "harga_barang = '$harga', " .
                "jumlah_barang = '$jumlah' ". 
            "WHERE kode_barang = '$kode'");
    break;
    case 'delete':
        $executeQuery = mysqli_query($conn, "DELETE FROM table_barang WHERE kode_barang = '$kode'");
    break;
    default:
        $executeQuery = mysqli_query($conn, "SELECT * FROM table_barang");
        if ($executeQuery) {
            $rows = [];
            while ($row = mysqli_fetch_assoc($executeQuery)) {
                $rows[] = $row;
            }
            echo json_encode($rows);
        }
}

if (!$executeQuery) {
    echo "Terjadi kesalahan!";
}
