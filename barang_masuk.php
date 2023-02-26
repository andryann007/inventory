<?php
//function untuk connect database
require 'function.php';

//function untuk mengecek sudah login / blm
require 'check.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" href="img/icons/favicon.ico" />

    <title>Aplikasi Inventory - Toko Sukses</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- template table bootstrap 4 -->
    <link
      href="vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-dark sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.php"
        >
          <div class="sidebar-brand-icon">
            <i class="fas fa-store"></i>
          </div>
          <div class="sidebar-brand-text mx-2">Toko Sukses</div>
        </a>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading Data Master -->
        <div class="sidebar-heading">Data Master</div>

        <!-- Nav Item - Data Akun -->
        <li class="nav-item">
          <a class="nav-link" href="akun.php">
            <i class="fas fa-id-card"></i>
            <span>Data Akun</span></a
          >
        </li>

         <!-- Nav Item - Data Supplier -->
         <li class="nav-item">
          <a class="nav-link" href="supplier.php">
            <i class="fas fa-truck"></i>
            <span>Data Supplier</span></a
          >
        </li>

        <!-- Nav Item - Data Customer -->
        <li class="nav-item">
          <a class="nav-link" href="customer.php">
            <i class="fas fa-users"></i>
            <span>Data Customer</span></a
          >
        </li>

        <!-- Nav Item - Data Stock -->
        <li class="nav-item">
          <a class="nav-link" href="stock.php">
            <i class="fas fa-cubes"></i>
            <span>Data Stock Barang</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading Data Master -->
        <div class="sidebar-heading">Data Transaksi</div>

        <!-- Nav Item - Data Barang Masuk -->
        <li class="nav-item active">
          <a class="nav-link" href="barang_masuk.php">
            <i class="fas fa-cube"></i>
            <span>Data Barang Masuk</span></a
          >
        </li>

        <!-- Nav Item - Data Barang Keluar -->
        <li class="nav-item">
          <a class="nav-link" href="barang_keluar.php">
            <i class="fas fa-cube"></i>
            <span>Data Barang Keluar</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Laporan</div>

        <!-- Nav Item - Laporan Stok Barang -->
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-file-invoice"></i>
            <span>Laporan Stock Inventory</span></a
          >
        </li>

        <!-- Nav Item - Laporan Barang Masuk -->
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-file-invoice"></i>
            <span>Laporan Barang Masuk</span></a
          >
        </li>

        <!-- Nav Item - Laporan Barang Keluar -->
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-file-invoice"></i>
            <span>Laporan Barang Keluar</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Logout</div>

        <!-- Nav Item - Laporan Stok Barang -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-power-off"></i>
            <span>Logout</span></a
          >
        </li>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-secondary topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter"></span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Notifikasi</h6>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter"></span>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Pesan</h6>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Read More Messages</a
                  >
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-white small"
                    >Douglas McGee</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                    name="logout"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h2 class="h3 mb-0 text-gray-800">Data Barang Masuk</h2>
              <button
                type="button"
                class="btn btn-success btn-sm"
                data-toggle="modal"
                data-target="#addIncomingModal"
              >
                <i class="fas fa-plus"></i>
                Tambah Data Barang Masuk
              </button>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Data - Data Barang Masuk
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive table-striped">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dataStock = mysqli_query($conn, "SELECT * FROM data_barang_masuk masuk, data_stock stock WHERE stock.id_barang = masuk.id_barang");
                      $i = 1;
                      while ($data = mysqli_fetch_array($dataStock)) {
                        $idMasuk = $data['id_masuk'];
                        $idBarang = $data['id_barang'];
                        $tanggal = $data['tanggal'];
                        $namaBarang = $data['nama_barang'];
                        $kategoriBarang = $data['kategori'];
                        $jumlahBarang = $data['qty_masuk'];
                        $hargaBarang = $data['harga'];
                        $keterangan = $data['keterangan'];
                        ?>
                              <tr>
                                <td>
                                  <?= $i++; ?>
                                </td>
                                <td>
                                  <?= $tanggal; ?>
                                </td>
                                <td>
                                  <?= ucwords($namaBarang); ?>
                                </td>
                                <td>
                                  <?= ucwords($kategoriBarang); ?>
                                </td>
                                <td>
                                  <?= $jumlahBarang; ?>
                                </td>
                                <td>
                                  <?= $keterangan; ?>
                                </td>
                                <td
                                  class="d-sm-flex justify-content-around align-items-center"
                                >
                                  <button
                                    type="button"
                                    class="btn btn-warning"
                                    data-toggle="modal"
                                    data-target="#editIncomingModal<?= $idMasuk ?>"
                                  >
                                    <i class="fas fa-edit"></i> Edit
                                  </button>
                                  <input
                                    type="hidden"
                                    name="idHapus"
                                    value="<?= $idMasuk; ?>"
                                  />
                                  <button
                                    type="button"
                                    class="btn btn-danger"
                                    data-toggle="modal"
                                    data-target="#deleteIncomingModal<?= $idMasuk ?>"
                                  >
                                    <i class="fas fa-trash"></i> Delete
                                  </button>
                                </td>
                              </tr>

                              <!-- Edit Data Modal -->
                              <div
                                class="modal fade"
                                id="editIncomingModal<?= $idMasuk ?>"
                                tabindex="-1"
                                aria-labelledby="editModalLabel"
                                aria-hidden="true"
                              >
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editModalLabel">
                                        Edit Data Barang Masuk
                                      </h5>
                                      <button
                                        type="button"
                                        class="close"
                                        data-dismiss="modal"
                                        aria-label="Close"
                                      >
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form method="post">
                                      <div class="modal-body">
                                        <input
                                          type="hidden"
                                          name="idIncoming"
                                          value="<?= $idMasuk; ?>"
                                        />

                                        <input
                                          type="hidden"
                                          name="jumlahBarangLama"
                                          value="<?= $jumlahBarang; ?>"
                                        />
                                        <div class="form-group">
                                          <label for="tanggalIncoming">Tanggal</label>
                                          <input
                                            type="date"
                                            name="tglIncoming"
                                            id="tanggalIncoming"
                                            value="<?= $tanggal; ?>"
                                            class="form-control"
                                            required
                                          />
                                        </div>

                                        <div class="form-group">
                                          <label for="namaBarang">Nama Barang</label>
                                          <select
                                            class="form-control"
                                            name="namaBarang"
                                            id="namaBarang"
                                            required
                                          >
                                            <?php
                                            $dataNamaBarang = mysqli_query($conn, "SELECT * FROM data_stock");
                                            while ($fetchArray = mysqli_fetch_array($dataNamaBarang)) {
                                              $idBarang = $fetchArray['id_barang'];
                                              $namaBarang = $fetchArray['nama_barang'];
                                              ?>

                                                    <option value="<?= $idBarang; ?>">
                                                      <?=
                                                        ucwords($namaBarang); ?>
                                                    </option>

                                                    <?php
                                            }
                                            ?>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <label for="jumlahBarang"
                                            >Jumlah Barang</label
                                          >
                                          <input
                                            type="number"
                                            min="0"
                                            name="jumlahBarang"
                                            id="jumlahBarang"
                                            placeholder="<?= $jumlahBarang; ?>"
                                            value="<?= $jumlahBarang; ?>"
                                            class="form-control"
                                            required
                                          />
                                        </div>

                                        <div class="form-group">
                                          <label for="hargaSatuan">Harga Barang</label>
                                          <input
                                            type="number"
                                            min="0"
                                            name="hargaSatuan"
                                            id="hargaSatuan"
                                            placeholder="<?= $hargaBarang ?>"
                                            value="<?= $hargaBarang; ?>"
                                            class="form-control"
                                            required
                                          />
                                        </div>

                                        <div class="form-group">
                                          <label for="namaSupplier"
                                            >Nama Supplier</label
                                          >
                                          <select
                                            class="form-control"
                                            name="namaSupplier"
                                            id="namaSupplier"
                                            required
                                          >
                                            <?php
                                            $dataNamaSupplier = mysqli_query($conn, "SELECT * FROM data_supplier");
                                            while ($fetchArray = mysqli_fetch_array($dataNamaSupplier)) {
                                              $idSupplier = $fetchArray['id_supplier'];
                                              $namaSupplier = $fetchArray['nama_supplier'];
                                              ?>

                                                    <option value="<?= $idSupplier; ?>">
                                                      <?=
                                                        ucwords($namaSupplier); ?>
                                                    </option>

                                                    <?php
                                            }
                                            ?>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <label for="keterangan">Keterangan</label>
                                          <input
                                            type="textarea"
                                            min="0"
                                            name="keterangan"
                                            id="keterangan"
                                            value="<?= $keterangan; ?>"
                                            class="form-control"
                                            required
                                          />
                                        </div>
                                      </div>

                                      <div class="d-sm-flex modal-footer mb-4">
                                        <button
                                          type="button"
                                          class="btn btn-danger"
                                          data-dismiss="modal"
                                        >
                                          <i class="fas fa-trash"></i> Batal
                                        </button>
                                        <button
                                          type="submit"
                                          class="btn btn-warning"
                                          name="editIncomingGoods"
                                        >
                                          <i class="fas fa-edit"></i> Edit
                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>

                              <!-- Delete Data Modal -->
                              <div
                                class="modal fade"
                                tabindex="-1"
                                aria-labelledby="deleteModalLabel"
                                aria-hidden="true"
                                id="deleteIncomingModal<?= $idMasuk; ?>"
                              >
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="deleteModalLabel">
                                        Hapus Barang Masuk ?
                                      </h5>
                                      <button
                                        type="button"
                                        class="close"
                                        data-dismiss="modal"
                                        aria-label="Close"
                                      >
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form method="post">
                                      <div class="modal-body text-center">
                                        <b>Yakin Menghapus Barang Ini ?</b>
                                      </div>
                                      <input
                                        type="hidden"
                                        name="idBarang"
                                        value="<?= $idBarang; ?>"
                                      />
                                      <input
                                        type="hidden"
                                        name="idHapus"
                                        value="<?= $idMasuk; ?>"
                                      />

                                      <div class="d-sm-flex modal-footer mb-4">
                                        <button
                                          type=" submit"
                                          class="btn btn-danger"
                                          name="deleteIncoming"
                                        >
                                          <i class="fas fa-trash"></i> Hapus
                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>

                              <?php

                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-secondary">
          <div class="container my-0">
            <div class="copyright text-center my-auto">
              <span class="text-light"
                >Copyright &copy; Andryan - 31190080</span
              >
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>

  <!-- Add Data Modal -->
  <div
    class="modal fade"
    id="addIncomingModal"
    tabindex="-1"
    aria-labelledby="addModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">
            Tambah Data Barang Masuk
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="tanggalIncoming">Tanggal</label>
              <input
                type="date"
                name="tglIncoming"
                id="tanggalIncoming"
                placeholder="Tanggal"
                class="form-control"
                required
              />
            </div>

            <div class="form-group">
              <label for="namaBarang">Nama Barang</label>
              <select
                class="form-control"
                name="namaBarang"
                id="namaBarang"
                required
              >
                <?php
                $dataNamaBarang = mysqli_query($conn, "SELECT * FROM data_stock");
                while ($fetchArray = mysqli_fetch_array($dataNamaBarang)) {
                  $idBarang = $fetchArray['id_barang'];
                  $namaBarang = $fetchArray['nama_barang'];
                  ?>

                        <option value="<?= $idBarang; ?>">
                          <?= ucwords($namaBarang); ?>
                        </option>

                        <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="jumlahBarang">Jumlah Barang</label>
              <input
                type="number"
                min="0"
                name="jumlahBarang"
                id="jumlahBarang"
                placeholder="Jumlah"
                class="form-control"
                required
              />
            </div>

            <div class="form-group">
              <label for="hargaSatuan">Harga Barang</label>
              <input
                type="number"
                min="0"
                name="hargaSatuan"
                id="hargaSatuan"
                placeholder="Harga Satuan"
                class="form-control"
                required
              />
            </div>

            <div class="form-group">
              <label for="namaSupplier">Nama Supplier</label>
              <select
                class="form-control"
                name="namaSupplier"
                id="namaSupplier"
                required
              >
                <?php
                $dataNamaSupplier = mysqli_query($conn, "SELECT * FROM data_supplier");
                while ($fetchArray = mysqli_fetch_array($dataNamaSupplier)) {
                  $idSupplier = $fetchArray['id_supplier'];
                  $namaSupplier = $fetchArray['nama_supplier'];
                  ?>

                        <option value="<?= $idSupplier; ?>">
                          <?= ucwords($namaSupplier); ?>
                        </option>

                        <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input
                type="textarea"
                min="0"
                name="keterangan"
                id="keterangan"
                placeholder="Ket. Barang Masuk"
                class="form-control"
                required
              />
            </div>
          </div>

          <div class="d-sm-flex modal-footer justify-content-between mb-4">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="fas fa-trash"></i> Batal
            </button>
            <button
              type="submit"
              class="btn btn-primary"
              name="addIncomingGoods"
            >
              <i class="fas fa-plus"></i> Tambah
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</html>
