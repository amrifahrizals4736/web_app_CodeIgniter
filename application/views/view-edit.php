<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>RPS</title>
    <style>
      .container {
        display: flex;
        justify-content: flex-end;
      }
      .font {
        font-size: 12px;
      }
    </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand text-white" href="<?php echo site_url('home') ?>"><strong>AMIKOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="<?php echo site_url('rps') ?>">RPS</strong></a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="<?php echo site_url('login/logout');?>" type="button" class="btn btn-danger btn-sm text-white"><strong>LOGOUT</strong></a>
        </span>
      </div>
    </div>
  </nav>

    <div class="container">
        <div class="col-md-12 mt-3 shadow-lg rounded-4 p-3">
            <div class="card mt-3">
                <div class="card-header bg-primary text-center text-white"><strong>FORM UPDATE RPS</strong></div>
                  <div class="card-body">
                  <div class="font">
                  <form action="<?php echo site_url('rps/proses_edit/' . $rps['id']); ?>" method="post">
                    <input type="hidden" name="id" value=<?php echo $rps['id']; ?>>
                    <div class="mb-3">
                      <label for="pertemuan" class="form-label">Nomor RPS :</label>
                      <input type="text" class="form-control font" name="norps" value="<?php echo $rps['norps']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="modul" class="form-label">Nama Prodi :</label>
                      <input type="text" class="form-control font" name="prodi" value="<?php echo $rps['prodi']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="teopra" class="form-label">Kode Matakuliah :</label>
                      <input type="text" class="form-control font" name="kode" value="<?php echo $rps['kode']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="teopra" class="form-label">Nama Matakuliah :</label>
                      <input type="text" class="form-control font" name="matakuliah" value="<?php echo $rps['matakuliah']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="teopra" class="form-label">Dosen Penyusun :</label>
                      <input type="text" class="form-control font" name="dosen" value="<?php echo $rps['dosen']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="teopra" class="form-label">NIK Dosen :</label>
                      <input type="text" class="form-control font" name="nikdosen" value="<?php echo $rps['nikdosen']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="teopra" class="form-label">Tanggal Disusun :</label>
                      <input type="date" class="form-control font" name="disusun" value="<?php echo $rps['disusun']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="teopra" class="form-label">Tanggal Berlaku :</label>
                      <input type="date" class="form-control font" name="berlaku" value="<?php echo $rps['berlaku']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="edit">Update</button>
                    </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>