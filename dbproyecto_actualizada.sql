CREATE DATABASE  IF NOT EXISTS `dbproyecto1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dbproyecto1`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbproyecto1
-- ------------------------------------------------------
-- Server version	5.7.12-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asignacion_criterios`
--

DROP TABLE IF EXISTS `asignacion_criterios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignacion_criterios` (
  `criterios_criterios_id` varchar(15) NOT NULL,
  `cursos_cursos_id` varchar(15) NOT NULL,
  `cursos_programas_programa_id` varchar(15) NOT NULL,
  `calificacioncriterios_porcentaje` varchar(45) NOT NULL,
  PRIMARY KEY (`criterios_criterios_id`,`cursos_cursos_id`,`cursos_programas_programa_id`),
  KEY `fk_criterios_has_cursos_cursos1_idx` (`cursos_cursos_id`,`cursos_programas_programa_id`),
  KEY `fk_criterios_has_cursos_criterios1_idx` (`criterios_criterios_id`),
  CONSTRAINT `fk_criterios_has_cursos_criterios1` FOREIGN KEY (`criterios_criterios_id`) REFERENCES `criterios` (`criterios_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_criterios_has_cursos_cursos1` FOREIGN KEY (`cursos_cursos_id`, `cursos_programas_programa_id`) REFERENCES `cursos` (`cursos_id`, `programas_programa_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacion_criterios`
--

LOCK TABLES `asignacion_criterios` WRITE;
/*!40000 ALTER TABLE `asignacion_criterios` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignacion_criterios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criterios`
--

