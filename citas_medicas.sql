-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2026 at 11:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citas_medicas`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(20) NOT NULL COMMENT 'Pendiente, Confirmada, Cancelada, Atendida',
  `motivo` text DEFAULT NULL,
  `diagnostico` text DEFAULT NULL,
  `tratamiento` text DEFAULT NULL,
  `receta` text DEFAULT NULL,
  `notas` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`id_cita`, `id_paciente`, `id_medico`, `fecha`, `hora`, `estado`, `motivo`, `diagnostico`, `tratamiento`, `receta`, `notas`, `created_at`) VALUES
(1, 1, 1, '2026-05-25', '09:00:00', 'Confirmada', 'Revisión general', 'prueba 502', '', '', 'Primera visita del año', '2026-05-24 03:00:00'),
(2, 2, 1, '2026-05-25', '09:30:00', 'Pendiente', 'Dolor de garganta', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(3, 3, 2, '2026-05-25', '10:00:00', 'Atendida', 'Control de presión', 'Hipertensión esencial', 'Enalapril 5 mg cada 24h', 'Enalapril 5mg 30 comp', 'Paciente estable', '2026-05-24 17:36:08'),
(4, 4, 3, '2026-05-26', '11:00:00', 'Confirmada', 'Revisión pediátrica 12 años', NULL, NULL, NULL, 'Traer carné de vacunación', '2026-05-24 17:36:08'),
(5, 5, 4, '2026-05-26', '09:00:00', 'Pendiente', 'Fiebre y malestar', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(6, 6, 5, '2026-05-27', '16:00:00', 'Confirmada', 'Dolor torácico leve', NULL, NULL, NULL, 'Posible ecocardiograma', '2026-05-24 17:36:08'),
(7, 7, 6, '2026-05-27', '16:30:00', 'Pendiente', 'Arritmias ocasionales', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(8, 8, 7, '2026-05-28', '08:30:00', 'Confirmada', 'Manchas en la piel', NULL, NULL, NULL, 'Llevar fotos de la evolución', '2026-05-24 17:36:08'),
(9, 9, 8, '2026-05-28', '09:00:00', 'Pendiente', 'Acné severo', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(10, 10, 9, '2026-05-29', '12:00:00', 'Confirmada', 'Dolor de rodilla derecha', NULL, NULL, NULL, 'Traer radiografía previa', '2026-05-24 17:36:08'),
(11, 11, 10, '2026-05-29', '13:00:00', 'Pendiente', 'Esguince de tobillo', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(12, 12, 3, '2026-05-30', '09:00:00', 'Atendida', 'Control niño sano 2 años', 'Desarrollo normal', 'Continuar con vitaminas', 'Vitamina D 400 UI', 'Próximo control en 6 meses', '2026-05-24 17:36:08'),
(13, 13, 5, '2026-06-01', '10:00:00', 'Confirmada', 'Electrocardiograma de control', NULL, NULL, NULL, 'Ayuno de 4 horas', '2026-05-24 17:36:08'),
(14, 14, 7, '2026-06-01', '11:30:00', 'Pendiente', 'Lunar sospechoso', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(15, 15, 10, '2026-06-02', '08:00:00', 'Atendida', 'Fractura de muñeca', 'Fractura de radio distal', 'Inmovilización con yeso 6 semanas', 'Ibuprofeno 400mg cada 8h si dolor', 'Revisión en 2 semanas', '2026-05-24 17:36:08'),
(16, 1, 2, '2026-06-02', '09:00:00', 'Pendiente', 'Dolor abdominal', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(17, 2, 3, '2026-06-03', '10:30:00', 'Confirmada', 'Vacunación infantil', NULL, NULL, NULL, 'Traer cartilla', '2026-05-24 17:36:08'),
(18, 3, 4, '2026-06-03', '11:00:00', 'Cancelada', 'Otitis media', NULL, NULL, NULL, 'El paciente canceló por mejoría', '2026-05-24 17:36:08'),
(19, 4, 5, '2026-06-04', '15:00:00', 'Confirmada', 'Palpitaciones', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(20, 5, 6, '2026-06-04', '15:30:00', 'Pendiente', 'Soplo cardíaco', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(21, 6, 1, '2026-06-05', '08:30:00', 'Atendida', 'Dolor de cabeza frecuente', 'Cefalea tensional', 'Técnicas de relajación, paracetamol 500mg si dolor', 'Paracetamol 500mg 20 comp', 'Seguir pautas de sueño', '2026-05-24 17:36:08'),
(22, 7, 8, '2026-06-05', '09:30:00', 'Pendiente', 'Alopecia areata', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(23, 8, 9, '2026-06-08', '14:00:00', 'Confirmada', 'Dolor lumbar crónico', NULL, NULL, NULL, 'Traer resonancia previa', '2026-05-24 17:36:08'),
(24, 9, 2, '2026-06-08', '14:30:00', 'Pendiente', 'Revisión diabetes', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(25, 10, 4, '2026-06-09', '08:00:00', 'Atendida', 'Tos persistente', 'Bronquitis aguda', 'Reposo, hidratación, ambroxol jarabe 5ml cada 8h', 'Ambroxol jarabe 150ml', 'No requiere antibiótico', '2026-05-24 17:36:08'),
(26, 11, 6, '2026-06-09', '08:30:00', 'Pendiente', 'Preoperatorio', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(27, 12, 7, '2026-06-10', '10:00:00', 'Confirmada', 'Dermatitis atópica', NULL, NULL, NULL, 'Usar crema hidratante sin perfume', '2026-05-24 17:36:08'),
(28, 13, 9, '2026-06-10', '11:00:00', 'Pendiente', 'Ciática', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08'),
(29, 14, 1, '2026-06-11', '16:00:00', 'Confirmada', 'Mareos y fatiga', NULL, NULL, NULL, 'Posible analítica', '2026-05-24 17:36:08'),
(30, 15, 8, '2026-06-11', '17:00:00', 'Pendiente', 'Queratosis seborreica', NULL, NULL, NULL, NULL, '2026-05-24 17:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `citas_medicas_uggroups`
--

CREATE TABLE `citas_medicas_uggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `citas_medicas_uggroups`
--

