<?php 

require_once "koneksi.php";

$data = stripslashes(file_get_contents("php://input"));
$idpelangan = json_decode($data,true);

$idpelanggan = $idPelanggan['idpelangan'];

$sql = "SELECT * FROM tblpelanggan WHERE idpelanggan=$idpelanggan;
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);




json_encode($row);

?>