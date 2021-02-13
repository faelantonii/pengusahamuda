<?php
// koneksi database
include 'koneksi.php';

$id         = $_POST['id'];
$judul      = $_POST['judul'];
$kalori      = $_POST['kalori'];
$kategori      = $_POST['kategori'];
$deskripsi  = $_POST['deskripsi'];

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
        mysqli_query($koneksi, "update makanan set judul_makanan='$judul', kalori='$kalori', kategori='$kategori',deskripsi='$deskripsi', gambar='$xx' where id='$id'");
        header("location:makanan.php");
    } else {
        echo 'gagal';
    }
}