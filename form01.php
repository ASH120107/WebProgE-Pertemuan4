<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    
    <div class="container">
        <h1>Form Data Mahasiswa</h1>
    <form id="formmhs" onsubmit="tampildata(event)">
        
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" id="nama" class="form-control">
        </div>
    <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" id="nama" class="form-control">
        </div>
    <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" id="nama" class="form-control">
        </div>    
    </form>
    
    <div calss="alret alret-success mt-4 " role="alret">
        <h3 class="alret-heading mb-3">Data Berhasil Di Kirim</h3>
        <p class="mb-1">Nama: <span id="resNama"></span></p>
        <p class="mb-1">Prodi:</p><span id="resProdi"></span>
</div>

    
    <button class="btn btn-primary">Kirim Data</button>
    
    

  </body>
</html>