<?php

$page = 'Beranda';
include '../koneksi.php';
session_start();
if (empty($_SESSION)) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>eCampuz</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'navbar_ins.php'; ?>
        <?php include 'sidebar_ins.php'; ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"><?php echo $page; ?></h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo $page; ?>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#tickadd"><i class="icofont-plus-circle me-2 fs-6"></i>Tambah Data Instansi</button>
                <br><br>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Instansi</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $obat = mysqli_query($koneksi, "SELECT * FROM data_instansi order by id_instansi desc");

                                            $no = 1;
                                            while ($row = mysqli_fetch_assoc($obat)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row['nama_instansi'] ?></td>
                                                    <td><?php echo $row['deskripsi'] ?></td>
                                                    <td>

                                                        <div class="comment-footer">
                                                            <a class="btn btn-warning btn-sm text-white" data-bs-toggle="modal" data-bs-target="#editins<?php echo $row['id_instansi'] ?>">
                                                                Edit
                                                            </a>
                                                            <a class="btn btn-danger btn-sm text-white" onclick="return confirm('Anda yakin akan menghapus data ini?')" href="hapus_ins.php?id_instansi=<?php echo $row['id_instansi'] ?>">
                                                                Delete
                                                            </a>
                                                        </div>

                                                    </td>
                                                    <div class="modal fade" id="editins<?php echo $row['id_instansi'] ?>" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title  fw-bold" id="leaveaddLabel">Edit Data Instansi</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="deadline-form">
                                                                        <form action="edit_data.php" method="post">
                                                                            <div class="mb-3">
                                                                                <label for="sub" class="form-label">Nama Instansi</label>
                                                                                <input type="text" name="nama" class="form-control" value="<?php echo $row['nama_instansi'] ?>">
                                                                                <input hidden type="number" name="id" class="form-control" value="<?php echo $row['id_instansi'] ?>">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="sub" class="form-label">Deskripsi</label>
                                                                                <textarea type="text" name="des" class="form-control"><?php echo $row['deskripsi'] ?></textarea>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                                <button type="submit" name="editins" class="btn btn-primary">Edit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="tickadd" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="leaveaddLabel">Tambah Instansi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="deadline-form">
                                <form action="tambah_data.php" method="post">
                                    <div class="mb-3">
                                        <label for="sub" class="form-label">Nama Instansi</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sub" class="form-label">Deskripsi</label>
                                        <input type="text" name="des" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" name="tambahin" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>
</body>

</html>