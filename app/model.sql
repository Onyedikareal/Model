-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 20, 2017 at 03:25 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `model`
--

-- --------------------------------------------------------

--
-- Table structure for table `ivy_blog`
--

CREATE TABLE `ivy_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `post` text NOT NULL,
  `comments` int(11) NOT NULL,
  `react` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ivy_contact`
--

CREATE TABLE `ivy_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `cont_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ivy_event`
--

CREATE TABLE `ivy_event` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(150) NOT NULL,
  `event_desc` text NOT NULL,
  `image_path` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ivy_gallery`
--

CREATE TABLE `ivy_gallery` (
  `id` int(11) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ivy_blog`
--
ALTER TABLE `ivy_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivy_contact`
--
ALTER TABLE `ivy_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivy_event`
--
ALTER TABLE `ivy_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivy_gallery`
--
ALTER TABLE `ivy_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ivy_blog`
--
ALTER TABLE `ivy_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ivy_contact`
--
ALTER TABLE `ivy_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ivy_event`
--
ALTER TABLE `ivy_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ivy_gallery`
--
ALTER TABLE `ivy_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
