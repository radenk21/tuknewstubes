<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to TukNews</title>
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
            <h1>LOGIN</h1>
            <form method="POST" action="login.php" class="login-box1">
                <div class="form-input">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" name="username" placeholder="Username" id="username" required>
                </div>
                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>
                <div class="form-post">
                    <button type="submit" class="btn btn-dark w-100" name="btnlogin">Login</button>
                </div>
            </form>
            <?php
                require ("../koneksi.php");
                if (isset($_POST['btnlogin'])) 
                {
                    $user_login = $_POST['username'];
                    $pass_login = $_POST['password'];
                    $sql = "SELECT * FROM memberacc WHERE username = '$user_login'";
                    $query = mysqli_query($koneksi, $sql);
                    
                    if (!$query) {
                        die ("Query gagal". mysqli_error($koneksi));
                    }
                    $row = mysqli_fetch_array($query);
                    	
                        $user = $row['username'];
                        $pass = $row['password'];
                        $fullname = $row['fullname'];
                    
                    if ($user_login == $user && password_verify($pass_login,$pass)) {
                        header("Location:../index-logged.php");
                        
                        $_SESSION['username'] = $user;
                        $_SESSION['nama'] = $nama;
                        $_SESSION['fullname'] = $fullname;
                        
                    }
                    else {
                        echo '<br><div class="alert alert-danger" role="alert">E-mail / Password salah</div>';
                    }
                }
                ?>
            <div class="navigasi mt-5">
                <div class="navigasi1">
                    <p>Belum mendaftar? &nbsp; <a href="./register.php">Daftar sekarang!</a></p>
                    <a href="">Login sebagai creator</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../attributes/js/script.js"></script>
</body>
</html>