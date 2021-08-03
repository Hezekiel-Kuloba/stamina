<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM gallery WHERE gallery_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$gallery_id = $row['gallery_id'];
	$background_image = $row['background_image'];
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$backgroundimage_text2 = $row['backgroundimage_text2'];
	$backgroundimage_text3 = $row['backgroundimage_text3'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
	$image1 = $row['image1'];
	$image1_text1 = $row['image1_text1'];
	$image1_text2 = $row['image1_text2'];
	$image2 = $row['image2'];
	$image2_text1 = $row['image2_text1'];
	$image2_text2 = $row['image2_text2'];
	$image3 = $row['image3'];
	$image3_text1 = $row['image3_text1'];
	$image3_text2 = $row['image3_text2'];
	$image4 = $row['image4'];
	$image4_text1 = $row['image4_text1'];
	$image4_text2 = $row['image4_text2'];
	$image5 = $row['image5'];
	$image5_text1 = $row['image5_text1'];
	$image5_text2 = $row['image5_text2'];
	$image6 = $row['image6'];
	$image6_text1 = $row['image6_text1'];
	$image6_text2 = $row['image6_text2'];
	$image7 = $row['image7'];
	$image7_text1 = $row['image7_text1'];
	$image7_text2 = $row['image7_text2'];


}
?>
<div class="fh5co-loader"></div>


<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
	style="background-image:url(images/<?php echo $background_image; ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1><?php echo $backgroundimage_text1; ?></h1>
						<h2><?php echo $backgroundimage_text2; ?> <a href="#" target="_blank"><?php echo $backgroundimage_text3; ?></a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2><?php echo $text1; ?></h2>
				<p><?php echo $text2; ?></p>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row row-bottom-padded-md">
			<div class="col-md-12">
				<ul id="fh5co-portfolio-list">

					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image1; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image1_text1; ?></span>
								<h2><?php echo $image1_text2; ?></h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image2; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image2_text1; ?></span>
								<h2><?php echo $image2_text2; ?></h2>
							</div>
						</a>
					</li>

					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image3; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image3_text1; ?></span>
								<h2><?php echo $image3_text2; ?></h2>
							</div>
						</a>
					</li>

					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image4; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image4_text1; ?></span>
								<h2><?php echo $image4_text2; ?></h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image5; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image5_text1; ?></span>
								<h2><?php echo $image5_text2; ?></h2>
							</div>
						</a>
					</li>
					<li class="two-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image6; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image6_text1; ?></span>
								<h2><?php echo $image6_text2; ?></h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/<?php echo $image7; ?>); ">
						<a href="#">
							<div class="case-studies-summary">
								<span><?php echo $image7_text1; ?></span>
								<h2><?php echo $image7_text2; ?></h2>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span>
						Discount</span></h2>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
			</div>
		</div>
	</div>
</div>


<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);" role="contentinfo">
	<div class="overlay"></div>
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-4 fh5co-widget">
				<h3>A Little About Stamina.</h3>
				<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci
					architecto culpa amet.</p>
				<p><a class="btn btn-primary" href="#">Become A Member</a></p>
			</div>
			<div class="col-md-8">
				<h3>Classes</h3>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Cardio</a></li>
						<li><a href="#">Body Building</a></li>
						<li><a href="#">Yoga</a></li>
						<li><a href="#">Boxing</a></li>
						<li><a href="#">Running</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Boxing</a></li>
						<li><a href="#">Martial Arts</a></li>
						<li><a href="#">Karate</a></li>
						<li><a href="#">Kungfu</a></li>
						<li><a href="#">Basketball</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Badminton</a></li>
						<li><a href="#">Body Building</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
					<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
					<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
						Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
				</p>
				<p>
				<ul class="fh5co-social-icons">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
				</ul>
				</p>
			</div>
		</div>

	</div>
</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>