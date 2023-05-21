<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Begoña Morales">
        <title>Formulario de Registro</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="group">
            <form method="POST" action="">
                <h2>Formulario de Registro</h2>

                <div class="labels">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-input" required>
                </div>

                <div class="labels">
                <label for="primerApellido">Primer Apellido</label>
                <input type="text" name="primerApellido" class="form-input" required>
                </div>

                <div class="labels">
                <label for="segundoApellido">Segundo Apellido</label>
                <input type="text" name="segundoApellido" class="form-input" required>
                </div>

                <div class="labels">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-input" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Ingrese una direccion de correo electronico valida" required>
                </div>

                <div class="labels">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" class="form-input" required minlength="4" maxlength="8" title="La contraseña debe contener ente 4 y 8 caracteres" required>
                </div>

                <br>
                <input class="form-btn" name="submit" type="submit" value="Enviar">


    <?php

    if($_POST){
        $nombre = $_POST['nombre'];
        $primerApellido = $_POST['primerApellido'];
        $segundoApellido = $_POST['segundoApellido'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        $con=mysqli_connect('localhost','root','','Laboratorio');

    //Check connection
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    $validar = "SELECT * FROM Registros WHERE email ='$email'";
    $result = $con->query($validar);
    if($result->num_rows > 0){
        echo "<p style='font-size: 15px;'>El email introducido ya se encuentra registrado</p>";
        
    } else {
    $sql = "INSERT INTO Registros (nombre, primerApellido, segundoApellido, email, contrasena)
    VALUES ('$nombre','$primerApellido','$segundoApellido','$email','$contrasena')";
    }

    if($con->query($sql) === TRUE){
        echo "Registro completado con éxito\n";
        echo "<a class='consulta' href='/Laboratorio/consulta.php' type=button>Consultar registros</a>";
        exit;
        
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
    }

    ?>

            </form>
        </div>
    </body>
</html>