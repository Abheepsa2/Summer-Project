-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 09:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `name`, `email`, `password`, `confirm_password`) VALUES
(1, 'abheepsa', 'craftyhappiness6@gmail.com', 'zxcv', 'zxcv'),
(2, 'anika', 'kairalovers6@gmail.com', 'mnbv', 'mnbv'),
(3, 'abheepsa', 'kairalovers6@gmail.com', '12345', '12345'),
(4, 'eda', 'kairalovers6@gmail.com', '12345', '12345'),
(5, 'anika', 'craftyhappiness@gmail.com', '123456', '123456'),
(6, 'abheepsa', 'adam@gmail.com', 'zxcvbnm', 'zxcvbnm'),
(7, 'abheepsa', '9840066688@gmail.com', '1234', '1234'),
(8, 'abheepsa', 'craftyhappiness6@gmail.com', 'mnbvcxz', 'mnbvcxz'),
(9, 'owner', 'admin@gmail.com', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `time` time(6) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `specialization`, `name`, `age`, `contact`, `date`, `address`, `time`, `description`) VALUES
(6, 'Orthopedic', 'rushali tuladhar', 68, 998765432, '0000-00-00', 'thahiti', '00:00:00.000000', 'trustable'),
(24, 'cardiologist', 'General phusician', 75, 984007849, '1998-02-09', 'teku', '15:50:00.000000', 'quick treatment'),
(25, 'medicine', 'Orthopedic', 65, 2147483647, '2024-06-20', 'thimi', '00:40:00.000000', 'quick requirement');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `specialization`, `name`, `age`, `contact`, `date`, `address`, `description`) VALUES
(1, 'gynecologist', 'dr siwet gurung', 9, 984008764, '2005-07-21', 'kalanki', 'safe and secure'),
(2, 'medicine', 'medicine', 45, 984008648, '2024-06-13', 'maitidevi', 'efficient'),
(3, 'cardiologist', 'Harsh Subedi', 67, 232323, '2024-06-06', 'thahiti', 'safe and secure'),
(4, 'medicine', 'gynecologist', 53, 35325353, '2024-06-07', 'maitidevi', ' 35353535355');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `f_name` varchar(500) NOT NULL,
  `l_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `specialist` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(500) NOT NULL,
  `bmdc_reg_num` int(11) NOT NULL,
  `address` text NOT NULL,
  `pswd` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `permission` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `f_name`, `l_name`, `email`, `contact`, `specialist`, `qualification`, `DOB`, `gender`, `bmdc_reg_num`, `address`, `pswd`, `date`, `permission`) VALUES
(1, 'Dr.Santosh', 'Maharjan', 'sanmajhaj@gmail.com', '9840074983', 'medicine', 'MBBS, MRCP ( UK ) , ECFMG ( USA ) ,', '1968-10-10', 'male', 56867, 'new-road,kathmandu', '123456789', '2024-04-03', ''),
(1234017, 'Dr.Siwet', 'Gurung', 'siwi@gmail.com', '9849966304', 'medicine', 'MBBS, DTCD, FCPS Associate Professor & Head of Department', '1965-08-26', 'male', 56766, 'golfutar', '123456789', '2018-09-08', 'Approved'),
(1234018, 'Dr. Harsh', 'subedi', 'harsu@gmail.com', '98458025272', 'medicine', 'MBBS, FCPS Associate Professor', '1966-06-23', 'male', 56767, 'kamalpokhari', '123456789', '2018-09-08', 'Approved'),
(1234019, 'Dr. Addy', 'lama', 'Uddin@gmail.com', '01717351631', 'medicine', 'MBBS, FCPS ( Medicine ), MD ( Internal Medicine ), MACP ( USA ) Associate Professor', '1968-09-28', 'male', 56768, 'hatisaar', '123456789', '2018-09-08', 'Approved'),
(1234020, 'Dr.Prapti', 'Shrestha', 'Prapti@gmail.com', '01729350383', 'medicine', 'MBBS, FCPS Associate Professor', '1969-09-29', 'male', 56769, 'kapan', '123456789', '2018-09-08', 'Approved'),
(1234021, 'Dr.Rushali', 'Maharjan', 'Ali@gmail.com', '98204856583', 'medicine', 'MBBS, FCPS Associate Professor', '1970-09-01', 'male', 56770, 'thimi', '123456789', '2018-09-08', 'Approved'),
(1234022, 'Dr.Kritika', 'singh', 'kritika@gmail.com', '98403827272', 'Orthopedic', 'MBBS, MS (Ortho.), DNB (Ortho.),Consultant', '1970-09-02', 'male', 56771, 'ason', '123456789', '2018-09-08', 'Approved'),
(1234023, 'Dr.Kartik', 'Chowdhury', 'Chowdhury@gmail.com', '9840272622262', 'Orthopedic', 'MBBS, MS ( Ortho ),Assistant Professor', '1972-09-03', 'male', 56772, 'naxal', '123456789', '2018-09-08', 'Approved'),
(1234024, 'Dr. Ganesh', 'karki', 'gane@gmail.com', '9845352227282', 'Orthopedic', 'Qualification : MBBS, MS, FICS Designation: Professor & Director', '1973-09-08', 'male', 56772, 'kalanki', '123456789', '2018-09-08', 'Approved'),
(1234026, 'Dr. Shyamal', 'Debnath', 'Debnath@gmail.com', '01711701234', 'Orthopedic', 'MBBS,.MS(Ortho) Designation : Associate Professor', '1977-09-15', 'male', 56778, 'kuleswor', '123456789', '2018-09-08', 'Pending'),
(1234027, 'Dr. Maliha', 'Rashid', 'Rashid@gmail.com', '01711701234', 'gynecologist', 'MBBS, FCPS (Gynae & Obs) Professor of Obstetrics & Gynaecology and Academic Coordinator', '1980-09-02', 'female', 56773, 'kuleswor', '123456789', '2018-09-08', 'Approved'),
(1234028, 'Dr. Nasima', 'Shaheen', 'Shaheen@gmail.com', '01711701234', 'gynecologist', 'MBBS, DGO, MCPS, FCPS Consultant', '1981-09-28', 'female', 56775, 'kilagal', '123456789', '2018-09-08', 'Approved'),
(1234029, 'Dr.Kasish', 'Kapoor', 'Zulfiqar@gmail.com', '01711701234', 'gynecologist', 'MBBS, DGO, FCPS, Fellow Reproductive Medicine & Assisted Reproductive Techniques (KKIV, Singapore) Coordinator & Senior Consultant', '1982-09-24', 'female', 567780, 'thimi', '123456789', '2018-09-08', 'Approved'),
(1234030, 'Dr. Gulshan', 'Ara', 'Ara@gmail.com', '01711701234', 'gynecologist', 'MBBS,MCPS,  FCPS (BCPS), MS(Gynae&Obs.), Trained in Advanced Laparoscopic Surgery(India) Coordinator & Senior Consultant', '1983-09-10', 'female', 56781, 'teku', '123456789', '2018-09-08', 'Pending'),
(1234031, 'Dr.Kavya', 'Pradhan', 'kavya@gmail.com', '01711701234', 'gynocologist', 'MBBS, DGO ( DU ) Consultant', '1983-09-23', 'female', 56782, 'teku', '123456789', '2018-09-08', 'Pending'),
(1234032, 'Dr. nikki', 'subedi\r\n', 'nikkin@gmail.com', '01711701234', 'dentist', 'Qualification : BDS, PGT ( Japan ) Designation : Consultant', '1981-09-01', 'male', 56783, 'kalanki', '123456789', '2018-09-08', 'Approved'),
(1234033, 'Dr.Shobhika', 'gurung', 'Sikder@gmail.com', '01711701234', 'dentist', 'Qualification : BDS, Ph.D ( Japan ) Designation : Consultant', '1983-09-28', 'male', 56785, 'bagbazar', '123456789', '2018-09-08', 'Approved'),
(1234034, 'Dr.Rushali', 'shrestha', 'rushali@gmail.com', '01711701234', 'dentist', 'Qualification : MBBS, MS, BDS, MCPS, MDRA(USA) Designation : Associate Professor & Head of Department', '1983-09-21', 'male', 56786, 'teku', '123456789', '2018-09-08', 'Approved'),
(1234035, ' Dr. Nurul', 'Amin', 'DrNurulAmin@gmail.com', '01711701234', 'dentist', 'Qualification : BDS, PhD ( Japan ) Designation : Associate Professor & Head, Department of Oral & Maxillofacial Surgery', '1983-09-29', 'male', 56787, 'ason', '123456789', '2018-09-08', 'Pending'),
(1234036, 'Dr. Akriti', 'Shrestha', 'Swapon@gmail.com', '01711701234', 'dentist', 'Qualification : B.D.S, FCPS Designation : Assistant Professor & Head of Department ( CIDCH )', '1981-09-28', 'male', 56789, 'teku', '123456789', '2018-09-08', 'Pending'),
(1234037, 'Dr.Siwet', 'Gurung', 'Rasul@gmail.com', '01711701234', 'cardiologist', 'FCPS, FRCS (Glasgow) Consultant', '1983-09-28', 'male', 56790, 'kalanki', '123456789', '2018-09-08', 'Approved'),
(1234038, 'Dr.kritika', 'Banerjee', 'Banerjee@gmail.com', '01711701234', 'dentist', 'MBBS, MD (Cardiology), FACC, FESC Professor of Cardiology', '1983-09-28', 'male', 56791, 'ason', '123456789', '2018-09-08', 'Approved'),
(1234039, 'Dr. Lutfor ', 'Rahman', 'Rahman@gmail.com', '', 'cardiologist', 'MBBS, MS (CTS) Chief Cardiac Surgeon, Labiad Cardiac Hospital', '1991-09-28', 'male', 56792, 'kalanki\r\n', '123456789', '2018-09-08', 'Approved'),
(1234040, 'Dr. Shubhi', 'joshi', 'DrFazlurRahman@gmail.com', '97737373828', 'cardiologist', 'MBBS, MCPS ( Medicine ), Dcard, MD ( Card ) Cardiology /Heart Specialist', '1983-09-22', 'male', 56793, 'kalimati', '123456789', '2018-09-08', 'Approved'),
(1234041, 'Dr.Amiha', 'Tuladhar', 'Mollah@gmail.com', '98404039282', 'cardiologist', 'MBBS, FCPS ( Medicine ) , MD ( Cardiology ) Professor', '1983-09-28', 'male', 56795, 'kuleswor', '123456789', '2018-09-08', 'Approved'),
(1234042, 'Dr. Md. Abu', 'Siddique', 'Abu@gmail.com', '01711701234', 'cardiologist', 'MBBS, FPGCS ( Medicine ) , PhD ( Cardiology ) Cardiology /Heart Specialist Professor', '1983-09-28', 'male', 56796, 'Chamber: Popular Diagnostic Centre House # 16, Road # 2, Dhanmondi R/A, Dhaka â€“ 1205', '123456789', '2018-09-08', 'Pending'),
(1234044, 'abheepsa', 'pradhan', 'craftyhappiness6@gmail.com', '', 'gynecologist', 'WAzesxdrcftgyhujikosxdcfvgbhnjdxfcgvbhnjdxfcgvbhnjdxfcgvbhn', '0000-00-00', '', 0, '', '123456789', '2024-06-08', 'Added'),
(1234045, 'Serina Navarro', 'Steel Humphrey', 'zydamuhuhi@mailinator.com', '73', 'gynecologist', 'Deleniti a asperiore', '1992-01-23', 'Aliquid sint alias d', 52, 'Et voluptatem Ea qu', 'Pa$$w0rd!', '2010-02-06', 'medicine'),
(1234046, 'Gay May', 'Merritt Dillon', 'fasujyv@mailinator.com', '30', 'surgeon', 'Sed alias consequatu', '1995-07-16', 'Sed illum illum ve', 51, 'Nisi nulla id sit ut', 'Pa$$w0rd!', '2000-09-22', 'medicine'),
(1234047, 'Noelle Valenzuela', 'Kaseem Barrett', 'vedisa@mailinator.com', '66', 'cardiologist', 'Ut itaque eum qui am', '1988-05-28', 'Qui officia aspernat', 79, 'Veritatis consectetu', 'Pa$$w0rd!', '1981-06-29', 'Orthopedic'),
(1234048, 'Risa Rush', 'Carissa Copeland', 'toluzohyfa@mailinator.com', '71', 'cardiologist', 'Sed assumenda dolor ', '1979-12-01', 'Ullamco veritatis vo', 87, 'Ipsum ea veniam cu', 'Pa$$w0rd!', '1973-03-17', 'gynecologist'),
(1234049, 'Leila Oneal', 'Kibo Patterson', 'dyjolevo@mailinator.com', '8', 'dentist', 'Tempora eiusmod reru', '2013-03-08', 'Debitis nulla qui su', 16, 'Autem veritatis odio', 'Pa$$w0rd!', '1988-11-24', 'Orthopedic'),
(1234050, 'Kimberly Sexton', 'Kirby Padilla', 'timycezyt@mailinator.com', '39', 'dentist', 'Voluptate in odit ea', '1991-02-07', 'Aut voluptatem omnis', 58, 'Ipsa quia pariatur', 'Pa$$w0rd!', '1996-11-28', 'gynecologist'),
(1234051, 'Ginger ', 'gurung', 'ginger@gmail.com', '9841235677', 'Orthopedic', 'gynocologist', '2024-06-21', 'female', 56873, 'teku', '12345', '2024-06-20', 'medicine'),
(1234052, 'siwet', 'gurung', 'siwet@gmail.com', '9840066688', 'gynecologist', 'gynocologist', '2024-06-20', 'female', 56784, 'teku', '12345', '2024-06-20', 'medicine'),
(1234053, 'Noelani Cash', 'Martena Mcfadden', 'pahatyk@mailinator.com', '52', 'cardiologist', 'Esse dolor cupidata', '2010-03-19', 'female', 1, 'Necessitatibus deser', 'Pa$$w0rd!', '1984-05-01', 'Orthopedic'),
(1234054, 'Isadora Maldonado', 'Alma Jones', 'koda@mailinator.com', '99', 'dentist', 'Quia exercitationem ', '2014-03-02', 'female', 20, 'Non doloribus qui ve', 'Pa$$w0rd!', '2020-10-14', 'gynecologist');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_register`
--

