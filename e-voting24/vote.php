<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Ketua OSIS</title>
    <link rel="stylesheet" href="vote.css">
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <div class="candidates">
                <div class="candidate">
                    <img src="assets/img/kobo.jpg" alt="Candidate 1">
                    <h3>Ahamd FAUZAN JUANDA</h3>
                    <button name="visi1">VISI MISI</button>
                    <button name="vote1" data-alert="Anda Memilih Fauzan Dan Juanda, Klik Ok untuk melanjutkan">VOTE</button>
                </div>
                <div class="candidate">
                    <img src="assets/img/kobo.jpg" alt="Candidate 2">
                    <h3>Ahamd FAUZAN JUANDA</h3>
                    <button name="visi2">VISI MISI</button>
                    <button name="vote2" data-alert="Anda Memilih Haekal Dan Meshua, Klik Ok untuk melanjutkan">VOTE</button>
                </div>
                <div class="candidate">
                    <img src="assets/img/kobo.jpg" alt="Candidate 3">
                    <h3>Ahamd FAUZAN JUANDA</h3>
                    <button name="visi3">VISI MISI</button>
                    <button name="vote3" data-alert="Anda Memilih Malfin Dan Awal, Klik Ok untuk melanjutkan">VOTE</button>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="sweetalert/sweetalert2.all.min.js"></script>
<script>
    // Pilih semua tombol yang memiliki atribut data-alert
const voteButtons = document.querySelectorAll('button[name^="vote"]');

voteButtons.forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah form submit secara default
        
        // Ambil pesan dari data-alert
        const alertMessage = this.getAttribute('data-alert');

        Swal.fire({
            title: "Anda Sudah Yakin?",
            text: alertMessage,
            icon: "info",
            showCancelButton: true,
            cancelButtonText: "Back",
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ok"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Terimakasih",
                    text: "Suaramu Sudah Masuk.",
                    icon: "success"
                });
                
                // Di sini, kamu bisa tambahkan logika untuk submit form atau mengirim data ke server
            }
        });
    });
});
</script>
</html>

<?php

if (isset($_POST['visi1'])){
    header("location: visimisi/visi1.php");
    exit();
}
if (isset($_POST['visi2'])){
    header("location: visimisi/visi2.php");
    exit();
}
if (isset($_POST['visi3'])){
    header("location: visimisi/visi3.php");
    exit();
}

?>