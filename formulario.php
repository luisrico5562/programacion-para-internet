<!DOCTYPE html>

<html lang="es">
    <meta charset="UTF-8">

    <head>
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>>Contacto</title>
    </head>
    <body>

        <form action="store.php" name="formulario" method="POST">
            
            <legend for="nombre">Nombre</legend>
            <input type="text" name="nombre" required>

            <br>
            <br>

            <legend for="correo">Correo</legend>
            <input type="mail" name="correo" required>

            <br>
            <br>

            <legend for="contrasena">Contraseña</legend>
            <input type="password" name="contrasena" required>

            <br>
            <br>

            <div>
                <legend for="genero">Género</legend>
                <label><input type="radio" name="genero" value="Hombre"> Hombre</label>
                <label><input type="radio" name="genero" value="Mujer"> Mujer</label>
                <label><input type="radio" name="genero" value="Otro"> Otro</label>
            </div>

            <br>
            <br>

            <legend for="comentario">Comentario</legend>
            <textarea type="text-area" name="comentario" rows="7" cols="60"></textarea>

            <br>
            <br>

            <legend for="ciudad">Ciudad</legend>
            <select name="ciudad">
                <option value="guadalajara">Guadalajara</option>
                <option value="tlajomulco">Tlajomulco</option>
                <option value="tlaquepaque">Tlaquepaque</option>
                <option value="tonala">Tonalá</option>
                <option value="zapopan">Zapopan</option>
                <option value="otro">Otro</option>
            </select>

            <br>
            <br>

            <legend for="contactarte">Me interesa contactarte   <input type="checkbox" name="contactarte"></legend>

            <br>
            <br>

            <button type="submit">Enviar</button>
        </form>
    
    <?php
        include('conexion.php');
        if (!empty($_POST['nombre']) && !empty($_POST['correo'])) {
            echo "Recibe el nombre: " . $_POST['nombre'] . "<br>";
            echo "Recibe el correo: " . $_POST['correo'] . "<br>";

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            
            //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
            $sql = "INSERT INTO usuarios (nombre, correo)
            VALUES ('$nombre', '$correo')";
            
            // Utilizar exec() dado que no se regresan resultados
            $conn->exec($sql);
            
            //------------------------------------//
            //--- Aplicable a Sentencia SELECT ---//
            /*
            $sql = "SELECT * FROM usuarios";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Configura los resultados comok un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            echo "<ul>";
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>" . $row['id'] . " - " . $row['nombre'] . " " . $row['correo'] . "</li>";
            }
            echo "</ul>";
            */
        } else {
            echo "<h3>Faltan datos</h3>";
        }
    ?>
        
        <br>
        <br>

        <div class="nav">
            <a href="index.php">Regresar</a>
        </div>
    </body>
</html>