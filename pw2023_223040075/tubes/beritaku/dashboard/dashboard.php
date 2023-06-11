<?php require ('../function.php'); 
$article= query("SELECT * FROM article");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style.css" />
    <title>Dashboard</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #00ced1;">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gambar</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Data artikel</a>
                    </li>
                    <li>
                        <a class="btn btn-outline-success" href="../config/logout.php" onclick="konfirmasiKeluar()">Logout</a>
                    </li>
                    <script>
                        function konfirmasiKeluar(){
                            var tanya = confirm("Apakah Anda Ingin Keluar ?");

                            if(tanya == true){
                                document.location.href="logout.php";
                            }else{

                            }
                        }
                    </script>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
      
    <!-- isi dashboard -->
  <div class="container mt-3";>
  <h1>Halaman Dashboard</h1>

  <h3>Daftar Article</h3>
    <a href="../config/tambah.php" class="btn btn-primary" style="">Tambah
     Data Article</a>
  
     <div class="row">
      <div class="col-md-6">
        <form action="" method="get" >
          <div class="input-group my-3">
          <input type="saerch" class="form-control" 
            placeholder="Search Article(s).." name = "keyword" id = "keyword" autofocus autocomplete = "off" >
          <button class="btn btn-primary" type="submit" name = "button-saerch" id="button-saerch">Saerch</button>
         </div>
        </form>
      </div>
     </div>

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
</div>
  </div>
</div>
    <!-- akhir isi dashboard -->

    <!-- footer -->
    <footer class="container-fluid inti">
        <div class="container kaki text-center">
            <p>Copyright 2023 Beritaku, Desaign By Visi Muhammad Islami</p>
        </div>
    </footer>
    <!-- akhir footer -->
    <script src="../js/script.js"></script>
</body>
</html>