DROP TABLE IF EXISTS `criterios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criterios` (
  `criterios_id` varchar(15) NOT NULL,
  `criterios_nombre` varchar(30) NOT NULL,
  `criterios_descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`criterios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criterios`
--

LOCK TABLES `criterios` WRITE;
/*!40000 ALTER TABLE `criterios` DISABLE KEYS */;
/*!40000 ALTER TABLE `criterios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `cursos_id` varchar(15) NOT NULL,
  `programas_programa_id` varchar(15) NOT NULL,
  PRIMARY KEY (`cursos_id`,`programas_programa_id`),
  KEY `fk_cursos_programas_idx` (`programas_programa_id`),
  CONSTRAINT `fk_cursos_programas` FOREIGN KEY (`programas_programa_id`) REFERENCES `programas` (`programa_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES ('960032','1'),('960054','1');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integrantes`
--

DROP TABLE IF EXISTS `integrantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integrantes` (
  `usuarios_idusuarios` varchar(15) NOT NULL,
  `cursos_cursos_id` varchar(15) NOT NULL,
  `cursos_programas_programa_id` varchar(15) NOT NULL,
  `roles_idrol` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_idusuarios`,`cursos_cursos_id`,`cursos_programas_programa_id`,`roles_idrol`),
  KEY `fk_usuarios_has_cursos_cursos1_idx` (`cursos_cursos_id`,`cursos_programas_programa_id`),
  KEY `fk_usuarios_has_cursos_usuarios1_idx` (`usuarios_idusuarios`),
  KEY `fk_integrantes_roles1_idx` (`roles_idrol`),
  CONSTRAINT `fk_integrantes_roles1` FOREIGN KEY (`roles_idrol`) REFERENCES `roles` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_cursos_cursos1` FOREIGN KEY (`cursos_cursos_id`, `cursos_programas_programa_id`) REFERENCES `cursos` (`cursos_id`, `programas_programa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_cursos_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrantes`
--

LOCK TABLES `integrantes` WRITE;
/*!40000 ALTER TABLE `integrantes` DISABLE KEYS */;
INSERT INTO `integrantes` VALUES ('105097','960032','1',2),('105097','960054','1',2),('10111','960032','1',5),('1234','960032','1',5),('123456','960032','1',5);
/*!40000 ALTER TABLE `integrantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integrantes_proyecto`
--

DROP TABLE IF EXISTS `integrantes_proyecto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integrantes_proyecto` (
  `proyectos_proyecto_id` varchar(15) NOT NULL,
  `integrantes_usuarios_idusuarios` varchar(15) NOT NULL,
  `integrantes_cursos_cursos_id` varchar(15) NOT NULL,
  `integrantes_cursos_programas_programa_id` varchar(15) NOT NULL,
  PRIMARY KEY (`proyectos_proyecto_id`,`integrantes_usuarios_idusuarios`,`integrantes_cursos_cursos_id`,`integrantes_cursos_programas_programa_id`),
  KEY `fk_proyectos_has_integrantes_integrantes1_idx` (`integrantes_usuarios_idusuarios`,`integrantes_cursos_cursos_id`,`integrantes_cursos_programas_programa_id`),
  KEY `fk_proyectos_has_integrantes_proyectos1_idx` (`proyectos_proyecto_id`),
  CONSTRAINT `fk_proyectos_has_integrantes_integrantes1` FOREIGN KEY (`integrantes_usuarios_idusuarios`, `integrantes_cursos_cursos_id`, `integrantes_cursos_programas_programa_id`) REFERENCES `integrantes` (`usuarios_idusuarios`, `cursos_cursos_id`, `cursos_programas_programa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectos_has_integrantes_proyectos1` FOREIGN KEY (`proyectos_proyecto_id`) REFERENCES `proyectos` (`proyecto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrantes_proyecto`
--

LOCK TABLES `integrantes_proyecto` WRITE;
/*!40000 ALTER TABLE `integrantes_proyecto` DISABLE KEYS */;
/*!40000 ALTER TABLE `integrantes_proyecto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `proyectos_proyecto_id` varchar(15) NOT NULL,
  `asignacion_criterios_criterios_criterios_id` varchar(15) NOT NULL,
  `proyectos_integrantes_usuarios_idusuarios` varchar(15) NOT NULL,
  `observacion_criterio` longtext NOT NULL,
  `nota_criterio` varchar(10) NOT NULL,
  `nota_final` varchar(12) NOT NULL,
  PRIMARY KEY (`nota_final`,`proyectos_integrantes_usuarios_idusuarios`,`asignacion_criterios_criterios_criterios_id`,`proyectos_proyecto_id`),
  KEY `fk_proyectos_has_asignacion_criterios_asignacion_criterios1_idx` (`asignacion_criterios_criterios_criterios_id`),
  KEY `fk_notas_proyectos1_idx` (`proyectos_proyecto_id`,`proyectos_integrantes_usuarios_idusuarios`),
  CONSTRAINT `fk_notas_proyectos1` FOREIGN KEY (`proyectos_proyecto_id`) REFERENCES `proyectos` (`proyecto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectos_has_asignacion_criterios_asignacion_criterios1` FOREIGN KEY (`asignacion_criterios_criterios_criterios_id`) REFERENCES `asignacion_criterios` (`criterios_criterios_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programas`
--

DROP TABLE IF EXISTS `programas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programas` (
  `programa_id` varchar(15) NOT NULL,
  `programa_nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`programa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programas`
--

LOCK TABLES `programas` WRITE;
/*!40000 ALTER TABLE `programas` DISABLE KEYS */;
INSERT INTO `programas` VALUES ('1','ADSI');
/*!40000 ALTER TABLE `programas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `proyecto_id` varchar(15) NOT NULL,
  `proyecto_nombre` varchar(45) NOT NULL,
  `proyectos_fecha_inicio_entrega` varchar(10) NOT NULL,
  `proyectos_fecha_fin_entrega` varchar(10) NOT NULL,
  `proyectos_fecha_inicio_calificacion` varchar(10) NOT NULL,
  `proyectos_fecha_fin_calificacion` varchar(10) NOT NULL,
  `asignacion_criterios_criterios_criterios_id` varchar(15) NOT NULL,
  PRIMARY KEY (`proyecto_id`,`asignacion_criterios_criterios_criterios_id`),
  KEY `fk_proyectos_asignacion_criterios1_idx` (`asignacion_criterios_criterios_criterios_id`),
  CONSTRAINT `fk_proyectos_asignacion_criterios1` FOREIGN KEY (`asignacion_criterios_criterios_criterios_id`) REFERENCES `asignacion_criterios` (`criterios_criterios_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `nombrerol` varchar(45) NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Coordinador'),(2,'Inst. Lider'),(3,'Inst. Tutor'),(4,'Apr. Lider'),(5,'Aprendiz');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuarios` varchar(15) NOT NULL,
  `nombreusuarios` varchar(45) NOT NULL,
  `apellidosusuarios` varchar(45) NOT NULL,
  `emailusuarios` varchar(60) NOT NULL,
  `telefonousuarios` varchar(15) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('1','g','ac','gm','3','1'),('10111','Juan','Carmona','','123','1234567890'),('1047494','Carlitos Mario','Bello','camabeto@hotmail.com','123455','12345678'),('105097','Gerlis','Alvarez','','3008511771','123456'),('1234','rafael','Carmona','rikiraton15@gmail.com','30086123','123456'),('123456','Eddie','Marimon','edii@gmail.com','123456','123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_has_roles`
--

DROP TABLE IF EXISTS `usuarios_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_has_roles` (
  `usuarios_idusuarios` varchar(15) NOT NULL,
  `roles_idrol` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_idusuarios`,`roles_idrol`),
  KEY `fk_usuarios_has_roles_roles1_idx` (`roles_idrol`),
  KEY `fk_usuarios_has_roles_usuarios1_idx` (`usuarios_idusuarios`),
  CONSTRAINT `fk_usuarios_has_roles_roles1` FOREIGN KEY (`roles_idrol`) REFERENCES `roles` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usuarios_has_roles_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_has_roles`
--

LOCK TABLES `usuarios_has_roles` WRITE;
/*!40000 ALTER TABLE `usuarios_has_roles` DISABLE KEYS */;
INSERT INTO `usuarios_has_roles` VALUES ('1047494',2),('105097',2),('10111',5),('1234',5),('123456',5);
/*!40000 ALTER TABLE `usuarios_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dbproyecto1'
--
/*!50003 DROP PROCEDURE IF EXISTS `buscar_aprendices` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_aprendices`(in curso varchar(20))
BEGIN
	
    select nombreusuarios,apellidosusuarios from usuarios,integrantes where curso = cursos_cursos_id
    and usuarios_idusuarios = idusuarios and roles_idrol = 5;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buscar_programas_cursos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_programas_cursos`(in usuario int)
BEGIN

	select * from programas,integrantes where usuarios_idusuarios = usuario
    and cursos_programas_programa_id = programa_id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `eliminar_usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_usuarios`(in id int)
BEGIN

delete from usuarios where idusuarios = id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `iniciar_sesion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `iniciar_sesion`(in user int, in pass varchar(20))
BEGIN

	select * from usuarios,usuarios_has_roles where idusuarios = user
    and contraseña = pass 
    and user = usuarios_idusuarios
    and roles_idrol = 2;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `listar_usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_usuarios`()
BEGIN

select * from usuarios;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `modificar_usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `modificar_usuarios`(in id int, in nombre varchar(30), in apellidos varchar(50), in email varchar(30), in telefono bigint(20), in contraseña varchar(20))
BEGIN

update usuarios
set nombreusuarios = nombre,
apellidosusuarios = apellidos,
emailusuarios = email,
telefonousuarios = telefono,
contraseña = contraseña where idusuarios = id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarNotas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarNotas`(IN `_proyectos_proyecto_id` VARCHAR(15), IN `_asignacion_criterios_criterios_criterios_id` VARCHAR(15), IN `_proyectos_integrantes_usuarios_idusuarios` VARCHAR(15), IN `_observacion_criterio` LONGTEXT, IN `_nota_criterio` VARCHAR(10), IN `_nota_final` VARCHAR(12))
INSERT  INTO notas (proyectos_proyecto_id, asignacion_criterios_criterios_criterios_id , proyectos_integrantes_usuarios_idusuarios ,observacion_criterio ,nota_criterio ,nota_final)
VALUES (proyectos_proyecto_id, asignacion_criterios_criterios_criterios_id, proyectos_integrantes_usuarios_idusuarios, observacion_criterio, nota_criterio,  nota_final) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `registrar_usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar_usuarios`(in id int, in nombre varchar(30), in apellidos varchar(50), in email varchar(30), in telefono bigint(20), in contraseña varchar(20))
BEGIN

insert into usuarios values (id, nombre, apellidos, email, telefono, contraseña);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-24 18:05:49
