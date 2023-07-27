<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.students_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device.width, initial-scale=1">
        <title>RANGKING XI RPL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar bg-primary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 text-white">Class Rangkings</span>
            </div>
          </nav>
          <div class="containeer mt-3">
            <div class="row">
                <div class="col-4">
                    <div class="card-header">
                    <h3>Input Data</h3>
                    <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nilai">Nilai</label>
                            <input id="nilai" type="number" name="nilai" class="form-control">
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">KIRIM</button>
                    </div>
                </div>
            </div>

                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                   <h3>DAFTAR NILAI</h3> 
                    </div>
                    <div class="card-body">
                   <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $d): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                        </tr>
                        <?php endforeach ?>    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                        </tr>
                    </tfoot>
                   </table>
                </div>
            </div>


                </div>
            </div>

        </div>
        <footer class="py-3 my-4 bg-primary">
        <div class="row">
            <div class="col-18 py-4">
                <center>&copy; Happy coding with pak mujahid</center>
            </div>
        </div>
       </footer>
    </body>
</html>


