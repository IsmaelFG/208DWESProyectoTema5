-- Selecciona la base de datos DB208DWESProyectoTema4
USE DB208DWESProyectoTema5;

-- Carga inicial para la tabla T01_Usuario
INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario,T01_Perfil)
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
  ('amor', SHA2(CONCAT('amor', 'paso'), 256), 'Amor Rodriguez Navarro', 'administrador');

-- Carga inicial para la tabla T02_Departamento
INSERT INTO T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento)
VALUES
    ('D01', 'Departamento 1', '2023-01-01 08:00:00', 50000.00, NULL),
    ('D02', 'Departamento 2', '2023-01-02 10:30:00', 75000.00, '2023-02-15 14:45:00'),
    ('D03', 'Departamento 3', '2023-01-03 12:45:00', 30000.00, NULL),
    ('D04', 'Departamento 4', '2023-01-04 14:15:00', 100000.00, '2023-03-10 18:30:00'),
    ('D05', 'Departamento 5', '2023-01-05 16:30:00', 60000.00, NULL);