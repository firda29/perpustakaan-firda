<?php
    session_start();
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login Ke Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
        }
    </style>
</head>
<body class="bg-primary d-flex align-items-center justify-content-center">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header text-center">
                        <h3 class="font-weight-light my-3">Login Perpustakaan Digital</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if (isset($_POST['login'])) {
                                $username = $_POST['username'];
                                $password = md5($_POST['password']);

                                $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
                                $cek = mysqli_num_rows($data);
                                if ($cek > 0) {
                                    $_SESSION['user'] = mysqli_fetch_array($data);
                                    echo '<script>alert("Selamat Datang, Login Berhasil"); location.href="index.php";</script>';
                                } else {
                                    echo '<script>alert("Maaf, Username/Password Salah!")</script>';
                                }
                            }
                        ?>
                        <form method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Username" required />
                                <label for="inputEmail">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="d-flex justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                                <a class="btn btn-danger" href="register.php">Register</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <small>&copy; Perpustakaan 2025</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
