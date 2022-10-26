<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit List!</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="list">Web Lanjut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="/list">To Do List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create">Add To Do List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Change user</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
   <h1 class="mt-5">Edit To do List</h1>
<form action ="/update/<?=$Todolist["id"]?>" method ="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="kegiatan">Kegiatan</label>
        <input type="text" name= "kegiatan" class="form-control" id="kegiatan" value="<?=$Todolist['kegiatan'] ?>">
      </div>
    <div class="form-group">
     <label for="waktu">Keterangan Waktu</label>
     <input type="text" name= "waktu" class="form-control" id="waktu" value="<?=$Todolist['waktu'] ?>">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" name= "deskripsi" class="form-control" id="deskripsi" value="<?=$Todolist['deskripsi'] ?>">
   </div>
  </div>
  <div class="col-6">
  </div>
<div>
</div>
  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">@2022 All rights ignored and will not be acknowledge.</span>
    </div>
</footer>

</body>
</html>