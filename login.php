<?php
require "myCode/fungsi.php";
if (isset($_POST["signin"])) {
    $namaLengkap = $_POST['nama'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $checkUsername = mysqli_query($koneksiDB, "SELECT * FROM admin WHERE username = '$username'");
    session_start();
    $_SESSION['title'] = $username;
    $_SESSION['nama'] = $namaLengkap;
    if ($checkUsername == true && $password1 === 'admin') {
        header('Location: admin-index.php');
    } else {
        if (mysqli_num_rows($checkUsername) === 1) {
            $row = mysqli_fetch_assoc($checkUsername);
            if (password_verify($password1, $row["PASSWORD"])) {
                header("Location: data-orangtua.php");
                exit;
            }
        }
    }
    $error = true;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>UTS PAW</title>
    <link rel="stylesheet" href="mycss.css">
</head>

<body>
    <div class="box-form-signin">
        <div class="border-top-box-form"></div>
        <div class="title-signin">
            <h2> Sign In</h2>
        </div>
        <form action="" method="post">
            <div class="content-box-form">
                <h1>Login Your Account</h1>
                <div class="form-nama mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-person-bounding-box"></i></div>
                        <input class="form-control form-control-lg" name="nama" type="text" placeholder="Nama Lengkap" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="form-username mb-3">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="form-password" style="margin-top: -3px;">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                        <input class="form-control form-control-lg" type="text" name="password1" placeholder="Password" aria-label=".form-control-lg example">
                    </div>
                </div>
            </div>
            <div class="button-form " style="margin-top: -25px;">
                <div class="d-grid gap-2">
                    <button class="btn myButton" type="submit" name="signin">
                        Login
                    </button>
                </div>
                <p class="text-center mt-2">Belum punya akun? <a href="register.php" style="text-decoration: none; color:green;"> Sign Up</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>