<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to TukNews</title>
    <link rel="stylesheet" href="../attributes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header id="navbar">
        <div class="namee">
            <a href="../index.html">
                <h1 id="first-name">Tuk</h1>
                <h1 id="last-name">News</h1>
            </a>
        </div>
    </header>
    <div class="login-box container">
        <div class="box">
            <h1>REGISTER</h1>
            <form method="post" action="register.php" class="login-box1">
                <div class="datadiri">
                    <div class="form-input">
                        <label for="nama">Full Name</label>
                        <input type="text" name="nama" id="nama" required>
                    </div>
                </div>
                <div class="form-input">
                    <label for="email">E-mail address</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-input">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" required>
                </div>
                <div class="form-post">
                    <button type="submit" class="btn btn-dark w-100" onclick="confirmpass()" name="daftar">Daftar</button>
                </div>
                <?php
                    require_once'../koneksi.php';
                    if (isset($_POST['daftar'])) {
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $cpass = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);
                        
                        $adduser = mysqli_query($koneksi, "INSERT INTO memberacc (fullname, email, username, password, cpassword) VALUES ('$nama', '$email', '$username', '$pass', '$cpass')");
                        // $sql = "INSERT INTO memberacc (fullname, email, username, password, cpassword) VALUES ('$nama', '$email', '$username', '$pass', '$cpass')";
    
                        if ($koneksi -> query($sql) === TRUE) {
                            echo "</br>". "Registrasi Akun Anda Berhasil";
                        } else {
                            echo "Terjadi Kesalahan:".$sql."</br>".$koneksi -> error;
                        }
    
                        $koneksi -> close();
                    }
                    ?>
            </form>
            <div class="navigasi mt-5">
                <div class="navigasi1">
                    <p>Sudah punya akun? <a href="./login.php">Masuk di sini.</a></p>
                    <a href="./login.html">Login sebagai creator.</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // sticky navbar
            window.onscroll = function() {
                var navbar = document.getElementById("navbar");
                var menu = document.getElementById("menu");

                if (window.pageYOffset > navbar.offsetTop) {
                    navbar.classList.add("sticky");
                }
                else {
                    navbar.classList.remove("sticky");
                }
            }
            // password confirm
            function confirmpass() {
                var pass = document.getElementById("password");
                var cpass = document.getElementById("cpassword");
                
                if (cpass.value != pass.value) {
                    cpass.setCustomValidity("Passwords Don't Match");
                }
                else {
                    cpass.setCustomValidity('');
                }
                
            }

    </script>
</body>
</html>
