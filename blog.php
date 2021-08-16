<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM blog_common WHERE blog_common_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$blog_common_id = $row['blog_common_id'];
	$background_image = $row['background_image'];
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
}
$statement = $pdo->prepare("SELECT * FROM blog WHERE blog_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
    $blog_id = $row['blog_id'];
    $blog_title = $row['blog_title'];
	$blog_image = $row['blog_image'];
	$blog_date = $row['blog_date'];
    $blog_paragraph = $row['blog_paragraph'];
}   
?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
	style="background-image:url(images/blogImages/<?php echo $background_image; ?>);"
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

<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
			  <?php
							$i=0;
							$statement = $pdo->prepare("SELECT blog_id, blog_image, blog_date, blog_title, blog_paragraph FROM blog ORDER BY blog_id ASC  ");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							
							foreach ($result as $row) {
								
								$i++;
								?>

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
						<div class="down-content">
						<h4><?php echo $row['blog_date']; ?></h4>
						</div>
						<div class="hezzy">	
						<img src="images\blogImages\<?php echo $row['blog_image']; ?>" alt="">
						</div>
                    </div>
                    <div class="down-content">
                      <span style="text-decoration: underline;" ><?php echo $row['blog_title']; ?></span>
                      <!-- <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 31, 2020</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul> -->
                      <p><?php echo $row['blog_paragraph']; ?>.</p>
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
				<?php
							}
							?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>	
	<!-- <div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><?php echo $text1; ?></h2>
					<p><?php echo $text2; ?>.</p>
				</div>
			</div>

			<div class="row row-bottom-padded-md">
				<?php
				$i=0;
				$statement = $pdo->prepare("SELECT blog_id, blog_image, blog_title, blog_date, blog_paragraph FROM blog ORDER BY blog_id ASC  ");
				$statement->execute();
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($result as $row) {
					
					$i++;
					?>
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-blog animate-box">
						<a href="#"><img width="400" height="400" src="images/blogImages/<?php echo $row['blog_image']; ?>" alt=""></a>
						<div class="blog-text">
							<h3><a href="#"><?php echo $row['blog_title']; ?></a></h3>
							<span class="posted_on"><?php echo $row['blog_date']; ?></span>
							<p><?php echo $row['blog_paragraph']; ?></p>
						</div> 
					</div>
				</div>
				<?php
					}
					?>
			</div>
		</div>
	</div> -->
	
	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
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
	
	
	</body>
</html>

