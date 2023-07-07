<?php
include '../koneksi.php';

if (isset($_POST["tambahin"])) {

    $nama = $_POST['nama'];
    $des = $_POST['des'];

    $query = mysqli_query($koneksi, "INSERT INTO data_instansi values('','$nama','$des')");

    if ($query) { ?>
        <script>
            window.location = "beranda.php";
        </script>
<?php } else {
        echo "gagal";
    }
} ?>