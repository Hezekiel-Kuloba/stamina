<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM pricing WHERE pricing_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$pricing_id = $row['pricing_id'];
	$background_image = $row['background_image'];
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$backgroundimage_text2 = $row['backgroundimage_text2'];
	$backgroundimage_text3 = $row['backgroundimage_text3'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
	$starter_text1 = $row['starter_text1'];
	$starter_text2 = $row['starter_text2'];
	$starter_text3 = $row['starter_text3'];
	$starter_text4 = $row['starter_text4'];
	$starter_text5 = $row['starter_text5'];
	$starter_text6 = $row['starter_text6'];
	$starter_text7 = $row['starter_text7'];
	$starter_text8 = $row['starter_text8'];
	$starter_text9 = $row['starter_text9'];
	$starter_text10 = $row['starter_text10'];
	$basic_text1 = $row['basic_text1'];
	$basic_text2 = $row['basic_text2'];
	$basic_text3 = $row['basic_text3'];
	$basic_text4 = $row['basic_text4'];
	$basic_text5 = $row['basic_text5'];
	$basic_text6 = $row['basic_text6'];
	$basic_text7 = $row['basic_text7'];
	$basic_text8 = $row['basic_text8'];
	$basic_text9 = $row['basic_text9'];
	$basic_text10 = $row['basic_text10'];
	$pro_text1 = $row['pro_text1'];
	$pro_text2 = $row['pro_text2'];
	$pro_text3 = $row['pro_text3'];
	$pro_text4 = $row['pro_text4'];
	$pro_text5 = $row['pro_text5'];
	$pro_text6 = $row['pro_text6'];
	$pro_text7 = $row['pro_text7'];
	$pro_text8 = $row['pro_text8'];
	$pro_text9 = $row['pro_text9'];
	$pro_text10 = $row['pro_text10'];
	$unlimited_text1 = $row['unlimited_text1'];
	$unlimited_text2 = $row['unlimited_text2'];
	$unlimited_text3 = $row['unlimited_text3'];
	$unlimited_text4 = $row['unlimited_text4'];
	$unlimited_text5 = $row['unlimited_text5'];
	$unlimited_text6 = $row['unlimited_text6'];
	$unlimited_text7 = $row['unlimited_text7'];
	$unlimited_text8 = $row['unlimited_text8'];
	$unlimited_text9 = $row['unlimited_text9'];
	$unlimited_text10 = $row['unlimited_text10'];





}
?>


<div class="fh5co-loader"></div>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
	style="background-image:url(images/pricingImages/<?php echo $background_image; ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Pricing</h1>
						<h2><?php echo $backgroundimage_text2; ?> <a href="http://freehtml5.co" target="_blank"><?php echo $backgroundimage_text3; ?></a>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-pricing">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2><?php echo $text1; ?></h2>
				<p><?php echo $text2; ?>.</p>
			</div>
		</div>
		<div class="row">
			<div class="pricing">
				<div class="col-md-3 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">
							<?php echo $starter_text1; ?>
						</h2>
						<div class="price"><sup class="currency">KSH</sup><?php echo $starter_text2; ?><small><?php echo $starter_text3; ?></small></div>
						<ul class="classes">
							<li><?php echo $starter_text4; ?></li>
							<li class="color"><?php echo $starter_text5; ?></li>
							<li><?php echo $starter_text6; ?></li>
							<li class="color"><?php echo $starter_text7; ?></li>
							<li><?php echo $starter_text8; ?></li>
							<li class="color"><?php echo $starter_text9; ?></li>
							<li><?php echo $starter_text10; ?></li>
						</ul>
						<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
					</div>
				</div>

				<div class="col-md-3 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan"><?php echo $basic_text1; ?></h2>
						<div class="price"><sup class="currency">$</sup><?php echo $basic_text2; ?><small><?php echo $basic_text3; ?></small></div>
						<ul class="classes">
							<li><?php echo $basic_text4; ?></li>
							<li class="color"><?php echo $basic_text5; ?></li>
							<li><?php echo $basic_text6; ?></li>
							<li class="color"><?php echo $basic_text7; ?></li>
							<li><?php echo $basic_text8; ?></li>
							<li class="color"><?php echo $basic_text9; ?></li>
							<li><?php echo $basic_text10; ?></li>
						</ul>
						<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
					</div>
				</div>

				<div class="col-md-3 animate-box">
					<div class="price-box popular">
						<h2 class="pricing-plan pricing-plan-offer"><?php echo $pro_text1; ?><span>Best Offer</span></h2>
						<div class="price"><sup class="currency">$</sup><?php echo $pro_text2; ?><small><?php echo $pro_text3; ?></small></div>
						<ul class="classes">
							<li><?php echo $pro_text4; ?></li>
							<li class="color"><?php echo $pro_text5; ?></li>
							<li><?php echo $pro_text6; ?></li>
							<li class="color"><?php echo $pro_text7; ?></li>
							<li><?php echo $pro_text8; ?></li>
							<li class="color"><?php echo $pro_text9; ?></li>
							<li><?php echo $pro_text10; ?></li>
						</ul>
						<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
					</div>
				</div>

				<div class="col-md-3 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan"><?php echo $unlimited_text1; ?></h2>
						<div class="price"><sup class="currency">$</sup><?php echo $unlimited_text2; ?><small><?php echo $unlimited_text3; ?></small></div>
						<ul class="classes">
							<li><?php echo $unlimited_text4; ?></li>
							<li class="color"><?php echo $unlimited_text5; ?></li>
							<li><?php echo $unlimited_text6; ?></li>
							<li class="color"><?php echo $unlimited_text7; ?></li>
							<li><?php echo $unlimited_text8; ?></li>
							<li class="color"><?php echo $unlimited_text9; ?></li>
							<li><?php echo $unlimited_text10; ?></li>
						</ul>
						<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
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


<?php require_once('footer.php'); ?>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>