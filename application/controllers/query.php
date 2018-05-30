<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="3in1";
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$id = $_POST["pesanan"];
$tes = sprintf("select waktu from memesan_makanan where no_pesanan = '%s'", $id);
$data=mysqli_query($link,$tes);
$hasil;
while ($datavar=mysqli_fetch_array($data)) {
  $hasil= $datavar["waktu"];
}
echo json_encode($hasil);

 ?>
