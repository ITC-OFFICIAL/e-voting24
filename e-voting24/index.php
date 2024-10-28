<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<style>
    body {
        background-image: url('assets/img/bgLogin.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .container {
        display: flex;
        text-align: center;
        justify-content: end;
        margin-top: 400px;
        /* border: 1px solid orange; */
    }

    .parent-box {
        max-width: auto;
        /* border: 1px solid red; */
    /* padding-right: 80px; */
    }

    .tbby {
        font-family: arial;
        color: whitesmoke;
        text-align: start;
    }

    input {
        font-size: 1.3rem;
        /* margin-top: 8px; */
        border-radius: 7px;
        border: 0;
        height: 4.0rem;
        width: 26rem;
        text-align: center;
        font-family: arial;
        background-color: whitesmoke;
        font-weight: 600;
        text-transform: uppercase;
    }

    input:focus {
        border: none;
        outline: none;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
  margin: 0;
    }


    .bpass {
        margin-top: 12px;
    }

    .btnLogin {
        width: 100%;
        height: 4.0rem;
        margin-top: 20px;
        font-weight: 600;
        font-family: Arial;
        text-transform: uppercase;
        font-size: 20px;
    }
</style>

<body>
    <form action="proseslogin.php" method="POST">
        <div class="container">
            <div class="parent-box m-2 text-center">
                <div class="bby">
                    <p class="tbby m-0">Support By IT Community</p>
                </div>
                <div class="bnisn">
                    <input type="number" name="nisn" id="nisn" placeholder="NISN">
                </div>
                <div class="bpass">
                    <input type="text" name="token" id="token" placeholder="TOKEN">
                </div>
                <div class="blogin">
                    <button class="btn btnLogin btn-primary">Masuk</button>
                </div>
            </div>
        </div>
    </form>


    <!-- JS Bootstrap-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>