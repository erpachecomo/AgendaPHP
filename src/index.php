<?php
	require_once('jpgraph/jpgraph.php');
	require_once ('jpgraph/jpgraph_pie.php');

        if (isset($_GET["error"]) && !empty($_GET["error"])) {
            echo "<script type='text/javascript'>alert('Error al crear el usuario, por favor vuelvelo a intentar');</script>";
        }
        if (isset($_GET["success"]) && !empty($_GET["success"])) {
            echo "<script type='text/javascript'>alert('Usuario Creado Correctamente');</script>";
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agenda</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative CSS3 Animation Menus" />
        <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
        <meta name="author" content="Codrops" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"/>
        <link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/buttons.dataTables.min.css">
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="js/jszip.min.js"></script>
        <script type="text/javascript" src="js/pdfmake.min.js"></script>
        <script type="text/javascript" src="js/vfs_fonts.js"></script>
        <script type="text/javascript" src="js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="js/consultaContactos.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="js/toXML.js"></script>

		<script type="text/javascript">


        $(document).ready(function() {
                $('#agregar').click(function(){
					$("#central").load('agregar-contacto.php');
				});

				$('#ver').click(function(){
					$("#central").load('ver-agenda.php');
				});

                $('#graficar').click(function(){
                    $("#central").load('verGrafica.php');
                });

        });

        $(".dropdown-menu li a").click(function(){
          $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
          $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
        });

		</script>

    </head>
    <body>
        <div class="container">
            <h1 style="color: #ffffff">Agenda<span style="color: #ffffff">Todos tus contactos en un solo lugar</span></h1>
            <div class="content">
                <ul class="ca-menu" id = "menu">
                    <li>
                        <a href="#" id="agregar">
                            <span class="ca-icon">+</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Agregar contacto</h2>
                                <h3 class="ca-sub">Agregar un contacto a la agenda!</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="ver">
                            <span class="ca-icon">q</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Ver agenda</h2>
                                <h3 class="ca-sub">Visualizar, Generar XML</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="graficar">
                            <span class="ca-icon">u</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Graficar agenda</h2>
                                <h3 class="ca-sub">Generar grafica por tipo</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!-- content -->
        </div>
            <div id="central">
            </div>
    </body>
</html>
