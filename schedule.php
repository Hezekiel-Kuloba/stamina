<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM schedule WHERE schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$background_image = $row['background_image'];	
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
}   
?>

<?php
$statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$discount_banner_image = $row['discount_banner_image'];
	$discount_banner_text1 = $row['discount_banner_text1'];
	$discount_banner_text2 = $row['discount_banner_text2'];
	$discount_banner_text3 = $row['discount_banner_text3'];
	$discount_banner_text4 = $row['discount_banner_text4'];
	$discount_banner_text5 = $row['discount_banner_text5'];
}   
?>
<?php
$statement = $pdo->prepare("SELECT * FROM sunday_schedule WHERE sunday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$sunday_schedule_id = $row['sunday_schedule_id'];
	$sunday_image1 = $row['image1'];
	$sunday_time1 = $row['time1'];
	$sunday_class1 = $row['class1'];
	$sunday_name1 = $row['name1'];
	$sunday_image2 = $row['image2'];
	$sunday_time2 = $row['time2'];
	$sunday_class2 = $row['class2'];
	$sunday_name2 = $row['name2'];
	$sunday_image3 = $row['image3'];
	$sunday_time3 = $row['time3'];
	$sunday_class3 = $row['class3'];
	$sunday_name3 = $row['name3'];
	$sunday_image4 = $row['image4'];
	$sunday_time4 = $row['time4'];
	$sunday_class4 = $row['class4'];
	$sunday_name4 = $row['name4'];
	$sunday_image5 = $row['image5'];
	$sunday_time5 = $row['time5'];
	$sunday_class5 = $row['class5'];
	$sunday_name5 = $row['name5'];
	$sunday_image6 = $row['image6'];
	$sunday_time6 = $row['time6'];
	$sunday_class6 = $row['class6'];
	$sunday_name6 = $row['name6'];
	$sunday_image7 = $row['image7'];
	$sunday_time7 = $row['time7'];
	$sunday_class7 = $row['class7'];
	$sunday_name7 = $row['name7'];
	$sunday_image8 = $row['image8'];
	$sunday_time8 = $row['time8'];
	$sunday_class8 = $row['class8'];
	$sunday_name8 = $row['name8'];




}

?>

<?php
$statement = $pdo->prepare("SELECT * FROM monday_schedule WHERE monday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$monday_schedule_id = $row['monday_schedule_id'];
	$monday_image1 = $row['image1'];
	$monday_time1 = $row['time1'];
	$monday_class1 = $row['class1'];
	$monday_name1 = $row['name1'];
	$monday_image2 = $row['image2'];
	$monday_time2 = $row['time2'];
	$monday_class2 = $row['class2'];
	$monday_name2 = $row['name2'];
	$monday_image3 = $row['image3'];
	$monday_time3 = $row['time3'];
	$monday_class3 = $row['class3'];
	$monday_name3 = $row['name3'];
	$monday_image4 = $row['image4'];
	$monday_time4 = $row['time4'];
	$monday_class4 = $row['class4'];
	$monday_name4 = $row['name4'];
	$monday_image5 = $row['image5'];
	$monday_time5 = $row['time5'];
	$monday_class5 = $row['class5'];
	$monday_name5 = $row['name5'];
	$monday_image6 = $row['image6'];
	$monday_time6 = $row['time6'];
	$monday_class6 = $row['class6'];
	$monday_name6 = $row['name6'];
	$monday_image7 = $row['image7'];
	$monday_time7 = $row['time7'];
	$monday_class7 = $row['class7'];
	$monday_name7 = $row['name7'];
	$monday_image8 = $row['image8'];
	$monday_time8 = $row['time8'];
	$monday_class8 = $row['class8'];
	$monday_name8 = $row['name8'];

}

