<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bulma.min.css">
</head>
<body>
    
    <section class= "hero is-link">
        <div class="hero-body">
            <p class="title">
                FORMULARIO
            </p>
        </div>
    </section>

    <section class="section is-medium columns">
        <div class="column"></div>
        <div class="column is-two-fifths">
            <form action="procesar.php" method="post">
                <div>
                    <label>Nombre(s): </label>
                    <input class="input is-info" type="text" name="nombre" required>
                </div>
                <div>
                    <label><br>Apellido paterno: </label>
                    <input class="input is-info" type="text" name="apellidoP" required>
                </div>
                <div>
                    <label><br>Apellido materno: </label>
                    <input class="input is-info" type="text" name="apellidoM" required> 
                </div>

                <div>
                    <label><br>Cargo: </label>
                    <input class="input is-info" type="text" name="cargo" required> 
                </div>

                <div>
                    <label><br>RFC: </label>
                    <input class="input is-info" type="text" name="rfc" required> 
                </div>

                <div>
                    <label><br>CURP: </label>
                    <input class="input is-info" type="text" name="curp" required> 
                </div>

                <div>
                    <label><br>Domicilio: </label>
                    <input class="input is-info" type="text" name="domicilio" required> 
                </div>

                <div>
                    <label><br>Teléfono: </label>
                    <input class="input is-info" type="tel" name="telefono" required> 
                </div>

                <div>
                    <label><br>Correo electrónico: </label>
                    <input class="input is-info" type="email" name="email" required>
                </div>

                <div class="control">
                    <label><br>Sexo: <br></label>
                    <label class="radio">
                    <input class="radio" type="radio" name="sexo" required value="hombre"> Hombre
                    </label>
                    <label class="radio">
                    <input class="radio" type="radio" name="sexo" required value="mujer"> Mujer
                    </label>
                     <label class="radio">
                    <input class="radio" type="radio" name="sexo" required value="otro"> Otro
                    </label>
                </div>

                <div>
                    <label><br>Fecha de nacimiento: </label>
                    <input class="input is-info" type="date" name="fechaN" required> 
                </div>

                <div class="control">
                    <label><br>Estado civil: <br></label>
                    <label class="radio">
                    <input class="radio" type="radio" name="estadoC" required value="soltero"> Soltero
                    </label>
                    <label class="radio">
                    <input class="radio" type="radio" name="estadoC" required value="casado"> Casado
                    </label>
                    <label class="radio">
                    <input class="radio" type="radio" name="estadoC" required value="UnionL"> Union libre
                    </label>
                </div>

                <div class="control">
                    <label><br>Escolaridad: <br></label>
                    <label class="radio">
                    <input class="radio is-info" type="radio" name="escolaridad" required value="escolarizado"> Escolarizado
                    </label>
                    <label class="radio">
                    <input class="radio is-info" type="radio" name="escolaridad" required value="sabatino"> Sabatino
                    </label>
                    <label class="radio">
                    <input class="radio is-info" type="radio" name="escolaridad" required value="mixto"> Mixto
                    </label>
                </div>

                <div>
                    <label><br>Referencia familiar: </label>
                    <input class="input is-info" type="text" name="referenciaF" required> 
                </div>
                <div>
                    <label><br>Observaciones: </label>
                    <input class="input is-info" type="text" name="observaciones" required> 
                </div>
                <div style="text-align:center">
                <br>
                    <input class="button is-info" type="submit" value="Enviar">
                </div>
            </form>
        </div>
        <div class="column"></div>
    </section>

</body>
</html>



