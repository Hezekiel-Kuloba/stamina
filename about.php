<?php require_once('header.php'); ?>

<?php 
$statement = $pdo->prepare("SELECT * FROM trainer_common WHERE trainer_common_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$background_image = $row['background_image'];
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
}
$statement = $pdo->prepare("SELECT * FROM trainer WHERE trainer_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$trainer_id = $row['trainer_id'];
	$trainer1_image = $row['trainer1_image'];
	$trainer1_name = $row['trainer1_name'];
	$trainer1_skill = $row['trainer1_skill'];
	$about_me = $row['about_me'];
	$aboutme_paragraph = $row['aboutme_paragraph'];
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
						<h1>
							<?php echo $backgroundimage_text1; ?>
						</h1>
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
				<h2>
					<?php echo $text1; ?>
				</h2>
				<p>
					<?php echo $text2; ?>.
				</p>
			</div>
		</div>
		<?php
		$i=0;
		$statement = $pdo->prepare("SELECT trainer_id, trainer1_image, trainer1_name, trainer1_skill, about_me, aboutme_paragraph FROM trainer ORDER BY trainer_id ASC  ");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($result as $row) {
			
			$i++;
			?>
				<div class="row">
					<div class="col-md-6 col-sm-4 animate-box h-50%">
						<div class="trainer">
							<a href="#"><img width="400" height="400"
									src="images/trainerImages/<?php echo $row['trainer1_image']; ?>" alt="trainer"></a>
							<div class="title" style="margin-bottom: 100px;">
								<h3><a href="#">
										<?php echo $row['trainer1_name']; ?>
									</a></h3>
								<span>
									<?php echo $row['trainer1_skill']; ?>
								</span>
							</div>
							<!-- <div class="desc text-center">
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="col-md-6 col-sm-4 animate-box">
						<div>

							<div class="text-center fh5co-heading">
								<h2>
									<a href="courses.php">
										<?php echo $row['about_me']; ?>
									</a>
								</h2>
								<p>
									<?php echo $row['aboutme_paragraph']; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php
					}
					?>
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

<?php require_once('footer.php'); ?>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>