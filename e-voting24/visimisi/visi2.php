<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url('../assets/img/visimisi2.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        h1{
            font-size: 50px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .visimisi{
            display: flex;
            justify-content: center;
            text-align: center;
            margin-top: 140px;
            gap: 400px;
            color: white;
        }
        .backbtn{
            text-align: center;
            margin-top: 290px;
        }
        .backbtn button{
            width: 100px;
            height: 30px;
            border-radius: 10px;
            background: #0149A9;
            color: white;
        }
    </style>
</head>
<body>
    <form action="visi2.php" method="POST">
        <div class="visimisi">
            <div class="visi">
                <h1>VISI</h1>
                <p>Menjadi FUFUFAFA</p>
            </div>
            <div class="misi">
                <h1>MISI</h1>
                <p>Menguasai bumi</p>
            </div>
        </div>
        <div class="backbtn">
            <button name="back">Kembali</button>
        </div>
    </form>
</body>
</html>

<?php
if (isset($_POST['back'])){
    header("location: ../vote.php");
    exit();
}
?>