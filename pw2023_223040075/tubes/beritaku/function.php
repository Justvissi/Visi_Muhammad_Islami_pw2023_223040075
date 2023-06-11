<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'tubes';
    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');

    function query($data){
        global $conn;
        $result = mysqli_query($conn, $data);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;
    }

    // function tambah($data){
    //     global $conn;
    //     $gambar = $data['gambar'];
    //     $judul_article = $data['judul_article'];
    //     $isi_article = $data['isi_article'];
    //     $tanggal_rilis = $data['tanggal_rilis'];
      
    //     $query = "INSERT INTO 
    //               article 
    //               VALUES
    //               ('$gambar','$judul_article',
    //               '$isi_article','$tanggal_rilis')";
      
    //     mysqli_query($conn,$query) or 
    //     die(mysqli_error($conn));
    //     return mysqli_affected_rows($conn);
    //   }

      function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}
?>