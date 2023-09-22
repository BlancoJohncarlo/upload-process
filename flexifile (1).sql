-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 10:54 AM
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
-- Database: `flexifile`
--

-- --------------------------------------------------------

--
-- Table structure for table `civil_service_tb`
--

CREATE TABLE `civil_service_tb` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `career` varchar(250) NOT NULL,
  `rating` varchar(250) NOT NULL,
  `examination` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `validity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_service_tb`
--

INSERT INTO `civil_service_tb` (`id`, `userid`, `career`, `rating`, `examination`, `place`, `number`, `validity`) VALUES
(69, 2, 'LICENSURE EXAMINATION FOR TEACHERS, , , , , , ', '0.828, , , , , , ', '03/20/2017, , , , , , ', 'LUCENA CITY, , , , , , ', '14667826, , , , , , ', '06/16/2027, , , , , , ');

-- --------------------------------------------------------

--
-- Table structure for table `educational_background_tb`
--

CREATE TABLE `educational_background_tb` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `level_elementary` varchar(250) NOT NULL,
  `school_elementary` varchar(250) NOT NULL,
  `degree_elementary` varchar(250) NOT NULL,
  `fromdate_elementary` year(4) NOT NULL,
  `todate_elementary` year(4) NOT NULL,
  `units_elementary` varchar(250) NOT NULL,
  `graduated_elementary` year(4) NOT NULL,
  `honors_elementary` varchar(250) NOT NULL,
  `level_secondary` varchar(250) NOT NULL,
  `school_secondary` varchar(250) NOT NULL,
  `degree_secondary` varchar(250) NOT NULL,
  `fromdate_secondary` year(4) NOT NULL,
  `todate_secondary` year(4) NOT NULL,
  `units_secondary` varchar(250) NOT NULL,
  `graduated_secondary` year(4) NOT NULL,
  `honors_secondary` varchar(250) NOT NULL,
  `level_vocational` varchar(250) NOT NULL,
  `school_vocational` varchar(250) NOT NULL,
  `degree_vocational` varchar(250) NOT NULL,
  `fromdate_vocational` year(4) NOT NULL,
  `todate_vocational` year(4) NOT NULL,
  `units_vocational` varchar(250) NOT NULL,
  `graduated_vocational` year(4) NOT NULL,
  `honors_vocational` varchar(250) NOT NULL,
  `level_college` varchar(250) NOT NULL,
  `school_college` varchar(250) NOT NULL,
  `degree_college` varchar(250) NOT NULL,
  `fromdate_college` varchar(250) NOT NULL,
  `todate_college` varchar(250) NOT NULL,
  `units_college` varchar(250) NOT NULL,
  `graduated_college` varchar(250) NOT NULL,
  `honors_college` varchar(250) NOT NULL,
  `level_gradstudies` varchar(250) NOT NULL,
  `school_gradstudies` varchar(250) NOT NULL,
  `degree_gradstudies` varchar(250) NOT NULL,
  `fromdate_gradstudies` varchar(250) NOT NULL,
  `todate_gradstudies` varchar(250) NOT NULL,
  `units_gradstudies` varchar(250) NOT NULL,
  `graduated_gradstudies` varchar(250) NOT NULL,
  `honors_gradstudies` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_background_tb`
--

INSERT INTO `educational_background_tb` (`id`, `userid`, `level_elementary`, `school_elementary`, `degree_elementary`, `fromdate_elementary`, `todate_elementary`, `units_elementary`, `graduated_elementary`, `honors_elementary`, `level_secondary`, `school_secondary`, `degree_secondary`, `fromdate_secondary`, `todate_secondary`, `units_secondary`, `graduated_secondary`, `honors_secondary`, `level_vocational`, `school_vocational`, `degree_vocational`, `fromdate_vocational`, `todate_vocational`, `units_vocational`, `graduated_vocational`, `honors_vocational`, `level_college`, `school_college`, `degree_college`, `fromdate_college`, `todate_college`, `units_college`, `graduated_college`, `honors_college`, `level_gradstudies`, `school_gradstudies`, `degree_gradstudies`, `fromdate_gradstudies`, `todate_gradstudies`, `units_gradstudies`, `graduated_gradstudies`, `honors_gradstudies`) VALUES
(54, 2, 'ELEMENTARY', 'MOGPOG CENTARL SCHOOL', 'ELEMENTARY', '2000', '2006', 'N/A', '2006', 'N/A', 'SECONDARY', 'MARINDUQUE NATIONAL HIGH SCHOOL', 'ACADEMY', '2006', '2010', 'N/A', '2010', 'N/A', 'ADVANCE TECHNICAL TRAINING CENTER', 'ADVANCE TECHNICAL TRAINING CENTER', 'COMPUTER TECHNOLOGY', '2017', '2017', 'N/A', '2017', '2nd Honor', 'COLLEGE, COLLEGE', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY, CERTIFICATE IN TEACHERS PROFESSIONAL EDUCATION', '2010, 2014', '2014, 2015', 'N/A, 22 UNITS EARNED', '2014, N/A', 'N/A, N/A', 'GRADUATE STUDIES , GRADUATE STUDIES , GRADUATE STUDIES ', 'MARINDUQUE STATE COLLEGE, NATIONAL UNIVERSITY  - ASIA PACIFIC COLLEGE, MARINDUQUE STATE COLLEGE', 'MASTER IN EDUCATION - MAJOR IN EDUCATIONAL MANAGEMENT, MASTER IN INFORMATION SYSTEMS, MASTER IN INFORMATION TECHNOLOGY', '2015, 2017, 2022', '2016, 2020, 2023', '9 UNITS EARNED, , 15 UNITS EARNED', 'N/A, 2020, N/A', 'N/A, N/A, N/A');

-- --------------------------------------------------------

--
-- Table structure for table `family_background_tb`
--

CREATE TABLE `family_background_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `spouse_surname` varchar(250) NOT NULL,
  `spouse_firstname` varchar(250) NOT NULL,
  `spouse_midname` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `employer` varchar(250) NOT NULL,
  `business_address` varchar(250) NOT NULL,
  `telephone_no` varchar(250) NOT NULL,
  `spouse_extension` varchar(250) NOT NULL,
  `father_surname` varchar(250) NOT NULL,
  `father_firstname` varchar(250) NOT NULL,
  `father_midname` varchar(250) NOT NULL,
  `father_extension` varchar(250) NOT NULL,
  `mother_surname` varchar(250) NOT NULL,
  `mother_firstname` varchar(250) NOT NULL,
  `mother_midname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_background_tb`
