<?php

require_once('koneksi.php');

$nisn = $_POST['nisn'];
$token = $_POST['token'];

$sql = "SELECT * FROM users WHERE nisn='$nisn' AND token='$token'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<script src='sweetalert/sweetalert2.all.min.js'></script>
      <script>
      Swal.fire({
        title: 'Berhasil Login!',
        text: 'Anda akan diarahkan ke dashboard.',
        icon: 'success'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'vote.php';
        }
      })
      </script>";
      exit();
}else {
    echo "<script src='sweetalert/sweetalert2.all.min.js'></script>
      <script>
      Swal.fire({
        title: 'ERROR!',
        text: 'NISN atau Token yang anda masukkan salah, silahkan coba lagi',
        icon: 'info'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'index.php';
        }
      })
      </script>";
      exit();
}

?>