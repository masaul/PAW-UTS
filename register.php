<?php
require "myCode/fungsi.php";
if (isset($_POST["signup"])) {
    if (register($_POST) > 0) {
        echo "<script type='text/javascript'>alert('akun anda sudah terdaftar');</script>";
    } else {
        echo mysqli_error($koneksiDB);
    }
}
if (isset($_POST['signin'])) {
    header('Location: login.php');
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
    <div class="box-form-signup">
        <div class="border-top-box-form"></div>
        <div class="title-signin">
            <h2> Sign Up</h2>
        </div>
        <form action="" method="post">
            <div class="content-box-form">
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person-bounding-box"></i></div>
                            <input type="text" name="nama" class="form-control form-control-lg" placeholder="Name" aria-label="name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                            <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" aria-label="username">
                        </div>
                    </div>
                </div>
                <div class="form-username">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                        <input class="form-control form-control-lg" name="email" type="text" placeholder="E-mail" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="form-password">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                        <input class="form-control form-control-lg" name="password1" type="text" placeholder="Password" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="form-password">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                        <input class="form-control form-control-lg" name="password2" type="text" placeholder="Repeat Password" aria-label=".form-control-lg example">
                    </div>
                </div>
            </div>
            <div class="button-form" style="margin-top: -20px;">
                <div class="d-grid gap-2">
                    <button class="btn myButton" type="submit" name="signup">
                        Sign Up
                    </button>
                </div>
                <p class="text-center mt-2">Sudah punya akun? <a href="login.php" style="text-decoration: none; color:green;"> Sign In</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>