--

INSERT INTO `family_background_tb` (`id`, `userid`, `spouse_surname`, `spouse_firstname`, `spouse_midname`, `occupation`, `employer`, `business_address`, `telephone_no`, `spouse_extension`, `father_surname`, `father_firstname`, `father_midname`, `father_extension`, `mother_surname`, `mother_firstname`, `mother_midname`) VALUES
(60, 2, '', '', '', '', 'N/A', '', '', 'NAME EXTENSION (JR., SR)                                     ', 'CRUZ', 'ROEL', 'JIMENA', 'NAME EXTENSION (JR., SR)                                     ', 'DELA', 'CONCHITA', 'JALOS');

-- --------------------------------------------------------

--
-- Table structure for table `family_children_tb`
--

CREATE TABLE `family_children_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `childname` varchar(250) NOT NULL,
  `childbirth` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_children_tb`
--

INSERT INTO `family_children_tb` (`id`, `userid`, `childname`, `childbirth`) VALUES
(60, 2, 'N/A, , , , , , , , , , , ', 'N/A, , , , , , , , , , , ');

-- --------------------------------------------------------

--
-- Table structure for table `other_info_tb`
--

CREATE TABLE `other_info_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `skills_hobbie` text NOT NULL,
  `recognition` text NOT NULL,
  `association` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_info_tb`
--

