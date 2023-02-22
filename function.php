<?php
// function untuk memulai sesi
session_start();

// function untuk mengakses / connect db_inventory
$conn = mysqli_connect("localhost", "root", "", "db_inventory");

// function untuk menambah data akun ke table data_user
if (isset($_POST['addNewAccount'])) {
    $tanggalAkun = $_POST['tglAkun'];
    $namaUser = $_POST['namaUser'];
    $emailUser = $_POST['emailUser'];
    $passwordUser = md5($_POST['passwordUser']);
    $tipeAkun = $_POST['tipeAkun'];

    $addToUserTable = mysqli_query($conn, "INSERT INTO data_user (tanggal, username, email, password, account_type) VALUES ('$tanggalAkun', '$namaUser', '$emailUser', '$passwordUser', '$tipeAkun')");

    if ($addToUserTable) {
        echo "Data User BERHASIL di Tambahkan";
    } else {
        echo "Data User GAGAL di Tambahkan";
    }
}

//function untuk menambah data supplier ke table data_supplier
if (isset($_POST['addNewSupplier'])) {
    $tanggalSupplier = $_POST['tglSupplier'];
    $namaSupplier = $_POST['namaSupplier'];
    $alamatSupplier = $_POST['alamatSupplier'];
    $telpSupplier = $_POST['telpSupplier'];

    $addToSupplierTable = mysqli_query($conn, "INSERT INTO data_supplier (tanggal, nama_supplier, alamat_supplier, telp_supplier) VALUES ('$tanggalSupplier', '$namaSupplier', '$alamatSupplier', '$telpSupplier')");

    if ($addToSupplierTable) {
        echo "Data Supplier BERHASIL di Tambahkan";
    } else {
        echo "Data Supplier GAGAL di Tambahkan";
    }
}

//function untuk menambah data stok barang ke table data_stock
if (isset($_POST['addNewStock'])) {
    $tanggalStock = $_POST['tglStock'];
    $namaBarang = $_POST['namaBarang'];
    $kategoriBarang = $_POST['kategoriBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];
    $statusBarang = $_POST['statusBarang'];

    $addToStockTable = mysqli_query($conn, "INSERT INTO data_stock (tanggal, nama_barang, kategori_barang, jumlah_barang, status_barang) VALUES ('$tanggalStock', '$namaBarang', '$kategoriBarang', '$jumlahBarang', '$statusBarang')");

    if ($addToStockTable) {
        echo "Data Stock BERHASIL di Tambahkan";
    } else {
        echo "Data Stock GAGAL di Tambahkan";
    }
}

//function untuk menambah data barang masuk ke table data_barang_masuk
if (isset($_POST['addIncomingGoods'])) {
    $tanggalBarangMasuk = $_POST['tglIncoming'];
    $namaBarangMasuk = $_POST['namaBarang'];
    $kategoriBarangMasuk = $_POST['kategoriBarang'];
    $jumlahBarangMasuk = $_POST['jumlahBarang'];
    $totalHarga = $_POST['totalHarga'];

    $addToIncomingTable = mysqli_query($conn, "INSERT INTO data_barang_masuk (tanggal, nama_barang, kategori_barang, jumlah_barang, harga_barang) VALUES ('$tanggalBarangMasuk', '$namaBarangMasuk', '$kategoriBarangMasuk', '$jumlahBarangMasuk', '$totalHarga')");

    if ($addToIncomingTable) {
        echo "Data Barang Masuk BERHASIL di Tambahkan";
    } else {
        echo "Data Barang Masuk GAGAL di Tambahkan";
    }
}

//function untuk menambah data barang masuk ke table data_barang_masuk
if (isset($_POST['addOutcomingGoods'])) {
    $tanggalBarangKeluar = $_POST['tglOutcoming'];
    $namaBarangKeluar = $_POST['namaBarang'];
    $kategoriBarangKeluar = $_POST['kategoriBarang'];
    $jumlahBarangKeluar = $_POST['jumlahBarang'];
    $totalHarga = $_POST['totalHarga'];

    $addToOutcomingTable = mysqli_query($conn, "INSERT INTO data_barang_keluar (tanggal, nama_barang, kategori_barang, jumlah_barang, harga_barang) VALUES ('$tanggalBarangKeluar', '$namaBarangKeluar', '$kategoriBarangKeluar', '$jumlahBarangKeluar', '$totalHarga')");

    if ($addToOutcomingTable) {
        echo "Data Barang Keluar BERHASIL di Tambahkan";
    } else {
        echo "Data Barang Keluar GAGAL di Tambahkan";
    }
}
?>