<?php
include "koneksi.php";

$judul      = $_POST['judul'];
$deskripsi  = $_POST['deskripsi'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
    echo 'gagal ekstensi';
}else{
    if($ukuran < 1044070){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
        mysqli_query($koneksi, "insert into berita (judul_berita,deskripsi,gambar) VALUES ('$judul','$deskripsi','$xx')");
        header("location:berita.php");
    }else{
        echo 'gagal';
    }
}