<?php
		session_start();

		include ('bd/db.php');
		

		if(isset($_SESSION['user']))
		{
			header('location:inicial.php');
		}
		
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AniWatch-Login</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Harry Boo">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Load Core CSS 
        =====================================-->
    <link rel="stylesheet" href="css/core/bootstrap.min.css">
    <link rel="stylesheet" href="css/core/animate.min.css">

    <!-- Load Main CSS 
        =====================================-->
    <link rel="stylesheet" href="css/main/main.css">
    <link rel="stylesheet" href="css/main/setting.css">
    <link rel="stylesheet" href="css/main/hover.css">
    <link rel="stylesheet" href="css/main/cover.css">

    <!-- Load Magnific Popup CSS 
        =====================================-->
    <link rel="stylesheet" href="css/magnific/magic.min.css">
    <link rel="stylesheet" href="css/magnific/magnific-popup.css">
    <link rel="stylesheet" href="css/magnific/magnific-popup-zoom-gallery.css">

    <!-- Load OWL Carousel CSS 
        =====================================-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">

    <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="css/color/blue.css">
        <link rel="stylesheet" href="css/color/brown.css">
        <link rel="stylesheet" href="css/color/cyan.css">
        <link rel="stylesheet" href="css/color/dark.css">
        <link rel="stylesheet" href="css/color/green.css">
        <link rel="stylesheet" href="css/color/orange.css">
        <link rel="stylesheet" href="css/color/purple.css">
        <link rel="stylesheet" href="css/color/pink.css">
        <link rel="stylesheet" href="css/color/red.css">
        <link rel="stylesheet" href="css/color/yellow.css">-->
    <link rel="stylesheet" href="css/color/pasific.css">

    <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="css/icon/linea-music-10.css">
        <link rel="stylesheet" href="css/icon/linea-software-10.css">
        <link rel="stylesheet" href="css/icon/linea-weather-10.css">-->
    <link rel="stylesheet" href="css/icon/font-awesome.css">
    <link rel="stylesheet" href="css/icon/et-line-font.css">

    <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- JQuery Core
    =====================================-->
    <script src="js/core/jquery.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <!-- Magnific Popup
        =====================================-->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup/magnific-popup-zoom-gallery.js"></script>

    <!-- Progress Bars
        =====================================-->
    <script src="js/progress-bar/bootstrap-progressbar.min.js"></script>
    <script src="js/progress-bar/bootstrap-progressbar-main.js"></script>

    <!-- JQuery Main
        =====================================-->
    <script src="js/main/jquery.appear.js"></script>
    <script src="js/main/isotope.pkgd.min.js"></script>
    <script src="js/main/parallax.min.js"></script>
    <script src="js/main/jquery.countTo.js"></script>
    <script src="js/main/owl.carousel.min.js"></script>
    <script src="js/main/jquery.sticky.js"></script>
    <script src="js/main/ion.rangeSlider.min.js"></script>
    <script src="js/main/imagesloaded.pkgd.min.js"></script>
    <script src="js/main/main.js"></script>

    <!-- Biblitecas do Toaster
        ===================================-->
    <script src="js/bootstrap-toastr/toastr.js"></script>
    <link rel="stylesheet" href="js/bootstrap-toastr/toastr.css">

</head>

