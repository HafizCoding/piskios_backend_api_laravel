<!DOCTYPE html>
<html>
    <head>
    
    <meta charset="UTF-8">
    <meta name="description" content="SolMusic HTML Template">
    <meta name="keywords" content="music, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Logo web -->
    <!--isi cok-->
    

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
    
    <!--Ini navbar cok-->
    @include('navbar')

    <!-- sliderPage -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hs-text">
                                <h2 ><span>Aplikasi </span> untuk jual pulsa.</h2>
                            <!--<p>Bismillah semoga website ini berguna untuk sekolah </p>-->
                                <a href="login" class="site-btn">Ayo Login!</a>
                                <a href="register" class="site-btn sb-c2">Daftar Dulu</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hr-img">
                                <img src="img/hero-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hs-text">
                                <h2><span>Pulsa, Token Listrik , Voucer Game </span>Semua ada Disini!</h2>
                               <!-- <p>Defeloper web : Hafiz Alvarezi<br> 
                                Desain web : Hafiz Alvarezi <br>
                                Admin web : Developer <br>
                                User web : Seluruh user <br></p> -->
                                <a href="login" class="site-btn">Lihat Sekarang</a>
                                <a href="register" class="site-btn sb-c2">Daftar Dulu</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hr-img">
                                <img src="img/hero-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sliderPage akhir -->

    <!-- js hafiz-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
