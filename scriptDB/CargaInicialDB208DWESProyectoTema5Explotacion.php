<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CargaInicialExplotacion</title>
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
                <a class="navbar-brand text-white" href="/index.html">CargaInicialExplotacion</a>
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

            $query = "INSERT INTO dbs12302442.T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
('DVT', 'Departamento de Ventas', '2022-05-10 08:30:00', 100000.50, NULL),
('DMT', 'Departamento de Marketing', '2021-11-23 14:45:00', 75000.25, NULL),
('DRH', 'Departamento de Recursos Humanos', '2023-02-15 10:00:00', 60000.75, NULL),
('DFN', 'Departamento de Finanzas', '2022-08-03 12:15:00', 90000.90, NULL);";

            $query2 = "INSERT INTO dbs12302442.T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario,T01_Perfil)
VALUES
  ('admin', SHA2(CONCAT('admin', 'paso'), 256), 'administrador', 'administrador'),
  ('alvaro', SHA2(CONCAT('alvaro', 'paso'), 256), 'Álvaro Cordero Miñambres', 'usuario'),
  ('carlos', SHA2(CONCAT('carlos', 'paso'), 256), 'Carlos García Cachón', 'usuario'),
  ('oscar', SHA2(CONCAT('oscar', 'paso'), 256), 'Oscar Pascual Ferrero', 'usuario'),
  ('borja', SHA2(CONCAT('borja', 'paso'), 256), 'Borja Nuñez Refoyo', 'usuario'),
  ('rebeca', SHA2(CONCAT('rebeca', 'paso'), 256), 'Rebeca Sánchez Pérez', 'usuario'),
  ('erika', SHA2(CONCAT('erika', 'paso'), 256), 'Erika Martínez Pérez', 'usuario'),
  ('ismael', SHA2(CONCAT('ismael', 'paso'), 256), 'Ismael Ferreras García', 'usuario'),
  ('heraclio', SHA2(CONCAT('heraclio', 'paso'), 256), 'Heraclio Borbujo Moran', 'administrador'),
  ('amor', SHA2(CONCAT('amor', 'paso'), 256), 'Amor Rodriguez Navarro', 'administrador');";

            $conn->exec($query);
            $conn->exec($query2);
            echo 'Consulta ejecutada con éxito';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        ?>


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
                        <a href="../indexProyectoTema4.html">
                            <img src="/webroot/imagenes/casa-removebg-preview.png" alt="Home" width="35" height="35">
                        </a>
                        <a href="https://github.com/IsmaelFG" target="_blank">
                            <img src = "/webroot/imagenes/github-removebg-preview.png" alt = "GitHub" width = "35" height = "35">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
