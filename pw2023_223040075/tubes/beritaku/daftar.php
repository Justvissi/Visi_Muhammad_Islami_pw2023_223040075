<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Halaman Registrasi</title>
</head>

<body>

    <section class="container-fluid regist">
        <div class="container text-center" style="padding: 10px;">
            <div class="daftar">
                <form action="" method="post">
                    <h2>Daftar</h2>
                    <label for="nama">Nama*</label>
                    <br>
                    <input type="text" placeholder="nama" name="nama" id="nama" required>
                    <br>
                    <label for="username">Username*</label>
                    <br>
                    <input type="text" placeholder="username" name="username" required>
                    <br>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" placeholder="Password" name="password" id="password">
                    <br>
                    <br>
                    <button type="submit" name="submit" class="btn bg-body-secondary">Daftar</button>
                    <br>
                    <br>
                    <button class="btn bg-body-secondary"><a href="index.php">Kembali</a></button>
                    <br>
                    <hr>
                    <p>Sudah Punya Akun ?
                        <a href="login.php">Masuk</a>
                    </p>
                </form>
                    <?php 

                    require('koneksi.php');
                    
                    if(isset($_POST['submit'])) {
                      
                      $nama = $_POST['nama'];
                      $username     = $_POST['username'];
                      $password     = $_POST['password'];
                    
                      $sql = "INSERT INTO user (nama, username, password, level) VALUE('{$nama}', '{$username}', '{$password}', 'user')";
                      $query = mysqli_query($conn, $sql);
                    
                      echo "<script>alert('Register Berhasil!');</script>";
                      echo "<meta http-equiv='refresh' content='0; url=login.php'>";
                    
                    }
                    
                    
                    ?>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

</html>