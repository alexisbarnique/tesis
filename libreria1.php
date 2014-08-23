<?php 

	function pie(){
		echo ' </div>
                <!-- /.col-lg-12 -->
			            </div>
			            <!-- /.row -->
			            
			            
			        </div>
			        <!-- /#page-wrapper -->

			    </div>
			    <!-- /#wrapper -->

			    <!-- jQuery Version 1.11.0 -->
			    <script src="js/jquery-1.11.0.js"></script>
			    <script src="js/funciones.js"></script>
			    <script src="js/jquery-ui-1.10.4.js"></script>

			    <!-- Bootstrap Core JavaScript -->
			    <script src="js/bootstrap.min.js"></script>

			    <!-- Metis Menu Plugin JavaScript -->
			    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

			    <!-- Morris Charts JavaScript -->
			    <script src="js/plugins/morris/morris.min.js"></script>

			    <!-- Custom Theme JavaScript -->
			    <script src="js/sb-admin-2.js"></script>

			</body>

			</html>
			';
	}

	function cab($titulo){

		echo '<!DOCTYPE html>
				<html lang="es">

				<head>

				    <meta charset="utf-8">
				    <link rel="shortcut icon" href="imagenes/logo1-20140817-favicon.ico">
				    <meta http-equiv="X-UA-Compatible" content="IE=edge">
				    <meta name="viewport" content="width=device-width, initial-scale=1">
				    <meta name="description" content="">
				    <meta name="author" content="">

				    <title>'.$titulo.'</title>

				    <!-- Bootstrap Core CSS -->
				    <link href="css/bootstrap.min.css" rel="stylesheet">

				    <!-- MetisMenu CSS -->
				    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

				    <!-- Timeline CSS -->
				    <link href="css/plugins/timeline.css" rel="stylesheet">

				    <!-- Custom CSS -->
				    <link href="css/sb-admin-2.css" rel="stylesheet">

				    <!-- Morris Charts CSS -->
				    <link href="css/plugins/morris.css" rel="stylesheet">

				    <!-- Custom Fonts -->
				    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

				    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				    <!--[if lt IE 9]>
				        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				    <![endif]-->

				</head>

				<body>

				    <div id="wrapper" >

				        <!-- Navigation -->
				        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				                    <span class="sr-only">Toggle navigation</span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                </button>
				                <center><a href="index.php"><img src="imagenes/logo1.jpg"></a></center>
				            </div>
				            <!-- /.navbar-header -->

				            <ul class="nav navbar-top-links navbar-right">
				                
				                                <!-- /.dropdown -->
				                <li class="dropdown">
				                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
				                    </a>
				                    <ul class="dropdown-menu dropdown-user">
				                        <li><a href="php/pagina/logout.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
				                        </li>
				                    </ul>
				                    <!-- /.dropdown-user -->
				                </li>
				                <!-- /.dropdown -->
				            </ul>
				            <!-- /.navbar-top-links -->

				            <div class="navbar-default sidebar" role="navigation">
				                <div class="sidebar-nav navbar-collapse">
				                    <ul class="nav" id="side-menu">
				                        <li class="sidebar-search">
				                            <div class="input-group custom-search-form">
				                                <input type="text" class="form-control" placeholder="N° de cliente...">
				                                <span class="input-group-btn">
				                                <button class="btn btn-default" type="button">
				                                    <i class="fa fa-search"></i>
				                                </button>
				                            </span>
				                            </div>
				                            <!-- /input-group -->
				                        </li>

				                        <li>
				                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Inventario<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                                <li>
				                                    <a href="#">Producto Bruto</a>
				                                </li>
				                                <li>
				                                    <a href="#">Producto Final</a>
				                                </li>
				                            </ul>
				                            <!-- /.nav-second-level -->
				                        </li>
				                        <li>
				                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Reportes<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                                <li>
				                                    <a href="flot.html">Proveedores</a>
				                                </li>
				                                <li>
				                                    <a href="morris.html">Clientes</a>
				                                </li>
				                                <li>
				                                    <a href="morris.html">Ventas</a>
				                                </li>
				                            </ul>
				                        </li>

				                        <li>
				                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Ventas<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                                <li>
				                                    <a href="venta.php">Realizar Venta</a>
				                                </li>
				                                <li>
				                                    <a href="#">Buscar Ventas</a>
				                                </li>
				                            </ul>
				                            <!-- /.nav-second-level -->
				                        </li>

				                        <li>
				                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Diario<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                                <li>
				                                    <a href="cierre.php">Cierre</a>
				                                </li>
				                            </ul>
				                            <!-- /.nav-second-level -->
				                        </li>

				                        <li>
				                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Administración<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                    <li>
                                    <a href="#">Clientes <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="inser_cliente.php">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="listacli.php">Lista de clientes</a>
                                        </li>
                                    </ul>
                                    </li>
                                   <li>
                                    <a href="#">Usuarios <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
				                            <a href="inser_usuario.php">Registrar</a>
				                       	</li>
                                    </ul>
                                   </li>
                                <li>
                                    <a href="#">Productos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
				                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Materia Prima<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                                <li>
				                                    <a href="inser_mp.php">Registrar</a>
				                                </li>
				                                <li>
				                                    <a href="modpbruto.php">Lista de materia prima</a>
				                                </li>
				                            </ul>
				                            <!-- /.nav-second-level -->
				                        </li>
                                        <li>
				                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Producto terminado<span class="fa arrow"></span></a>
				                            <ul class="nav nav-second-level">
				                                <li>
				                                    <a href="inser_pf.php">Registrar</a>
				                                </li>
				                                <li>
				                                    <a href="modfinal.php">Lista de productos</a>
				                                </li>
				                            </ul>
				                            <!-- /.nav-second-level -->
				                        </li>
                                    </ul>
                                </li>
				                    </ul>
				                </div>
				                <!-- /.sidebar-collapse -->
				            </div>
				            <!-- /.navbar-static-side -->
				        </nav>

				        <div id="page-wrapper" style="background-image: url(imagenes/back1.jpg);">
				            <div class="row">
				                <div class="col-lg-12">';
	}