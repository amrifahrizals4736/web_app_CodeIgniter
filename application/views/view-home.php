<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
    <style>
      .container {
        display: flex;
        justify-content: flex-end;
      }
      .image {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
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

      <h1 class="text-center mt-5">Selamat Datang Dosen</h1>
      <h3 class="text-center mt-3">AMRI FAHRIZAL SHIDDIQ</h3>
      <P class="text-center mt-2">22.01.4736</P>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>