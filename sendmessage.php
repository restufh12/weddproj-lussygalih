<?php  
require("connection.php");
$Nama     = $conn->real_escape_string($_POST['Nama']);
$Komentar = $conn->real_escape_string($_POST['Komentar']);
$D_ateTime = date('Y-m-d H:i:s');

if($Nama==""){
  $Nama = "Anonim";
}

$vStrsQL  = "INSERT INTO comment (Nama, Komentar, D_ateTime) VALUES ('$Nama', '$Komentar', '$D_ateTime')";
$vExecute = $conn -> query($vStrsQL);

if ($vExecute) {
	$data['Nama']     = $Nama;
	$data['Komentar'] = $Komentar;
	$data['status']   = "1";
} else {
	$data['status'] = "0";
}

echo json_encode($data);
?>