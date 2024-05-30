<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7188f9d3f0.js" crossorigin="anonymous"></script>
    <title>RPS</title>
    <style>
      .container {
        display: flex;
        justify-content: flex-end;
      }
    </style>
</head>
<body>

    <div class="container">
        <div class="col-md-12 mt-3">
            <div class="card mt-3">
                <div class="card-header text-center"><strong>RENCANA PEMBELAJARAN SEMESTER</strong></div>
                  <div class="card-body">
                    <table class="table responsive-2">
                      <thead>
                        <tr>
                          <th>PERTEMUAN</th>
                          <th>MODUL</th>
                          <th>TEORI/PRAKTIK</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ( $rps as $rps ) : ?>
                        <tr>
                          <td><?php echo $rps['pertemuan']; ?></td>
                          <td><?php echo $rps['modul']; ?></td>
                          <td><?php echo $rps['teopra']; ?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>