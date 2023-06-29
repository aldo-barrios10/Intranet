drop database email_service;

CREATE DATABASE email_service;

USE email_service;

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id_empleado` int NOT NULL AUTO_INCREMENT,
  `nombre` char(20) NOT NULL,
  `apellido` char(20) NOT NULL,
  `nickname` char(20) NOT NULL,
  `cuenta` char(40) NOT NULL,
  `pass` char(20) NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;




INSERT INTO `empleados` VALUES (1,'Carlos','Boitizr','caboitizr','caboitizr@gpp.com.mx','1234'),
							(2,'Lurdez','Martínez','lmartinezg','lmartinezg@gpp.com.mx','1234'),
							(3,'Oscar','Chanona','ochanonaa','ochanonaa@gpp.com.mx','1234'),
							(4,'Pedro','Díaz','pdiazb','pdiazb@gpp.com.mx','1234'),
							(5,'Susana','Franco','sfrancof','sfrancof@gpp.com.mx','1234'),
							(6,'Tomás','Barrientos','tbarrientosf','tbarrientosf@gpp.com.mx','1234');


UNLOCK TABLES;

USE email_service;

create user 'cliente'@'%' identified by '1234';
grant select, insert, update on email_service.* to 'cliente'@'%';

create user 'cliente'@'%' identified by '1234';
grant select, insert, update on email_service.* to 'cliente'@'%';




DELIMITER $$
CREATE PROCEDURE get_nombre(
    IN p_nickname VARCHAR(40),
    IN p_pass VARCHAR(20),
    OUT p_nombre VARCHAR(40),
    OUT p_apellido VARCHAR(40)
)
BEGIN
    SELECT nombre, apellido INTO p_nombre, p_apellido
    FROM empleados
    WHERE nickname = p_nickname AND pass = p_pass;
END$$
DELIMITER ;

GRANT EXECUTE ON PROCEDURE get_nombre TO 'cliente'@'%';
