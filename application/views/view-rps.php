<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
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
            <div class="parent">
              <a href="<?php echo site_url('rps/tambah'); ?>" type="button" class="btn btn-primary btn-sm"><strong>+ RPS</strong></a>
            </div>
            <div class="card mt-3">
                <div class="card-header bg-primary text-center text-white"><strong>RENCANA PEMBELAJARAN SEMESTER</strong></div>
                  <div class="card-body">
                    <div class="font">
                    <table class="table responsive-2">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>RPS</th>
                          <th>Prodi</th>
                          <th>Kode</th>
                          <th>Matakuliah</th>
                          <th>Dosen Penyusun</th>
                          <th>NIK</th>
                          <th>Disusun</th>
                          <th>Berlaku</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nomor = 1;
                      foreach ( $rps as $rps ) : ?>
                        <tr>
                          <td><?php echo $nomor++; ?></td>
                          <td><?php echo $rps['norps']; ?></td>
                          <td><?php echo $rps['prodi']; ?></td>
                          <td><?php echo $rps['kode']; ?></td>
                          <td><?php echo $rps['matakuliah']; ?></td>
                          <td><?php echo $rps['dosen']; ?></td>
                          <td><?php echo $rps['nikdosen']; ?></td>
                          <td><?php echo $rps['disusun']; ?></td>
                          <td><?php echo $rps['berlaku']; ?></td>
                          <td>
                            <a href="<?php echo site_url('rps/edit/'); ?><?php echo $rps['id']; ?>" class="btn btn-sm btn-info text-white fa-solid fa-pen-to-square" style="font-size: 12px;"></a>
                            <a href="<?php echo site_url('rps/hapus/'); ?><?php echo $rps['id']; ?>" class="btn btn-sm btn-danger fa-solid fa-trash" style="font-size: 12px;"></a>
                            <a href="<?php echo site_url('rps/submit/'); ?><?php echo $rps['id']; ?>"class="btn btn-sm btn-success text-white fa-solid fa-print"></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
<script src="https://kit.fontawesome.com/7188f9d3f0.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>