<?php
require "db.php";
require "Laundry.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_user = $_POST['nama_user'];
    $password = $_POST['password'];
    $jenis_laundry = $_POST['jenis_laundry'];
    $isian_laundry = $_POST['isian_laundry'];
    $karakteristik = isset($_POST['karakteristik']) ? $_POST['karakteristik'] : [];
    $keterangan = $_POST['keterangan'];

    $laundry = new Laundry($nama_user, $password, $jenis_laundry, $isian_laundry, $karakteristik, $keterangan);

    $sql = "INSERT INTO laundry_orders (nama_user, password, jenis_laundry, isian_laundry, karakteristik, keterangan) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $laundry->nama_user,
        $laundry->password,
        $laundry->jenis_laundry,
        $laundry->isian_laundry,
        $laundry->karakteristik,
        $laundry->keterangan
    ]);

    echo "Data berhasil disimpan! <a href='index.php'>Kembali</a>";
}
