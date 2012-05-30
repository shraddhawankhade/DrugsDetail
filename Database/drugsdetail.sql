-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 05, 2012 at 04:56 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `drugsdetail`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `drugsrequest`
-- 

CREATE TABLE `drugsrequest` (
  `DateToday` date default NULL,
  `DoctorsName` varchar(500) default NULL,
  `Address` varchar(500) default NULL,
  `Phone` bigint(20) default NULL,
  `Fax` bigint(20) default NULL,
  `Email` varchar(500) default NULL,
  `RxDate` date default NULL,
  `RxNumber` bigint(20) default NULL,
  `DrugName` varchar(500) default NULL,
  `DrugStrength` varchar(500) default NULL,
  `Dosage` varchar(500) default NULL,
  `Quantity` bigint(20) default NULL,
  `DaySupply` varchar(500) default NULL,
  `AmountPaid` bigint(20) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `drugsrequest`
-- 

INSERT INTO `drugsrequest` (`DateToday`, `DoctorsName`, `Address`, `Phone`, `Fax`, `Email`, `RxDate`, `RxNumber`, `DrugName`, `DrugStrength`, `Dosage`, `Quantity`, `DaySupply`, `AmountPaid`) VALUES 
('2012-02-24', 'Dr. kevin', 'Pune', 567367, 5867878, 'kevin@gmail.com', '2012-02-24', 3348398, 'chestcold', '1 mg', '2', 5, '10', 500),
('2012-02-14', 'Dr. kevin', 'Pune', 332424234, 455687987, 'kevin@gmail.com', '2012-02-14', 3348398, 'chestcold', '1 mg', '5', 10, '10', 100),
('2012-02-14', 'Dr. James', 'Pune', 785748765, 423656543, 'james@gmail.com', '2012-02-14', 5698797, 'chestcold', '1 mg', '5', 10, '10', 100),
('2012-02-07', 'Dr. James', 'Pune', 456567676, 455687987, 'james@gmail.com', '2012-02-07', 6575, 'chestcold', '1 mg', '7', 15, '10', 100),
('2012-02-27', 'Dr. John', 'Pune', 4322445345, 423656543, 'john@gmail.com', '2012-02-27', 3348398, 'chestcold', '1 mg', '5', 15, '45', 500),
('2012-02-15', 'Dr. John', 'Pune', 332424234, 384702984, 'john@gmail.com', '2012-02-15', 45868768, 'chestcold', '1 mg', '5', 10, '10', 100),
('2012-02-27', 'Dr. John', 'Pune', 4322445345, 423656543, 'john@gmail.com', '2012-02-27', 3348398, 'chestcold', '1 mg', '2', 10, '23', 500),
('2012-02-23', 'Dr. James', 'Pune', 56785454, 738287698, 'james@gmail.com', '2012-02-23', 6575, 'chestcold', '1 mg', '5', 15, '45', 100),
('2012-03-01', 'Dr. kevin', 'Pune', 4322445345, 423656543, 'kevin@gmail.com', '2012-03-01', 3348398, 'chestcold', '1 mg', '5', 15, '10', 100),
('2012-03-05', 'Dr. kevin', 'Pune', 4322445345, 5867878, 'kevin@gmail.com', '2012-03-05', 5698797, 'chestcold', '1 mg', '5', 15, '10', 500),
('2012-02-27', 'Dr. kevin', 'Pune', 56785454, 423656543, 'kevin@gmail.com', '2012-02-27', 382, 'chestcold', '1 mg', '5', 6, '10', 500),
('2012-02-14', 'Dr. kevin', 'Pune', 4654766, 9, 'kevin@gmail.com', '2012-02-14', 5698797, 'chestcold', '1 mg', '5', 15, '10', 500);

-- --------------------------------------------------------

-- 
-- Table structure for table `questionnaire`
-- 

CREATE TABLE `questionnaire` (
  `Date` date default NULL,
  `UserName` varchar(500) default NULL,
  `BodyFrame` varchar(200) default NULL,
  `BodyWeight` varchar(200) default NULL,
  `Eyes` varchar(200) default NULL,
  `Nose` varchar(200) default NULL,
  `Lips` varchar(200) default NULL,
  `Cheeks` varchar(200) default NULL,
  `Teeth` varchar(200) default NULL,
  `Skin` varchar(200) default NULL,
  `Hair` varchar(200) default NULL,
  `Nails` varchar(200) default NULL,
  `Neck` varchar(200) default NULL,
  `Chest` varchar(200) default NULL,
  `Belly` varchar(200) default NULL,
  `Hips` varchar(200) default NULL,
  `Joints` varchar(200) default NULL,
  `Appetite` varchar(200) default NULL,
  `Thirst` varchar(200) default NULL,
  `Digestion` varchar(200) default NULL,
  `Elimination` varchar(200) default NULL,
  `PhysicalActivity` varchar(200) default NULL,
  `MentalActivity` varchar(200) default NULL,
  `Emotions` varchar(200) default NULL,
  `Faith` varchar(200) default NULL,
  `Intellect` varchar(200) default NULL,
  `Memory` varchar(200) default NULL,
  `Dreams` varchar(200) default NULL,
  `Sleep` varchar(200) default NULL,
  `Speech` varchar(200) default NULL,
  `Finances` varchar(200) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `questionnaire`
-- 

INSERT INTO `questionnaire` (`Date`, `UserName`, `BodyFrame`, `BodyWeight`, `Eyes`, `Nose`, `Lips`, `Cheeks`, `Teeth`, `Skin`, `Hair`, `Nails`, `Neck`, `Chest`, `Belly`, `Hips`, `Joints`, `Appetite`, `Thirst`, `Digestion`, `Elimination`, `PhysicalActivity`, `MentalActivity`, `Emotions`, `Faith`, `Intellect`, `Memory`, `Dreams`, `Sleep`, `Speech`, `Finances`) VALUES 
('2012-02-29', 'kevinyank', 'Slim', 'Slim', 'Sharp,Sensitive', 'LongPointed', 'RedInflamed', 'SmoothFlat', 'WhiteStrongGums', 'WarmRosyOily', 'StraightOilyBald', 'SharpFlexiblePink', 'Medium', 'Medium', 'Medium', 'Heavy', 'Medium', 'StrongUnbearable', 'Surplus', 'QuickBurning', 'ThickSluggish', 'Moderate', 'Moderate', 'AngerJealousy', 'Extremist', 'AccurateSharp', 'SlowAndSustained', 'Violent', 'LittleSound', 'SharpPenetrating', 'SpendsOnLuxuries'),
('2012-03-01', 'kevinyank', 'Large', 'Large', 'Sharp,Sensitive', 'LongPointed', 'RedInflamed', 'SmoothFlat', 'TenderGums', 'WarmRosyOily', 'StraightOilyBald', 'SharpFlexiblePink', 'Medium', 'Medium', 'Medium', 'Medium', 'Medium', 'StrongUnbearable', 'Surplus', 'QuickBurning', 'LooseStools', 'Moderate', 'Moderate', 'AngerJealousy', 'Consistent', 'AccurateSharp', 'Distinct', 'Violent', 'LittleSound', 'SharpPenetrating', 'SpendsOnLuxuries'),
('2012-03-01', 'johnsmith', 'Slim', 'Slim', 'Sharp,Sensitive', 'LongPointed', 'RedInflamed', 'SmoothFlat', 'TenderGums', 'WarmRosyOily', 'StraightOilyBald', 'SharpFlexiblePink', 'Medium', 'Medium', 'Medium', 'Medium', 'Medium', 'StrongUnbearable', 'Surplus', 'QuickBurning', 'LooseStools', 'Moderate', 'Moderate', 'AngerJealousy', 'Extremist', 'AccurateSharp', 'Distinct', 'Romantic', 'ProlongedDeep', 'SlowMonotonous', 'SavesMoney'),
('2012-03-05', 'kevinyank', 'Medium', 'Low', 'Sharp,Sensitive', 'LongPointed', 'SmoothOily', 'SmoothFlat', 'TenderGums', 'WarmRosyOily', 'StraightOilyBald', 'SharpFlexiblePink', 'Medium', 'Medium', 'Medium', 'Medium', 'Medium', 'StrongUnbearable', 'Surplus', 'QuickBurning', 'ThickSluggish', 'Moderate', 'Slow', 'AngerJealousy', 'Extremist', 'AccurateSharp', 'SlowAndSustained', 'Romantic', 'LittleSound', 'SharpPenetrating', 'SpendsOnLuxuries');

-- --------------------------------------------------------

-- 
-- Table structure for table `userregistration`
-- 

CREATE TABLE `userregistration` (
  `UserName` varchar(500) NOT NULL,
  `FirstName` varchar(500) default NULL,
  `LastName` varchar(500) default NULL,
  `Gender` varchar(50) default NULL,
  `Password` varchar(500) default NULL,
  `Status` varchar(50) default NULL,
  PRIMARY KEY  (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `userregistration`
-- 

INSERT INTO `userregistration` (`UserName`, `FirstName`, `LastName`, `Gender`, `Password`, `Status`) VALUES 
('jacobsmith', 'jacob', 'smith', 'Male', 'jacob', 'Admin'),
('johnsmith', 'john', 'smith', 'Male', 'john', 'User'),
('kevinyank', 'kevin', 'yank', 'Male', 'kevin', 'User'),
('tomcruise', 'Tom', 'cruise', 'Male', 'tom', 'User');

