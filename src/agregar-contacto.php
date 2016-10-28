<?php
// Conectando, seleccionando la base de datos
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "agenda";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $correo = $_POST['email'];
                $telefono = $_POST['phonenumber'];
                $nombre = $_POST['name'];
                $domicilio = $_POST['address'];
                $tipo = $_POST['type'];
                $ciudad = $_POST['city'];

                $sql = "INSERT INTO contacto (email, telefono, nombre, domicilio, tipo, ciudad) VALUES ('".$correo."','".$telefono."','".$nombre."','".$domicilio."','".$tipo."','".$ciudad."')";
                if ($conn->query($sql) === TRUE) {
                    header('Location: index.php?success=true');
                } else {
                    header('Location: index.php?error=true');
                }

                $conn->close();
        }



?>
<html>
    <head>
        <title>Agenda</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative CSS3 Animation Menus" />
        <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
        <meta name="author" content="Codrops" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/"></script>


		</head>
		<form method = "POST" action="agregar-contacto.php" id="agregarContacto">
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="phonenumber">Telefono:</label>
                        <input type="tel" class="form-control" id="phonenumber" name="phonenumber">
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
			<label class="col-sm-2 control-label"for="type">Tipo</label>
			<select class="form-control" name="type" id="type">
				<option>Amigo</option>
				<option>Familiar</option>
				<option>Compañero</option>
			</select>
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="city">Ciudad:</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="address">Domicilio:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit"
                            class="btn btn-group-justified btn-info"
                    >Agregar</button>
                </form>
</html>
