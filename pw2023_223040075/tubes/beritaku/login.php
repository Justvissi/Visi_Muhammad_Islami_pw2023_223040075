<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Website Berita</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #00ced1">
        <div class="container">
            <a class="navbar-brand" href="index.php">Berita Ku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Terbaru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Populer</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- login -->
    <section class="container-fluid masuk">
        <div class="container text-center" style="padding: 10px">
            <div class="login">
                <form action="" method="post">
                    <h2>Masuk</h2>
                    <label for="username">Username</label>
                    <br />
                    <input type="text" placeholder="Masukan Username" name="username" id="username" />
                    <br />
                    <label for="password">Password</label>
                    <br />
                    <input type="password" placeholder="Masukan Password" name="password" id="password" />
                    <br />
                    <br />
                    <button type="submit" class="btn bg-body-secondary" name="submit">Masuk</button>
                    <br />
                    <hr />
                    <p>
                        Belum Punya Akun ?
                        <a href="daftar.php">Daftar</a>
                    </p>
                </form>
 <?php
require('function.php');

session_start();

if(isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `user` WHERE `username` = '{$user}' AND `password` = '{$password}'";
  $query = mysqli_query($conn, $sql);

  if($query->num_rows > 0) {
      $user = mysqli_fetch_array($query);
      $_SESSION['user_id']  = $user['user_id'];
      $_SESSION['nama'] = $user['nama'];
      $_SESSION['username']    = $user['username'];
      $_SESSION['level']      = $user['level'];
      echo "<script>alert('Login Berhasil!');</script>";

      if($user['level'] == 'admin'){
          echo "<meta http-equiv='refresh' content='0; url=dashboard/dashboard.php'>";
      } else {
          echo "<meta http-equiv='refresh' content='0; url=index.php'>";
      }
  } else {
      echo "<script type='text/javascript'>alert('username dan password salah!');</script>";
      echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  }
}
    
?>
            </div>
        </div>
    </section>
    <!-- akhir login -->
    <!-- footer -->
    <footer class="container-fluid inti">
        <div class="container kaki text-center">
            <p>Copyright 2023 Beritaku, Desaign By Visi Muhammad Islami</p>
        </div>
    </footer>
    <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></scrip>
</body>

</html>