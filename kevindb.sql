-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 03:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kevindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_date` varchar(255) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_image`, `blog_date`, `blog_title`, `blog_paragraph`) VALUES
(2, 'product-featured-2.jpg', 'August 20 2021', 'Body Building ', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 16px;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</span><br></p>'),
(3, 'product-featured-3.jpg', 'August 20 2021', 'Body Building ', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 16px;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `blog_common`
--

CREATE TABLE `blog_common` (
  `blog_common_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_common`
--

INSERT INTO `blog_common` (`blog_common_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2`) VALUES
(1, 'img_bg_2.jpg', 'Fitness Trainer', 'Read Our Blog', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `backgroundimage_text2` text NOT NULL,
  `backgroundimage_text3` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `text1`, `text2`, `text3`) VALUES
(1, 'background_image.jpg', 'Contact Us', 'Free html5 templates Made by ', 'freehtml5.co', '198 West 21th Street, Suite 721 New York NY 10016', '0712345678', 'walumbehezzy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courses_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2`) VALUES
(1, 'img_bg_2.jpg', 'Contact Us', 'Free html5 templates Made by ', 'freehtml5.co');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(10) NOT NULL,
  `footer_image` varchar(255) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `copyright_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_image`, `text1`, `text2`, `text3`, `copyright_text`) VALUES
(1, 'footer_image.jpg', 'A Little About Stamina.', 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.', '', 'copyright_text');

-- --------------------------------------------------------

--
-- Table structure for table `friday_schedule`
--

CREATE TABLE `friday_schedule` (
  `friday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friday_schedule`
--

INSERT INTO `friday_schedule` (`friday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image1_text1` text NOT NULL,
  `image1_text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image1`, `image1_text1`, `image1_text2`) VALUES
(2, 'product-featured-2.jpg', 'Weight Lifting', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</span><br></p>'),
(3, 'product-featured-3.jpg', 'Weight Lifting', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</span><br></p>'),
(4, 'product-featured-4.jpg', 'Weight Lifting', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</span><br></p>'),
(5, 'product-featured-5.jpg', 'Weight Lifting', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</span><br></p>'),
(6, 'product-featured-6.jpg', 'Weight Lifting', '<p><span style=\"color: white; font-family: \"Work Sans\", Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `header_id` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`header_id`, `logo`, `favicon`, `phone_number`, `twitter`, `facebook`, `instagram`) VALUES
(1, 'logo.png', 'favicon.png', '0712345678', 'twitter', 'facebook', 'instagram');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `backgroundimage_text2` text NOT NULL,
  `backgroundimage_text3` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image1_text1` text NOT NULL,
  `image1_text2` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image2_text1` text NOT NULL,
  `image2_text2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image3_text1` text NOT NULL,
  `image3_text2` text NOT NULL,
  `clients` text NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `client_name` text NOT NULL,
  `client_text` text NOT NULL,
  `client1_image` varchar(255) NOT NULL,
  `client1_name` text NOT NULL,
  `client1_text` text NOT NULL,
  `client2_image` varchar(255) NOT NULL,
  `client2_name` text NOT NULL,
  `client2_text` text NOT NULL,
  `discount_banner_image` varchar(255) NOT NULL,
  `discount_banner_text1` text NOT NULL,
  `discount_banner_text2` text NOT NULL,
  `discount_banner_text3` text NOT NULL,
  `discount_banner_text4` varchar(255) NOT NULL,
  `discount_banner_text5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `image1`, `image1_text1`, `image1_text2`, `image2`, `image2_text1`, `image2_text2`, `image3`, `image3_text1`, `image3_text2`, `clients`, `client_image`, `client_name`, `client_text`, `client1_image`, `client1_name`, `client1_text`, `client2_image`, `client2_name`, `client2_text`, `discount_banner_image`, `discount_banner_text1`, `discount_banner_text2`, `discount_banner_text3`, `discount_banner_text4`, `discount_banner_text5`) VALUES
(2, 'background_image.jpg', 'Make it a lifestyle, not a duty', 'Free html5 templates Made by ', 'freehtmlco', 'dumbbell.svg', 'Weight Lifting', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem\n								provident. Odit ab aliquam dolor eius', 'exercise.svg', 'Running', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem\n								provident. Odit ab aliquam dolor eius', 'yoga-carpet.svg', 'Yoga', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem\n								provident. Odit ab aliquam dolor eius', 'Clients Comments', 'client_image.jpg', 'Jean Doe', 'Far far away, behind the word mountains, far from the countries\n												Vokalia and Consonantia, there live the blind texts. Separated they live\n												in Bookmarksgrove right at the coast of the Semantics, a large language\n												ocean', 'client1_image.jpg', 'Jean Doe', 'Far far away, behind the word mountains, far from the countries\n												Vokalia and Consonantia, there live the blind texts. Separated they live\n												in Bookmarksgrove right at the coast of the Semantics, a large language\n												ocean', 'client2_image.jpg', 'Jean Doe', 'Far far away, behind the word mountains, far from the countries\n												Vokalia and Consonantia, there live the blind texts. Separated they live\n												in Bookmarksgrove right at the coast of the Semantics, a large language\n												ocean', 'discount_banner_image.jpg', 'Fitness Classes this Summer', 'Pay Now and ', ' Get ', '35%', ' Discount');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `order_number` varchar(254) NOT NULL,
  `customer` varchar(254) NOT NULL,
  `amount` varchar(254) NOT NULL,
  `phone` varchar(254) NOT NULL,
  `status` varchar(254) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `order_number`, `customer`, `amount`, `phone`, `status`, `date`) VALUES
(1, 'Ericobanks-20210424085005', 'Ericobanks', '10700', '254700711233', 'Unpaid', '2021-04-24 08:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `monday_schedule`
--

CREATE TABLE `monday_schedule` (
  `monday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monday_schedule`
--

INSERT INTO `monday_schedule` (`monday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricing_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `backgroundimage_text2` text NOT NULL,
  `backgroundimage_text3` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `starter_text1` text NOT NULL,
  `starter_text2` text NOT NULL,
  `starter_text3` text NOT NULL,
  `starter_text4` text NOT NULL,
  `starter_text5` text NOT NULL,
  `starter_text6` text NOT NULL,
  `starter_text7` text NOT NULL,
  `starter_text8` text NOT NULL,
  `starter_text9` text NOT NULL,
  `starter_text10` text NOT NULL,
  `basic_text1` text NOT NULL,
  `basic_text2` text NOT NULL,
  `basic_text3` text NOT NULL,
  `basic_text4` text NOT NULL,
  `basic_text5` text NOT NULL,
  `basic_text6` text NOT NULL,
  `basic_text7` text NOT NULL,
  `basic_text8` text NOT NULL,
  `basic_text9` text NOT NULL,
  `basic_text10` text NOT NULL,
  `pro_text1` text NOT NULL,
  `pro_text2` text NOT NULL,
  `pro_text3` text NOT NULL,
  `pro_text4` text NOT NULL,
  `pro_text5` text NOT NULL,
  `pro_text6` text NOT NULL,
  `pro_text7` text NOT NULL,
  `pro_text8` text NOT NULL,
  `pro_text9` text NOT NULL,
  `pro_text10` text NOT NULL,
  `unlimited_text1` text NOT NULL,
  `unlimited_text2` text NOT NULL,
  `unlimited_text3` text NOT NULL,
  `unlimited_text4` text NOT NULL,
  `unlimited_text5` text NOT NULL,
  `unlimited_text6` text NOT NULL,
  `unlimited_text7` text NOT NULL,
  `unlimited_text8` text NOT NULL,
  `unlimited_text9` text NOT NULL,
  `unlimited_text10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricing_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `text1`, `text2`, `starter_text1`, `starter_text2`, `starter_text3`, `starter_text4`, `starter_text5`, `starter_text6`, `starter_text7`, `starter_text8`, `starter_text9`, `starter_text10`, `basic_text1`, `basic_text2`, `basic_text3`, `basic_text4`, `basic_text5`, `basic_text6`, `basic_text7`, `basic_text8`, `basic_text9`, `basic_text10`, `pro_text1`, `pro_text2`, `pro_text3`, `pro_text4`, `pro_text5`, `pro_text6`, `pro_text7`, `pro_text8`, `pro_text9`, `pro_text10`, `unlimited_text1`, `unlimited_text2`, `unlimited_text3`, `unlimited_text4`, `unlimited_text5`, `unlimited_text6`, `unlimited_text7`, `unlimited_text8`, `unlimited_text9`, `unlimited_text10`) VALUES
(1, 'background_image.jpg', 'Gallery', 'Free html5 templates Made by ', 'freehtml5.co', 'Pricing Plan', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.', 'Starter_', '9000', '/month', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', 'Basic', '9000', '/month', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', 'Pro', '9000', '/month', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', 'Unlimited', '9000', '/month', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes', '15 Body Building Classes');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `item` varchar(254) NOT NULL,
  `item_id` varchar(254) NOT NULL,
  `price` varchar(254) NOT NULL,
  `quantity` varchar(254) NOT NULL,
  `store` varchar(254) NOT NULL,
  `ordernumber` varchar(254) NOT NULL,
  `stage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `item`, `item_id`, `price`, `quantity`, `store`, `ordernumber`, `stage`) VALUES
(1, 'Shoe', '1', '2400', '1', 'Codestar Technologies', 'Ericobanks-20210424085005', 'pending'),
(2, 'Ladies sport shoes', '6', '1300', '1', 'Wasafi Stores', 'Makel-20210504123439', ''),
(3, 'Shoe', '2', '2300', '1', 'Codestar Technologies', 'Eric Kyalo-20210507142242', 'Unpaid'),
(4, 'Ladies sport shoes', '6', '1300', '1', 'Wasafi Stores', 'Eric Kyalo-20210507142242', 'Unpaid'),
(5, 'Dress', '4', '1500', '1', 'Codestar Technologies', 'Eric Codestar-20210507145506', 'Unpaid'),
(6, 'Ladies sport shoes', '6', '2600', '2', 'Wasafi Stores', 'Eric Codestar-20210507145506', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `saturday_schedule`
--

CREATE TABLE `saturday_schedule` (
  `saturday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saturday_schedule`
--

INSERT INTO `saturday_schedule` (`saturday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2`) VALUES
(1, 'background_image.jpg', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius..', 'Free html5 templates Made by ', 'freehtml5.co');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `social_id` int(10) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `facebook`, `twitter`, `instagram`, `whatsapp`) VALUES
(1, 'put facebook link', 'put twitter link', 'put instagram link', '');

-- --------------------------------------------------------

--
-- Table structure for table `stkpush`
--

CREATE TABLE `stkpush` (
  `id` int(11) NOT NULL,
  `merchantRequestID` varchar(254) NOT NULL,
  `checkoutRequestID` varchar(254) NOT NULL,
  `resultCode` varchar(254) NOT NULL,
  `resultDesc` varchar(254) NOT NULL,
  `amount` varchar(11) NOT NULL,
  `mpesaReceiptNumber` varchar(254) NOT NULL,
  `transactionDate` varchar(254) NOT NULL,
  `phoneNumber` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stkpush`
--

INSERT INTO `stkpush` (`id`, `merchantRequestID`, `checkoutRequestID`, `resultCode`, `resultDesc`, `amount`, `mpesaReceiptNumber`, `transactionDate`, `phoneNumber`) VALUES
(33, '73207-5138861-1', 'ws_CO_190420210211223885', '0', 'The service request is processed successfully.', '1', 'PDJ4Z0VD5A', '20210419021147', '254700711233'),
(34, '106626-297109-1', 'ws_CO_190420210213152994', '0', 'The service request is processed successfully.', '1', 'PDJ9Z0VBB1', '20210419021329', '254700711233'),
(35, '3118-27715562-1', 'ws_CO_190420210240121533', '0', 'The service request is processed successfully.', '1', 'PDJ5Z0WQ07', '20210419024025', '254700711233'),
(0, '22250-15592488-1', 'ws_CO_070520211722413639', '0', 'The service request is processed successfully.', '1', 'PE73OJNTHB', '20210507172318', '254700711233'),
(0, '14371-18050755-1', 'ws_CO_070520211755088373', '0', 'The service request is processed successfully.', '1', 'PE72OLRHYE', '20210507175536', '254700711233');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `store` varchar(254) NOT NULL,
  `item` varchar(254) NOT NULL,
  `category` varchar(254) NOT NULL,
  `description` varchar(254) NOT NULL,
  `price` varchar(254) NOT NULL,
  `pic` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `store`, `item`, `category`, `description`, `price`, `pic`) VALUES
(1, 'Codestar Technologies', 'shoe', 'Men Sport', 'The best sport shoe for kenyan athletes', '2400', 'image4.jpg'),
(2, 'Codestar Technologies', 'Shoe', 'Women Sport', 'Best women sport shoes', '2300', 'image5.jpg'),
(3, 'Codestar Technologies', 'Shoe', 'Men sport shoe', 'The best shoe in africa', '4500', 'image6.jpg'),
(4, 'Codestar Technologies', 'Dress', 'women', 'Best dresses in kenya', '1500', 'image15.jpg'),
(5, 'Wasafi Stores', 'Ladies sport shoes', 'Fashion', 'Buy Sports Shoes for Women. ', '1200', 'image12.jpg'),
(6, 'Wasafi Stores', 'Ladies sport shoes', 'Fashion', 'Buy Sports Shoes for Women. ', '1300', 'image13.jpg'),
(7, 'Wasafi Stores', 'Ladies sport shoes', 'Fashion', 'Buy Sports Shoes for Women.', '1500', 'image14.jpg'),
(8, 'Wasafi Stores', 'Ladies sport shoes', 'Fashion', 'Buy Sports Shoes for Women.', '1700', 'image17.jpg'),
(9, '', 'mmm', ';;;', '...', '900', 'CLERE copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sunday_schedule`
--

CREATE TABLE `sunday_schedule` (
  `sunday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sunday_schedule`
--

INSERT INTO `sunday_schedule` (`sunday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`) VALUES
(1, 'Hezekiel Kuloba', 'walumbehezekiel@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'user-1.jpg', 'Super Admin', 'Active'),
(13, 'William Musyoki', 'williammusyoki@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'user-13.jpg', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_phone` varchar(50) NOT NULL,
  `cust_password` varchar(100) NOT NULL,
  `cust_token` varchar(255) NOT NULL,
  `cust_datetime` varchar(100) NOT NULL,
  `cust_timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_password`, `cust_token`, `cust_datetime`, `cust_timestamp`) VALUES
(4, 'Hammad', 'wonk.xags@gmail.com', '49857243857', 'e10adc3949ba59abbe56e057f20f883e', '34d03a29d49aaba635ad6efee22c4d30', '2018-04-21 02:40:10', '1524264010'),
(6, 'Hezekiel Kuloba', 'walumbehezekiel@gmail.com', '0712345678', 'dfc0aeb33f436ace795c94cf84a0066d', '9289dba1dd204b25ef52937633f96a0c', '2021-08-13 05:34:57', '1628861697'),
(7, 'Hezekiel Kuloba', 'walumbehezekiel@gmail.com', '0712345678', 'dfc0aeb33f436ace795c94cf84a0066d', 'bee5155999b53d0b9dc603780cce42f9', '2021-08-14 09:19:17', '1628918357');

-- --------------------------------------------------------

--
-- Table structure for table `thursday_schedule`
--

CREATE TABLE `thursday_schedule` (
  `thursday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thursday_schedule`
--

INSERT INTO `thursday_schedule` (`thursday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(10) NOT NULL,
  `trainer1_image` varchar(255) NOT NULL,
  `trainer1_name` text NOT NULL,
  `trainer1_skill` text NOT NULL,
  `about_me` text NOT NULL,
  `aboutme_paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer1_image`, `trainer1_name`, `trainer1_skill`, `about_me`, `aboutme_paragraph`) VALUES
(2, 'product-featured-2.jpg', 'Hezekiel Kuloba', 'Weight Liting', 'About Me', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius..</span><br></p>'),
(3, 'product-featured-3.jpg', 'Hezekiel Kuloba Walumbe', 'Weight Liting', 'About Me', '<p><span style=\"color: rgb(130, 130, 130); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 18px; text-align: center;\">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius..</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_common`
--

CREATE TABLE `trainer_common` (
  `trainer_common_id` int(10) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `backgroundimage_text1` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_common`
--

INSERT INTO `trainer_common` (`trainer_common_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2`) VALUES
(1, 'img_bg_2.jpg', 'Fitness Trainer', 'Fitness Expert', 'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday_schedule`
--

CREATE TABLE `tuesday_schedule` (
  `tuesday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuesday_schedule`
--

INSERT INTO `tuesday_schedule` (`tuesday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

-- --------------------------------------------------------

--
-- Table structure for table `wednesday_schedule`
--

CREATE TABLE `wednesday_schedule` (
  `wednesday_schedule_id` int(10) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `class1` text NOT NULL,
  `name1` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `class2` text NOT NULL,
  `name2` text NOT NULL,
  `image3` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `class3` text NOT NULL,
  `name3` text NOT NULL,
  `image4` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `class4` text NOT NULL,
  `name4` text NOT NULL,
  `image5` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `class5` text NOT NULL,
  `name5` text NOT NULL,
  `image6` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `class6` text NOT NULL,
  `name6` text NOT NULL,
  `image7` varchar(255) NOT NULL,
  `time7` varchar(255) NOT NULL,
  `class7` text NOT NULL,
  `name7` text NOT NULL,
  `image8` varchar(255) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `class8` text NOT NULL,
  `name8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesday_schedule`
--

INSERT INTO `wednesday_schedule` (`wednesday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8`) VALUES
(1, 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams', 'exercise.svg', '7:00 AM - 8AM', 'Cardio', 'Angel Adams');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_common`
--
ALTER TABLE `blog_common`
  ADD PRIMARY KEY (`blog_common_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `friday_schedule`
--
ALTER TABLE `friday_schedule`
  ADD PRIMARY KEY (`friday_schedule_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monday_schedule`
--
ALTER TABLE `monday_schedule`
  ADD PRIMARY KEY (`monday_schedule_id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saturday_schedule`
--
ALTER TABLE `saturday_schedule`
  ADD PRIMARY KEY (`saturday_schedule_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunday_schedule`
--
ALTER TABLE `sunday_schedule`
  ADD PRIMARY KEY (`sunday_schedule_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `thursday_schedule`
--
ALTER TABLE `thursday_schedule`
  ADD PRIMARY KEY (`thursday_schedule_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `trainer_common`
--
ALTER TABLE `trainer_common`
  ADD PRIMARY KEY (`trainer_common_id`);

--
-- Indexes for table `tuesday_schedule`
--
ALTER TABLE `tuesday_schedule`
  ADD PRIMARY KEY (`tuesday_schedule_id`);

--
-- Indexes for table `wednesday_schedule`
--
ALTER TABLE `wednesday_schedule`
  ADD PRIMARY KEY (`wednesday_schedule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_common`
--
ALTER TABLE `blog_common`
  MODIFY `blog_common_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `friday_schedule`
--
ALTER TABLE `friday_schedule`
  MODIFY `friday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `header_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monday_schedule`
--
ALTER TABLE `monday_schedule`
  MODIFY `monday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `pricing_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `saturday_schedule`
--
ALTER TABLE `saturday_schedule`
  MODIFY `saturday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sunday_schedule`
--
ALTER TABLE `sunday_schedule`
  MODIFY `sunday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thursday_schedule`
--
ALTER TABLE `thursday_schedule`
  MODIFY `thursday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainer_common`
--
ALTER TABLE `trainer_common`
  MODIFY `trainer_common_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tuesday_schedule`
--
ALTER TABLE `tuesday_schedule`
  MODIFY `tuesday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wednesday_schedule`
--
ALTER TABLE `wednesday_schedule`
  MODIFY `wednesday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
