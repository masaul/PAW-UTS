<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>SMA | Melati</title>
    <style>
        .myBrand {
            width: 30px;
            height: 30px;
        }

        .desc-content {
            display: flex;
            justify-content: space-around;
            border-bottom: 3px solid black;
        }

        .desc {
            width: 60%;
            padding-top: 60px;
        }

        .myfooter {
            height: 50px;
            line-height: 50px;
        }

        .myButton a {
            text-decoration: none;
            color: white;
        }

        .myButton a:hover {
            color: green;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-bookmark-star-fill d-inline-block align-text-top sizeBrand"></i>
                SMA | Melati
            </a>
            <form class="d-flex myButton">
                <button class="btn btn-outline-light me-4" type="submit"> <a href="login.php">Sign In</a></button>
                <b style="border-right: 3px solid white;"></b>
                <button class="btn btn-outline-light ms-4" type="submit"> <a href="register.php">Sign Up</a></button>
            </form>
        </div>
    </nav>
    <div class="container content">
        <div class="desc-content">
            <div class="img-desc-content">
                <img src="img/user.png" alt="user" width="350px">
            </div>
            <div class="desc">
                <h1>Selamat Datang !</h1>
                <p> <span style="font-weight: bold;">Islami, Berprestasi, dan Berbudaya Lingkungan </span> merupakan visi sekolah kami,
                    maka inilah wujud dari upaya kami dalam meningkatkan kualitas pendidikan di lingkungan sekolah kami,
                    SMA Melati tanggap dengan perkembangan dan kemajuan teknologi.
                    Sebagai SMA program Vokasi, SMA Melati membekali lulusan dengan ketrampilan yang siap terjun di dunia usaha dan industri
                    dengan dukungan pengajar lulusan S1 dan S2 yang dimiliki sekolah,
                    maka kami siap untuk berkompetisi dengan Madrasah lain.
                </p>
                <button type="button" class="btn btn-success btn-lg"><a href="login.php" style="text-decoration: none; color:white;">Daftar Sekarang</a></button>
            </div>
        </div>
        <div class="jurusan">
            <h2 class="text-center p-3">Jurusan</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="img/ipa.jpg" class="card-img-top" alt="IPA">
                        <div class="card-body">
                            <h5 class="card-title">IPA</h5>
                            <p class="card-text">Jurusan IPA akan mempelajari tentang ilmu eksak, seperti matematika, fisika, kimia, biologi dan ada juga yang lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/ips.jpg" class="card-img-top" alt="IPS">
                        <div class="card-body">
                            <h5 class="card-title">IPS</h5>
                            <p class="card-text">Jurusan IPS akan mempelajari tentang mata pelajaran peminatan, diantaranya Ekonomi, Geografi, Sejarah dan Sosiologi. </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/bahasa.jpg" class="card-img-top" alt="Bahasa">
                        <div class="card-body">
                            <h5 class="card-title">Bahasa</h5>
                            <p class="card-text">Jurusan Bahasa mengedepankan keahlian dalam berbahasa. Baik itu bahasa asing maupun bahasa indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-dark text-light mt-5">
        <div class="container my-auto">
            <div class="copyright text-center my-auto myfooter">
                <span>Copyright &copy; SMA Melati</span>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>