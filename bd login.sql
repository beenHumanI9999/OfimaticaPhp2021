create database login;
use login;
create TABLE usuarios (
  nombre varchar(50) NOT NULL,
  username varchar(25) primary key NOT NULL,
  contra varchar(25) NOT NULL,
  correo varchar(50) NOT NULL
);
-- alter table usuarios modify nombre varchar(50) not null;

INSERT INTO usuarios values
('Luis Miguel', 'demo', 'demo','noone@gmail.com'),
('Luiggi Florez', 'admin', '123','l.edu8d@gmail.com');

create table libros(
  id varchar(25) primary key not null, 
  libro varchar(100) not null,
  autor varchar(50) not null,
  editorial varchar(25) not null,
  anio int
  );
INSERT INTO libros values
('100asggm','100 Años de Soledad','Gabriel Garcia Marquez','Sin especificar',1967),
('scccs','Sangre de Campeón','Carlos Cuatemoc Sanchez','Diamente',2001);

CREATE TABLE `alumno` (
  `cod_estudiante` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `alumno` (`cod_estudiante`, `dni`, `nombres`, `apellidos`) VALUES
(101, 75854549, 'Juan Carlos', 'Herrera Sanches'),
(103, 75854551, 'Jimena', 'Sandobal Gutierre'),
(105, 75854553, 'jvh turoriales', 'suscribete y dale lik');
COMMIT;