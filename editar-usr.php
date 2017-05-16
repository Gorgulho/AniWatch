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

        if(isset($_GET['usr']) && mysqli_num_rows(mysqli_query($conn, $check)) >= 1) // valida de a variavel Por GET tem alguma coisa e se o que tem é válido
        {
            if(isset($_SESSION['user']) && $_SESSION['type'] == 'admin' || $user == $_SESSION['user']) //valida se existe sessão e que utilizador está e se é administrador a entrar
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
        
        <!-- Meus CSS's 
        ======================================-->
        <link rel="stylesheet" href="css/size.css">

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
        <header class="bg-success mt70 ">

            <div class="container">
                <div class="row mt20 mb30">
                     <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase">Editar Perfil<small class="color-light alpha7"><?php echo $_GET['usr'];?></small></h3>
                    </div>
                </div>
            </div>
                
        </header>
        <?php
            $res = mysqli_query($conn,"SELECT * FROM users WHERE username='". $_GET['usr']."'");

            $row = mysqli_fetch_array($res);
        ?>
        <!-- Mostra a imagem de perfil do utilizador-->
        <div class="col-md-12">
            <h4 class="text-center ">                            
                <div class="col-md-12 team team-four">
                    <img src="img/<?php echo $row['picture'];?>" alt="" class="img-responsive resize">
                </div> 
                <small class="heading heading-dotted-icon center-block color-success">
                    <span>&nbsp;</span>
                    <i class="fa fa-user"></i>
                    <span>&nbsp;</span>
                </small>
            </h4>
        </div>

        <div class="col-sm-8 col-sm-offset-2 mt10">               
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="input-sm input-rounded form-control" id="user_edit" placeholder="<?php echo $row['username'];?>" maxlength="100">
            </div>                                               
        </div>

        <div class="col-sm-8 col-sm-offset-2 mt10">               
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="input-sm input-rounded form-control" id="email_edit" placeholder="<?php echo $row['email'];?>" maxlength="100">
            </div>                                               
        </div>

        <div class="col-sm-8 col-sm-offset-2 mt10">               
            <div class="form-group">
                <label>Nova Password</label>
                <input type="password" class="input-sm input-rounded form-control" id="nova_pass"  maxlength="100">
            </div>                                               
        </div>

        <div class="col-sm-8 col-sm-offset-2 mt10">               
            <div class="form-group">
                <label>Confirmar Nova Password</label>
                <input type="password" class="input-sm input-rounded form-control" id="nova_passconf"  maxlength="100">
            </div>                                               
        </div>

        <div class="col-sm-8 col-sm-offset-2 mt5">
            <a class="button-o button-lg input-lg form-control button-circle button-success hover-rectangle-out" id="guard">Guardar</a><br><br>
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
        
            <script>

                $(document).ready(function() {
                    function validateEmail(email) {
                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(email);
                    }

                    function validate() {
                        var email = $("#email_edit").val();
                        if (!validateEmail(email)) {
                            return false;
                        } else {
                            return true;
                        }
                    }
                    var id = <?php echo $row['id']; ?>;
                    $('#guard').bind('click', function(data) {
                        if ($('#email_edit').val() != ""){
                            validate();
                            if (validate() == false ) {
                                toastr.warning('Por favor insira um email válido.','Aviso!');
                            }else{
                                data.preventDefault();
                                $.ajax({
                                    url: 'trataeditusr.php',
                                    dataType: 'json',
                                    data: {
                                        username: $('#user_edit').val(),
                                        email: $('#email_edit').val(),
                                        novapass: $('#nova_pass').val(),
                                        novapass_conf: $('#nova_passconf').val(),
                                        id: id
                                    },
                                    type: 'POST',
                                    success: function(data) {
                                        console.log(data);
                                        if (data.status == 'success') {
                                            window.location.href='profile.php?usr='+ $('#user_edit').val() +'&status=success';
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
                            }
                        }else{
                            data.preventDefault();
                            $.ajax({
                                url: 'trataeditusr.php',
                                dataType: 'json',
                                data: {
                                    username: $('#user_edit').val(),
                                    email: $('#email_edit').val(),
                                    novapass: $('#nova_pass').val(),
                                    novapass_conf: $('#nova_passconf').val(),
                                    id: id
                                },
                                type: 'POST',
                                success: function (data) {
                                    if (data.status == 'success') {
                                        window.location.href='profile.php?usr='+ $('#user_edit').val() +'&status=success';
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
                        }
                    });
                });
        </script>
        
    </body>
</html>