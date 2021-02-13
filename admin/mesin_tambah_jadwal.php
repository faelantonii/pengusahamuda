<?php
include "koneksi.php";

$makanan      = $_POST['makanan'];
$rentangkalori      = $_POST['rentang_kalori'];
$hari      = $_POST['hari'];
$deskripsi  = $_POST['deskripsi'];
$jadwalmakan  = $_POST['jadwal_makan'];

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
        mysqli_query($koneksi, "insert into jadwal_makanan (makanan_id, rentang_kalori, deskripsi,hari,jadwal_makanan,gambar) VALUES 
                    ('$makanan','$rentangkalori','$deskripsi','$hari','$jadwalmakan','$xx')");
        header("location:jadwal_makanan.php");
    }else{
        echo 'gagal';
    }
}