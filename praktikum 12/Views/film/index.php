<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Data Film</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 99</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/film/all">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/genre">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <

                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Film</th>
                        <th>Cover</th>
                        <th>Genre</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1;?>
                    <?php foreach ($data_film as $film) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $film["nama_film"] ?></td>
                            
                            <td><img src="/assets/cover/<?= $film["cover"]?>" class="card-img-top full-width-image" 
                            alt="Poster Film" style="width:50px" ></td>
                            
                            <td><?= $film["nama_genre"] ?></td>
                            <td><?= $film["duration"] ?></td>
                            <td>
                                <a href="" class="btn btn-success">Update</class>
                                <a href="" class="btn btn-danger">Delete</class>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

        </div>
    </div>
</div>

    <script src="/assets/js/bootsrap.min.js"></script>
</body>

</html>

