<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CreaExplotacion</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/208DWESProyectoTema3/webroot/css/style.css">
        <style>
            body {
                margin-top: 70px;
                margin-bottom: 100px;
                font-family: Arial, sans-serif;
            }

            .navbar {
                background-color: #007BFF;
            }

            .navbar-brand {
                color: #fff;
            }
        </style>
    </head>
    <body style="margin-top:70px; margin-bottom: 100px">
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="/index.html">CreaExplotacion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <?php
        $dsn = 'mysql:host=db5014806782.hosting-data.io;dbname=dbs12302442';
        $username = 'dbu3996658';
        $password = 'daw2_Sauces';

        try {
            $conn = new PDO($dsn, $username, $password);

            $query = "CREATE TABLE IF NOT EXISTS dbs12302442.T02_Departamento (
        T02_CodDepartamento CHAR(3) PRIMARY KEY,
        T02_DescDepartamento VARCHAR(255),
        T02_FechaCreacionDepartamento DATETIME,
        T02_VolumenDeNegocio FLOAT,
        T02_FechaBajaDepartamento DATETIME);";

            $query2 = "CREATE TABLE IF NOT EXISTS T01_Usuario (
    T01_CodUsuario CHAR(8) NOT NULL CHECK(CHAR_LENGTH(T01_CodUsuario) BETWEEN 4 AND 8),
    T01_Password VARCHAR(255) NOT NULL,
    T01_DescUsuario VARCHAR(255) NOT NULL,
    T01_NumConexiones INT DEFAULT 1 NOT NULL DEFAULT 1,
    T01_FechaHoraUltimaConexion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    T01_Perfil ENUM('usuario', 'administrador') NOT NULL DEFAULT 'usuario',
    T01_ImagenUsuario LONGBLOB,
    PRIMARY KEY (T01_CodUsuario));";

            $conn->exec($query);
            $conn->exec($query2);
            ;
            echo 'Consulta ejecutada con éxito';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        ?>
        <footer class = "bg-primary text-light py-4 fixed-bottom">
            <div class = "container">
                <div class = "row">
                    <div class = "col text-center text-white">
                        <a href = "/index.html">
                            <p class = "text-white">&copy;
                                2023/24 Ismael Ferreras
                                García. Todos los derechos
                                reservados.</p>
                        </a>
                    </div>
                    <div class = "col text-end">
                        <a href = "../indexProyectoTema4.html">
                            <img src = "/webroot/imagenes/casa-removebg-preview.png" alt = "Home" width = "35" height = "35">
                        </a>
                        <a href = "https://github.com/IsmaelFG" target = "_blank">
                            <img src = "/webroot/imagenes/github-removebg-preview.png" alt = "GitHub" width = "35" height = "35">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
