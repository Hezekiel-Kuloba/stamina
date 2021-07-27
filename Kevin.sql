
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
  ADD PRIMARY KEY (`header_id`);


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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
