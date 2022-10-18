<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="card p-2">
      <div class="card-body">
      </div>
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tabel</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <form method="POST" class="row g-3" action="<?php echo base_url() . 'Welcome/tabel' ?>">
        <div class="col-md-12">
          <label for="inputName" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="col-12">
          <label for="inputName" class="form-label">NIM</label>
          <input type="text" class="form-control" name="nim">
        </div>
        <div class="col-12">
          <label for="inputAlamat" class="form-label">Kelas</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">12.3A.21</option>
            <option value="2">12.3B.21</option>
          </select>
        </div>
        <div class="col-12">
          <label for="inputTanggallahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tanggal_lahir">
        </div>
        <div class="col-12">
          <label for="inputtempatlahir" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir">
        </div>
        <div class="col-12">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat">
        </div>
        <div class="col-12">
          <label for="inputAlamat" class="form-label">Jenis Kelamin</label>
          <select class="form-select" class="form-control" name="jenis_kelamin" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">LAKI-LAKI</option>
            <option value="2">PEREMPUAN</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputAgama" class="form-label">Agama</label>
          <select class="form-select" class="form-control" name="agama" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Khatolik</option>
            <option value="4">Budha</option>
            <option value="5">Hindu</option>
            <option value="5">Khonghucu</option>
            <option value="5">Protestan</option>
        </div>
        </select>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
</body>
</html>