<body id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">


    <!-- Page Loader
        ===================================== -->
    <div id="pageloader" class="bg-success">
        <div class="loader-item">
            <img src="img/other/puff.svg" alt="page loader">
        </div>
    </div>

    <a href="#page-top" class="go-to-top">
        <i class="fa fa-long-arrow-up"></i>
    </a>


    <div class="site-wrapper" style="background:url(img/other/fundo.png) 50% 50% no-repeat;">

        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <!-- Navigation Area
                            ===================================== -->
                        <nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                                            <i class="fa fa-bars"></i>
                                        </button>-->
                                    <a class="navbar-brand page-scroll" href="#page-top">
                                        <img src="img/logo/logo-aw.png" alt="logo" class="">
                                        <span class="color-dark">AniWatch</span>
                                    </a>

                                </div>

                                <!--<div class="navbar-collapse collapse navbar-main-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class=""><a href="mp-index-carousel-1.html"><span class="color-dark">Home</span></a>
                                            <li class=""><a href="page-about-1.html"><span class="color-dark">About</span> </a>
                                            <li class=""><a href="page-feature-1.html"><span class="color-dark">Feature</span> </a>
                                            <li class=""><a href="page-service-1.html"><span class="color-dark">Service</span> </a>
                                            <li class=""><a href="blog-posts-one-masonry-center-3col.html"><span class="color-dark">Blog</span> </a>
                                            <li class=""><a href="page-contact-1.html" class="mr50"><span class="color-dark">Contact</span> </a>
                                        </ul>

                                    </div>-->
                            </div>
                        </nav>

                    </div>
                </div>

                <div id="formLogin" class="inner cover text-center animated" data-animation="fadeIn" data-animation-delay="100">
                    <br>
                    <h3 class="font-montserrat cover-heading mb20 mt20 pt50">Login</h3>
                    <form class="clearfix mb35" method="POST" action="">
                        <div class="col-sm-8 col-sm-offset-2">
                            <input type="text" autocomplete="off" name="username" id="usr_log" class="form-control text-center no-border input-lg input-circle bg-light-transparent" 
                                placeholder="Username/Email">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 mt10">
                            <input type="password" name="password" id="pass_log" class="form-control text-center no-border input-lg input-circle bg-light-transparent"
                                placeholder="Password">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 mt5">
                            <button class="button-o button-lg input-lg form-control button-circle button-success hover-rectangle-out" id="logins">Login</button><br><br>
                            <a href="#" class="color-dark">Esqueceu a password?</a><br>
                            <!-- falta configurar o sistema para fazer recovery da password -->
                            <a href="#" class="color-dark" id="showFormRegister">Registe-se aqgora.</a>
                        </div>
                    </form>
                    <br>
                </div>
                <div id="formRegister" class="inner cover text-center hidden animated" data-animation="fadeIn" data-animation-delay="100">
                    <br>
                    <h3 class="font-montserrat cover-heading mb20 mt20 pt50">Registo</h3>
                    <form class="clearfix mb35" method="POST" action="trataregist.php">
                        <div class="col-sm-8 col-sm-offset-2">
                            <input type="text" autocomplete="off" name="username" id="usr" class="form-control text-center no-border input-lg input-circle bg-light-transparent"
                                placeholder="Username">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 mt10">
                            <input type="email" autocomplete="off" name="email" id="email" class="form-control text-center no-border input-lg input-circle bg-light-transparent"
                                placeholder="Email">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 mt10">
                            <input type="password" name="password" id="pass" class="form-control text-center no-border input-lg input-circle bg-light-transparent"
                                aria-describedby="inputError2Status" placeholder="Password">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 mt10">
                            <input type="password" name="confpassword" id="pass_conf" class="form-control text-center no-border input-lg input-circle bg-light-transparent"
                                placeholder="Confirme a Password">
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 mt5">
                            <button class="button-o button-lg input-lg form-control button-circle button-success hover-rectangle-out" id="regis">Register Now</button><br><br>
                            <a href="#" class="color-dark" id="showFormLogin">Já tem uma conta? Faça Login aqui</a><br>
                        </div>
                    </form>
                    <br>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#regis').bind('click', function (data) {
                            data.preventDefault();
                            $.ajax({
                                url: 'trataregist.php',
                                dataType: 'json',
                                data: {
                                    username: $('#usr').val(),
                                    email: $('#email').val(),
                                    password: $('#pass').val(),
                                    password_conf: $('#pass_conf').val()
                                },
                                type: 'POST',
                                success: function (data) {
                                    if (data.status == 'success') {
                                        toastr.success('Registro feito com sucesso', 'Sucesso!');
                                        $('#usr').val("");
                                        $('#email').val("");
                                        $('#pass').val("");
                                        $('#pass_conf').val("");
                                    } else if (data.status == 'error') {
                                        toastr.error('Não foi possível processar o pedido',
                                            'Erro de ligação');
                                    } else if (data.status == 'usr_error') {
                                        toastr.error("Utilizador já existe!", "Error!");
                                    } else if (data.status == 'email_error') {
                                        toastr.error("Email já existe!", "Error!");
                                    } else if (data.status == 'passwd_error') {
                                        toastr.error("A password não corresponde!", "Error!");
                                    }
                                }
                            });
                        });
                    });

                    $(document).ready(function () {
                        $('#logins').bind('click', function (data) {
                            data.preventDefault();
                            $.ajax({
                                url: 'tratalogin.php',
                                dataType: 'json',
                                data: {
                                    username: $('#usr_log').val(),
                                    password: $('#pass_log').val()
                                },
                                type: 'POST',
                                success: function (data) {
                                    if (data.status == 'success') {
                                        toastr.success('Log in feito com sucesso', 'Sucesso!');
                                        window.location.href="inicial.php";
                                    }else if (data.status == 'error') {
                                        toastr.error('Username ou Password incorretos.',
                                            'Erro');
                                    }
                                }
                            });
                        });
                    });
                </script>
                <div class="mastfoot">
                    <div class="inner pt50">
                        <p class="color-light text-center">&copy;2016 Pasific Templare by Myboodesign.com</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Custom Script
        =====================================-->
    <script>
        $(function () {
            "use strict";
            $("#showFormRegister").on('click', function () {
                $("#formLogin").addClass("hidden");
                $("#formRegister").removeClass("hidden");
            });
            $("#showFormLogin").on('click', function () {
                $("#formLogin").removeClass("hidden");
                $("#formRegister").addClass("hidden");
            })
        })
    </script>

</body>

</html>