?>
<?php
$statement = $pdo->prepare("SELECT * FROM tuesday_schedule WHERE tuesday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$tuesday_schedule_id = $row['tuesday_schedule_id'];
	$tuesday_image1 = $row['image1'];
	$tuesday_time1 = $row['time1'];
	$tuesday_class1 = $row['class1'];
	$tuesday_name1 = $row['name1'];
	$tuesday_image2 = $row['image2'];
	$tuesday_time2 = $row['time2'];
	$tuesday_class2 = $row['class2'];
	$tuesday_name2 = $row['name2'];
	$tuesday_image3 = $row['image3'];
	$tuesday_time3 = $row['time3'];
	$tuesday_class3 = $row['class3'];
	$tuesday_name3 = $row['name3'];
	$tuesday_image4 = $row['image4'];
	$tuesday_time4 = $row['time4'];
	$tuesday_class4 = $row['class4'];
	$tuesday_name4 = $row['name4'];
	$tuesday_image5 = $row['image5'];
	$tuesday_time5 = $row['time5'];
	$tuesday_class5 = $row['class5'];
	$tuesday_name5 = $row['name5'];
	$tuesday_image6 = $row['image6'];
	$tuesday_time6 = $row['time6'];
	$tuesday_class6 = $row['class6'];
	$tuesday_name6 = $row['name6'];
	$tuesday_image7 = $row['image7'];
	$tuesday_time7 = $row['time7'];
	$tuesday_class7 = $row['class7'];
	$tuesday_name7 = $row['name7'];
	$tuesday_image8 = $row['image8'];
	$tuesday_time8 = $row['time8'];
	$tuesday_class8 = $row['class8'];
	$tuesday_name8 = $row['name8'];

}

?>
<?php
$statement = $pdo->prepare("SELECT * FROM wednesday_schedule WHERE wednesday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$wednesday_schedule_id = $row['wednesday_schedule_id'];
	$wednesday_image1 = $row['image1'];
	$wednesday_time1 = $row['time1'];
	$wednesday_class1 = $row['class1'];
	$wednesday_name1 = $row['name1'];
	$wednesday_image2 = $row['image2'];
	$wednesday_time2 = $row['time2'];
	$wednesday_class2 = $row['class2'];
	$wednesday_name2 = $row['name2'];
	$wednesday_image3 = $row['image3'];
	$wednesday_time3 = $row['time3'];
	$wednesday_class3 = $row['class3'];
	$wednesday_name3 = $row['name3'];
	$wednesday_image4 = $row['image4'];
	$wednesday_time4 = $row['time4'];
	$wednesday_class4 = $row['class4'];
	$wednesday_name4 = $row['name4'];
	$wednesday_image5 = $row['image5'];
	$wednesday_time5 = $row['time5'];
	$wednesday_class5 = $row['class5'];
	$wednesday_name5 = $row['name5'];
	$wednesday_image6 = $row['image6'];
	$wednesday_time6 = $row['time6'];
	$wednesday_class6 = $row['class6'];
	$wednesday_name6 = $row['name6'];
	$wednesday_image7 = $row['image7'];
	$wednesday_time7 = $row['time7'];
	$wednesday_class7 = $row['class7'];
	$wednesday_name7 = $row['name7'];
	$wednesday_image8 = $row['image8'];
	$wednesday_time8 = $row['time8'];
	$wednesday_class8 = $row['class8'];
	$wednesday_name8 = $row['name8'];

}

