<?php
session_start();

include ('bd/db.php'); //vai fazer conecção a base de dados
            
if(!isset($_SESSION['user'])) //se o utiliazador tiver com conta iniciada será rederecionado ao formulário de login/registo
{
header('location:index.php'); //rederecionamento para o index
}
?>

<html lang="en">
    <head>
        <title>AniWatch-\( ⨶ ෴ ⨶ )/</title>        
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
        
        
        <div class="site-wrapper" style="background:url(img/bg/bg-pattern-2.png) 50% 50% repeat;">

            <div class="site-wrapper-inner">

                <div class="cover-container">
                    
                    <div class="masthead clearfix">
                        <div class="inner">
                            <!-- Navigation Area
                            ===================================== -->
                            <nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <a class="navbar-brand page-scroll" href="#page-top">
                                            <img src="img/logo/logo-aw.png" alt="logo" class="">
                                            <span class="color-dark">AniWtach</span>
                                        </a>
                                    </div>

                                    <div class="navbar-collapse collapse navbar-main-collapse">
                                        <ul class="nav navbar-nav">
                                            <?php
                                                if($_SESSION['type'] == 'admin') 
                                                {
                                                    echo '<li class=""><a href="administracao.php"><span class="color-dark">Administração</span></a>';
                                                }
                                            ?>

                                            <li class=""><a href="profile.php?username=<?php echo $_SESSION["user"];?>"><span class="color-dark"><?php echo $_SESSION['user'];?></span></a>

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

                        </div>
                    </div>
                    
                    <div id="formLogin" class="inner cover text-center animated" data-animation="fadeIn" data-animation-delay="100">
                        <br>
                        <img class="pt25" src="img/other/404-miku.png" >
                        <h1 class="font-montserrat cover-heading mb20 mt20">Oops..<br>Não há nada por aqui!</h1><br><br>
                        <h1 style="font-size: 180px" class="color-success"><strong>404</strong></h1>
                        <br>
                    </div>

                    <div class="mastfoot pt50">
                        <div class="inner">
                            <p class="color-dark text-center">&copy;2016 Pasific Template by Myboodesign.com</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        

        <!-- JQuery Core
        =====================================-->
        <script src="js/core/jquery.min.js"></script>
        <script src="js/core/bootstrap.min.js"></script>
        
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
        
    </body>
</html>