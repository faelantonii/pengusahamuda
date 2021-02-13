<?php
include "koneksi.php";

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
}else{
    if($ukuran < 1044070){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
       $query = mysqli_query($koneksi, "insert into lokasi (gambar,nama_tempat,lat,lng,lokasi) VALUES ('$xx','$nama','$lat','$lng','$lokasi')");
        if($query){
            header("location:maps.php");
        }else{
            echo 'Input gagal';
        }
        header("location:maps.php");
    }else{
        echo 'gagal';
    }
}