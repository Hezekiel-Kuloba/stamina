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


<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
			  <?php
							$i=0;
							$statement = $pdo->prepare("SELECT trainer_id, trainer1_image, trainer1_name, trainer1_skill, about_me, aboutme_paragraph FROM trainer ORDER BY trainer_id ASC ");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							
							foreach ($result as $row) {
								
								$i++;
								?>

                <div class="col-lg-12">
                  <div class="blog-post">
					  	<div class="col-lg-6">
							<div class="blog-thumb">
								<div class="down-content">
								<h4><?php echo $row['trainer1_name']; ?></h4>
								</div>
								<div class="hezzy">	
								<img style="width:90%;" src="images\trainerImages\<?php echo $row['trainer1_image']; ?>" alt="">
								</div>
							</div>
						</div>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
					<div class="col-lg-6">
						<div class="down-content">
						<span style="text-decoration: underline;" ><?php echo $row['trainer1_skill']; ?></span>
						<!-- <ul class="post-info">
							<li><a href="#">Admin</a></li>
							<li><a href="#">May 31, 2020</a></li>
							<li><a href="#">12 Comments</a></li>
						</ul> -->
						<p><?php echo $row['aboutme_paragraph']; ?>.</p>
						<!-- <div class="post-options">
							<div class="row">
							<div class="col-6">
								<ul class="post-tags">
								<li><i class="fa fa-tags"></i></li>
								<li><a href="#">Beauty</a>,</li>
								<li><a href="#">Nature</a></li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="post-share">
								<li><i class="fa fa-share-alt"></i></li>
								<li><a href="#">Facebook</a>,</li>
								<li><a href="#"> Twitter</a></li>
								</ul>
							</div>
							</div>
						</div> -->
						</div>
                  	</div>
                  </div>
                </div>
				<?php
							}
							?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>	


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