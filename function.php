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
    $idBarangMasuk = $_POST['namaBarang'];
    $jumlahBarangMasuk = $_POST['jumlahBarang'];
    $totalHarga = $_POST['totalHarga'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangMasuk'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);

    $stockLama = $ambilDataStock['jumlah_barang'];

    //jika jumlah barang masuk > 0 maka proses akan dilanjutkan karena valid
    if ($jumlahBarangMasuk > 0) {
        $stockBaru = $stockLama + $jumlahBarangMasuk;
        $addToIncomingTable = mysqli_query($conn, "INSERT INTO data_barang_masuk (tanggal, id_barang, jumlah_barang, harga_barang) VALUES ('$tanggalBarangMasuk', '$idBarangMasuk', '$jumlahBarangMasuk', '$totalHarga')");

        $addToStockTable = mysqli_query($conn, "UPDATE data_stock SET status_barang= 'Tersedia' WHERE id_barang = '$idBarangMasuk'");

        $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_barang='$stockBaru' WHERE id_barang = '$idBarangMasuk'");
        if ($addToIncomingTable) {
            echo "Data Barang Masuk BERHASIL di Tambahkan";
        } else {
            echo "Data Barang Masuk GAGAL di Tambahkan";
        }
    }
}

//function untuk menambah data barang masuk ke table data_barang_masuk
if (isset($_POST['addOutcomingGoods'])) {
    $tanggalBarangKeluar = $_POST['tglOutcoming'];
    $idBarangKeluar = $_POST['namaBarang'];
    $jumlahBarangKeluar = $_POST['jumlahBarang'];
    $totalHarga = $_POST['totalHarga'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangKeluar'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);

    $stockLama = $ambilDataStock['jumlah_barang'];

    //jika stok lama > 0 dan jumlah barang keluar < jumlah stok lama maka data valid dan fungsi akan dilanjutkan
    if ($stockLama > 0 && $jumlahBarangKeluar <= $stockLama) {
        $stockBaru = $stockLama - $jumlahBarangKeluar;
        $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_barang='$stockBaru' WHERE id_barang = '$idBarangKeluar'");

        if ($stockBaru == 0) {
            $addToStockTable = mysqli_query($conn, "UPDATE data_stock SET status_barang= 'Habis' WHERE id_barang = '$idBarangKeluar'");
        }

        $addToOutcomingTable = mysqli_query($conn, "INSERT INTO data_barang_keluar (tanggal, id_barang, jumlah_barang, harga_barang) VALUES ('$tanggalBarangKeluar', '$idBarangKeluar', '$jumlahBarangKeluar', '$totalHarga')");

        if ($addToOutcomingTable) {
            echo "Data Barang Keluar BERHASIL di Tambahkan";
        } else {
            echo "Data Barang Keluar GAGAL di Tambahkan";
        }
    } else {
        header('location:404.php');
    }
}
?>