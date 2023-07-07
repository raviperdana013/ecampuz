<?php
include '../koneksi.php';

if (isset($_POST["editins"])) {

    $id = $_POST['id'];
    $des = $_POST['des'];
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "UPDATE data_instansi set nama_instansi='$nama', deskripsi='$des' 
    where id_instansi='$id'");

    if ($query) { ?>
        <script>
            window.location = "beranda.php";
        </script>
<?php } else {
        echo "gagal";
    }
} ?>