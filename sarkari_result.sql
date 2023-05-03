-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 11:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarkari_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `sarkarires`
--

CREATE TABLE `sarkarires` (
  `id` int(11) NOT NULL,
  `categaries` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `name of post` varchar(100) DEFAULT NULL,
  `post date` varchar(100) DEFAULT NULL,
  `update date` varchar(100) DEFAULT NULL,
  `short information` varchar(1000) DEFAULT NULL,
  `post heading` varchar(200) DEFAULT NULL,
  `apply` varchar(50) DEFAULT NULL,
  `last` varchar(50) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `exam_date` varchar(50) NOT NULL,
  `admitcard_date` varchar(50) NOT NULL,
  `fee` varchar(1000) DEFAULT NULL,
  `age details` varchar(500) DEFAULT NULL,
  `vacancy details` varchar(100) DEFAULT NULL,
  `vacancy one` varchar(100) DEFAULT NULL,
  `vacancy second` varchar(100) DEFAULT NULL,
  `vacancy third` varchar(100) DEFAULT NULL,
  `feel form` varchar(1000) DEFAULT NULL,
  `apply_link` varchar(1000) DEFAULT NULL,
  `Official` varchar(1000) NOT NULL,
  `notification` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarkarires`
--

INSERT INTO `sarkarires` (`id`, `categaries`, `title`, `name of post`, `post date`, `update date`, `short information`, `post heading`, `apply`, `last`, `pay`, `exam_date`, `admitcard_date`, `fee`, `age details`, `vacancy details`, `vacancy one`, `vacancy second`, `vacancy third`, `feel form`, `apply_link`, `Official`, `notification`) VALUES
(1, NULL, 'Central Silk Board Various Post Online Form 2023', 'Central Silk Board Latest Recruitment 2022-2023 Various Post Apply Online for 142 Post', '27 December 2022 | 10:44 PM', NULL, 'Central Silk Board CSB has released the notification for the recruitment of Upper Division Clerk UDC, Stenographer, JE, Programmer, Cook, Group A B and C Multiple posts Recruitment 2022-2023. All the candidates who are interested in this Central Silk Board Various Post 2022 Vacancy and fulfill the eligibility can apply online. See the advertisement for information related to age limit, syllabus, institute wise post, selection procedure, pay scale in Central Silk Board Recruitment 2022.', 'Central Silk Board (CSB) Ministry of Textiles (Govt of India) <br/>\nCentral Silk Board CSB Various POST', '24/12/2022', '16/01/2023', '16/01/2023', 'As per Schedule\n', 'Before Exam', 'Group A (UR/OBC/EWS) : 1000/-<br/>\nGroup B & C (UR/OBC/EWS) : 750/-<br/>\nSC / ST : 0/-<br/>\nAll Category Female : 0/-<br/>\nPay the Examination Fee Through Debit Card, Credit Card, Net Banking or Pay Offline Through E Challan', 'Minimum Age : 18 Years<br>\n                                    Maximum Age: 35 Years (Post Wise) <br>\n                                    Age Relaxation Extra as per Central Silk Board CSB Various Post Exam 2022 Recruitment Rules.', '142 Post', 'Post Name', 'Total Post', 'CSB Various Post Eligibility', 'Central Silk Board CSB Call For New Application for UDC, JE, Stenographer & Other Various Group A B C Recruitment 2022 Candidate Can Apply Between 24/12/2022 to 16/01/2023.<br>\n                                Candidate Read the Notification Before Apply the Recruitment Application Form in Central Silk Board Multiple Post Latest Recruitment 2022-2023.<br>\n                                Kindly Check and Collect the All Document - Eligibility, ID Proof, Address Details, Basic Details.<br>\n                                Kindly Ready Scan Document Related to Recruitment Form - Photo, Sign, ID Proof, Etc.<br>\n                                Before Submit the Application Form Must Check the Preview and All Column Carefully.<br>\n                                If Candidate Required to Paying the Application Fee Must Submit. If You have Not the Required Application Fees Your Form is Not Completed.<br>\n                                Take A Print Out of Final Submitted Form.', 'https://ibpsonline.ibps.in/csboct22/', 'https://csb.gov.in/job-opportunities/', 'https://csb.gov.in/wp-content/uploads/2022/12/CSB_Advt_Admn-Tech-2022.pdf'),
(2, NULL, 'MPESB Patwari and Other Post Online Form 2023', 'Madhya Pradesh MPESB / PEB Patwari, Group 2 Sub Group 4 Various Post Recruitment 2022 Apply Online', '27 December 2022 | 09:03 PM', NULL, 'Central Silk Board CSB has released the notification for the recruitment of Upper Division Clerk UDC, Stenographer, JE, Programmer, Cook, Group A B and C Multiple posts Recruitment 2022-2023. All the candidates who are interested in this Central Silk Board Various Post 2022 Vacancy and fulfill the eligibility can apply online. See the advertisement for information related to age limit, syllabus, institute wise post, selection procedure, pay scale in Central Silk Board Recruitment 2022.', 'Madhya Pradesh Employee Selection Board (MPESB)\r\nMP ESB Patwari & Other Various Post Recruitment 202', 'Application Begin : 05/01/2023\r\nLast Date for Appl', '', '0', '0', '0', 'General / Other State : 560/-\r\nSC / ST / OBC : 310/-\r\nPay the Exam Fee Through Cash at KIOSK Or Pay ', 'Minimum Age : 18 Years.\r\nMaximum Age : 40 Years.\r\nAge Relaxation Extra as per MP PEB Patwari & Other', 'MP ESB Patwari Group 2 Sub Group 4 Vacancy Details 2022 Total : 9073 Post', 'Recruitment Name', 'Total Post', 'MP Patwari & Other Post Eligibility', 'How to Fill MP Patwari & Other Post Recruitment Online Form 2022\r\nRecruitment of Madhya Pradesh PEB ', NULL, '', ''),
(3, NULL, 'MPESB High School TET Online Form 2023', 'Madhya Pradesh MPESB / PEB High School Teacher Eligibility Test MPHSTET Varg I Apply Online Form 202', '27 December 2022 | 12:38 AM', NULL, 'Central Silk Board CSB has released the notification for the recruitment of Upper Division Clerk UDC, Stenographer, JE, Programmer, Cook, Group A B and C Multiple posts Recruitment 2022-2023. All the candidates who are interested in this Central Silk Board Various Post 2022 Vacancy and fulfill the eligibility can apply online. See the advertisement for information related to age limit, syllabus, institute wise post, selection procedure, pay scale in Central Silk Board Recruitment 2022.', 'Madhya Pradesh Employee Selection Board (MPESB)\r\nMP High School Teacher Eligibility Test Varg I Exam', 'Application Begin : 12/01/2023\r\nLast Date for Appl', '', '0', '0', '0', 'General / Other State : 660/-\r\nSC / ST / OBC : 360/-\r\nInclude Portal Fee:\r\nPay the Exam Fee Through ', 'Minimum Age : 21 Years.\r\nMaximum Age : 40 Years.\r\nAge Relaxation Extra as per MP Employee Selection ', 'MP ESB High School Teacher Eligibility Test Exam 2023 Varg 1 Details', 'Exam Name', 'MP ESB Varg 1 High School TET Eligibility', NULL, 'How to Fill MP High School TET Varg I Exam Online Form 2023\r\nMadhya Pradesh Employee Selection Board', NULL, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sarkarires`
--
ALTER TABLE `sarkarires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sarkarires`
--
ALTER TABLE `sarkarires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
