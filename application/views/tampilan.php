<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<div class="container pt-5">
  <div class="card p-5">
    <div class="text-center">
      <h2>FORM INPUT</h2>
    </div>
    <div class="card-body">
      <table class="table">

        <head>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Kelas</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
          </tr>
        </head>

        <body>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nim; ?></td>
            <td><?php echo $kelas; ?></td>
            <td><?php echo $tanggal_lahir; ?></td>
            <td><?php echo $tempat_lahir; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $agama; ?></td>
          </tr>
        </body>
        </head>
      </table>
    </div>
  </div>
</div>
</body>

</html>