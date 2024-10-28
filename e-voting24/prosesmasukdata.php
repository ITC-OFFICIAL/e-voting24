<?php

require_once('koneksi.php');

$namasiswa = $_POST['namasiswa'];
$nisn = $_POST['nisn'];
$token = $_POST['token'];

$sql = "INSERT INTO users (namasiswa, nisn, token) VALUES ('$namasiswa', '$nisn', '$token')";
$query = mysqli_query($conn, $sql);

if($query){
    echo "<script>
            alert('Data Berhasil Masuk');
            document.location.href='masukdatasiswa.html'
            </script>";

}else{
    echo "<script>
            alert('gagal');
            document.location.href='masukdatasiswa.html'
            </script>";
}

?>