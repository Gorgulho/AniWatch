<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AniWatch-Editar</title>        
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

		include ('bd/db.php'); 

        $user = $_GET['usr'];

        $check = "SELECT * FROM users WHERE username='".$user."'";

        if(isset($_GET['usr']) && mysqli_num_rows(mysqli_query($conn, $check)) >= 1) // valida se a variavel Por GET tem alguma coisa e se o que tem é válido
        {
            if(isset($_SESSION['user'])) //valida se existe sessão
            {

            }
            else 
            {
                header('location:inicial.php');
            }
        }
        else
        {
            header('location:inicial.php');
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
                    <a class="navbar-brand page-scroll" href="#page-top">
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
        <header class="bg-grad-mojito mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase">Perfil<small class="color-light alpha7"><?php echo $_GET['usr'];?></small></h3>
                    </div>
                </div>
            </div>

        </header>
        
        
        <!-- Teams Styles
        ===================================== -->
        <div id="shortcodeTeams" class="bg-gray pt30">
            
            <!-- Team One -->
            <div class="container">
                <div class="row">
                    <h4 class="text-center">                          
                        Team Member One
                    </h4>   
                </div>
                
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 mt30 hover-wobble-vertical">                    
                        <div class="team team-one">
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                            <img src="img/team/14-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 hover-wobble-vertical mt30">                    
                        <div class="team team-one">
                            <h5>John Doe<small class="color-pasific">Web Designer</small></h5>                            
                            <img src="img/team/9-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 hover-wobble-vertical mt30">                    
                        <div class="team team-one">
                            <h5>Harry Doe<small class="color-pasific">App Designer</small></h5>                            
                            <img src="img/team/7-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 hover-wobble-vertical mt30">                    
                        <div class="team team-one">
                            <h5>Terry Doe<small class="color-pasific">iOS Developer</small></h5>                            
                            <img src="img/team/10-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                </div>   
            </div>
            
            <!-- Team Two -->
            <div class="container mt30">
                <div class="row">
                    <h4 class="text-center">
                        Team Member Two
                    </h4>
                </div>   
                <div class="row">
                    
                    <div class="col-md-3 col-sm-4 col-xs-6 mt30">                    
                        <div class="team team-two">                            
                            <img src="img/team/img-team-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="img/team/img-team-2.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="img/team/img-team-3.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="img/team/img-team-4.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            
                        </div>                    
                    </div>
                    
                </div>
                
            </div>
            
            <!-- Team Three -->
            <div class="container mt30">
                
                 <div class="row mb25">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h4 class="">
                            Team Member Three
                        </h4>
                    </div>
                </div>
                
                
                 <div class="row">
                     
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="team team-three">                            
                            <img src="img/team/7.jpg" alt="" class="img-responsive hover-rotate">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter mr15"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                            </p>                            
                        </div> 
                    </div>
                     
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="team team-three">                            
                            <img src="img/team/8.jpg" alt="" class="img-responsive hover-rotate">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter mr15"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                            </p>                            
                        </div> 
                    </div>
                     
                     <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="team team-three">                            
                            <img src="img/team/9.jpg" alt="" class="img-responsive hover-rotate">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter mr15"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            </p>                            
                        </div> 
                    </div>
                     
                     <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="team team-three">                            
                            <img src="img/team/10.jpg" alt="" class="img-responsive hover-rotate">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter mr15"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            </p>
                        </div> 
                    </div>
 
                </div>
                
            </div>
            
            <!-- Team Four -->
            <div class="container mt50">
                <div class="row">
                    <h4 class="text-center">                          
                        Team Member Four
                    </h4>   
                </div>
                
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 mt30 hover-wobble-vertical">                    
                        <div class="team team-four bg-grad-stellar">
                            <h5>Michael Doe<small class="color-light alpha7">Co-Founder &amp; CEO</small></h5>                            
                            <img src="img/team/14-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 hover-wobble-vertical mt30">                    
                        <div class="team team-four bg-grad-blood-mary">
                            <h5>John Doe<small class="color-light alpha7">Web Designer</small></h5>                            
                            <img src="img/team/9-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 hover-wobble-vertical mt30">                    
                        <div class="team team-four bg-grad-violet">
                            <h5>Harry Doe<small class="color-light alpha7">App Designer</small></h5>                            
                            <img src="img/team/7-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 hover-wobble-vertical mt30">                    
                        <div class="team team-four bg-grad-day-tripper">
                            <h5>Terry Doe<small class="color-light alpha7">iOS Developer</small></h5>                            
                            <img src="img/team/10-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                </div>   
            </div>
            
            <div class="container mt75">
                <div class="row">
                    <h4 class="text-center">                          
                        Team Member Five
                    </h4>   
                </div>
                
                <div class="row mt25 mb50 container-team">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="flipInX" data-animation-delay="100">
                        <div class="team-seven mb25">
                                <div class="team-seven-content text-center pt50">
                                    <h5>
                                        Zahwa Aqila<small>CEO - Counder</small>
                                    </h5>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>                                    
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                                <div class="team-seven-overlay magictime" data-hover="perspectiveDown" data-return="perspectiveDownRetourn">
                                    <img src="img/team/1.png" alt="" />
                                </div>						
                            </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="flipInX" data-animation-delay="150">
                        <div class="team-seven mb25">
                                <div class="team-seven-content text-center pt50">
                                    <h5>
                                        Kholifa Nur<small>Web Developer</small>
                                    </h5>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>                                    
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                                <div class="team-seven-overlay magictime" data-hover="perspectiveDown" data-return="perspectiveDownRetourn">
                                    <img src="img/team/2.png" alt="" />
                                </div>						
                            </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="flipInX" data-animation-delay="200">
                        <div class="team-seven mb25">
                                <div class="team-seven-content text-center pt50">
                                    <h5>
                                        Taufiq Webb<small>Web Designer</small>
                                    </h5>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>                                    
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                                <div class="team-seven-overlay magictime" data-hover="perspectiveDown" data-return="perspectiveDownRetourn">
                                    <img src="img/team/3.png" alt="" />
                                </div>						
                            </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="flipInX" data-animation-delay="250">
                        <div class="team-seven mb25">
                                <div class="team-seven-content text-center pt50">
                                    <h5>
                                        Luai Smith<small>Web Designer</small>
                                    </h5>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>                                    
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                                <div class="team-seven-overlay magictime" data-hover="perspectiveDown" data-return="perspectiveDownRetourn">
                                    <img src="img/team/4.png" alt="" />
                                </div>						
                            </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="flipInX" data-animation-delay="300">
                        <div class="team-seven mb25">
                                <div class="team-seven-content text-center pt50">
                                    <h5>
                                        Avinas Doe<small>UIX Designer</small>
                                    </h5>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>                                    
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                                <div class="team-seven-overlay magictime" data-hover="perspectiveDown" data-return="perspectiveDownRetourn">
                                    <img src="img/team/5.png" alt="" />
                                </div>						
                            </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="flipInX" data-animation-delay="350">
                        <div class="team-seven mb25">
                                <div class="team-seven-content text-center pt50">
                                    <h5>
                                        Harry Boo<small>Co-Founder</small>
                                    </h5>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>                                    
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </div>
                                <div class="team-seven-overlay magictime" data-hover="perspectiveDown" data-return="perspectiveDownRetourn">
                                    <img src="img/team/6.png" alt="" />
                                </div>						
                            </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Team Five -->
            <div class="container">
                <div class="row">
                    <h4 class="text-center">                          
                        Team Member Six
                    </h4>   
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-five bg-light clearfix">
                            <img src="img/team/7-1.jpg" alt="" class="img-responsive">
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>                            
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-xs button-square button-pasific pull-right hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-five bg-light clearfix">
                            <img src="img/team/9-1.jpg" alt="" class="img-responsive">
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>                            
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-xs button-square button-pasific pull-right hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-five bg-light clearfix">
                            <img src="img/team/8-1.jpg" alt="" class="img-responsive">
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>                            
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-xs button-square button-pasific pull-right hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-five bg-light clearfix">
                            <img src="img/team/10-1.jpg" alt="" class="img-responsive">
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>                            
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-xs button-square button-pasific pull-right hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                </div>   
            </div>
            
            <!-- Team Five -->
            <div class="container-fluid bg-grad-stellar mt70 pb45">
            <div class="container mt50">
                
                <div class="row pt100">
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-six clearfix">
                            
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>
                            <img src="img/team/7-1.jpg" alt="" class="img-responsive center-block">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-sm button-square button-pasific hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-six clearfix active">
                            
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>
                            <img src="img/team/10-1.jpg" alt="" class="img-responsive center-block">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-sm button-square button-pasific hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-six clearfix active">
                            
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>
                            <img src="img/team/9-1.jpg" alt="" class="img-responsive center-block">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-sm button-square button-pasific hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 mt30">                    
                        <div class="team team-six clearfix">
                            
                            <h5>Michael Doe<small class="color-pasific alpha7">Co-Founder &amp; CEO</small></h5>
                            <img src="img/team/8-1.jpg" alt="" class="img-responsive center-block">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit..</p>
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <a href="#" class="button button-circle button-sm button-square button-pasific hover-ripple-out">View Profile</a>                            
                        </div>                    
                    </div>
                    
                </div>
                
                <div class="row mt50">
                    <h4 class="text-center color-light">                          
                        Team Member Carousel
                    </h4>
                </div>
                
                <div id="owlSectionFourItem" class="row">
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                            <img src="img/team/14-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>John Doe<small class="color-pasific">Web Designer</small></h5>                            
                            <img src="img/team/9-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>Harry Doe<small class="color-pasific">App Designer</small></h5>                            
                            <img src="img/team/7-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>Terry Doe<small class="color-pasific">iOS Developer</small></h5>                            
                            <img src="img/team/10-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                            <img src="img/team/14-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>John Doe<small class="color-pasific">Web Designer</small></h5>                            
                            <img src="img/team/9-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>Harry Doe<small class="color-pasific">App Designer</small></h5>                            
                            <img src="img/team/7-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                    <div class="col-sm-12 mt30 hover-wobble-vertical">
                        <div class="team team-one">
                            <h5>Terry Doe<small class="color-pasific">iOS Developer</small></h5>                            
                            <img src="img/team/10-1.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>                    
                    </div>
                    
                </div>   
                
            </div>
            </div>
            
        </div>
         
        
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
        
    </body>
</html>

<script>
    $(document).ready(function () {
        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="success"){
        ?>
                    console.log("balls");
                    toastr.success('Registro feito com sucesso', 'Sucesso!');
        <?php
                }
            }
        ?>    
    });
</script>