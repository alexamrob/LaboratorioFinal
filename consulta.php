<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Begoña Morales">
        <title>Base de Datos</title>
        <link href="stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="tabla">
        <h2>Consulta de registros</h2>
        <a class="form-btn" href="/Laboratorio/formulario.php" role="button"> Nuevo Registro</a>
        <br>
        <table class="table">
            <thread>
                <tr>
                    <th>ID </th>
                    <th>Nombre </th>
                    <th>Primer Apellido </th>
                    <th>Segundo Apellido </th>
                    <th>Email </th>
                    <th>Contraseña </th>
                </tr>
            </thread>
            <tbody>
            <?php

                $con=mysqli_connect('localhost','root','','Laboratorio');

                //Check connection
                if($con->connect_error){
                    die("Connection failed: " . $con->connect_error);
                }

                //Mostrar tabla
                $sql = "SELECT * FROM Registros";
                $result = $con->query($sql);

                if(!$result){
                    die("Invalid query: " . $con->error);
                }

                while($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                        <td>$row[ID]</td>
                        <td>$row[nombre]</td>
                        <td>$row[primerApellido]</td>
                        <td>$row[segundoApellido]</td>
                        <td>$row[email]</td>
                        <td>$row[contrasena]</td>
                    </tr>
                    ";
                }

                ?>
            </tbody>
        </table>
    </div>
    </body>
</html>







