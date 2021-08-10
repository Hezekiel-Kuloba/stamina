
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `header` (
  `header_id` int(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `header` (`header_id`, `logo`, `favicon`, `phone_number`, `twitter`, `facebook`, `instagram`) VALUES
(1, 
'logo.png', 
'favicon.png',
'0712345678',
'twitter',
'facebook',
'instagram');

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


INSERT INTO `home` (`home_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `image1`, `image1_text1`, `image1_text2`, `image2`, `image2_text1`, `image2_text2`, `image3`, `image3_text1`, `image3_text2`,`clients`, `client_image`, `client_name`, `client_text`, `client1_image`, `client1_name`, `client1_text`, `client2_image`, `client2_name`, `client2_text`, `discount_banner_image`, `discount_banner_text1`, `discount_banner_text2`, `discount_banner_text3`, `discount_banner_text4`, `discount_banner_text5` ) VALUES
(2, 
'img_bg_2.jpg', 
'Make it a lifestyle, not a duty',
'Free html5 templates Made by ',
'freehtmlco',
'dumbbell.svg',
'Weight Lifting',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
								provident. Odit ab aliquam dolor eius',
'exercise.svg',
'Running',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
								provident. Odit ab aliquam dolor eius',
'yoga-carpet.svg',
'Yoga',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
								provident. Odit ab aliquam dolor eius',
'Clients Comments',
'person3.jpg',
'Jean Doe',
'Far far away, behind the word mountains, far from the countries
												Vokalia and Consonantia, there live the blind texts. Separated they live
												in Bookmarksgrove right at the coast of the Semantics, a large language
												ocean',
'person3.jpg',
'Jean Doe',
'Far far away, behind the word mountains, far from the countries
												Vokalia and Consonantia, there live the blind texts. Separated they live
												in Bookmarksgrove right at the coast of the Semantics, a large language
												ocean',
'person3.jpg',
'Jean Doe',
'Far far away, behind the word mountains, far from the countries
												Vokalia and Consonantia, there live the blind texts. Separated they live
												in Bookmarksgrove right at the coast of the Semantics, a large language
												ocean',
'img_bg_3.jpg',                       
'Fitness Classes this Summer',
'Pay Now and ',
' Get ',
'35%',
' Discount'
);


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

INSERT INTO `sunday_schedule` (`sunday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

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

INSERT INTO `monday_schedule` (`monday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

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

INSERT INTO `tuesday_schedule` (`tuesday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

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

INSERT INTO `wednesday_schedule` (`wednesday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

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

INSERT INTO `thursday_schedule` (`thursday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

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

INSERT INTO `friday_schedule` (`friday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

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

INSERT INTO `saturday_schedule` (`saturday_schedule_id`, `image1`, `time1`, `class1`, `name1`, `image2`, `time2`, `class2`, `name2`, `image3`, `time3`, `class3`, `name3`, `image4`, `time4`, `class4`, `name4`, `image5`, `time5`, `class5`, `name5`, `image6`, `time6`, `class6`, `name6`, `image7`, `time7`, `class7`, `name7`, `image8`, `time8`, `class8`, `name8` ) VALUES
(1,
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams',
'exercise.svg',
'7:00 AM - 8AM',
'Cardio',
'Angel Adams'
);

CREATE TABLE `trainer` (
`trainer_id` int(10) NOT NULL,
`trainer1_image` varchar(255) NOT NULL,
`trainer1_name` text NOT NULL,
`trainer1_skill` text NOT NULL,
`about_me` text NOT NULL,
`aboutme_paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `trainer` (`trainer_id`, `trainer1_image`, `trainer1_name`, `trainer1_skill`, `about_me`, `aboutme_paragraph` )
VALUES (
1,
'trainer-1.jpg',
'Angel Adams',
'Body Building Expert',
'About me',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.'
);

CREATE TABLE `trainer_common` (
`trainer_common_id` int(10) NOT NULL,
`background_image` varchar(255) NOT NULL,
`backgroundimage_text1` text NOT NULL,
`text1` text NOT NULL,
`text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `trainer_common` (`trainer_common_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2` )
VALUES (
1,
'img_bg_2.jpg',
'Fitness Trainer',
'Fitness Expert',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.'
);

CREATE TABLE `blog` (
`blog_id` int(10) NOT NULL,
`blog_image` varchar(255) NOT NULL,
`blog_date` varchar(255) NOT NULL,
`blog_title` text NOT NULL,
`blog_paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `blog` (`blog_id`, `blog_image`, `blog_date`, `blog_title`, `blog_paragraph`)
VALUES (
1,
'trainer-1.jpg',
'Tuesday August 10th',
'Body Building Expert',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.'
);

CREATE TABLE `blog_common` (
`blog_common_id` int(10) NOT NULL,
`background_image` varchar(255) NOT NULL,
`backgroundimage_text1` text NOT NULL,
`text1` text NOT NULL,
`text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `blog_common` (`blog_common_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2` )
VALUES (
1,
'img_bg_2.jpg',
'Fitness Trainer',
'Read Our Blog',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.'
);

CREATE TABLE `gallery` (
`gallery_id` int(10) NOT NULL,
`image1` varchar(255) NOT NULL,
`image1_text1` text NOT NULL,
`image1_text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gallery` (`gallery_id`, `image1`, `image1_text1`, `image1_text2` )
VALUES (
1,
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice'
);

CREATE TABLE `pricing`(
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

INSERT INTO `pricing` (`pricing_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `text1`, `text2`, `starter_text1`, `starter_text2`, `starter_text3`, `starter_text4`, `starter_text5`, `starter_text6`, `starter_text7`, `starter_text8`, `starter_text9`, `starter_text10`, `basic_text1`, `basic_text2`, `basic_text3`, `basic_text4`, `basic_text5`, `basic_text6`, `basic_text7`, `basic_text8`, `basic_text9`, `basic_text10`, `pro_text1`, `pro_text2`, `pro_text3`, `pro_text4`, `pro_text5`, `pro_text6`, `pro_text7`, `pro_text8`, `pro_text9`, `pro_text10`, `unlimited_text1`, `unlimited_text2`, `unlimited_text3`, `unlimited_text4`, `unlimited_text5`, `unlimited_text6`, `unlimited_text7`, `unlimited_text8`, `unlimited_text9`, `unlimited_text10` )
VALUES (
1,
'img_bg_2.jpg',
'Gallery',
'Free html5 templates Made by ',
'freehtml5.co',
'Pricing Plan',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.',
'Starter_',
'9000',
'/month',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'Basic',
'9000',
'/month',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'Pro',
'9000',
'/month',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'Unlimited',
'9000',
'/month',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes',
'15 Body Building Classes'
);

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

INSERT INTO `contact` (`contact_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `text1`, `text2`, `text3`)
VALUES (
1,
'img_bg_2.jpg',
'Contact Us',
'Free html5 templates Made by ',
'freehtml5.co',
'198 West 21th Street, Suite 721 New York NY 10016',
'0712345678',
'walumbehezzy@gmail.com'
);
CREATE TABLE `schedule` (
`schedule_id` int(10) NOT NULL,
`background_image` varchar(255) NOT NULL,
`backgroundimage_text1` text NOT NULL,
`text1` text NOT NULL, 
`text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `schedule` (`schedule_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2`)
VALUES (
1,
'img_bg_2.jpg',
'Contact Us',
'Free html5 templates Made by ',
'freehtml5.co'
);
CREATE TABLE `courses` (
`courses_id` int(10) NOT NULL,
`background_image` varchar(255) NOT NULL,
`backgroundimage_text1` text NOT NULL,
`text1` text NOT NULL, 
`text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `courses` (`courses_id`, `background_image`, `backgroundimage_text1`, `text1`, `text2`)
VALUES (
1,
'img_bg_2.jpg',
'Contact Us',
'Free html5 templates Made by ',
'freehtml5.co'
);

CREATE TABLE `footer` (
`footer_id` int(10) NOT NULL,
`footer_image` varchar(255) NOT NULL,
`text1` text NOT NULL,
`text2` text NOT NULL,
`text3` text NOT NULL,
`copyright_text` varchar(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `footer`( `footer_id`, `footer_image`, `text1`, `text2`, `copyright_text` )
VALUES (
1,
'img_bg_1.jpg',
'A Little About Stamina.',
'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.',
'copyright_text'
);

CREATE TABLE `social` (
`social_id` int(10) NOT NULL,
`facebook` varchar(255) NOT NULL,
`twitter` varchar(255) NOT NULL,
`instagram` varchar(255) NOT NULL,
`whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `social` ( `social_id`, `facebook`, `twitter`, `instagram`, `whatsapp` )
VALUES (
1,
'lorem1',
'lorem2',
'lorem3',
'lorem4'
);

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

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
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
(4, 'Hammad', 'wonk.xags@gmail.com', '49857243857', 'e10adc3949ba59abbe56e057f20f883e', '34d03a29d49aaba635ad6efee22c4d30', '2018-04-21 02:40:10', '1524264010');


ALTER TABLE `header`
  ADD PRIMARY KEY (`header_id`);

ALTER TABLE `header`
  MODIFY `header_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

ALTER TABLE `home`
  MODIFY `home_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `sunday_schedule`
  ADD PRIMARY KEY (`sunday_schedule_id`);


ALTER TABLE `sunday_schedule`
  MODIFY `sunday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `monday_schedule`
  ADD PRIMARY KEY (`monday_schedule_id`);


ALTER TABLE `monday_schedule`
  MODIFY `monday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `tuesday_schedule`
  ADD PRIMARY KEY (`tuesday_schedule_id`);


ALTER TABLE `tuesday_schedule`
  MODIFY `tuesday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `wednesday_schedule`
  ADD PRIMARY KEY (`wednesday_schedule_id`);


ALTER TABLE `wednesday_schedule`
  MODIFY `wednesday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `thursday_schedule`
  ADD PRIMARY KEY (`thursday_schedule_id`);


ALTER TABLE `thursday_schedule`
  MODIFY `thursday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `friday_schedule`
  ADD PRIMARY KEY (`friday_schedule_id`);


ALTER TABLE `friday_schedule`
  MODIFY `friday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `saturday_schedule`
  ADD PRIMARY KEY (`saturday_schedule_id`);


ALTER TABLE `saturday_schedule`
  MODIFY `saturday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);


ALTER TABLE `trainer`
  MODIFY `trainer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `trainer_common`
  ADD PRIMARY KEY (`trainer_common_id`);


ALTER TABLE `trainer_common`
  MODIFY `trainer_common_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);


ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `blog_common`
  ADD PRIMARY KEY (`blog_common_id`);


ALTER TABLE `blog_common`
  MODIFY `blog_common_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

ALTER TABLE `gallery`
  MODIFY `gallery_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_id`);

ALTER TABLE `pricing`
  MODIFY `pricing_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

ALTER TABLE `schedule`
  MODIFY `schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

ALTER TABLE `courses`
  MODIFY `courses_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

ALTER TABLE `footer`
  MODIFY `footer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

ALTER TABLE `social`
  MODIFY `social_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
