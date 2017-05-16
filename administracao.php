<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AniWatch-Administração</title>
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

                        <li class=""><a href="profile.php?usr=<?php echo $_SESSION["user"];?>"><span class="color-dark"><?php echo $_SESSION['user'];?></span></a>

                        <li class=""><a href="#"><span class="color-dark">Lista</span> </a>

                        <li class=""><a href="#"><span class="color-dark">Top Animes</span> </a>

                        <li class=""><a href="#"><span class="color-dark">Contactos</span> </a>

                        <li class=""><a href="logout.php?logout" id="logout"  ><span class="color-black"> Sair</span></a>

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
        <header class="parallax-window-3 mt70" data-parallax="scroll" data-speed="0.2" data-image-src="img/other/fundo.png">

            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center pt30">
                        <h1 class="color-dark mt40 font-pacifico text-capitalize alpha7">
                            AniWatch Administração<br>
                        </h1>

                    </div>
                </div>
            </div>

        </header>
        <!-- fa-users  fa-cloud-upload   fa-eye-->
        <div class="col-md-12">
            <div class="panel-group" id="accordion1">

                <div class="panel panel-light">
                    <div class="panel-heading">
                        <a href="#collapse1" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                            <i class="fa fa-users"></i>Utilizadores
                        </a>
                    </div>
                    <?php
                        include('bd/db.php');

                        $sql = "SELECT * FROM users";  
  
                        $result = $conn->query($sql); 
                    ?>
                    <div id="collapse1" class="panel-collapse collapse in active">
                        <div class="panel-body">
                            <section id="shortcodeTable">
                                <div class="container pt10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Tipo User</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while($row = $result->fetch_assoc()) {  
                                                    echo "<tr>  
                                                    <td>" . $row["id"]. "</td>  
                                                    <td>" . $row["username"]. "</td>    
                                                    <td>" . $row["email"]. "</td> 
                                                    <td>" . $row["type_user"]. "</td>   
                                                    <td> <a href='delete.php?id=".$row["id"]."&bd=users'><span class='color-dark'>Eliminar</span> </a> <a href='editar-usr.php?usr=".$row["username"]."'><span class='color-dark'>Editar</span> <a href='profile.php?usr=".$row["username"]."'><span class='color-dark'>Ver</span></td>
                                                    </tr>";  
                                                    }  
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>            
                        </div>
                    </div>
                </div>

                <div class="panel panel-light">
                    <div class="panel-heading">
                        <a href="#collapse2" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                            <i class="fa fa-cloud-upload"></i>Adicionar Episódios
                        </a>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                    </div>
                </div>

                <div class="panel panel-light">
                    <div class="panel-heading">
                        <a href="#collapse3" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                            <i class="fa fa-eye"></i>Animes
                        </a>
                    </div>
                    <?php
                    $sql3 = "SELECT * FROM animes";  
  
                        $result3 = $conn->query($sql); 
                    ?>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container pt10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Titulo</th>
                                                    <th>Estado</th>
                                                    <th>Num Episódios</th>
                                                    <th>Temporada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while($row = $result3->fetch_assoc()) {  
                                                echo "<tr>  
                                                <td align='center'>" . $row["id"]. "</td>  
                                                <td>" . $row["username"]. "</td>  
                                                <td>" . $row["picture"]. " </td>  
                                                <td>" . $row["email"]. "</td> 
                                                <td>" . $row["joined"]. "</td>
                                                <td>" . $row["type_user"]. "</td>   
                                                <td> <a href='administracao.php?del=".$row["id"]."'><span class='color-dark'>Eleminar</span> </a> <a href='#'><span class='color-dark'>Editar</span> </td>
                                                </tr>";  
                                                }  
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
