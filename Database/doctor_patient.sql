-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 12:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_a&d`
--

CREATE TABLE `tbl_a&d` (
  `ad_id` int(11) NOT NULL,
  `appo_id` int(11) NOT NULL,
  `accept` varchar(100) NOT NULL,
  `decline` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ad`
--

CREATE TABLE `tbl_ad` (
  `ad_id` int(11) NOT NULL,
  `appo_id` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ad`
--

INSERT INTO `tbl_ad` (`ad_id`, `appo_id`, `Status`) VALUES
(1, 0, 'Accept'),
(2, 0, ''),
(3, 0, 'Accept'),
(4, 0, 'Accept'),
(5, 0, ''),
(6, 0, 'Accept'),
(7, 0, 'Decline'),
(8, 0, 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `appo_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `appo_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appo_id`, `patient_name`, `address`, `gender`, `dob`, `age`, `contact`, `appo_date`, `status`, `doctor_name`, `patient_id`) VALUES
(1, 'Ranjit Kurade', 'Yenechavaandi', 'Male', '0000-00-00', 21, 9022958230, '2023-03-02', 'Decline', '', 0),
(2, '', '', 'Select Gender', '0000-00-00', 0, 0, '0000-00-00', 'Decline', '', 0),
(3, '', '', 'Select Gender', '0000-00-00', 0, 0, '0000-00-00', '', '', 0),
(4, 'Ranjit Kurade', 'Gadhhinglaj', 'Male', '2001-05-08', 21, 9022958230, '2023-03-02', 'Decline', '', 0),
(5, 'Amit Patil', 'Kedar complex near MR highschool gadhinglaj', 'Male', '2023-03-04', 22, 9865321245, '2023-03-08', 'Decline', '1', 0),
(6, 'Amit Patil', 'Kedar complex near MR highschool gadhinglaj', 'Male', '2023-03-04', 22, 9865321245, '2023-03-08', 'Accept', '1', 0),
(7, 'sumit patil', 'Kedar complex near MR highschool gadhinglaj', 'Male', '2023-04-01', 22, 9865321245, '2023-03-30', 'Decline', '1', 0),
(8, 'sumit patil', 'Kedar complex near MR highschool gadhinglaj', 'Male', '2023-04-01', 22, 9865321245, '2023-03-30', 'Decline', '1', 1),
(9, 'sumit patil', 'Kedar complex near MR highschool gadhinglaj', 'Male', '2023-04-01', 22, 9865321245, '2023-03-30', 'Pending', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_signup`
--

CREATE TABLE `tbl_doctor_signup` (
  `sign_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctor_signup`
--

INSERT INTO `tbl_doctor_signup` (`sign_id`, `full_name`, `address`, `contact`, `email`, `username`, `pass_word`) VALUES
(1, 'Ranjit Kurade', 'gadhinglaj', 9022958230, 'example@gmail.com', 'ranjitkurade', 'password'),
(2, 'Amit Patil', 'Kedar complex near MR highschool gadhinglaj', 9865321245, 'ketangorule29@gmail.com', 'admin', '123456'),
(3, 'Amit Patil', 'Gadhinglaj', 7898456585, 'amit123@gmail.com', 'amit123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicalbill`
--

CREATE TABLE `tbl_medicalbill` (
  `bill_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `bill_item` varchar(100) NOT NULL,
  `bill_description` varchar(200) NOT NULL,
  `bill_rate` int(11) NOT NULL,
  `bill_quantity` int(11) NOT NULL,
  `bill_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_medicalbill`
--

INSERT INTO `tbl_medicalbill` (`bill_id`, `patient_name`, `date`, `bill_item`, `bill_description`, `bill_rate`, `bill_quantity`, `bill_price`) VALUES
(2, 'Amit Patil', '2023-03-03', 'asd', 'asd', 33, 33, 3333);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_signup`
--

CREATE TABLE `tbl_patient_signup` (
  `sign_ID` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patient_signup`
--

INSERT INTO `tbl_patient_signup` (`sign_ID`, `full_name`, `address`, `gender`, `dob`, `age`, `username`, `pass_word`) VALUES
(1, 'Amit Patil', 'gadhinglaj', 'Male', '2001-05-08', 20, 'ranjitkurade', 'expertgroup');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `prescription_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `age` varchar(50) NOT NULL,
  `pre_date` date NOT NULL,
  `prescription` text NOT NULL,
  `presc_details` text NOT NULL,
  `doct_name` varchar(200) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`prescription_id`, `patient_name`, `address`, `age`, `pre_date`, `prescription`, `presc_details`, `doct_name`, `contact`) VALUES
(2, 'Amit Patil', 'Kedar complex near MR highschool gadhinglaj', '22', '2023-03-24', 'asd', 'asd', 'asd', 45235);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testreport`
--

CREATE TABLE `tbl_testreport` (
  `test_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `report` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test_report`
--

CREATE TABLE `tbl_test_report` (
  `tr_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL,
  `test_type` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `report` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_test_report`
--

INSERT INTO `tbl_test_report` (`tr_id`, `patient_name`, `gender`, `age`, `date`, `test_type`, `problem`, `report`, `description`) VALUES
(1, 'ranjit ', 'Male', 24, '2023-03-04', 'asd', 'asdasd', 'negiitive', 'sdfdf'),
(2, 'ranjit', 'Male', 22, '2023-03-04', 'Test ', ' problem name', 'negitive', 'Test Report Desc'),
(5, 'Amit Patil', 'Male', 33, '2023-03-31', 'sd', 'asdasd', 'adsd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_treatment`
--

CREATE TABLE `tbl_treatment` (
  `t_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL,
  `problem` varchar(200) NOT NULL,
  `treat_type` varchar(200) NOT NULL,
  `spec_name` varchar(200) NOT NULL,
  `nt_date` text NOT NULL,
  `prob_description` text NOT NULL,
  `treat_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_treatment`
--

INSERT INTO `tbl_treatment` (`t_id`, `patient_name`, `gender`, `age`, `date`, `problem`, `treat_type`, `spec_name`, `nt_date`, `prob_description`, `treat_description`) VALUES
(3, 'dmm', 'Male', 4, '2023-03-07', 'df', 'df', 'df', 'df', 'df', 'df'),
(5, 'Amit Patil', 'Male', 22, '2023-03-15', 'df', 'df', 'df', 'df', 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ward_details`
--

CREATE TABLE `tbl_ward_details` (
  `ward_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `floor_number` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `ward_name` varchar(100) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `department_head` varchar(200) NOT NULL,
  `ward_head` varchar(200) NOT NULL,
  `ward_contact` bigint(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ward_details`
--

INSERT INTO `tbl_ward_details` (`ward_id`, `hospital_name`, `floor_number`, `department_name`, `ward_name`, `bed_no`, `total_rooms`, `department_head`, `ward_head`, `ward_contact`, `description`) VALUES
(4, 'ABCD', 5, 'AA', 'AAAA', 504, 504, 'ABCeerer', 'AAAA', 7898456585, 'Acbdssdaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_a&d`
--
ALTER TABLE `tbl_a&d`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_ad`
--
ALTER TABLE `tbl_ad`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`appo_id`);

--
-- Indexes for table `tbl_doctor_signup`
--
ALTER TABLE `tbl_doctor_signup`
  ADD PRIMARY KEY (`sign_id`);

--
-- Indexes for table `tbl_medicalbill`
--
ALTER TABLE `tbl_medicalbill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_patient_signup`
--
ALTER TABLE `tbl_patient_signup`
  ADD PRIMARY KEY (`sign_ID`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `tbl_testreport`
--
ALTER TABLE `tbl_testreport`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tbl_test_report`
--
ALTER TABLE `tbl_test_report`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `tbl_treatment`
--
ALTER TABLE `tbl_treatment`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_ward_details`
--
ALTER TABLE `tbl_ward_details`
  ADD PRIMARY KEY (`ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_a&d`
--
ALTER TABLE `tbl_a&d`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ad`
--
ALTER TABLE `tbl_ad`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_doctor_signup`
--
ALTER TABLE `tbl_doctor_signup`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_medicalbill`
--
ALTER TABLE `tbl_medicalbill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_patient_signup`
--
ALTER TABLE `tbl_patient_signup`
  MODIFY `sign_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_testreport`
--
ALTER TABLE `tbl_testreport`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_test_report`
--
ALTER TABLE `tbl_test_report`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_treatment`
--
ALTER TABLE `tbl_treatment`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_ward_details`
--
ALTER TABLE `tbl_ward_details`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
