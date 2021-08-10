<?php include './contact/sendemail.php'; ?>

<?php
$statement = $pdo->prepare("SELECT * FROM footer WHERE footer_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$footer_id = $row['footer_id'];
	$footer_image = $row['footer_image'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
	$copyright_text = $row['copyright_text'];
}
$statement = $pdo->prepare("SELECT * FROM social WHERE social_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
    $twitter = $row['twitter'];
    $facebook = $row['facebook'];
    $instagram = $row['instagram'];
}   
$statement = $pdo->prepare("SELECT * FROM contact WHERE contact_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$background_image = $row['background_image'];
	$address = $row['text1'];
	$number = $row['text2'];
	$email = $row['text3'];
}
?>
<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 animate-box">

				<div class="fh5co-contact-info">
					<h3>Contact Information</h3>
					<ul>
						<li class="address">
							<a href="#">
								<?php echo $address; ?>
							</a>
						</li>
						<li class="phone"><a href="tel://1234567920">
								<?php echo $number; ?>
							</a></li>
						<li class="email"><a href="mailto:info@yoursite.com">
								<?php echo $email; ?>
							</a></li>
						<ul class="fh5co-social-icons">
							<h2>Social Media</h2>
							<li><a href="#"><i class="icon-twitter"></i>
									<?php echo $twitter; ?>
								</a></li>
							<li><a href="#"><i class="icon-facebook"></i>
									<?php echo $facebook; ?>
								</a></li>
							<li><a href="#"><i class="icon-instagram"></i>
									<?php echo $instagram; ?>
								</a></li>
						</ul>
					</ul>
				</div>

			</div>
			<div class="col-md-12 animate-box">
				<h3>Get In Touch</h3>

				<form action="" method="post">
					<div class="row form-group">
						<div class="col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Name" required>
						</div>
					</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<input type="text" name="name" class="form-control" placeholder="Name" required>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<!-- <label for="email">Email</label> -->
				<input type="email" name="email" class="form-control" placeholder="Your email address" required>
			</div>
		</div>



		<div class="row form-group">
			<div class="col-md-12">
				<!-- <label for="message">Message</label> -->
				<textarea name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"
					required></textarea>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
		</div>

		</form>
	</div>
</div>
<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);" role="contentinfo">
	<div class="overlay"></div>
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-4 fh5co-widget">
				<h3><?php echo $text1; ?></h3>
				<p><?php echo $text2; ?></p>
				<p><a class="btn btn-primary" href="pricing.php">Become A Member</a></p>
			</div>
			<div class="col-md-8">
				<h3>Pages</h3>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="index.php">Home</a></li>
						<li><a href="courses.php">Courses</a></li>
						<li><a href="schedule.php">Schedule</a></li>
						<li><a href="about.html">Trainer</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
					<small class="block"><?php echo $copyright_text; ?></p></small>
					<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
						Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
				</p>
				<p>
				<ul class="fh5co-social-icons">
                    <li><a href="<?php echo $twitter; ?>"><i class="icon-twitter"></i></a></li>
                    <li><a href="<?php echo $facebook; ?>"><i class="icon-facebook"></i></a></li>
                    <li><a href="<?php echo $instagram; ?>"><i class="icon-instagram"></i></a></li>
                </ul>
				</p>
			</div>
		</div>

	</div>
</footer>