?>
<?php
$statement = $pdo->prepare("SELECT * FROM thursday_schedule WHERE thursday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$thursday_schedule_id = $row['thursday_schedule_id'];
	$thursday_image1 = $row['image1'];
	$thursday_time1 = $row['time1'];
	$thursday_class1 = $row['class1'];
	$thursday_name1 = $row['name1'];
	$thursday_image2 = $row['image2'];
	$thursday_time2 = $row['time2'];
	$thursday_class2 = $row['class2'];
	$thursday_name2 = $row['name2'];
	$thursday_image3 = $row['image3'];
	$thursday_time3 = $row['time3'];
	$thursday_class3 = $row['class3'];
	$thursday_name3 = $row['name3'];
	$thursday_image4 = $row['image4'];
	$thursday_time4 = $row['time4'];
	$thursday_class4 = $row['class4'];
	$thursday_name4 = $row['name4'];
	$thursday_image5 = $row['image5'];
	$thursday_time5 = $row['time5'];
	$thursday_class5 = $row['class5'];
	$thursday_name5 = $row['name5'];
	$thursday_image6 = $row['image6'];
	$thursday_time6 = $row['time6'];
	$thursday_class6 = $row['class6'];
	$thursday_name6 = $row['name6'];
	$thursday_image7 = $row['image7'];
	$thursday_time7 = $row['time7'];
	$thursday_class7 = $row['class7'];
	$thursday_name7 = $row['name7'];
	$thursday_image8 = $row['image8'];
	$thursday_time8 = $row['time8'];
	$thursday_class8 = $row['class8'];
	$thursday_name8 = $row['name8'];

}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM friday_schedule WHERE friday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$friday_schedule_id = $row['friday_schedule_id'];
	$friday_image1 = $row['image1'];
	$friday_time1 = $row['time1'];
	$friday_class1 = $row['class1'];
	$friday_name1 = $row['name1'];
	$friday_image2 = $row['image2'];
	$friday_time2 = $row['time2'];
	$friday_class2 = $row['class2'];
	$friday_name2 = $row['name2'];
	$friday_image3 = $row['image3'];
	$friday_time3 = $row['time3'];
	$friday_class3 = $row['class3'];
	$friday_name3 = $row['name3'];
	$friday_image4 = $row['image4'];
	$friday_time4 = $row['time4'];
	$friday_class4 = $row['class4'];
	$friday_name4 = $row['name4'];
	$friday_image5 = $row['image5'];
	$friday_time5 = $row['time5'];
	$friday_class5 = $row['class5'];
	$friday_name5 = $row['name5'];
	$friday_image6 = $row['image6'];
	$friday_time6 = $row['time6'];
	$friday_class6 = $row['class6'];
	$friday_name6 = $row['name6'];
	$friday_image7 = $row['image7'];
	$friday_time7 = $row['time7'];
	$friday_class7 = $row['class7'];
	$friday_name7 = $row['name7'];
	$friday_image8 = $row['image8'];
	$friday_time8 = $row['time8'];
	$friday_class8 = $row['class8'];
	$friday_name8 = $row['name8'];

}

?>
<?php
$statement = $pdo->prepare("SELECT * FROM saturday_schedule WHERE saturday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$saturday_schedule_id = $row['saturday_schedule_id'];
	$saturday_image1 = $row['image1'];
	$saturday_time1 = $row['time1'];
	$saturday_class1 = $row['class1'];
	$saturday_name1 = $row['name1'];
	$saturday_image2 = $row['image2'];
	$saturday_time2 = $row['time2'];
	$saturday_class2 = $row['class2'];
	$saturday_name2 = $row['name2'];
	$saturday_image3 = $row['image3'];
	$saturday_time3 = $row['time3'];
	$saturday_class3 = $row['class3'];
	$saturday_name3 = $row['name3'];
	$saturday_image4 = $row['image4'];
	$saturday_time4 = $row['time4'];
	$saturday_class4 = $row['class4'];
	$saturday_name4 = $row['name4'];
	$saturday_image5 = $row['image5'];
	$saturday_time5 = $row['time5'];
	$saturday_class5 = $row['class5'];
	$saturday_name5 = $row['name5'];
	$saturday_image6 = $row['image6'];
	$saturday_time6 = $row['time6'];
	$saturday_class6 = $row['class6'];
	$saturday_name6 = $row['name6'];
	$saturday_image7 = $row['image7'];
	$saturday_time7 = $row['time7'];
	$saturday_class7 = $row['class7'];
	$saturday_name7 = $row['name7'];
	$saturday_image8 = $row['image8'];
	$saturday_time8 = $row['time8'];
	$saturday_class8 = $row['class8'];
	$saturday_name8 = $row['name8'];

}

