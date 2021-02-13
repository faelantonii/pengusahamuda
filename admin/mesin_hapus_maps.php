<?php

include "koneksi.php";

$id = $_GET['id'];

$result = mysqli_query($koneksi, "DELETE FROM lokasi WHERE id=$id");

header("Location:maps.php");

