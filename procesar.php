<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos registrados</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-link">
  <div class="hero-body">
    <p class="title">
      Confirmación
    </p>
    
  </div>
</section>

    <section class="section is-medium columns">
        <div class="column"></div>
        <div class="column is-two-fifths">

            <?php 

                $nombre = $_POST['nombre'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $cargo = $_POST['cargo'];
                $rfc = $_POST['rfc'];
                $curp = $_POST['curp'];
                $domicilio = $_POST['domicilio'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $sexo = $_POST['sexo'];
                $fechaN = $_POST['fechaN'];
                $estadoC = $_POST['estadoC'];
                $escolaridad = $_POST['escolaridad'];
                $referenciaF = $_POST['referenciaF'];
                $observaciones = $_POST['observaciones'];

                echo "<h1 class='is-subtitle'>";
                echo "<br>Hola " . $nombre . " " . $apellidoP . " " . $apellidoM . " se han registrado exitosamente los datos :)";

                echo "<br><br>Respuestas";
                echo "<br><br>Nonmbre:   " . $nombre;
                echo "<br>Apellido paterno:   " . $apellidoP;
                echo "<br>Apellido materno:   " . $apellidoM;
                echo "<br>Cargo:   " . $cargo;
                echo "<br>RFC:   " . $rfc;
                echo "<br>CURP:   " . $curp;
                echo "<br>Domicilio:   " . $domicilio;
                echo "<br>Teléfono:   " . $telefono;
                echo "<br>Correo electrónico:   " . $email;
                echo "<br>Sexo:   " . $sexo;
                echo "<br>Fecha de nacimiento:   " . $fechaN;
                echo "<br>Estado civil:   " . $estadoC;
                echo "<br>Escolaridad:   " . $escolaridad;
                echo "<br>Referencia:   " . $referenciaF;
                echo "<br>Observaciones:  " . $observaciones;
            ?>

        </div>
        <div class="column"></div>
    </section>

    
</body>
</html>