?>
<header id="fh5co-header" class="fh5co-cover" role="banner"
	style="background-image:url(images/backgroundImages/<?php echo $background_image; ?>);"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>
							<?php echo $backgroundimage_text1; ?>
						</h1>
						<p><a href="pricing.php"
								class="btn btn-primary">Become A Member</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2><?php echo $text1; ?></h2>
				<p><?php echo $text2; ?>.</p>
			</div>
		</div>
	</div>



<div id="fh5co-schedule" class="fh5co-bg" style="background-image:url(images/scheduleImages/<?php echo $background_image; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2>Class Schedule</h2>
			</div>
		</div>

		<div class="row animate-box">

			<div class="fh5co-tabs">
				<ul class="fh5co-tab-nav">
					<li class="active"><a href="#" data-tab="1"><span class="visible-xs">S</span><span
								class="hidden-xs">Sunday</span></a></li>
					<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span
								class="hidden-xs">Monday</span></a></li>
					<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span
								class="hidden-xs">Tuesday</span></a></li>
					<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span
								class="hidden-xs">Wednesday</span></a></li>

					<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span
								class="hidden-xs">Thursday</span></a></li>
					<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span
								class="hidden-xs">Friday</span></a></li>
					<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span
								class="hidden-xs">Saturday</span></a></li>
				</ul>

				<!-- Tabs -->
				<div class="fh5co-tab-content-wrap">
					<div class="fh5co-tab-content tab-content active" data-tab-content="1">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image1; ?>"
										class="img-responsive" alt="noooo"></span>
								<span class="time">
									<?php echo $sunday_time1; ?>
								</span>
								<h4>
									<?php echo $sunday_class1; ?>
								</h4>
								<small>
									<?php echo $sunday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time2; ?>
								</span>
								<h4>
									<?php echo $sunday_class2; ?>
								</h4>
								<small>
									<?php echo $sunday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time3; ?>
								</span>
								<h4>
									<?php echo $sunday_class3; ?>
								</h4>
								<small>
									<?php echo $sunday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time4; ?>
								</span>
								<h4>
									<?php echo $sunday_class4; ?>
								</h4>
								<small>
									<?php echo $sunday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time5; ?>
								</span>
								<h4>
									<?php echo $sunday_class5; ?>
								</h4>
								<small>
									<?php echo $sunday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time6; ?>
								</span>
								<h4>
									<?php echo $sunday_class6; ?>
								</h4>
								<small>
									<?php echo $sunday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time7; ?>
								</span>
								<h4>
									<?php echo $sunday_class7; ?>
								</h4>
								<small>
									<?php echo $sunday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $sunday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $sunday_time8; ?>
								</span>
								<h4>
									<?php echo $sunday_class8; ?>
								</h4>
								<small>
									<?php echo $sunday_name8; ?>
								</small>
							</li>
						</ul>
					</div>


					<div class="fh5co-tab-content tab-content" data-tab-content="2">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image1; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time1; ?>
								</span>
								<h4>
									<?php echo $monday_class1; ?>
								</h4>
								<small>
									<?php echo $monday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time2; ?>
								</span>
								<h4>
									<?php echo $monday_class2; ?>
								</h4>
								<small>
									<?php echo $monday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time3; ?>
								</span>
								<h4>
									<?php echo $monday_class3; ?>
								</h4>
								<small>
									<?php echo $monday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time4; ?>
								</span>
								<h4>
									<?php echo $monday_class4; ?>
								</h4>
								<small>
									<?php echo $monday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time5; ?>
								</span>
								<h4>
									<?php echo $monday_class5; ?>
								</h4>
								<small>
									<?php echo $monday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time6; ?>
								</span>
								<h4>
									<?php echo $monday_class6; ?>
								</h4>
								<small>
									<?php echo $monday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time7; ?>
								</span>
								<h4>
									<?php echo $monday_class7; ?>
								</h4>
								<small>
									<?php echo $monday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $monday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $monday_time8; ?>
								</span>
								<h4>
									<?php echo $monday_class8; ?>
								</h4>
								<small>
									<?php echo $monday_name8; ?>
								</small>
							</li>
						</ul>
					</div>


					<div class="fh5co-tab-content tab-content " data-tab-content="3">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image1; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time1; ?>
								</span>
								<h4>
									<?php echo $tuesday_class1; ?>
								</h4>
								<small>
									<?php echo $tuesday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time2; ?>
								</span>
								<h4>
									<?php echo $tuesday_class2; ?>
								</h4>
								<small>
									<?php echo $tuesday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time3; ?>
								</span>
								<h4>
									<?php echo $tuesday_class3; ?>
								</h4>
								<small>
									<?php echo $tuesday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time4; ?>
								</span>
								<h4>
									<?php echo $tuesday_class4; ?>
								</h4>
								<small>
									<?php echo $tuesday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time5; ?>
								</span>
								<h4>
									<?php echo $tuesday_class5; ?>
								</h4>
								<small>
									<?php echo $tuesday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time6; ?>
								</span>
								<h4>
									<?php echo $tuesday_class6; ?>
								</h4>
								<small>
									<?php echo $tuesday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time7; ?>
								</span>
								<h4>
									<?php echo $tuesday_class7; ?>
								</h4>
								<small>
									<?php echo $tuesday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $tuesday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $tuesday_time8; ?>
								</span>
								<h4>
									<?php echo $tuesday_class8; ?>
								</h4>
								<small>
									<?php echo $tuesday_name8; ?>
								</small>
							</li>
						</ul>
					</div>

					<div class="fh5co-tab-content tab-content " data-tab-content="4">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image1; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time1; ?>
								</span>
								<h4>
									<?php echo $wednesday_class1; ?>
								</h4>
								<small>
									<?php echo $wednesday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time2; ?>
								</span>
								<h4>
									<?php echo $wednesday_class2; ?>
								</h4>
								<small>
									<?php echo $wednesday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time3; ?>
								</span>
								<h4>
									<?php echo $wednesday_class3; ?>
								</h4>
								<small>
									<?php echo $wednesday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time4; ?>
								</span>
								<h4>
									<?php echo $wednesday_class4; ?>
								</h4>
								<small>
									<?php echo $wednesday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time5; ?>
								</span>
								<h4>
									<?php echo $wednesday_class5; ?>
								</h4>
								<small>
									<?php echo $wednesday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time6; ?>
								</span>
								<h4>
									<?php echo $wednesday_class6; ?>
								</h4>
								<small>
									<?php echo $wednesday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time7; ?>
								</span>
								<h4>
									<?php echo $wednesday_class7; ?>
								</h4>
								<small>
									<?php echo $wednesday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $wednesday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $wednesday_time8; ?>
								</span>
								<h4>
									<?php echo $wednesday_class8; ?>
								</h4>
								<small>
									<?php echo $wednesday_name8; ?>
								</small>
							</li>
						</ul>
					</div>

					<div class="fh5co-tab-content tab-content " data-tab-content="5">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image1; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time1; ?>
								</span>
								<h4>
									<?php echo $thursday_class1; ?>
								</h4>
								<small>
									<?php echo $thursday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time2; ?>
								</span>
								<h4>
									<?php echo $thursday_class2; ?>
								</h4>
								<small>
									<?php echo $thursday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time3; ?>
								</span>
								<h4>
									<?php echo $thursday_class3; ?>
								</h4>
								<small>
									<?php echo $thursday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time4; ?>
								</span>
								<h4>
									<?php echo $thursday_class4; ?>
								</h4>
								<small>
									<?php echo $thursday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time5; ?>
								</span>
								<h4>
									<?php echo $thursday_class5; ?>
								</h4>
								<small>
									<?php echo $thursday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time6; ?>
								</span>
								<h4>
									<?php echo $thursday_class6; ?>
								</h4>
								<small>
									<?php echo $thursday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time7; ?>
								</span>
								<h4>
									<?php echo $thursday_class7; ?>
								</h4>
								<small>
									<?php echo $thursday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $thursday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $thursday_time8; ?>
								</span>
								<h4>
									<?php echo $thursday_class8; ?>
								</h4>
								<small>
									<?php echo $thursday_name8; ?>
								</small>
							</li>
						</ul>
					</div>

					<div class="fh5co-tab-content tab-content " data-tab-content="6">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image1; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time1; ?>
								</span>
								<h4>
									<?php echo $friday_class1; ?>
								</h4>
								<small>
									<?php echo $friday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time2; ?>
								</span>
								<h4>
									<?php echo $friday_class2; ?>
								</h4>
								<small>
									<?php echo $friday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time3; ?>
								</span>
								<h4>
									<?php echo $friday_class3; ?>
								</h4>
								<small>
									<?php echo $friday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time4; ?>
								</span>
								<h4>
									<?php echo $friday_class4; ?>
								</h4>
								<small>
									<?php echo $friday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time5; ?>
								</span>
								<h4>
									<?php echo $friday_class5; ?>
								</h4>
								<small>
									<?php echo $friday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time6; ?>
								</span>
								<h4>
									<?php echo $friday_class6; ?>
								</h4>
								<small>
									<?php echo $friday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time7; ?>
								</span>
								<h4>
									<?php echo $friday_class7; ?>
								</h4>
								<small>
									<?php echo $friday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $friday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $friday_time8; ?>
								</span>
								<h4>
									<?php echo $friday_class8; ?>
								</h4>
								<small>
									<?php echo $friday_name8; ?>
								</small>
							</li>
						</ul>
					</div>

					<div class="fh5co-tab-content tab-content " data-tab-content="7">
						<ul class="class-schedule">
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image1; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time1; ?>
								</span>
								<h4>
									<?php echo $saturday_class1; ?>
								</h4>
								<small>
									<?php echo $saturday_name1; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image2; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time2; ?>
								</span>
								<h4>
									<?php echo $saturday_class2; ?>
								</h4>
								<small>
									<?php echo $saturday_name2; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image3; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time3; ?>
								</span>
								<h4>
									<?php echo $saturday_class3; ?>
								</h4>
								<small>
									<?php echo $saturday_name3; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image4; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time4; ?>
								</span>
								<h4>
									<?php echo $saturday_class4; ?>
								</h4>
								<small>
									<?php echo $saturday_name4; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image5; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time5; ?>
								</span>
								<h4>
									<?php echo $saturday_class5; ?>
								</h4>
								<small>
									<?php echo $saturday_name5; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image6; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time6; ?>
								</span>
								<h4>
									<?php echo $saturday_class6; ?>
								</h4>
								<small>
									<?php echo $saturday_name6; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image7; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time7; ?>
								</span>
								<h4>
									<?php echo $saturday_class7; ?>
								</h4>
								<small>
									<?php echo $saturday_name7; ?>
								</small>
							</li>
							<li class="text-center">
								<span><img src="images/scheduleImages/<?php echo $saturday_image8; ?>"
										class="img-responsive" alt=""></span>
								<span class="time">
									<?php echo $saturday_time8; ?>
								</span>
								<h4>
									<?php echo $saturday_class8; ?>
								</h4>
								<small>
									<?php echo $saturday_name8; ?>
								</small>
							</li>
						</ul>
					</div>

				</div>


			</div>
		</div>
	</div>
</div>




<div id="fh5co-started" class="fh5co-bg"
	style="background-image: url(images/bannerImages/<?php echo $discount_banner_image; ?>);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2>
					<?php echo $discount_banner_text1; ?> <br> <span>
						<?php echo $discount_banner_text2; ?> <br>
						<?php echo $discount_banner_text3; ?> <span class="percent">
							<?php echo $discount_banner_text4; ?>
						</span>
						<?php echo $discount_banner_text5; ?>
					</span>
				</h2>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p><a href="pricing.php" class="btn btn-default btn-lg">Become a Member</a></p>
			</div>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
