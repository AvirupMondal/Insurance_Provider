-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 06:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediclaim`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `Id` int(11) NOT NULL,
  `About_Us` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(2000) NOT NULL,
  `Admin_Username` varchar(2000) NOT NULL,
  `Admin_Password` varchar(2000) NOT NULL,
  `Admin_Image` varchar(2000) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_Name`, `Admin_Username`, `Admin_Password`, `Admin_Image`, `Status`) VALUES
(1, 'Admin', 'Admin@gmail.com', 'admin', '779564880_IMG_20160120_121059 (2).jpg', 1),
(3, 'Avi', 'avi@gmail.com', 'avi', '112244772_IMG_20200616_084316.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_Id` int(11) NOT NULL,
  `Blog_Name` varchar(2000) NOT NULL,
  `Blog` text NOT NULL,
  `Blog_Image` varchar(7000) NOT NULL,
  `Written_By` varchar(2000) NOT NULL,
  `Date` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_Id`, `Blog_Name`, `Blog`, `Blog_Image`, `Written_By`, `Date`, `Status`) VALUES
(1, 'Mediclaim can save your Family', 'Air pollution threatens us all. Pollution and health hazards are interconnected. Health hazards and uncertainties are a part of life. India is a 3rd world country where middle class and lower middle class are vast in number. WHO estimates that around 7 million people die every year from the lungs and cardiovascular disease including stroke, heart disease, lung cancer, chronic obstructive pulmonary diseases and respiratory infections, and pneumonia. But nowadays, treatment has been so much expensive that hospitalisation can empty oneâ€™s pocket and derail his finances. In this condition when a poor family faces any health disaster, he is bound to sell his land, home-stead even his household goods. Here comes the importance of Health Policy.  Health Policy provides people with a much needed financial backup at times of medical emergencies. A Mediclaim policy, even it is of petty amount and payable once in a year, can save a family from being destitute. For example, the hospital bill in case of pandemic diseases like corona, dengue and unknown disease which may arise in future, may turn a person destitute.  People think of depositing in bank and increasing wealth, but never think of their health-related crisis which may drain their last penny.  It will become even tough, if the person who is the earner, is in hospital bed. All this can be avoided by just paying a small annual premium which would lessen stress in case of medical emergencies.', '208460202_876672339_354209044_image3.jpg', 'Avijit Mondal', '2020-06-22 11:07:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_Id` int(11) NOT NULL,
  `User_Name` varchar(2000) NOT NULL,
  `User_Email` varchar(2000) NOT NULL,
  `User_Mobile` int(11) NOT NULL,
  `User_Message` mediumtext NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_Id`, `User_Name`, `User_Email`, `User_Mobile`, `User_Message`, `Date`) VALUES
(1, 'Avirup Mondal', 'abc@gmail.comas', 2147483647, 'testing1', '2020-06-13 02:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_Id` int(11) NOT NULL,
  `User_Name` varchar(2000) NOT NULL,
  `User_Image` varchar(2000) NOT NULL,
  `Feedback` text NOT NULL,
  `Rating` float NOT NULL,
  `Date` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_Id`, `User_Name`, `User_Image`, `Feedback`, `Rating`, `Date`, `Status`) VALUES
(21, 'Sabita Paul', '512283663_sabita photo.jpg', 'Avijit Mondal is a very reliable and trusty person.', 5, '2020-06-18 08:48:50', 0),
(23, 'Avirup Mondal', '685207733_IMG_20200616_084316.jpg', 'The website is user friendly helpful. Agent is freindly helpful. Guided me to the right way.', 5, '2020-06-21 10:17:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `Form_Id` int(11) NOT NULL,
  `Insurance_Name` varchar(2000) NOT NULL,
  `Policy_Name` varchar(2000) NOT NULL,
  `Form` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_types`
--

CREATE TABLE `insurance_types` (
  `Insurance_Id` int(11) NOT NULL,
  `Insurance_Name` varchar(20000) NOT NULL,
  `Insurance_Detail` text NOT NULL,
  `Insurance_Image` varchar(20000) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_types`
--

INSERT INTO `insurance_types` (`Insurance_Id`, `Insurance_Name`, `Insurance_Detail`, `Insurance_Image`, `Status`) VALUES
(1, 'Health Insurance', 'Health insurance is an insurance that covers the whole or a part of the risk of a person incurring medical expenses, spreading the risk over numerous persons. By estimating the overall risk of health risk and health system expenses over the risk pool, an insurer can develop a routine finance structure, such as a monthly premium or payroll tax, to provide the money to pay for the health care benefits specified in the insurance agreement', '354209044_image3.jpg', 1),
(6, 'Miscellaneous', 'Miscellaneous Insurance refers to contracts of insurance other than those of Life, Fire and Marine insurance. It covers a variety of risks, the chief of which are:- Personal Accident insurance.', '557219906_MESCLLANIOUS-01.jpg', 1),
(13, 'Motor Insurance', 'Vehicle insurance (also known as car insurance, motor insurance, or auto insurance) is insurance for cars, trucks, motorcycles, and other road vehicles. Its primary use is to provide financial protection against physical damage or bodily injury resulting from traffic collisions and against liability that could also arise from incidents in a vehicle.', '527634883_joey-banks-YApiWyp0lqo-unsplash.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `Policy_Id` int(11) NOT NULL,
  `Name_Insurance` varchar(20000) NOT NULL,
  `Policy_Name` varchar(2000) NOT NULL,
  `Policy_Details` longtext NOT NULL,
  `Claim_Forms` varchar(2000) NOT NULL,
  `Forms` varchar(2000) NOT NULL,
  `Rules` varchar(2000) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`Policy_Id`, `Name_Insurance`, `Policy_Name`, `Policy_Details`, `Claim_Forms`, `Forms`, `Rules`, `Status`) VALUES
(1, 'Health Insurance', 'ARGYO SANJEBANI POLICY', '613772853_CIS Arogya Sanjeevani Policy, The New India Assurance Co. Ltd.pdf', '206944546_Claim_Form Health Indurance.pdf', '763221666_Arogya Sanjeevani Policy Form.pdf', '539515133_Rules and Regulations of Arogya Sanjeevani Policy.pdf', 1),
(2, 'Health Insurance', 'NEW INDIA CANCER GUIDE POLICY', '708451321_CIS New India Cancer Guard-1.pdf', '756642843_Claim_Form Health Indurance.pdf', '768315481_Proposal Form New India Cancer Guard-1.pdf', '518214865_Rules and Regulations of New India Assurance Cancer Guard Policy.pdf', 1),
(3, 'Health Insurance', 'NEW INDIA MEDICLAIM POLICY', '483347100_Customer Information Sheet New India Mediclaim Policy 21012020.pdf', '946391333_Claim_Form Health Indurance.pdf', '854628775_Proposal Form New India Mediclaim Policy 21012020.pdf', '347471572_Rules and Regulations of New India Mediclaim Policy.pdf', 1),
(4, 'Health Insurance', 'NEW INDIA FLOTER MEDICLAIM POLICY', '459397887_Customer Information Sheet New India Floater Mediclaim Policy 21012020_1.pdf', '467875179_Claim_Form Health Indurance.pdf', '823698676_Proposal Form New India Floater Mediclaim policy 21012020_1.pdf', '977270233_Rules and Regulations of Family Floter Policy.pdf', 1),
(5, 'Health Insurance', 'NEW INDIA TOPUP MEDICLAIM POLICY', '687206741_Details of NEW INDIA TOPUP MEDICLAIM POLICY.pdf', '892972032_Claim_Form Health Indurance.pdf', '716481961_topup-Proposal_Form.pdf', '776445919_Rules and Regulations of Top up Policy.pdf', 1),
(6, 'Health Insurance', 'ASHA KIRAN POLICY', '304794576_New_India_Asha_Kiran_Policy.pdf', '866038320_Claim_Form Health Indurance.pdf', '875667112_Proposal-Form04032014.pdf', '843423721_Rules and Regulations of Asha Kiran Policy.pdf', 1),
(7, 'Health Insurance', 'SIXTY PLUS MEDICLAIM POLICY', '989259359_Senior_Citizen_Policy.pdf', '718070699_Claim_Form Health Indurance.pdf', '299397251_Proposal Form New India Sixty Plus Mediclaim Policy.pdf', '632998680_Rules and Regulations of Sixty Plus Mediclaim Policy.pdf', 1),
(8, 'Health Insurance', 'JANATA MEDICLAIM POLICY', '763275295_Janata_Mediclaim_Policy.pdf', '344530163_Claim_Form Health Indurance.pdf', '132927204_new-india-janata-mediclaim-insurance-proposal-form.pdf', '813707637_Rules and Regulations of Janata Mediclaim Policy.pdf', 1),
(9, 'Health Insurance', 'STANDARD GROUP MEDICLAIM POLICY', '462104571_Highlights of STANDARD GROUP MEDICLAIM POLICY.pdf', '663712485_Claim_Form Health Indurance.pdf', '908524899_Proposal Form of STANDARD GROUP MEDICLAIM POLICY.pdf', '694298391_Rules and Regulations of Health Insurance.pdf', 1),
(10, 'Motor Insurance', 'FOUR WHELLER', '113761090_motor details.pdf', '957710552_Claim_Form_090307_Motor.pdf', '547314447_new-india-motor-insurance-proposal-form.pdf', '780493792_Rules and Regulations of Motor Insurance.pdf', 1),
(11, 'Motor Insurance', 'TWO WHELLER', '872063744_motor details.pdf', '310268658_Claim_Form_090307_Motor.pdf', '606369698_new-india-motor-insurance-proposal-form.pdf', '849209329_Rules and Regulations of Motor Insurance.pdf', 1),
(12, 'Motor Insurance', 'THREE WHELLER', '827310991_motor details.pdf', '871301846_Claim_Form_090307_Motor.pdf', '871363224_new-india-motor-insurance-proposal-form.pdf', '349946835_Rules and Regulations of Motor Insurance.pdf', 1),
(13, 'Motor Insurance', 'PRIVATE AND PUBLIC VEHICLE', '458035744_motor details.pdf', '899576130_Claim_Form_090307_Motor.pdf', '832506210_new-india-motor-insurance-proposal-form.pdf', '287073628_Rules and Regulations of Motor Insurance.pdf', 1),
(14, 'Miscellaneous', 'PERSONAL ACCIDENT POLICY', '669337981_Personal Accedent detaills.pdf', '459737119_claim form-personal accident.pdf', '716072164_new-india-individual-personal-accident-insurance-proposal-form.pdf', '738445677_Rules And regulation of Personal Accident Policy.pdf', 1),
(15, 'Miscellaneous', 'RASTHA APPATTI POLICY', 'DETAILS2', '', '', '', 0),
(16, 'Miscellaneous', 'NEW INDIA GRIHA SUVIDHA POLICY', '273211733_Griha subidha policy details.pdf', '726916289_NEW INDIA GRIHA SUVIDHA CLAIM FORM.pdf', '140115622_Proposal Form of Griha Subidha Policy.pdf', '902260601_Griha subidha policy rules.pdf', 1),
(17, 'Miscellaneous', 'FIRE', '546115633_Fire Highlights.pdf', '427305774_claim form-fire.pdf', '152551675_new-india-standard-fire-and-special-perils-policy-proposal-form.pdf', '523350986_Rules and Regulations of Fire Insurance.pdf', 1),
(18, 'Miscellaneous', 'TRAVEL POLICY', 'DETAIL5', '', '', '', 0),
(19, 'Miscellaneous', 'MARINE POLICY', 'DETAIL6', '', '', '', 0),
(20, 'Miscellaneous', 'SHOPKEEPERS POLICY', 'DETAIL7', '', '', '', 0),
(21, 'Miscellaneous', 'JEWELLER\'S POLICY', 'DETAILS8', '', '', '', 0),
(22, 'Miscellaneous', 'ENGINEERING POLICY', 'DETAIL9', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `Rule_Id` int(11) NOT NULL,
  `Insurance_Name` varchar(2000) NOT NULL,
  `Policy_Name` varchar(2000) NOT NULL,
  `Rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_document`
--

CREATE TABLE `user_document` (
  `Users_Id` int(11) NOT NULL,
  `User_Name` varchar(2000) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_Contact` int(11) NOT NULL,
  `User_Address` varchar(2000) NOT NULL,
  `User_Age` int(11) NOT NULL,
  `User_Image` varchar(2000) NOT NULL,
  `User_Pancard` varchar(2000) NOT NULL,
  `User_Form` varchar(2000) NOT NULL,
  `Address_Proof` varchar(2000) NOT NULL,
  `Age_Proof` varchar(2000) NOT NULL,
  `Policy_Name` varchar(2000) NOT NULL,
  `Insurance_Name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_Id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_Id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`Form_Id`);

--
-- Indexes for table `insurance_types`
--
ALTER TABLE `insurance_types`
  ADD PRIMARY KEY (`Insurance_Id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`Policy_Id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`Rule_Id`);

--
-- Indexes for table `user_document`
--
ALTER TABLE `user_document`
  ADD PRIMARY KEY (`Users_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `Form_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_types`
--
ALTER TABLE `insurance_types`
  MODIFY `Insurance_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `Policy_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `Rule_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_document`
--
ALTER TABLE `user_document`
  MODIFY `Users_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
