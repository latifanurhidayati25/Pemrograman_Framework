<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
<hi>Data Film</hi>

<div class="row">
<?php foreach($semuafilm as $film) : ?>
    <div class="col-md-4">
    <div class="card">
      <img src="/assets/cover/<?= $film["cover"] ?>" 
  class="card-img-top">
  <div cass="card-body">
    <h5 class="card-title"><?= $film["nama_film"] ?></h5>
    <p class="card-text"><?= $film["nama_genre"] ?> || <?= $film["duration"] ?></p>

    <a href="#" class="btn btn-info">Detail</a>
    <a href="#" class="btn btn-success">Update</a>
    <a href="#" class="btn btn-warning">Delete</a>

  </div>
</div>

</div>
<?php endforeach; ?>

</div>
</html>
<?= $this->endSection() ?>