INSERT INTO `other_info_tb` (`id`, `userid`, `skills_hobbie`, `recognition`, `association`) VALUES
(4, 2, 'COMPUTER LITERATE , BASIC TROUBLESHOOTING , DANCING , DRAWING , DESKTOP PUBLISHING', 'N/A ,  ,  ,  , ', 'ROTARACT CLUB OF MARINDUQUE NORTH - MARINDUQUE STATE COLLEGE CHAPTER , SAVE MOTHER EARTH MOVEMENT (SAVE ME MOVEMNENT) , PHILIPPINES - LEAD - PROJECT CHAMP , MARINDUQUE YOUTH VOLUNTERS CORPS , MARINDUQUE NATIONAL HIGH SCHOOL EMPLOYEE ASSOCIATION');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info_tb`
--

CREATE TABLE `personal_info_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `midname` varchar(250) NOT NULL,
  `extension` varchar(250) NOT NULL,
  `birthday` varchar(250) NOT NULL,
  `birthplace` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `civil_status` varchar(250) NOT NULL,
  `height` float NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodtype` varchar(250) NOT NULL,
  `gsis` varchar(250) NOT NULL,
  `pagibig` varchar(250) NOT NULL,
  `philhealth` varchar(250) NOT NULL,
  `sss` varchar(250) NOT NULL,
  `tin` varchar(250) NOT NULL,
  `agency_no` varchar(250) NOT NULL,
  `citizenship` varchar(250) NOT NULL,
  `residential_house_no` varchar(250) NOT NULL,
  `residential_street` varchar(250) NOT NULL,
  `residential_subdivision` varchar(250) NOT NULL,
  `residential_barangay` varchar(250) NOT NULL,
  `residential_municipality` varchar(250) NOT NULL,
  `residential_province` varchar(250) NOT NULL,
  `residential_zipcode` int(20) NOT NULL,
  `permanent_house_no` varchar(250) NOT NULL,
  `permanent_street` varchar(250) NOT NULL,
  `permanent_subdivision` varchar(250) NOT NULL,
  `permanent_barangay` varchar(250) NOT NULL,
  `permanent_municipality` varchar(250) NOT NULL,
  `permanent_province` varchar(250) NOT NULL,
  `permanent_zipcode` int(20) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info_tb`
--

