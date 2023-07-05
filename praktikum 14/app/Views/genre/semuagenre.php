<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class ="container">

    <h1>Data Genre</h1>
    <table border ="1" cellspacing="2" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama genre</th>
            <th>Action</th>
        </tr>

        <?php $i = 1 ;?>
        <?php foreach($semuagenre as $genre): ?>
          
        <tr>
        <td><?= $i++;?></td>
        <td><?php echo $genre['nama_genre']?></td>
        <td>
          <a href="#" class="btn btn-success">Update</a>
          <a href="#" class="btn btn-warning">Delete</a>
        </td>
        </tr>

    <?php endforeach;?>
</table>
</body>
</html>
<?= $this->endSection() ?>

