<?php
/**
 * @author Ismael Ferreras García
 * @version 1.0
 * @since 21/11/2023
 */
// Variables de conexión con la base de datos
define('HOST', '192.168.20.19');
define('DBNAME', 'DB208DWESProyectoTema5');
define('USERNAME', 'user208DWESProyectoTema5');
define('PASSWORD', 'paso');

try {
    // Conexión con la base de datos
    $miDB = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASSWORD);

    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
        header('WWW-Authenticate: Basic realm="Acceso restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Se requieren credenciales para acceder a esta página.';
        exit();
    }

    $usuario = $_SERVER['PHP_AUTH_USER'];
    $contrasena = $_SERVER['PHP_AUTH_PW'];
    $hashContrasena = hash('sha256', $usuario . $contrasena);

    $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario = ? AND T01_Password = ?";
    $stmt = $miDB->prepare($sql);
    $stmt->execute([$usuario, $hashContrasena]);

    $result = $stmt->fetch(PDO::FETCH_OBJ);

    if ($result) {
        $nombre_usuario = $result->T01_CodUsuario;
        echo "Bienvenido, $nombre_usuario!";
    } else {
        header('HTTP/1.1 401 Unauthorized');
        echo 'Credenciales incorrectas. Acceso denegado.';
    }
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>codigo02</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/208DWESProyectoTema3/webroot/css/style.css">
    </head>
    <body style="margin-top:70px">
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="/index.html">Ejercicio02</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <footer class="bg-primary text-light py-4 fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-white">
                        <a href="/index.html">
                            <p class="text-white">&copy; 2023/24 Ismael Ferreras
                                García. Todos los derechos
                                reservados.</p>
                        </a>
                    </div>
                    <div class="col text-end">
                        <a href="../indexProyectoTema3.html">
                            <img src="/webroot/imagenes/casa-removebg-preview.png" alt="Home" width="35" height="35">
                        </a>
                        <a href="https://github.com/IsmaelFG" target="_blank">
                            <img src="/webroot/imagenes/github-removebg-preview.png" alt="GitHub" width="35" height="35">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

