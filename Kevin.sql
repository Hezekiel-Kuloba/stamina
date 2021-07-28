
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sunday_schedule` (`sunday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `monday_schedule` (`monday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tuesday_schedule` (`tuesday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `wednesday_schedule` (`wednesday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `thursday_schedule` (`thursday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `friday_schedule` (`friday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
  `1_image` varchar(255) NOT NULL,
  `1_time` varchar(255) NOT NULL,
  `1_class` text NOT NULL,
  `1_name` text NOT NULL,
  `2_image` varchar(255) NOT NULL,
  `2_time` varchar(255) NOT NULL,
  `2_class` text NOT NULL,
  `2_name` text NOT NULL,
  `3_image` varchar(255) NOT NULL,
  `3_time` varchar(255) NOT NULL,
  `3_class` text NOT NULL,
  `3_name` text NOT NULL,
  `4_image` varchar(255) NOT NULL,
  `4_time` varchar(255) NOT NULL,
  `4_class` text NOT NULL,
  `4_name` text NOT NULL,
  `5_image` varchar(255) NOT NULL,
  `5_time` varchar(255) NOT NULL,
  `5_class` text NOT NULL,
  `5_name` text NOT NULL,
  `6_image` varchar(255) NOT NULL,
  `6_time` varchar(255) NOT NULL,
  `6_class` text NOT NULL,
  `6_name` text NOT NULL,
  `7_image` varchar(255) NOT NULL,
  `7_time` varchar(255) NOT NULL,
  `7_class` text NOT NULL,
  `7_name` text NOT NULL,
  `8_image` varchar(255) NOT NULL,
  `8_time` varchar(255) NOT NULL,
  `8_class` text NOT NULL,
  `8_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `saturday_schedule` (`saturday_schedule_id`, `1_image`, `1_time`, `1_class`, `1_name`, `2_image`, `2_time`, `2_class`, `2_name`, `3_image`, `3_time`, `3_class`, `3_name`, `4_image`, `4_time`, `4_class`, `4_name`, `5_image`, `5_time`, `5_class`, `5_name`, `6_image`, `6_time`, `6_class`, `6_name`, `7_image`, `7_time`, `7_class`, `7_name`, `8_image`, `8_time`, `8_class`, `8_name` ) VALUES
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
`background_image` varchar(255) NOT NULL,
`backgroundimage_text1` text NOT NULL,
`backgroundimage_text2` text NOT NULL,
`backgroundimage_text3` text NOT NULL,
`text1` text NOT NULL,
`text2` text NOT NULL,
`trainer1_image` varchar(255) NOT NULL,
`trainer1_name` text NOT NULL,
`trainer1_skill` text NOT NULL,
`trainer1_twitter` varchar(255) NOT NULL,
`trainer1_facebook` varchar(255) NOT NULL,
`trainer1_instagram` varchar(255) NOT NULL,
`trainer2_image` varchar(255) NOT NULL,
`trainer2_name` text NOT NULL,
`trainer2_skill` text NOT NULL,
`trainer2_twitter` varchar(255) NOT NULL,
`trainer2_facebook` varchar(255) NOT NULL,
`trainer2_instagram` varchar(255) NOT NULL,
`trainer3_image` varchar(255) NOT NULL,
`trainer3_name` text NOT NULL,
`trainer3_skill` text NOT NULL,
`trainer3_twitter` varchar(255) NOT NULL,
`trainer3_facebook` varchar(255) NOT NULL,
`trainer3_instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `trainer` (`trainer_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `text1`, `text2`, `trainer1_image`, `trainer1_name`, `trainer1_skill`, `trainer1_twitter`, `trainer1_facebook`, `trainer1_instagram`, `trainer2_image`, `trainer2_name`, `trainer2_skill`, `trainer2_twitter`, `trainer2_facebook`, `trainer2_instagram`, `trainer3_image`, `trainer3_name`, `trainer3_skill`, `trainer3_twitter`, `trainer3_facebook`, `trainer3_instagram` )
VALUES (
1,
'img_bg_2.jpg',
'Fitness Trainer',
'Free html5 templates Made by',
'freehtml5.co',
'Fitness Expert',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.',
'trainer-1.jpg',
'Angel Adams',
'Body Building Expert',
'twitter_handle',
'facebook_handle',
'instagram_handle',
'trainer-1.jpg',
'Angel Adams',
'Body Building Expert',
'twitter_handle',
'facebook_handle',
'instagram_handle',
'trainer-1.jpg',
'Angel Adams',
'Body Building Expert',
'twitter_handle',
'facebook_handle',
'instagram_handle'
);

CREATE TABLE `gallery` (
`gallery_id` int(10) NOT NULL,
`background_image` varchar(255) NOT NULL,
`backgroundimage_text1` text NOT NULL,
`backgroundimage_text2` text NOT NULL,
`backgroundimage_text3` text NOT NULL,
`text1` text NOT NULL,
`text2` text NOT NULL,
`image1` varchar(255) NOT NULL,
`image1_text1` text NOT NULL,
`image1_text2` text NOT NULL,
`image2` varchar(255) NOT NULL,
`image2_text1` text NOT NULL,
`image2_text2` text NOT NULL,
`image3` varchar(255) NOT NULL,
`image3_text1` text NOT NULL,
`image3_text2` text NOT NULL,
`image4` varchar(255) NOT NULL,
`image4_text1` text NOT NULL,
`image4_text2` text NOT NULL,
`image5` varchar(255) NOT NULL,
`image5_text1` text NOT NULL,
`image5_text2` text NOT NULL,
`image6` varchar(255) NOT NULL,
`image6_text1` text NOT NULL,
`image6_text2` text NOT NULL,
`image7` varchar(255) NOT NULL,
`image7_text1` text NOT NULL,
`image7_text2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gallery` (`gallery_id`, `background_image`, `backgroundimage_text1`, `backgroundimage_text2`, `backgroundimage_text3`, `text1`, `text2`, `image1`, `image1_text1`, `image1_text2`, `image2`, `image2_text1`, `image2_text2`, `image3`, `image3_text1`, `image3_text2`, `image4`, `image4_text1`, `image4_text2`, `image5`, `image5_text1`, `image5_text2`, `image6`, `image6_text1`, `image6_text2`, `image7`, `image7_text1`, `image7_text2` )
VALUES (
1,
'img_bg_2.jpg',
'Gallery',
'Free html5 templates Made by ',
'freehtml5.co',
'Gym gallery',
'Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.',
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice',
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice',
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice',
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice',
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice',
'gallery-3.jpg',
'Web Design',	
'Two Glas of Juice',
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
ALTER TABLE `header`
  ADD PRIMARY KEY (`header_id`);

ALTER TABLE `header`
  MODIFY `header_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

ALTER TABLE `home`
  MODIFY `home_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `sunday_schedule`
  ADD PRIMARY KEY (`sunday_schedule_id`);


ALTER TABLE `sunday_schedule`
  MODIFY `sunday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `monday_schedule`
  ADD PRIMARY KEY (`monday_schedule_id`);


ALTER TABLE `monday_schedule`
  MODIFY `monday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tuesday_schedule`
  ADD PRIMARY KEY (`tuesday_schedule_id`);


ALTER TABLE `tuesday_schedule`
  MODIFY `tuesday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `wednesday_schedule`
  ADD PRIMARY KEY (`wednesday_schedule_id`);


ALTER TABLE `wednesday_schedule`
  MODIFY `wednesday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `thursday_schedule`
  ADD PRIMARY KEY (`thursday_schedule_id`);


ALTER TABLE `thursday_schedule`
  MODIFY `thursday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `friday_schedule`
  ADD PRIMARY KEY (`friday_schedule_id`);


ALTER TABLE `friday_schedule`
  MODIFY `friday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `saturday_schedule`
  ADD PRIMARY KEY (`saturday_schedule_id`);


ALTER TABLE `saturday_schedule`
  MODIFY `saturday_schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);


ALTER TABLE `trainer`
  MODIFY `trainer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

ALTER TABLE `gallery`
  MODIFY `gallery_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_id`);

ALTER TABLE `pricing`
  MODIFY `pricing_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
