<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama      = $_POST['nama'];
$lokasi  = $_POST['lokasi'];
$lat      = $_POST['lat'];
$lng  = $_POST['lng'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
    echo 'gagal ekstensi';
}else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "update lokasi set nama_tempat='$nama', lat='$lat', lng='$lng' , lokasi='$lokasi',gambar='$xx' where id='$id'");
        header("location:maps.php");
    } else {
        echo 'gagal';
    }
}