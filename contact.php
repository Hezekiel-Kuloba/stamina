<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM contact WHERE contact_id=1");
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
						<h1>Contact Us</h1>
						<h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div id="map" class="fh5co-map"></div>
<!-- END map -->

<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-push-1 animate-box">

				<div class="fh5co-contact-info">
					<h3>Contact Information</h3>
					<ul>
						<li class="address">198 West 21th Street, Suite 721 New York NY 10016</li>
						<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<ul class="fh5co-social-icons">
							<h2>Social Media</h2>
							<li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
							<li><a href="#"><i class="icon-instagram"></i> Instagram</a></li>
						</ul>
					</ul>
				</div>

			</div>
			<div class="col-md-6 animate-box">
				<h3>Get In Touch</h3>
				<form action="#">
					<div class="row form-group">
						<div class="col-md-6">
							<!-- <label for="fname">First Name</label> -->
							<input type="text" id="name" class="form-control" placeholder="Your firstname">
						</div>
					</div>

					<!-- <div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
					<input type="text" id="lname" class="form-control" placeholder="Your lastname">
			</div>
		</div> -->

		<div class="row form-group">
			<div class="col-md-12">
				<!-- <label for="email">Email</label> -->
				<input type="text" id="email" class="form-control" placeholder="Your email address">
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<!-- <label for="subject">Subject</label> -->
				<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<!-- <label for="message">Message</label> -->
				<textarea name="message" id="message" cols="30" rows="10" class="form-control"
					placeholder="Say something about us"></textarea>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" value="Send Message" class="btn btn-primary">
		</div>

		</form>
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