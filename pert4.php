<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko curhat</title>

    <link rel="stylesheet" href="style.css">

    <style>
       .sembunyi{
            display:none;
       }
       .kotak-info{
            background-color: #ffffff;
            padding: 25px;
            margin: 15px;
            border: 2px solid #fff;
            border-radius: 6px;
       }
        .btn-close{
            position: relative;
            top: 8px;
            right: 10px;
            border: none;
            background: none;
            font-size: 18px;
            font-weight: pointer;
            color: #ff0000;
            cursor: pointer;
        }
        .btn-close:hover{
            color: #000000;
        }

        </style>


</head>
<body>

    <h2>Contoh Text pada H2</h2>
        <div class="flex-center">
        <div class="kartu-profile">
            <h2>Kimura Jot</h2>
            <P>Web Desain</p>
            <button id="btndetail" onclick="info()" class="btn-detail">info lengkap</Botton>
        </div>
    </div>

        <div class="kotak-info sembunyi" id="info">
            <button onclick="tutupdetail()" class="btn-close">&times;</button>
            <h1>Informasi Detail</h1>
        </div>  
<script>
    function info(){
        //alret("Tombol Lengkap di ke clik");
        let info = document.getElementById("info");
        let btndetail = document.getElementById("btndetail");

        info.style.display = "block";
        btndetail.style.display = "none";
    }
    function tutupdetail(){
        //alret("Tombol Lengkap di ke clik");
        let info = document.getElementById("info");
        let btndetail = document.getElementById("btndetail");

        info.style.display = "none";
        btndetail.style.display = "inline-block";
    }
</script>
</body>
</html>