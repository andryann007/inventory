<?php
// function untuk memulai sesi
session_start();

// function untuk mengakses / connect db_inventory
$conn = mysqli_connect("localhost", "root", "", "db_inventory");

// function untuk menambah data akun ke table data_user
if (isset($_POST['addNewAccount'])) {
    $namaUser = $_POST['namaUser'];
    $usernameUser = $_POST['usernameUser'];
    $emailUser = strtolower($_POST['emailUser']);
    $passwordUser = $_POST['passwordUser'];
    $alamatUser = $_POST['alamat'];
    $tipeAkun = strtolower($_POST['tipeAkun']);
    $fotoProfil = $_POST['fotoProfil'];

    //encrypt password md5 -> $passwordUser = md5($_POST['passwordUser']);

    $addToUserTable = mysqli_query($conn, "INSERT INTO data_user (nama_lengkap, username, email, password, alamat, tipe_akun, foto_profil) VALUES ('$namaUser', '$usernameUser', '$emailUser', '$passwordUser', '$alamatUser', '$tipeAkun', '$fotoProfil')");

    if ($addToUserTable) {
        echo "Data User BERHASIL di Tambahkan";
    } else {
        echo "Data User GAGAL di Tambahkan";
    }
}

// function untuk mengedit / UPDATE tabel data_user
if (isset($_POST['editAccount'])) {
    $idUser = $_POST['idUser'];
    $namaUser = $_POST['namaUser'];
    $usernameUser = $_POST['usernameUser'];
    $emailUser = $_POST['emailUser'];
    $passwordUser = $_POST['passwordUser'];
    $alamatUser = $_POST['alamat'];
    $tipeAkun = $_POST['tipeAkun'];
    $fotoProfil = $_POST['fotoProfil'];

    //encrypt password md5 -> $passwordUser = md5($_POST['passwordUser']);

    $editUserTable = mysqli_query($conn, "UPDATE data_user SET nama_lengkap='$namaUser', username='$usernameUser', email='$emailUser', password='$passwordUser', alamat='$alamatUser', tipe_akun='$tipeAkun', foto_profil='$fotoProfil' WHERE id_user='$idUser'");

    if ($editUserTable) {
        echo "Data User BERHASIL di EDIT";
    } else {
        echo "Data User GAGAL di EDIT";
    }
}

