drop database email_service;

CREATE DATABASE email_service;

USE email_service;


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;

create table `puestos` (
	`id_puesto` int not null auto_increment,
    `nombre_puesto` char(40) not null,
    primary key(`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `empleados` (
  `id_empleado` int NOT NULL AUTO_INCREMENT,
  `nombre` char(20) NOT NULL,
  `apellido` char(20) NOT NULL,
  `nickname` char(20) NOT NULL,
  `cuenta` char(40) NOT NULL,
  `pass` char(20) NOT NULL,
  `id_puesto` int not null,
  PRIMARY KEY (`id_empleado`),
  foreign key(`id_puesto`) REFERENCES puestos(`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



create table `ventas` (
	`id_venta` int not null auto_increment,
    `id_vendedor` int not null,
    `producto` char(40) not null, 
    `cantidad` int not null,
    `fecha` date not null,
    primary key(`id_venta`),
    foreign key(`id_vendedor`) references empleados(`id_empleado`)

)ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


insert into `puestos` values (1,'director general'),
							 (2,'gerente de ventas'),
                             (3,'gerente de soporte'),
                             (4,'gerente de recursos humanos'),
                             (5,'ventas'),
                             (6,'soporte'),
                             (7,'recursos humanos');


INSERT INTO `empleados` VALUES (1,'Carlos','Boitizr','caboitizr','caboitizr@gpp.com.mx','1234',5),
							(2,'Lurdez','Martínez','lmartinezg','lmartinezg@gpp.com.mx','1234',5),
							(3,'Oscar','Chanona','ochanonaa','ochanonaa@gpp.com.mx','1234',5),
							(4,'Pedro','Díaz','pdiazb','pdiazb@gpp.com.mx','1234',5),
							(5,'Susana','Franco','sfrancof','sfrancof@gpp.com.mx','1234',5),
							(6,'Tomás','Barrientos','tbarrientosf','tbarrientosf@gpp.com.mx','1234',5);
                            
insert into `ventas` values (1,1,'Hoja de papel formato A2', '12000', '2023-03-12'),
							(2,1,'Plumas fuente metalicas', '200', '2023-03-12'),
                            (3,1,'Libreta formato cartra pasta blanda', '500', '2023-03-12'),
                            (4,2,'Hojas de papel formato A4', '1000', '2023-03-12'),
                            (5,2,'Hoja de papel formato A0', '900', '2023-03-12');

insert into `ventas` values (6,3,'Hoja de papel formato A0', '1200', '2023-05-22'),
							(7,3,'Carpetas plasticas pasta dura', '120', '2023-03-18'),
                            (8,3,'Archivadores metalicos', '10', '2023-02-14');


UNLOCK TABLES;

USE email_service;

create user 'cliente'@'%' identified by '1234';
grant select, insert, update on email_service.* to 'cliente'@'%';

create user 'cliente'@'%' identified by '1234';
grant select, insert, update on email_service.* to 'cliente'@'%';


DROP PROCEDURE IF EXISTS get_nombre;

DELIMITER $$
create PROCEDURE get_nombre(
    IN p_nickname VARCHAR(40),
    IN p_pass VARCHAR(20),
    OUT p_nombre VARCHAR(40),
    OUT p_apellido VARCHAR(40),
    out p_id_empleado int
)
BEGIN
    SELECT nombre, apellido, id_empleado INTO p_nombre, p_apellido, p_id_empleado
    FROM empleados
    WHERE nickname = p_nickname AND pass = p_pass;
END$$
DELIMITER ;

GRANT EXECUTE ON PROCEDURE get_nombre TO 'cliente'@'%';
