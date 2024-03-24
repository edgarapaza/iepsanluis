-- MariaDB dump 10.19  Distrib 10.6.16-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: colegio
-- ------------------------------------------------------
-- Server version	10.6.16-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrativo`
--

DROP TABLE IF EXISTS `administrativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrativo` (
  `idadministrativo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(160) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `cargo` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idadministrativo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrativo`
--

LOCK TABLES `administrativo` WRITE;
/*!40000 ALTER TABLE `administrativo` DISABLE KEYS */;
INSERT INTO `administrativo` VALUES (1,'Edgar','Administrador','1978-04-15','','Director','935017466','edgarapazac@gmail.com');
/*!40000 ALTER TABLE `administrativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(160) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nombrepadre` varchar(200) NOT NULL,
  `telefonopadre` varchar(20) NOT NULL,
  `emailpadre` varchar(100) NOT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Edgar','Alumno','324734','1978-04-15','public/img/jhon.jpg','Puno','935017466','edgarapazac@gmail.com','Leonidas','926537263','leonidasapaza@gmail.com');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos_padres`
--

DROP TABLE IF EXISTS `alumnos_padres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos_padres` (
  `idpadre` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idpago` int(11) NOT NULL,
  PRIMARY KEY (`idpadre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos_padres`
--

LOCK TABLES `alumnos_padres` WRITE;
/*!40000 ALTER TABLE `alumnos_padres` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumnos_padres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_cursos`
--

DROP TABLE IF EXISTS `colegio_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_cursos` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(100) NOT NULL,
  `idmaestro` int(11) NOT NULL,
  `idgrado` int(11) NOT NULL,
  `idseccion` int(11) NOT NULL,
  `idturno` int(11) NOT NULL,
  `idhorario` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_cursos`
--

LOCK TABLES `colegio_cursos` WRITE;
/*!40000 ALTER TABLE `colegio_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_grado`
--

DROP TABLE IF EXISTS `colegio_grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_grado` (
  `idgrado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idgrado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_grado`
--

LOCK TABLES `colegio_grado` WRITE;
/*!40000 ALTER TABLE `colegio_grado` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_horario`
--

DROP TABLE IF EXISTS `colegio_horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_horario` (
  `idhorario` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idhorario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_horario`
--

LOCK TABLES `colegio_horario` WRITE;
/*!40000 ALTER TABLE `colegio_horario` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_notas`
--

DROP TABLE IF EXISTS `colegio_notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_notas` (
  `idnotas` int(11) NOT NULL AUTO_INCREMENT,
  `idcurso` varchar(10) NOT NULL,
  `idmaestro` varchar(10) NOT NULL,
  `idturno` varchar(10) NOT NULL,
  `idseccion` varchar(10) NOT NULL,
  `idalumno` varchar(10) NOT NULL,
  `idgrado` varchar(10) NOT NULL,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `nota3` double DEFAULT NULL,
  `nota4` double DEFAULT NULL,
  `nota5` double DEFAULT NULL,
  `nota6` double DEFAULT NULL,
  `parcial1` double DEFAULT NULL,
  `parcial2` double DEFAULT NULL,
  `parcial3` double DEFAULT NULL,
  `examen` double DEFAULT NULL,
  `recuperacion` double DEFAULT NULL,
  PRIMARY KEY (`idnotas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_notas`
--

LOCK TABLES `colegio_notas` WRITE;
/*!40000 ALTER TABLE `colegio_notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_seccion`
--

DROP TABLE IF EXISTS `colegio_seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_seccion` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_seccion`
--

LOCK TABLES `colegio_seccion` WRITE;
/*!40000 ALTER TABLE `colegio_seccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegio_turno`
--

DROP TABLE IF EXISTS `colegio_turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colegio_turno` (
  `idturno` int(11) NOT NULL AUTO_INCREMENT,
  `turno` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idturno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegio_turno`
--

LOCK TABLES `colegio_turno` WRITE;
/*!40000 ALTER TABLE `colegio_turno` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegio_turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finanzas_detalle`
--

DROP TABLE IF EXISTS `finanzas_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_detalle` (
  `iddetallefin` int(11) NOT NULL AUTO_INCREMENT,
  `idfinanzas` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idgrado` int(11) NOT NULL,
  `idseccion` int(11) NOT NULL,
  `concepto` varchar(60) NOT NULL,
  `monto` double DEFAULT NULL,
  `fecPago` date DEFAULT NULL,
  PRIMARY KEY (`iddetallefin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_detalle`
--

LOCK TABLES `finanzas_detalle` WRITE;
/*!40000 ALTER TABLE `finanzas_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `finanzas_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finanzas_general`
--

DROP TABLE IF EXISTS `finanzas_general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_general` (
  `idfinanzas` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL,
  `idgrado` int(11) NOT NULL,
  `idseccion` int(11) NOT NULL,
  `concepto` varchar(60) NOT NULL,
  `total` double DEFAULT NULL,
  `fecPago` date DEFAULT NULL,
  PRIMARY KEY (`idfinanzas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_general`
--

LOCK TABLES `finanzas_general` WRITE;
/*!40000 ALTER TABLE `finanzas_general` DISABLE KEYS */;
/*!40000 ALTER TABLE `finanzas_general` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finanzas_tipopagos`
--

DROP TABLE IF EXISTS `finanzas_tipopagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finanzas_tipopagos` (
  `idtipopago` int(11) NOT NULL AUTO_INCREMENT,
  `idfinanzas` int(11) NOT NULL,
  `idest_padre` int(11) NOT NULL,
  `tipopago` varchar(10) NOT NULL,
  `banco` varchar(100) NOT NULL,
  `cci` char(21) NOT NULL,
  PRIMARY KEY (`idtipopago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finanzas_tipopagos`
--

LOCK TABLES `finanzas_tipopagos` WRITE;
/*!40000 ALTER TABLE `finanzas_tipopagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `finanzas_tipopagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `nivel` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','admin',1,1,1,1),(2,'docente','docente',2,1,2,1),(3,'alumno','alumno',3,1,3,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros`
--

DROP TABLE IF EXISTS `maestros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros` (
  `idmaestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(160) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `sexo` varchar(20) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `idgrado` int(11) NOT NULL,
  PRIMARY KEY (`idmaestro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros`
--

LOCK TABLES `maestros` WRITE;
/*!40000 ALTER TABLE `maestros` DISABLE KEYS */;
INSERT INTO `maestros` VALUES (1,'Edgar','Docente','1978-04-15','','Masculino','Ing Estadistica e Informatica','Puno','935017466','edgarapazac@gmail.com',1);
/*!40000 ALTER TABLE `maestros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros_detalle`
--

DROP TABLE IF EXISTS `maestros_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros_detalle` (
  `idmaestro_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `idmaestro` int(11) NOT NULL,
  `acercade` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaestro_detalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros_detalle`
--

LOCK TABLES `maestros_detalle` WRITE;
/*!40000 ALTER TABLE `maestros_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestros_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros_educacion`
--

DROP TABLE IF EXISTS `maestros_educacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros_educacion` (
  `idmaestro_educacion` int(11) NOT NULL AUTO_INCREMENT,
  `idmaestro` int(11) NOT NULL,
  `universidad` varchar(200) DEFAULT NULL,
  `grado` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `anio_inicio` varchar(50) DEFAULT NULL,
  `anio_fin` varchar(50) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `horas` double DEFAULT NULL,
  PRIMARY KEY (`idmaestro_educacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros_educacion`
--

LOCK TABLES `maestros_educacion` WRITE;
/*!40000 ALTER TABLE `maestros_educacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestros_educacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros_experiencia`
--

DROP TABLE IF EXISTS `maestros_experiencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros_experiencia` (
  `idmaestro_experiencia` int(11) NOT NULL AUTO_INCREMENT,
  `idmaestro` int(11) NOT NULL,
  `institucion` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `anio_inicio` varchar(50) DEFAULT NULL,
  `anio_fin` varchar(50) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `meses` double DEFAULT NULL,
  PRIMARY KEY (`idmaestro_experiencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros_experiencia`
--

LOCK TABLES `maestros_experiencia` WRITE;
/*!40000 ALTER TABLE `maestros_experiencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestros_experiencia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-23  9:58:54
