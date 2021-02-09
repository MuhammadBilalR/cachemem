<?php
include "koneksi.php";
$data = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM data WHERE id='$data'")or die(mysql_error());
header("location:index.php");
?>
