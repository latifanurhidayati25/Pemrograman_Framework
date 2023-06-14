<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>data film</title>
</head>
<body>
    <h1>Data Genre</h1>
    <table border ="1" cellspacing="2" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama genre</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
        </tr>
        <?php $i = 1 ;?>
        <?php foreach($semuagenre as $genre): ?>
        <tr>
        <td><?= $i++;?></td>
        <td><?php echo $genre['nama_genre']?></td>
        <td><?php echo $genre['created_at']?></td>
        <td><?= $genre['update_at']?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
