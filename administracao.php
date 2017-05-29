<!DOCTYPE html>
<html lang="pt">
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
        <br>
        <body>
        <!-- fa-users  fa-cloud-upload   fa-eye-->
        <div class="col-md-12">
            <div class="panel-group" id="accordion1">
            <!-- acordian-->
                <div class="panel panel-light">
                    <div class="panel-heading">
                        <a href="#collapse1" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                            <i class="fa fa-users"></i>Utilizadores
                        </a>
                    </div>
                    <?php
                        include('bd/db.php');

                        $sql1 = "SELECT * FROM users";

                        $result1 = $conn->query($sql1);
                    ?>
                    <div id="collapse1" class="panel-collapse collapse in active">
                        <div class="panel-body">
                            <div class="container pt10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="tabelinha-user" class="table table-striped">
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
                                            while($row1 = $result1->fetch_assoc()) {
                                                echo "<tr>
                                                <td>" . $row1["id"]. "</td>
                                                <td>" . $row1["username"]. "</td>
                                                <td>" . $row1["email"]. "</td>
                                                <td>" . $row1["type_user"]. "</td>
                                                <td> <button class='button button-xs button-circle button-pasific eli1' data-id='".  $row1["id"] ."'>Eliminar</button> <a class='button button-xs button-circle button-yellow' href='editar-usr.php?usr=".$row1["username"]."'>Editar</a>  <a class='button button-xs button-circle button-success' href='profile.php?usr=".$row1["username"]."'>Ver</a></td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- acordian-->
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
            <!-- acordian-->
                <div class="panel panel-light">
                    <div class="panel-heading">
                        <a href="#collapse3" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                            <i class="fa fa-eye"></i>Animes
                        </a>
                    </div>

                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            sasasa
                        </div>
                </div>
            </div>
        <!-- acordian-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <a href="#collapse4" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                        <i class="fa fa-user"></i>Personagens
                    </a>
                </div>

                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        sasasa
                    </div>
                </div>
            </div>
        <!-- acordian-->
            <div class="panel panel-light">
                <div class="panel-heading">
                    <a href="#collapse5" class="collapsed accordian-toggle-chevron-left" data-toggle="collapse" data-parent="#accordion1">
                        <i class="fa fa-tags"></i>Gêneros
                    </a>
                </div>
                <?php
                    include('bd/db.php');

                    $sql5 = "SELECT * FROM genres";

                    $result5 = $conn->query($sql5);
                ?>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="container pt10">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="tabelinha-genres" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Gêneros</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($row5 = $result5->fetch_assoc()) {
                                                echo "<tr>
                                                <td>" . $row5["id"]. "</td>
                                                <td>" . utf8_encode($row5["genre_name"]). "</td>
                                                <td> <button class='button button-xs button-circle button-pasific eli5' data-id='".  $row5["id"] ."'>Eliminar</button> <a class='button button-xs button-circle button-yellow' href='editgenres.php?gen=".$row5["id"]."'>Editar</a></td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <a class="button-3d button-md button-rounded button-success" href="addgenres.php">Adicionar Gênero</a>
                    </div>
                </div>
            </div>

        </div><!-- final do div dos acordians-->
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

        <!-- inports DataTables -->
        <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.15/css/dataTables.bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="datatables/Buttons-1.3.1/css/buttons.bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="datatables/Responsive-2.1.1/css/responsive.bootstrap.css"/>

        <script type="text/javascript" src="datatables/JSZip-3.1.3/jszip.js"></script>
        <script type="text/javascript" src="datatables/pdfmake-0.1.27/build/pdfmake.js"></script>
        <script type="text/javascript" src="datatables/pdfmake-0.1.27/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="datatables/DataTables-1.10.15/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="datatables/DataTables-1.10.15/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="datatables/Buttons-1.3.1/js/dataTables.buttons.js"></script>
        <script type="text/javascript" src="datatables/Buttons-1.3.1/js/buttons.bootstrap.js"></script>
        <script type="text/javascript" src="datatables/Buttons-1.3.1/js/buttons.colVis.js"></script>
        <script type="text/javascript" src="datatables/Buttons-1.3.1/js/buttons.html5.js"></script>
        <script type="text/javascript" src="datatables/Buttons-1.3.1/js/buttons.print.js"></script>
        <script type="text/javascript" src="datatables/Responsive-2.1.1/js/dataTables.responsive.js"></script>

        <!-- Biblitecas do Toaster
            ===================================-->
        <script src="js/bootstrap-toastr/toastr.js"></script>
        <link rel="stylesheet" href="js/bootstrap-toastr/toastr.css">

        <script>
            $(document).ready(function(){
                var id;
                var bd;
                $(".eli1").click(function () {
                     id = $(this).attr("data-id");
                     bd = 'users';
                    toastr["warning"]('<div>Têm a certeza de que deseja eliminar o udilizador com o ID ' + id + '? </div><div><button onClick="deleteMeSenpai()" class="button-o button-md button-square button-pasific hover-radial-out">Ok</button></div>');
                });

                $(".eli5").click(function () {
                    id = $(this).attr("data-id");
                    console.log(id)
                     bd = 'genres';
                    console.log('coisas');
                    toastr["warning"]('<div>Têm a certeza de que deseja eliminar o gênero com o ID ' + id + '? </div><div><button onClick="deleteMeSenpai()" class="button-o button-md button-square button-pasific hover-radial-out">Ok</button></div>');
                });

                $('#tabelinha-user') //tabela dos utilizadores
                    .addClass( 'nowrap' )
                    .dataTable( {
                        responsive: true,
                        columnDefs: [
                            { targets: [-1, -3], className: 'dt-body-right' }
                        ],
                        dom: 'Bfrtip',
                        buttons: [
                            {
                                extend: 'excelHtml5',
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                extend: 'pdfHtml5',
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                extend: 'print',
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            'colvis'
                        ]
                    });

                var list = $('div.w-g-l > ul');
                list.children(':gt(7)').css( 'display', 'none' );

                var showingFull = false;
                $('<li><a>Show more features...</a></li>')
                    .on( 'click', function (e) {
                        e.preventDefault;

                        if ( showingFull ) {
                            list.children(':gt(7)').css( 'display', 'none' );
                            list.children(':last').css( 'display', 'block' );
                            $('a', this).html('Show more features...');
                            showingFull = false;
                        }
                        else {
                            list.find('li').css( 'display', 'block' );
                            $('a', this).html('Show less');
                            showingFull = true;
                        }
                    } )
                    .appendTo( list );

                    $('#tabelinha-genres') //tabela dos gêneros
                        .addClass( 'nowrap' )
                        .dataTable( {
                            responsive: true,
                            columnDefs: [
                                { targets: [-1, -3], className: 'dt-body-right' }
                            ],
                            dom: 'Bfrtip',
                            buttons: [
                                {
                                    extend: 'excelHtml5',
                                    exportOptions: {
                                        columns: ':visible'
                                    }
                                },
                                {
                                    extend: 'pdfHtml5',
                                    exportOptions: {
                                        columns: ':visible'
                                    }
                                },
                                {
                                    extend: 'print',
                                    exportOptions: {
                                        columns: ':visible'
                                    }
                                },
                                'colvis'
                            ]
                        });

                    var list = $('div.w-g-l > ul');
                    list.children(':gt(7)').css( 'display', 'none' );

                    var showingFull = false;
                    $('<li><a>Show more features...</a></li>')
                        .on( 'click', function (e) {
                            e.preventDefault;

                            if ( showingFull ) {
                                list.children(':gt(7)').css( 'display', 'none' );
                                list.children(':last').css( 'display', 'block' );
                                $('a', this).html('Show more features...');
                                showingFull = false;
                            }
                            else {
                                list.find('li').css( 'display', 'block' );
                                $('a', this).html('Show less');
                                showingFull = true;
                            }
                        } )
                        .appendTo( list );


                //ajax
                function deleteMeSenpai() {
                    $.ajax({
                        url: 'delete.php',
                        dataType: 'json',
                        data: {
                            id: id,
                            bd: bd,
                        },
                        type: 'POST',
                        success: function (data) {
                            if (data.status == 'sucesso') {
                                toastr.success('Registro feito com sucesso', 'Sucesso!');
                                location.reload();
                            } else if (data.status == 'erro') {
                                toastr.error('Não foi possível processar o pedido',
                                    'Erro de ligação');
                            } else if (data.status == 'erro_permi') {
                                window.location.href='inicial.php?access=negado';
                            }
                        },
                        error: function(error) {
                            toastr.error('Erro desconhecido',
                                    'Erro');
                        }
                    });
                };
            });
        </script>

    </body>
</html>
