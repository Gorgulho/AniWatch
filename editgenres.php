<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>AniWatch-Adicionar Géneros</title>
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

        <?php
		session_start();

		include ('bd/db.php'); //vai fazer conecção a base de dados

		if(isset($_SESSION['user']) && $_SESSION['type'] == 'admin') //se o utiliazador tiver com conta iniciada pode entrar na página
		{

		}
		else //se o utiliazador tiver com conta iniciada será rederecionado ao formulário de login/registo
		{
			  header('location:inicial.php'); //rederecionamento para o index
		}
		?>

        <!-- Load Core CSS
        =====================================-->
        <link rel="stylesheet" href="css/core/bootstrap.min.css">
        <link rel="stylesheet" href="css/core/animate.min.css">
        <link rel="stylesheet" href="css/demo.css">

        <!-- Load Main CSS
        =====================================-->
        <link rel="stylesheet" href="css/main/main.css">
        <link rel="stylesheet" href="css/main/setting.css">
        <link rel="stylesheet" href="css/main/hover.css">

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

        <!-- Meus CSS's
        ======================================-->
        <link rel="stylesheet" href="css/size.css">

        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">


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


        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top" style="border-bottom:1px solid #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="inicial.php">
                        <img src="img/logo/logo-aw.png" alt="logo">
                        AniWatch
                    </a>
                </div>

                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <?php
                            if($_SESSION['type'] == 'admin')
                            {
                                echo '<li class=""><a href="administracao.php"><span class="color-dark">Administração</span> </a>';
                            }
                        ?>

                        <li class=""><a href="profile.php?usr=<?php echo $_SESSION["user"];?>"><span class="color-dark"><?php echo $_SESSION['user'];?></span></a>

                        <li class=""><a href="#"><span class="color-dark">Lista</span> </a>

                        <li class=""><a href="#"><span class="color-dark">Top Animes</span> </a>

                        <li class=""><a href="#"><span class="color-dark">Contactos</span> </a>

                        <?php
                            if($_SESSION['user'])
                            {
                                echo '<li class=""><a href="logout.php?logout" id="logout"  ><span class="color-black"> Sair</span></a>';
                            }
                        ?>

                        <li><a href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search fa-fw color-success"></i><span class="color-dark">Pesquisa</span></a></li>

                    </ul>

                </div>
            </div>
        </nav>


        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>

            </div>
        </div>


        <!-- Subheader Area
        ===================================== -->
        <header class="bg-success mt70 ">

            <div class="container">
                <div class="row mt20 mb30">
                     <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase">Adicionar<small class="color-light alpha7">Géneros</small></h3>
                    </div>
                </div>
            </div>

        </header>


        <div class="col-sm-8 col-sm-offset-2 mt10">
            <div class="form-group">
                <input type="text" class="input-sm input-rounded form-control" id="gen" maxlength="100" placeholder="Género">
                <button class="button button-md button-rounded button-success hover-icon-hang" id="guard">Guardar</button>
            </div>
        </div>


            <br><br>


        <!-- Footer Area
        =====================================-->
        <footer id="footer" class="footer-one center-block bg-light pt50 pb30 ">
            <div class="container">
                <div class="row">

                    <div class="col-md-2 col-xs-12 mb25">
                        <div class="navbar-brand-footer center-block">Pasific</div>
                        <div class="copyright center-block">&copy; 2016. All rights reserved.</div>
                    </div>

                    <div class="col-md-8 col-xs-12 text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class=" bb-solid-1">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Price</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Works</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-12 mt25">
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Knowledgebase</a></li>
                                    <li><a href="#">Term of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-12">
                        <div class="social-container">
                            <ul class="footer-social text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </footer>
        <!-- JQuery Core
        =====================================-->
        <script src="js/core/jquery.min.js"></script>
        <script src="js/core/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

        <!-- Magnific Popup
        =====================================-->
        <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup/magnific-popup-zoom-gallery.js"></script>

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

            <script>

                $(document).ready(function() {

                    $('#guard').bind('click', function(data) {
                        data.preventDefault();
                        $.ajax({
                            url: 'trataaddgenr.php',
                            dataType: 'json',
                            data: {
                                gen: $('#gen').val(),
                            },
                            type: 'POST',
                            success: function(data) {
                                console.log(data);
                                if (data.status == 'success') {
                                    toastr.success('Género guardado com sucesso!','Sucesso')
                                } else if (data.status == 'error') {
                                    toastr.error('Não foi possível processar o pedido',
                                        'Erro de ligação');
                                } else if (data.status == 'gen_error') {
                                    toastr.error("Género já existe!", "Erro");
                                }
                            }
                        });
                    });
                });
        </script>

    </body>
</html>
