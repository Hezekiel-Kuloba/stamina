<?php require_once('header.php'); ?>

<?php 
$statement = $pdo->prepare("SELECT * FROM trainer WHERE trainer_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
}
?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
	style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Fitness Trainer</h1>
						<h2>Free html5 templates Made by <a href="#" target="_blank">freehtml5.co</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-trainer">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Fitness Expert</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit
					ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4 animate-box">
				<div class="trainer">
					<a href="#"><img class="img-responsive" src="images/trainer-1.jpg" alt="trainer"></a>
					<div class="title">
						<h3><a href="#">Angel Adams</a></h3>
						<span>Dance Expert</span>
					</div>
					<div class="desc text-center">
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 animate-box">
				<div class="trainer">
					<a href="#"><img class="img-responsive" src="images/trainer-2.jpg" alt="trainer"></a>
					<div class="title">
						<h3><a href="#">Arnold Smith</a></h3>
						<span>Body Building Expert</span>
					</div>
					<div class="desc text-center">
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 animate-box">
				<div class="trainer">
					<a href="#"><img class="img-responsive" src="images/trainer-3.jpg" alt="trainer"></a>
					<div class="title">
						<h3><a href="#">Rachel Seely</a></h3>
						<span>Yoga Expert</span>
					</div>
					<div class="desc text-center">
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
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
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="blog.html">Blog</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Boxing</a></li>
						<li><a href="#">Martial Arts</a></li>
						<li><a href="#">Karate</a></li>
						<li><a href="#">Kungfu</a></li>
						<li><a href="#">Body Building</a></li>
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
				</p>
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