// function untuk menghapus / DELETE tabel data_user
if (isset($_POST['deleteAccount'])) {
    $idHapus = $_POST['idHapus'];

    $hapusUserTable = mysqli_query($conn, "DELETE FROM data_user WHERE id_user='$idHapus'");

    if ($hapusUserTable) {
        echo "Data User BERHASIL di HAPUS";
    } else {
        echo "Data User GAGAL di HAPUS";
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

//function untuk mengedit / UPDATE tabel data_barang_masuk
if (isset($_POST['editSupplier'])) {
    $idSupplier = $_POST['idSupplier'];
    $tanggalSupplier = $_POST['tglSupplier'];
    $namaSupplier = $_POST['namaSupplier'];
    $alamatSupplier = $_POST['alamatSupplier'];
    $telpSupplier = $_POST['telpSupplier'];

    $editSupplierTable = mysqli_query($conn, "UPDATE data_supplier SET tanggal='$tanggalSupplier', nama_supplier='$namaSupplier', alamat_supplier='$alamatSupplier', telp_supplier='$telpSupplier' WHERE id_supplier='$idSupplier'");

    if ($editSupplierTable) {
        echo "Data Supplier BERHASIL di EDIT";
    } else {
        echo "Data Supplier GAGAL di EDIT";
    }
}

// function untuk menghapus / DELETE tabel data_user
if (isset($_POST['deleteSupplier'])) {
    $idHapus = $_POST['idHapus'];

    $hapusSupplierTable = mysqli_query($conn, "DELETE FROM data_supplier WHERE id_supplier='$idHapus'");

    if ($hapusSupplierTable) {
        echo "Data Supplier BERHASIL di HAPUS";
    } else {
        echo "Data Supplier GAGAL di HAPUS";
    }
}

//function untuk menambah data stok barang ke table data_stock
if (isset($_POST['addNewStock'])) {
    $tanggalStock = $_POST['tglStock'];
    $namaBarang = $_POST['namaBarang'];
    $kategoriBarang = $_POST['kategoriBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];
    $statusBarang = 'Tersedia';

    $addToStockTable = mysqli_query($conn, "INSERT INTO data_stock (tanggal, nama_barang, kategori_barang, jumlah_stock, status_barang) VALUES ('$tanggalStock', '$namaBarang', '$kategoriBarang', '$jumlahBarang', '$statusBarang')");

    if ($addToStockTable) {
        echo "Data Stock BERHASIL di Tambahkan";
    } else {
        echo "Data Stock GAGAL di Tambahkan";
    }
}

//function untuk mengedit / UPDATE tabel data_stock
if (isset($_POST['editStock'])) {
    $idBarang = $_POST['idStock'];
    $tanggalStock = $_POST['tglStock'];
    $namaBarang = $_POST['namaBarang'];
    $kategoriBarang = $_POST['kategoriBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];

    if ($jumlahBarang > 0) {
        $statusBarang = 'Tersedia';
    } else {
        $statusBarang = 'Habis';
    }

    $editStockTable = mysqli_query($conn, "UPDATE data_stock SET tanggal='$tanggalStock', nama_barang='$namaBarang', kategori_barang='$kategoriBarang', jumlah_stock='$jumlahBarang', status_barang='$statusBarang' WHERE id_barang='$idBarang'");

    if ($editStockTable) {
        echo "Data Stock BERHASIL di Tambahkan";
    } else {
        echo "Data Stock GAGAL di Tambahkan";
    }
}

// function untuk menghapus / DELETE tabel stock
if (isset($_POST['deleteStock'])) {
    $idHapus = $_POST['idHapus'];

    $hapusSupplierTable = mysqli_query($conn, "DELETE FROM data_stock WHERE id_barang='$idHapus'");

    if ($hapusSupplierTable) {
        echo "Data Stock BERHASIL di HAPUS";
    } else {
        echo "Data Stock GAGAL di HAPUS";
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

    $stockLama = $ambilDataStock['jumlah_stock'];

    //jika jumlah barang masuk > 0 maka proses akan dilanjutkan karena valid
    if ($jumlahBarangMasuk > 0) {
        $stockBaru = $stockLama + $jumlahBarangMasuk;
        $addToIncomingTable = mysqli_query($conn, "INSERT INTO data_barang_masuk (tanggal, id_barang, jumlah_barang, harga_barang) VALUES ('$tanggalBarangMasuk', '$idBarangMasuk', '$jumlahBarangMasuk', '$totalHarga')");

        $addToStockTable = mysqli_query($conn, "UPDATE data_stock SET status_barang= 'Tersedia' WHERE id_barang = '$idBarangMasuk'");

        $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_stock='$stockBaru' WHERE id_barang = '$idBarangMasuk'");
        if ($addToIncomingTable) {
            echo "Data Barang Masuk BERHASIL di Tambahkan";
        } else {
            echo "Data Barang Masuk GAGAL di Tambahkan";
        }
    }
}

//function untuk mengedit / UPDATE tabel data_barang_masuk
if (isset($_POST['editIncomingGoods'])) {
    $idMasuk = $_POST['idIncoming'];
    $tanggalBarangMasuk = $_POST['tglIncoming'];
    $idBarangMasuk = $_POST['namaBarang'];

    $dataBarangMasuk = mysqli_query($conn, "SELECT * FROM data_barang_masuk WHERE id_masuk='$idMasuk'");
    $fetchArray = mysqli_fetch_array($dataBarangMasuk);

    $jumlahBarangLama = $fetchArray['jumlah_barang'];
    $jumlahBarangBaru = $_POST['jumlahBarang'];

    $totalHarga = $_POST['totalHarga'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangMasuk'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);
    $jumlahTotalStock = $ambilDataStock['jumlah_stock'];

    //jika jumlah barang masuk > 0 maka proses akan dilanjutkan karena valid
    if ($jumlahBarangBaru > 0) {
        $stockBaru = ($jumlahTotalStock - $jumlahBarangLama) + $jumlahBarangBaru;
        $addToIncomingTable = mysqli_query($conn, "UPDATE data_barang_masuk SET tanggal='$tanggalBarangMasuk', jumlah_barang='$jumlahBarangBaru', harga_barang='$totalHarga' WHERE id_masuk = '$idMasuk'");

        $addToStockTable = mysqli_query($conn, "UPDATE data_stock SET status_barang= 'Tersedia' WHERE id_barang = '$idBarangMasuk'");

        $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_stock='$stockBaru' WHERE id_barang = '$idBarangMasuk'");
        if ($addToIncomingTable) {
            echo "Data Barang Masuk BERHASIL di EDIT";
        } else {
            echo "Data Barang Masuk GAGAL di EDIT";
        }
    }
}

// function untuk menghapus / DELETE tabel data_barang_masuk
if (isset($_POST['deleteIncoming'])) {
    $idHapus = $_POST['idHapus'];
    $idBarangMasuk = $_POST['idBarang'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangMasuk'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);
    $jumlahTotalStock = $ambilDataStock['jumlah_stock'];

    $dataBarangMasuk = mysqli_query($conn, "SELECT * FROM data_barang_masuk WHERE id_masuk='$idHapus'");
    $fetchArray = mysqli_fetch_array($dataBarangMasuk);
    $jumlahTotalMasuk = $fetchArray['jumlah_barang'];

    $stockBaru = $jumlahTotalStock - $jumlahTotalMasuk;

    $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_stock='$stockBaru' WHERE id_barang = '$idBarangMasuk'");

    $hapusUserTable = mysqli_query($conn, "DELETE FROM data_barang_masuk WHERE id_masuk='$idHapus'");

    if ($hapusUserTable& $updateStockBarang) {
        echo "Data Barang Masuk BERHASIL di HAPUS";
    } else {
        echo "Data Barang Masuk GAGAL di HAPUS";
    }
}

//function untuk menambah tabel / INSERT data_barang_keluar
if (isset($_POST['addOutcomingGoods'])) {
    $tanggalBarangKeluar = $_POST['tglOutcoming'];
    $idBarangKeluar = $_POST['namaBarang'];
    $jumlahBarangKeluar = $_POST['jumlahBarang'];
    $totalHarga = $_POST['totalHarga'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangKeluar'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);

    $stockLama = $ambilDataStock['jumlah_stock'];

    //jika stok lama > 0 dan jumlah barang keluar < jumlah stok lama maka data valid dan fungsi akan dilanjutkan
    if ($stockLama > 0 && $jumlahBarangKeluar <= $stockLama) {
        $stockBaru = $stockLama - $jumlahBarangKeluar;
        $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_stock='$stockBaru' WHERE id_barang = '$idBarangKeluar'");

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

//function untuk mengedit / UPDATE tabel data_barang_keluar
if (isset($_POST['editOutcomingGoods'])) {
    $idKeluar = $_POST['idOutcoming'];
    $tanggalBarangKeluar = $_POST['tglOutcoming'];
    $idBarangKeluar = $_POST['namaBarang'];

    $dataBarangKeluar = mysqli_query($conn, "SELECT * FROM data_barang_keluar WHERE id_keluar='$idKeluar'");
    $fetchArray = mysqli_fetch_array($dataBarangKeluar);

    $jumlahBarangLama = $fetchArray['jumlah_barang'];
    $jumlahBarangBaru = $_POST['jumlahBarang'];

    $totalHarga = $_POST['totalHarga'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangKeluar'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);
    $jumlahTotalStock = $ambilDataStock['jumlah_stock'];

    //jika jumlah barang masuk > 0 maka proses akan dilanjutkan karena valid
    if ($jumlahBarangBaru > 0) {
        $stockBaru = ($jumlahTotalStock - $jumlahBarangLama) + $jumlahBarangBaru;
        $addToOutcomingTable = mysqli_query($conn, "UPDATE data_barang_keluar SET tanggal='$tanggalBarangKeluar', jumlah_barang='$jumlahBarangBaru', harga_barang='$totalHarga' WHERE id_keluar = '$idKeluar'");

        $addToStockTable = mysqli_query($conn, "UPDATE data_stock SET status_barang= 'Tersedia' WHERE id_barang = '$idBarangKeluar'");

        $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_stock='$stockBaru' WHERE id_barang = '$idBarangKeluar'");
        if ($addToOutcomingTable) {
            echo "Data Barang Keluar BERHASIL di EDIT";
        } else {
            echo "Data Barang Keluar GAGAL di EDIT";
        }
    }
}

// function untuk menghapus / DELETE tabel data_barang_keluar
if (isset($_POST['deleteOutcoming'])) {
    $idHapus = $_POST['idHapus'];
    $idBarangKeluar = $_POST['idBarang'];

    $cekStockSekarang = mysqli_query($conn, "SELECT * FROM data_stock WHERE id_barang='$idBarangKeluar'");
    $ambilDataStock = mysqli_fetch_array($cekStockSekarang);
    $jumlahTotalStock = $ambilDataStock['jumlah_stock'];

    $dataBarangKeluar = mysqli_query($conn, "SELECT * FROM data_barang_keluar WHERE id_keluar='$idHapus'");
    $fetchArray = mysqli_fetch_array($dataBarangKeluar);
    $jumlahTotalKeluar = $fetchArray['jumlah_barang'];

    $stockBaru = $jumlahTotalStock + $jumlahTotalKeluar;

    $updateStockBarang = mysqli_query($conn, "UPDATE data_stock SET jumlah_stock='$stockBaru', status_barang= 'Tersedia' WHERE id_barang = '$idBarangKeluar'");

    $hapusUserTable = mysqli_query($conn, "DELETE FROM data_barang_keluar WHERE id_keluar='$idHapus'");

    if ($hapusUserTable& $updateStockBarang) {
        echo "Data Barang Keluar BERHASIL di HAPUS";
    } else {
        echo "Data Barang Keluar GAGAL di HAPUS";
    }
}

?>