<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
  
<div class="container">
<div class ="row">
    <div class="col-md-12">
        <table class= "table table-hover">
            <tr>
            <th>No</th>
            <th>Nama Genre</th>
</tr>
<?php $i =1;?>
<?php foreach($data_genre as $genre) : ?>
    <tr>
        <td> <?= $i++; ?></td>
        <td> <?= $genre["nama_genre"]?></td>
<td>
    <a href="" class="btn btn-success"> Update</a>
    <a href="" class="btn btn-warning"> Delete</a>
</td>
</tr>
<?php endforeach; ?>
    </div>
    <script scr="/assets/js/bootstrap.min.js"></script>
</table>
</body>
</html>
<?= $this->endSection() ?>