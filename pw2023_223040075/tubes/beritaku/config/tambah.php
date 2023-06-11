<?php 
require('../koneksi.php');

function gambar(){
    $filename = $_FILES['gambar']['name'];
    $size     = $_FILES['gambar']['size'];
    $error    = $_FILES['gambar']['error'];
    $tmpname  = $_FILES['gambar']['tmp_name'];


    $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
    $EkstensionImage = explode('.', $filename);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage, $EkstensionValidImage)) {
        echo "<script>
                alert('Gambar yang anda upload tidak valid!');        
            </script>";
        return false;
    }

    if( $size > 10000000) {
        echo "<script>
                alert('Ukuran gambar tidak bisa diatas 3MB!');        
            </script>";
        return false;
    }


    move_uploaded_file($tmpname, '../img/' . $filename);

    return $filename;

}
if(isset($_POST['tambah'])){

// $nama_destinasi itu buat pemanggilan baru dari $_POST['cek_in'];
// cek_in itu name dalam input
$gambar = gambar();
$judul_article = $_POST['judul_article'];
$isi_article = $_POST['isi_article'];
$tanggal_rilis = $_POST['tanggal_rilis'];

//$simpan disini untuk menghubungkan database dengan pemanggilan yang baru di buat di atas
$sql = "INSERT INTO `article` 
                    (`gambar`, `judul_article`, `isi_article`, `tanggal_rilis`) 
                    VALUES 
                    ('$gambar', '$judul_article', '$isi_article', '$tanggal_rilis');";

// $result menghubungkan koneksi dengan simpan yang dibuat
mysqli_query($conn, $sql);

$result = mysqli_affected_rows($conn);

// notif kalau berhasil input
if($result){
  echo "<script>alert('DATA BERHASIL');window.location='../dashboard/dashboard.php'</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <title>Tambah</title>
</head>
<body>

<div class="container mt-3">
  <h1>Tambah Data Article</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <div class="mb-3">
          <label for="judul_article" class="form-label">Judul_article</label>
          <input type="text" class="form-control" name="judul_article" id="judul_article">
        </div>
        <div class="mb-3">
          <label for="isi_article" class="form-label">Isi_article</label>
          <input type="text" class="form-control" name="isi_article" id="isi_article">
        </div>
        <div class="mb-3">
          <label for="tanggal_rilis" class="form-label">Tanggal_rilis</label>
          <input type="text" class="form-control" name="tanggal_rilis" id="tanggal_rilis">
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
        <br></br>
        <!-- <button class="btn btn-primary" type="submit" name="tambah">Kembali</button> -->
      </form>
    </div>
  </div>
</div>
</body>

</html>