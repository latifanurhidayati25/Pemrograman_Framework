<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layar Kaca 8080</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script> <!-- tambahkan ini -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 99</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/film/all">Branda </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/genre">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "href="/about">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <?= $this->renderSection('content') ?>

    <div class="container">
        <!-- <footer class="jumbotron jumbotron-fluid mt-5 mb-0"> -->
        <footer class="row row-cols-5 py-5 my-5 border-top">
            <div class="container text-center">Copyright &copy
                <?= Date('Y') ?> Latifa  Nur Hidayati
            </div>
        </footer>
    </div>
    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>


</body>

</html>