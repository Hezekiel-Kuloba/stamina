<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM courses WHERE courses_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$courses_id = $row['courses_id'];
	$background_image = $row['background_image'];
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
}
$statement = $pdo->prepare("SELECT * FROM gallery WHERE gallery_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$gallery_id = $row['gallery_id'];
	$image1 = $row['image1'];
	$image1_text1 = $row['image1_text1'];
	$image1_text2 = $row['image1_text2'];
}
?>
<div class="fh5co-loader"></div>


<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
	style="background-image:url(images/coursesImages/<?php echo $background_image; ?>);"
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
					<?php
							$i=0;
							$statement = $pdo->prepare("SELECT gallery_id, image1_text1, image1_text2, image1 FROM gallery ORDER BY gallery_id ASC  ");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							
							foreach ($result as $row) {
								
								$i++;
								?>

					
					<li class="one-third animate-box" data-animate-effect="fadeIn"
						style="background-image: url(images/coursesImages/<?php echo $row['image1']; ?>); ">
			
						<a href="#">
							<div class="case-studies-summary">
								<span style="word-wrap: break-word">
									<?php echo $row['image1_text1']; ?>
								</span>
								<span style="word-wrap: break-word">
									<?php echo $row['image1_text2']; ?>
							</span>
							</div>
						</a>
					</li>



					<?php
							}
							?>
				</ul>
			</div>
		</div>
	</div>
</div>


<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/coursesImages/img_bg_3.jpg);">
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