INSERT INTO `personal_info_tb` (`id`, `userid`, `firstname`, `surname`, `midname`, `extension`, `birthday`, `birthplace`, `sex`, `civil_status`, `height`, `weight`, `bloodtype`, `gsis`, `pagibig`, `philhealth`, `sss`, `tin`, `agency_no`, `citizenship`, `residential_house_no`, `residential_street`, `residential_subdivision`, `residential_barangay`, `residential_municipality`, `residential_province`, `residential_zipcode`, `permanent_house_no`, `permanent_street`, `permanent_subdivision`, `permanent_barangay`, `permanent_municipality`, `permanent_province`, `permanent_zipcode`, `telephone`, `email`, `mobile_no`) VALUES
(66, 2, 'Cruz', 'Juan', 'Dela', 'NAME EXTENSION (JR., SR)  N/A            ', '=DATE(1996,7,26)', 'BOAC, MARINDUQUE', '', '', 1.52, 45, 'A', '2005005789', '1245-7355-2215', '09-000094895-3', 'N/A', '328-971-218-0000', '6013112', '', 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4900, 'N/A', 'N/A', 'N/A', 'GITNANG BAYAN', 'MOGPOG', 'MARINDUQUE', 4901, 'N/A', '09194864365', 'kevinjasmin15@gmail.com/kevinjasmin15@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `training_programs_tb`
--

CREATE TABLE `training_programs_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `title` text NOT NULL,
  `training_from_date` text NOT NULL,
  `training_to_date` text NOT NULL,
  `duration` varchar(250) NOT NULL,
  `type` text NOT NULL,
  `sponsor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_programs_tb`
--

INSERT INTO `training_programs_tb` (`id`, `userid`, `title`, `training_from_date`, `training_to_date`, `duration`, `type`, `sponsor`) VALUES
(10, 2, '2021 IN-SERVICE TRAINING , 2020 IN-SERVICE TRAINING , LEARNING DELIVERY MODALITIES COURSE (LMD 2) , ECHO ORIENTATION ON MOST ESSENTIAL LEARNING COMPETENCIES (MELCs), LEARNING MODALITIES AND KNOWLEDGE SOURCE , OFFICE 365 EMPOWERMENT TRAINING - WORKSHOPS FOR SENIOR HIGH SCHOOL TEACHERS , DIVISION REORIENTATION ON RESULTS-BASED MANAGEMENT SYSTEM (RPMS)- PHILIPPINE PROFESSIONAL STANDARDS FOR TEACHERS (PPST) FOR SY 2019-2020 , BASIC LIFE SUPPORT TRAINING , TUDLO: \"PALIHAN SA WIKA, PANITIKAN AT ARALING PANGKULTURA SA MARINDUQUE\" , 2018 IN-SERVICE TRAINING , SCHOOL-BASED TRAINING ON RESULTS-BASED PERFORMANCE MANAGEMENT SYSTEM (RPMS) FOR TEACHERS , TECHNICAL VOCATIONAL LIVELIHOOD CULMINATING ACTIVITY , SCHOOL TRAINING OF CAREER ADVOCATES FOR THE GRADE 12 CAREER GUIDANCE PROGRAM IMPLEMENTATION , 2017 SEMESTRAL SCHOOL INSET , SHOP TALK: PRODUCT DEVELOPMENT THROUGH CREATIVITY AND INNOVATION , LECTURE ON LESSON PLANNING  , WALKTHROUGH OF THE MODULES OF THE CAREER GUIDANCE PROGRAM FOR GRADE 11 , 2016 SEMESTRAL SCHOOL INSET , \"BRING HOME A LIBRARY\" PROGRAM THRU BOOK CARAVAN , REGIONAL MASS TRAINING OF GRADE 11 TEACHERS ON COMMON TOPICS (BATCH 2) , SENIOR HIGH SCHOOL (SHS) MASS TRAINING OF TEACHERS (MTOT) ON THE TVL TRACK , 4TH RESEARCH FORUM , FACULTY CONFERENCE , COMPUTER SYSTEMS SERVICING NC II , 1ST MARINDUQUE SCIENCE AND TECHNOLOGY CONFERENCE , 5TH STIRDC REGIONAL RESEARCH DEVELOPMENT AND EXTENSION CONFERENCE , SEMINAR ON INFORMATION TECHNOLOGY AND SPORTS DEVELOPMENT  , BASIC WORDPRESS SEMINAR - WORKSHOP , 3RD SICS RESEARCH FORUM , SICS RESEARCH AND EXTENSION SEMINAR WORKSHOP', '03/15/2021 , 44179 , 44081 , 07/01/2020 , 10/22/2019 , 09/17/2019 , 08/03/2019 , 04/10/2019 , 43395 , 43371 , 43355 , 06/22/2018 , 43031 , 43033 , 43031 , 43014 , 42667 , 42637 , 42555 , 42523 , 42445 , 42389 , 42324 , 42306 , 42281 , 42271 , 42210 , 42087 , 42074', '03/19/2021 , 44183 , 44085 , 07/01/2020 , 10/25/2019 , 09/18/2019 , 08/03/2019 , 04/12/2019 , 43399 , 43372 , 43355 , 06/23/2018 , 43035 , 43035 , 43031 , 43014 , 42669 , 42637 , 42558 , 42529 , 42445 , 42389 , 42324 , 42307 , 42283 , 42271 , 42210 , 42087 , 42074', '40 , 40 , 40 , 8 , 32 , 16 , 8 , 24 , 36 , 16 , 8 , 16 , 40 , 16 , 8 , 8 , 40 , 8 , 32 , 56 , 8 , 8 , 320 , 16 , 24 , 8 , 8 , 8 , 8', 'TECHNICAL , TECHNICAL , TECHNICAL , FOUNDATION , TECHNICAL , FOUNDATION , TECHNICAL , TECHNICAL , TECHNICAL , FOUNDATION , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , FOUNDATION , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL , TECHNICAL', 'MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , DEPARTMENT OF EDUCATION DIVISION OF MARINDUQUE , MARINDUQUE NATIONAL HIGH SCHOOL - SENIOR HIGH SCHOOL DEPARTMENT , MICROSOFT PHILIPPINES - DEPARTMENT OF EDUCATION  , DEPARTMENT OF EDUCATION DIVISION OF MARINDUQUE , DEPARTMENT OF HEALTH , NATIONAL COMISSION FOR CULTURE AND THE ARTS/ DEPARTMENT OF EDUCATION , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , DEPARTMENT OF EDUCATION , MARINDUQUE NATIONAL HIGH SCHOOL , MARINDUQUE NATIONAL HIGH SCHOOL , DEPARTMENT OF EDUCATION REGION IV MIMAROPA , DEPARTMENT OF EDUCATION REGION IV MIMAROPA , MARINDUQUE STATE COLLEGE - SCHOOL OF INFORMATION AND COMPUTING SCIENCES  , MARINDUQUE STATE COLLEGE , TECHNICAL EDUCATIONAL AND SKILLS DEVELOPMENT AUTHORITY , MARINDUQUE STATE COLLEGE - RESEARCH AND EXTENSION DEPARTMENT , SOUTHERN TAGALOG ISLAND RESEARCH AND DEVELOPMENT CONSURTIUM , MARINDUQUE STATE COLLEGE - SCHOOL OF INFORMATION AND COMPUTING SCIENCES  , MARINDUQUE STATE COLLEGE - SCHOOL OF INFORMATION AND COMPUTING SCIENCES  , MARINDUQUE STATE COLLEGE - SCHOOL OF INFORMATION AND COMPUTING SCIENCES  , MARINDUQUE STATE COLLEGE - SCHOOL OF INFORMATION AND COMPUTING SCIENCES ');

-- --------------------------------------------------------

--
-- Table structure for table `voluntary_work_tb`
--

CREATE TABLE `voluntary_work_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `organization` varchar(250) NOT NULL,
  `from_date` varchar(250) NOT NULL,
  `to_date` varchar(250) NOT NULL,
  `hours` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voluntary_work_tb`
--

INSERT INTO `voluntary_work_tb` (`id`, `userid`, `organization`, `from_date`, `to_date`, `hours`, `position`) VALUES
(12, 2, 'ROTARACT CLUB OF MARINDUQUE NORTH - MARINDUQUE STATE COLLEGE CHAPTER , SAVE MOTHER EARTH MOVEMENT (SAVE ME MOVEMNENT) , PHILIPPINES - LEAD - PROJECT CHAMP', '=DATE(2013,6,6) , =DATE(2012,6,6) , =DATE(2012,6,6)', '680 , 1360 , 680', '=DATE(2014,6,23) , =DATE(2014,6,24) , =DATE(2013,6,8)', '680 , 1360 , 680');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience_tb`
--

CREATE TABLE `work_experience_tb` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `work_from_date` varchar(250) NOT NULL,
  `work_to_date` varchar(250) NOT NULL,
  `position_title` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `paygrade` varchar(250) NOT NULL,
  `appointment` varchar(250) NOT NULL,
  `gov_service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_experience_tb`
--

INSERT INTO `work_experience_tb` (`id`, `userid`, `work_from_date`, `work_to_date`, `position_title`, `department`, `salary`, `paygrade`, `appointment`, `gov_service`) VALUES
(50, 2, '=DATE(2023,1,1), =DATE(2022,7,18), 44562, 44197, 43831, 43612, 43466, 43101, 42754, 42517, 42156, 42156, 41946, 41799, , , , , , , , , , , , , , , ', 'PRESENT, 12/31/2022, 07/17/2022, 44561, 44196, 43830, 43611, 12/31/2018, 12/31/2017, 42753, 42459, 42293, 42090, 41929, , , , , , , , , , , , , , , ', 'INSTRUCTOR 1, INSTRUCTOR 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1, SECONDARY SCHOOL TEACHER 1', 'MARINDUQUE STATE COLLEGE, MARINDUQUE STATE COLLEGE, DEPARTMENT OF EDUCATION MARINDUQUE NATIONAL HIGH SCHOOL - SENIOR HIGH SCHOOL, DEPARTMENT OF EDUCATION MARINDUQUE NATIONAL HIGH SCHOOL - SENIOR HIGH SCHOOL, DEPARTMENT OF EDUCATION MARINDUQUE NATIONA', 'P29,165, P27,608, P25,723, P24,161, P22,600, P21,038, P20,754, P20,179, P19,620, P19,120, P13,660, P13,660, P13,660, P13,660, , , , , , , , , , , , , , , ', '12-1, 12-1, 11-2, 11-2, 11-2, 11-2, 11-1, 11-1, 11-1, 11-1, N/A, N/A, N/A, N/A, , , , , , , , , , , , , , , ', 'REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, REGULAR, TEMPORARY, CONTRACT SERVICE, CONTRACT SERVICE, CONTRACT SERVICE, CONTRACT SERVICE, , , , , , , , , , , , , , , ', 'YES, YES, YES, YES, YES, YES, YES, YES, YES, YES, NO, NO, NO, NO, , , , , , , , , , , , , , , ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civil_service_tb`
--
ALTER TABLE `civil_service_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_background_tb`
--
ALTER TABLE `educational_background_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_background_tb`
--
ALTER TABLE `family_background_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_children_tb`
--
ALTER TABLE `family_children_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_info_tb`
--
ALTER TABLE `other_info_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info_tb`
--
ALTER TABLE `personal_info_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_programs_tb`
--
ALTER TABLE `training_programs_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voluntary_work_tb`
--
ALTER TABLE `voluntary_work_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience_tb`
--
ALTER TABLE `work_experience_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `civil_service_tb`
--
ALTER TABLE `civil_service_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `educational_background_tb`
--
ALTER TABLE `educational_background_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `family_background_tb`
--
ALTER TABLE `family_background_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `family_children_tb`
--
ALTER TABLE `family_children_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `other_info_tb`
--
ALTER TABLE `other_info_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_info_tb`
--
ALTER TABLE `personal_info_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `training_programs_tb`
--
ALTER TABLE `training_programs_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `voluntary_work_tb`
--
ALTER TABLE `voluntary_work_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `work_experience_tb`
--
ALTER TABLE `work_experience_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