CREATE TABLE `doctor_register` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `number` int(100) NOT NULL,
  `specializ` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_register`
--

INSERT INTO `doctor_register` (`id`, `firstname`, `lastname`, `address`, `number`, `specializ`, `email`, `password`, `confirmpassword`) VALUES
(60, 'doctor', 'pradhan', 'ason', 2147483647, 'asd8888888', 'abheepsapradhan123@gmail.com', '12345', '12345'),
(61, 'eda', 'yildis', 'turkey', 2147483647, 'asd8888888', 'kairalovers6@gmail.com', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_rental`
--

CREATE TABLE `equipment_rental` (
  `id` int(50) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment_rental`
--

INSERT INTO `equipment_rental` (`id`, `equipment_name`, `price`, `time`) VALUES
(5, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(6, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(7, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(8, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(9, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(10, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(11, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(12, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(13, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(14, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(15, 'NEBULIZER', 'RS 200', 'per day'),
(16, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(17, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(18, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(19, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(20, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(21, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(22, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(23, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(24, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(25, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(26, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(27, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(28, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(29, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(30, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(31, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(32, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(33, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(34, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(35, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(36, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(37, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(38, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(39, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(40, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(41, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(42, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(43, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(44, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(45, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(46, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(47, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(48, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(49, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(50, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(51, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(52, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(53, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(54, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(55, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(56, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(57, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(58, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(59, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(60, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(61, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(62, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(63, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(64, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(65, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(66, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(67, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(68, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(69, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(70, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(71, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(72, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(73, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(74, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(75, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(76, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(77, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(78, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(79, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(80, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(81, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(82, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(83, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(84, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(85, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(86, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(87, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(88, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(89, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(90, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(91, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(92, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(93, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(94, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(95, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(96, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(97, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(98, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(99, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(100, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(101, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(102, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(103, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(104, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(105, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(106, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(107, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(108, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(109, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(110, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(111, ' IV STAND', '', 'per month'),
(112, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(113, 'WHEELCHAIR', 'RS 3000', 'per month'),
(114, 'WHEELCHAIR', 'RS 3000', 'per month'),
(115, 'WHEELCHAIR', 'RS 3000', 'per month'),
(116, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(117, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(118, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(119, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(120, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(121, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(122, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(123, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(124, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(125, ' IV STAND', '', 'per month'),
(126, ' IV STAND', '', 'per month'),
(127, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(128, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(129, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(130, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(131, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(132, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(133, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(134, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(135, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(136, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(137, ' SUCTION MACHINE PORTABLE', ' RS 200', 'per day basis'),
(138, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(139, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(140, ' IV STAND', '', 'per month'),
(141, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(142, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(143, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(144, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(145, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(146, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(147, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(148, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(149, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(150, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(151, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(152, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(153, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(154, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(155, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(156, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(157, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(158, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(159, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(160, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(161, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(162, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(163, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(164, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(165, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(166, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(167, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(168, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(169, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(170, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(171, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(172, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(173, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(174, ' IV STAND', 'RS 1500', 'per month'),
(175, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(176, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(177, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(178, ' MEDICAL BED', 'RS 4500', 'per month basis '),
(179, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(180, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(181, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(182, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(183, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(184, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(185, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(186, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(187, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(188, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(189, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(190, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(191, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(192, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(193, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(194, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(195, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(196, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(197, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(198, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(199, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(200, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(201, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(202, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(203, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(204, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(205, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(206, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis'),
(207, ' OXYGEN CONCENTRATOR ', 'Rs 500', ' per day basis');

-- --------------------------------------------------------

--
-- Table structure for table `lab_test`
--

CREATE TABLE `lab_test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sample` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_test`
--

INSERT INTO `lab_test` (`id`, `name`, `sample`, `time`) VALUES
(19, ' Complete blood count', 'blood', '12 hr'),
(68, 'Kidney Function Test', 'blood', '6-7 hr'),
(71, 'Vitamin D', 'blood', '12 hr'),
(72, ' Thyroid Function Test', 'blood', '12 hr'),
(73, ' Thyroid Function Test', 'blood', '12 hr'),
(74, ' Thyroid Function Test', 'blood', '12 hr'),
(75, ' Thyroid Function Test', 'blood', '12 hr'),
(76, ' Thyroid Function Test', 'blood', '12 hr'),
(77, ' Thyroid Function Test', 'blood', '12 hr'),
(78, ' Thyroid Function Test', 'blood', '12 hr'),
(79, ' Thyroid Function Test', 'blood', '12 hr'),
(80, ' Thyroid Function Test', 'blood', '12 hr'),
(81, ' Thyroid Function Test', 'blood', '12 hr'),
(82, ' Thyroid Function Test', 'blood', '12 hr'),
(83, ' Thyroid Function Test', 'blood', '12 hr'),
(84, ' Thyroid Function Test', 'blood', '12 hr'),
(85, ' Thyroid Function Test', 'blood', '12 hr'),
(86, ' Thyroid Function Test', 'blood', '12 hr'),
(87, ' Thyroid Function Test', 'blood', '12 hr'),
(88, ' Thyroid Function Test', 'blood', '12 hr'),
(89, ' Thyroid Function Test', 'blood', '12 hr'),
(90, ' Thyroid Function Test', 'blood', '12 hr'),
(91, ' Thyroid Function Test', 'blood', '12 hr'),
(92, ' Thyroid Function Test', 'blood', '12 hr'),
(93, ' Thyroid Function Test', 'blood', '12 hr'),
(94, ' Thyroid Function Test', 'blood', '12 hr'),
(95, ' Thyroid Function Test', 'blood', '12 hr'),
(96, ' Thyroid Function Test', 'blood', '12 hr'),
(97, ' Thyroid Function Test', 'blood', '12 hr'),
(98, ' Thyroid Function Test', 'blood', '12 hr'),
(99, ' Thyroid Function Test', 'blood', '12 hr'),
(100, ' Thyroid Function Test', 'blood', '12 hr'),
(101, ' Thyroid Function Test', 'blood', '12 hr'),
(102, ' Thyroid Function Test', 'blood', '12 hr'),
(103, ' Thyroid Function Test', 'blood', '12 hr'),
(104, ' Thyroid Function Test', 'blood', '12 hr'),
(105, ' Thyroid Function Test', 'blood', '12 hr'),
(106, ' Thyroid Function Test', 'blood', '12 hr'),
(107, ' Thyroid Function Test', 'blood', '12 hr'),
(108, ' Thyroid Function Test', 'blood', '12 hr'),
(109, ' Thyroid Function Test', 'blood', '12 hr');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `past_experience` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `Name`, `address`, `contact`, `category`, `email`, `gender`, `Qualification`, `past_experience`) VALUES
(15, 'tammana joshi', 'basantapur', 984006836, 'Primary_Care', 'tammana@gmail.com', 'female', 'licensed practical nurse ', '6 yrs'),
(27, 'dev dixit', 'kalanki', 984006836, 'Hospis_care', 'kairalovers6@gmail.com', 'male', 'profesional nurse', '2 yers'),
(28, 'sonakshi', 'teku', 984006334, 'Hospis_care', 'sona@gmail.com', 'female', 'licensed practice nurse', '8 yrs'),
(29, 'anika shsh', 'kalimati', 984006836, 'Hospis_care', 'kanika@gmail.com', 'female', 'registred nurse', '8 yrs'),
(30, 'saurabh', 'kalanki', 984006334, 'Hospis_care', 'saurabh@gmail.com', 'female', 'certified nursing asistant', '8 yrs'),
(31, 'alina ', 'kalimati', 2147483647, 'Hospis_care', 'alina@gmail.com', 'female', 'regestered nurse', '3 years'),
(32, 'Rhea singh', 'jorpati', 2147483647, 'Primary_Care', 'rhea@gmail.com', 'female', 'licensed traning assistant', '9yrs '),
(33, 'Jasper Battle', 'kalimati', 2147483647, 'Primary_Care', 'kairalovers6@gmail.com', 'female', 'registered nurse', 'safe '),
(34, 'anika', 'shrestha', 2147483647, 'Primary_Care', 'anika@gmail.com', 'female', 'registered nurse', 'safe'),
(35, 'Linus Leon', 'Ducimus ut corporis', 74, 'Primary_Care', 'gigyr@mailinator.com', 'male', 'Et impedit consequu', 'Fugiat sit vero numq'),
(36, 'Petra Lloyd', 'Dolor est exercitati', 62, 'Hospis_care', 'zamacud@mailinator.com', 'male', 'Et quia dolore in co', 'Est dolore non qui a');

