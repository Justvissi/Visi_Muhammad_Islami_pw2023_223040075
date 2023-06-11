<?php 
require('../function.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
            article 
            WHERE
            judul_article LIKE '%$keyword%' or
            tanggal_rilis LIKE '%$keyword%' 
            ";
$article = query($query);
?>
 <table id="search-table" class="table" style="">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul_article</th>
      <th scope="col">Isi_article</th>
      <th scope="col">Tanggal_rilis</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($article as $a) :?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="../img/<?= $a['gambar']; ?>" width="70"></td>
      <td><?= $a['judul_article']; ?></td>
      <td><?= $a['isi_article']; ?></td>
      <td><?= $a['tanggal_rilis']; ?></td>
      <td>
        <a href="" class="badge text-bg-warning">ubah</a> |
            <a href="" class="badge text-bg-danger">hapus</a>
      </td>
    </tr>
    <?php endforeach ; ?>
  </tbody>
</table>
