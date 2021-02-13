<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM lokasi order by id");
$response = array();
while ($data = mysqli_fetch_array($query)){
    $response[] = $data;
    $nama[] = $data['nama_tempat'];
    $lat[] = $data['lat'];
    $lng[] = $data['lng'];
    $lokasi[] = $data['lokasi'];
}
echo json_encode($response);