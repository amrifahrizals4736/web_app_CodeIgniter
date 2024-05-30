<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body class="bg-primary">
    <div class="container d-md-flex position-absolute top-50 start-50 translate-middle justify-content-center">
      <div class="card mb-3">
        <div class="card-body">
          <h4 class="card-title pt-2 pb-2 text-center"><strong>Login Admin</strong></h4>
          <hr>
          <form method="POST" action="<?php echo site_url('login/autentikasi');?>" >
            <div class="mb-3">
              <label for="email" class="form-label">Email :</label>
              <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password :</label>
              <input type="password" name="pass" class="form-control">
            </div>
            <div class="d-flex justify-content-center mb-3">
              <button class="btn btn-primary">Masuk</button>
            </div>
            <?php echo $this->session->flashdata('msg');?>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>