INSERT INTO `citas_medicas_uggroups` (`GroupID`, `Label`) VALUES
(1, 'Secretaria'),
(2, 'Medico'),
(3, 'Paciente');

-- --------------------------------------------------------

--
-- Table structure for table `citas_medicas_ugmembers`
--

CREATE TABLE `citas_medicas_ugmembers` (
  `UserName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `citas_medicas_ugmembers`
--

INSERT INTO `citas_medicas_ugmembers` (`UserName`, `GroupID`) VALUES
('admin', -1),
('amartinez', 1),
('cgomez', 2),
('mlopez', 3);

-- --------------------------------------------------------

--
-- Table structure for table `citas_medicas_ugrights`
--

CREATE TABLE `citas_medicas_ugrights` (
  `TableName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `citas_medicas_ugrights`
--

INSERT INTO `citas_medicas_ugrights` (`TableName`, `GroupID`, `AccessMask`) VALUES
('citas', -1, 'ADESPIM'),
('citas', 1, 'AEDS'),
('citas', 2, 'AES'),
('citas', 3, 'AEDS'),
('Citas Asignadas', 2, 'ASPI'),
('especialidades', -1, 'ADESPIM'),
('especialidades', 1, 'S'),
('especialidades', 3, 'S'),
('medicos', -1, 'ADESPIM'),
('medicos', 1, 'S'),
('pacientes', -1, 'ADESPIM'),
('pacientes', 1, 'AES'),
('pacientes', 2, 'AESP');

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidad` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`id_especialidad`, `nombre`) VALUES
(3, 'Cardiología'),
(4, 'Dermatología'),
(1, 'Medicina General'),
(2, 'Pediatría'),
(5, 'Traumatología');

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_especialidad` int(11) NOT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`id_medico`, `nombre`, `apellido`, `telefono`, `email`, `id_especialidad`, `activo`) VALUES
(1, 'Carlos', 'Gómez', '555-1001', 'carlos.gomez@clinicavital.com', 1, 1),
(2, 'María', 'López', '555-1002', 'maria.lopez@clinicavital.com', 1, 1),
(3, 'Ana', 'Martínez', '555-1003', 'ana.martinez@clinicavital.com', 2, 1),
(4, 'Pedro', 'Rodríguez', '555-1004', 'pedro.rodriguez@clinicavital.com', 2, 1),
(5, 'Laura', 'Fernández', '555-1005', 'laura.fernandez@clinicavital.com', 3, 1),
(6, 'Jorge', 'Díaz', '555-1006', 'jorge.diaz@clinicavital.com', 3, 1),
(7, 'Sofía', 'Pérez', '555-1007', 'sofia.perez@clinicavital.com', 4, 1),
(8, 'Daniel', 'García', '555-1008', 'daniel.garcia@clinicavital.com', 4, 1),
(9, 'Elena', 'Sánchez', '555-1009', 'elena.sanchez@clinicavital.com', 5, 1),
(10, 'Miguel', 'Ramírez', '555-1010', 'miguel.ramirez@clinicavital.com', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `apellido`, `fecha_nacimiento`, `telefono`, `email`, `direccion`, `activo`) VALUES
(1, 'Juan', 'Hernández', '1985-04-12', '555-2001', 'juan.hernandez@email.com', 'Calle Mayor 10, Madrid', 1),
(2, 'Lucía', 'Torres', '1990-07-25', '555-2002', 'lucia.torres@email.com', 'Av. de la Paz 25, Barcelona', 1),
(3, 'Martín', 'Flores', '1978-11-03', '555-2003', 'martin.flores@email.com', 'Calle del Sol 7, Valencia', 1),
(4, 'Valentina', 'Rojas', '2005-02-18', '555-2004', 'valentina.rojas@email.com', 'Plaza Mayor 3, Sevilla', 1),
(5, 'Diego', 'Castro', '1960-09-30', '555-2005', 'diego.castro@email.com', 'Calle Nueva 15, Bilbao', 1),
(6, 'Camila', 'Ortega', '1995-06-08', '555-2006', 'camila.ortega@email.com', 'Gran Vía 42, Madrid', 1),
(7, 'Andrés', 'Vargas', '1988-12-20', '555-2007', 'andres.vargas@email.com', 'Calle Larga 8, Málaga', 1),
(8, 'Isabella', 'Mendoza', '2010-03-15', '555-2008', 'isabella.mendoza@email.com', 'Callejón del Río 2, Zaragoza', 1),
(9, 'Gabriel', 'Ruiz', '1972-01-05', '555-2009', 'gabriel.ruiz@email.com', 'Av. de la Constitución 30, Murcia', 1),
(10, 'Sara', 'Navarro', '2000-08-22', '555-2010', 'sara.navarro@email.com', 'Calle del Mar 11, Alicante', 1),
(11, 'Mateo', 'Iglesias', '1983-05-14', '555-2011', 'mateo.iglesias@email.com', 'Plaza del Carmen 6, Granada', 1),
(12, 'Emma', 'Delgado', '2015-10-09', '555-2012', 'emma.delgado@email.com', 'Calle Ancha 19, Córdoba', 1),
(13, 'Emilio', 'Serrano', '1955-07-17', '555-2013', 'emilio.serrano@email.com', 'Paseo de la Castellana 50, Madrid', 1),
(14, 'Renata', 'Blanco', '1992-04-03', '555-2014', 'renata.blanco@email.com', 'Calle Real 22, Valladolid', 1),
(15, 'Iker', 'Molina', '2008-11-28', '555-2015', 'iker.molina@email.com', 'Av. de los Álamos 14, Pamplona', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password_hash`, `id_medico`, `activo`) VALUES
(0, 'admin', 'admin', NULL, 1),
(1, 'cgomez', 'medico123', 1, 1),
(2, 'mlopez', 'medico123', 2, 1),
(3, 'amartinez', 'medico123', 3, 1),
(4, 'prodriguez', 'medico123', 4, 1),
(5, 'lfernandez', 'medico123', 5, 1),
(6, 'jdiaz', 'medico123', 6, 1),
(7, 'sperez', 'medico123', 7, 1),
(8, 'dgarcia', 'medico123', 8, 1),
(9, 'esanchez', 'medico123', 9, 1),
(10, 'mramirez', 'medico123', 10, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_citas`
-- (See below for the actual view)
--
CREATE TABLE `v_citas` (
`id_cita` int(11)
,`id_paciente` int(11)
,`paciente_nombre_completo` varchar(201)
,`paciente_telefono` varchar(20)
,`paciente_email` varchar(100)
,`paciente_edad` bigint(21)
,`id_medico` int(11)
,`medico_nombre_completo` varchar(205)
,`especialidad` varchar(100)
,`fecha` date
,`hora` time
,`fecha_hora` varchar(21)
,`dia_semana` varchar(9)
,`estado` varchar(20)
,`motivo` text
,`diagnostico` text
,`tratamiento` text
,`receta` text
,`notas` text
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Structure for view `v_citas`
--
DROP TABLE IF EXISTS `v_citas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_citas`  AS SELECT `c`.`id_cita` AS `id_cita`, `c`.`id_paciente` AS `id_paciente`, concat(`p`.`nombre`,' ',`p`.`apellido`) AS `paciente_nombre_completo`, `p`.`telefono` AS `paciente_telefono`, `p`.`email` AS `paciente_email`, timestampdiff(YEAR,`p`.`fecha_nacimiento`,curdate()) AS `paciente_edad`, `c`.`id_medico` AS `id_medico`, concat('Dr. ',`m`.`nombre`,' ',`m`.`apellido`) AS `medico_nombre_completo`, `e`.`nombre` AS `especialidad`, `c`.`fecha` AS `fecha`, `c`.`hora` AS `hora`, concat(`c`.`fecha`,' ',`c`.`hora`) AS `fecha_hora`, dayname(`c`.`fecha`) AS `dia_semana`, `c`.`estado` AS `estado`, `c`.`motivo` AS `motivo`, `c`.`diagnostico` AS `diagnostico`, `c`.`tratamiento` AS `tratamiento`, `c`.`receta` AS `receta`, `c`.`notas` AS `notas`, `c`.`created_at` AS `created_at` FROM (((`citas` `c` join `pacientes` `p` on(`c`.`id_paciente` = `p`.`id_paciente`)) join `medicos` `m` on(`c`.`id_medico` = `m`.`id_medico`)) join `especialidades` `e` on(`m`.`id_especialidad` = `e`.`id_especialidad`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD UNIQUE KEY `citas_index_0` (`id_medico`,`fecha`,`hora`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indexes for table `citas_medicas_uggroups`
--
ALTER TABLE `citas_medicas_uggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `citas_medicas_ugmembers`
--
ALTER TABLE `citas_medicas_ugmembers`
  ADD PRIMARY KEY (`UserName`(50),`GroupID`);

--
-- Indexes for table `citas_medicas_ugrights`
--
ALTER TABLE `citas_medicas_ugrights`
  ADD PRIMARY KEY (`TableName`(50),`GroupID`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_especialidad` (`id_especialidad`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_medico` (`id_medico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas_medicas_uggroups`
--
ALTER TABLE `citas_medicas_uggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`);

--
-- Constraints for table `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