-- --------------------------------------------------------

--
-- Table structure for table `nurse_appointment`
--

CREATE TABLE `nurse_appointment` (
  `id` int(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `name` varchar(110) NOT NULL,
  `age` int(110) NOT NULL,
  `contact` int(110) NOT NULL,
  `date` date NOT NULL,
  `date2` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nurse_appointment`
--

INSERT INTO `nurse_appointment` (`id`, `specialization`, `name`, `age`, `contact`, `date`, `date2`, `address`, `description`) VALUES
(25, 'primary', 'Tamana joshi', 89, 2147483647, '2024-06-06', '2024-06-05', 'jyatha', 'efficient'),
(26, 'primary', 'Tamana joshi', 34, 2147483647, '2024-06-20', '2024-06-28', 'maitidevi', ' safe and reliable'),
(45, 'primary', 'saurabh', 7, 2147483647, '2024-06-20', '2024-06-20', 'teku', ' safe'),
(49, 'hospis', 'dev dixit', 89, 99, '1984-01-14', '1996-03-16', 'Ex dolor sit et odi', 'Alias nemo soluta co'),
(50, 'injury', 'Sonakshi', 49, 54, '1987-01-29', '1983-12-16', 'Laboriosam eos mol', 'Id aut asperiores do'),
(51, 'hospis', 'Sonakshi', 52, 48, '1996-08-24', '1976-09-29', 'Commodo voluptatem ', 'Voluptatem velit qu');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `name`, `address`, `age`, `contact`, `email`, `password`, `confirm_password`) VALUES
(2, 'abheepsa', 'aniak', '26', '232323', '9840066688@gmail.com', '12345', '54321'),
(3, 'abheepsa', 'aniak', '26', '232323', '9840066688@gmail.com', '12345', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

CREATE TABLE `patient_register` (
  `id` int(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_register`
--

INSERT INTO `patient_register` (`id`, `firstname`, `lastname`, `address`, `number`, `gender`, `email`, `password`, `confirmpassword`) VALUES
(18, 'eda', 'yildis', 'ason', 2147483647, 'male', 'kairalovers6@gmail.com', '12345', '12345'),
(19, 'eda', 'yildis', 'ason', 2147483647, 'male', 'kairalovers6@gmail.com', '12345', '12345'),
(47, 'Ishwari', 'Dixit', 'dillibazar', 2147483647, 'male', 'ishwari@gmail.com', '12345', '12345'),
(48, 'Anika', 'Shrestha', 'maitidevi', 2147483647, 'female', 'kairalovers6@gmail.com', '12345', '12345'),
(49, 'Kavya', 'Pradhan', 'Maitidevi', 2147483647, 'female', 'kavyapradhan717@gmail.com', '12345', '12345'),
(50, 'abheepsa', 'pradhan', 'ason', 2147483647, 'female', 'abheepsapradhan123@gmail.com', '12345', '12345'),
(51, 'shristi', 'rauni', 'kalimati', 2147483647, 'female', 'shristi@gmail.com', '12345', '12345'),
(52, 'anika', 'shrestha', 'kalimati', 2147483647, 'female', 'anika@gmail.com', '12345', '12345'),
(53, 'anika', 'pradhan', 'ason', 2147483647, 'female', 'anika@gmail.com', '12345', '12345'),
(54, 'Kato', 'Murphy', 'Elit voluptatem Te', 951, 'male', 'zazifykoc@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!'),
(55, 'Sophia', 'Cook', 'Cumque maxime volupt', 175, 'female', 'bikovobaja@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!'),
(56, 'Alfonso', 'Freeman', 'Omnis voluptatem ut ', 727, 'female', 'legi@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!'),
(57, 'Rhea', 'Robbins', 'Reprehenderit eaque', 937, 'female', 'pevahuluje@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `patient_visits`
--

CREATE TABLE `patient_visits` (
  `id` int(11) NOT NULL,
  `visit_date` date NOT NULL,
  `next_visit_date` date DEFAULT NULL,
  `bp` varchar(23) NOT NULL,
  `weight` varchar(12) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(11) NOT NULL,
  `Day_Time1` varchar(500) NOT NULL,
  `Day_Time2` varchar(500) NOT NULL,
  `Day_Time3` varchar(500) NOT NULL,
  `Day_Time4` varchar(500) NOT NULL,
  `Day_Time5` varchar(5000) NOT NULL,
  `Day_Time6` varchar(5000) NOT NULL,
  `Day_Time7` varchar(5000) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `Day_Time1`, `Day_Time2`, `Day_Time3`, `Day_Time4`, `Day_Time5`, `Day_Time6`, `Day_Time7`, `d_id`) VALUES
(22, 'Saturday 6:00 AM To 12:00 AM', '', '', '', '', '', '', 1234017),
(23, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234018),
(24, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234019),
(25, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234022),
(26, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234023),
(27, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234024),
(28, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234027),
(29, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234028),
(30, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234029),
(31, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234032),
(32, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234033),
(33, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234034),
(34, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234037),
(35, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234038),
(36, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234039),
(37, 'Saturday 9:00 AM To 9:00 PM', 'Sunday 9:00 AM To 9:00 PM', 'Monday 9:00 AM To 9:00 PM', 'Tuesday 9:00 AM To 9:00 PM', 'Wednesday 9:00 AM To 9:00 PM', 'Thursday 9:00 AM To 9:00 PM', 'Friday 9:00 AM To 9:00 PM', 1234040);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(500) NOT NULL,
  `l_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(500) NOT NULL,
  `maritialstatus` varchar(500) NOT NULL,
  `pswd` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `contact`, `address`, `DOB`, `gender`, `maritialstatus`, `pswd`, `date`) VALUES
(1, 'anika', 'tabassum', 'anika@gmail.com', '01867785022', 'dhanmondi', '1995-12-08', 'female', 'single', '0123456789', '0000-00-00'),
(6, 'janobe', 'sourcecode', 'jan@gmail.com', '01867785022', 'mirpur', '1995-08-18', 'female', 'single', 'janobe', '2018-08-03'),
(7, 'onika', 'hossain', 'onika@gmail.com', '01867785022', 'null', '1995-08-26', 'female', 'single', '123456789', '2018-08-03'),
(8, 'rabby', 'shaon', 'rabby@gmail.com', '1', 'null', '1995-08-25', 'male', 'single', '123456789', '2018-08-06'),
(12, 'monika', 'monika', 'merina@gmail.com', '01711701234', 'moghbazar', '1996-04-04', 'female', '', '123456789', '0000-00-00'),
(13, 'Sharmin', 'Prysly', 'sharmin@gmail.com', '01711701212', '', '1996-04-04', 'female', '', '123456789', '0000-00-00'),
(14, 'Niamul', 'kabir', 'niamul@gmail.com', '01711701212', '', '1995-09-13', 'male', '', '123456789', '0000-00-00'),
(15, 'Sudipto', 'Majumdar', 'sudipto@gmail.com', '01711701212', '', '1995-08-28', 'male', '', '123456789', '0000-00-00'),
(16, 'Sohanur', 'Rahman', 'sohan@gmail.com', '01711701212', '', '1995-09-01', 'male', '', '123456789', '0000-00-00'),
(17, 'Nishat', 'tasnim', 'nishat@gmail.com', '01711701212', '', '1996-09-14', 'female', '', '123456789', '0000-00-00'),
(18, 'Jinia', 'Islam', 'jinia@gmail.com', '01711701212', '', '1996-09-07', 'female', '', '123456789', '0000-00-00'),
(19, 'Rupa', 'Ahmed', 'rupa@gmail.com', '01711701212', '', '1996-07-06', 'female', '', '123456789', '0000-00-00'),
(20, 'juena', 'akhter', 'juena@gmail.com', '01711701212', '', '1996-06-07', 'female', '', '123456789', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_register`
--
ALTER TABLE `doctor_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_rental`
--
ALTER TABLE `equipment_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test`
--
ALTER TABLE `lab_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse_appointment`
--
ALTER TABLE `nurse_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_register`
--
ALTER TABLE `patient_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_visits`
--
ALTER TABLE `patient_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_patients_visit_patient_id` (`patient_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234055;

--
-- AUTO_INCREMENT for table `doctor_register`
--
ALTER TABLE `doctor_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `equipment_rental`
--
ALTER TABLE `equipment_rental`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `lab_test`
--
ALTER TABLE `lab_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `nurse_appointment`
--
ALTER TABLE `nurse_appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_register`
--
ALTER TABLE `patient_register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `patient_visits`
--
ALTER TABLE `patient_visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
