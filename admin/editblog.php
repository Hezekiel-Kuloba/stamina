<?php require_once('header.php'); ?>


<?php
if(isset($_POST['form1'])) {
	$valid = 1;

    if(empty($_POST['blog_title'])) {
        $valid = 0;
        $error_message .= "Blog Title can not be empty<br>";
    } 

    

    $path = $_FILES['blog_image']['name'];
    $path_tmp = $_FILES['blog_image']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }


    if($valid == 1) {

    	if( isset($_FILES['photo']["name"]) && isset($_FILES['photo']["tmp_name"]) )
        {

        	$photo = array();
            $photo = $_FILES['photo']["name"];
            $photo = array_values(array_filter($photo));

        	$photo_temp = array();
            $photo_temp = $_FILES['photo']["tmp_name"];
            $photo_temp = array_values(array_filter($photo_temp));

        	$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'blog'");
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $row) {
				$next_id1=$row[10];
			}
			$z = $next_id1;

            $m=0;
            for($i=0;$i<count($photo);$i++)
            {
                $my_ext1 = pathinfo( $photo[$i], PATHINFO_EXTENSION );
		        if( $my_ext1=='jpg' || $my_ext1=='png' || $my_ext1=='jpeg' || $my_ext1=='gif' ) {
		            $final_name1[$m] = $z.'.'.$my_ext1;
                    move_uploaded_file($photo_temp[$i],"../images/blogImages/".$final_name1[$m]);
                    $m++;
                    $z++;
		        }
            }

            if(isset($final_name1)) {
            	for($i=0;$i<count($final_name1);$i++)
		        {
		        	$statement = $pdo->prepare("INSERT INTO blog (photo,blog_id) VALUES (?,?)");
		        	$statement->execute(array($final_name1[$i],$_REQUEST['blog_id']));
		        }
            }            
        }

        if($path == '') {
        	$statement = $pdo->prepare("UPDATE blog SET 
        							blog_title=?, 
        							blog_date=?,
                                    blog_paragraph=?

        							WHERE blog_id=?");
        	$statement->execute(array(
        							$_POST['blog_title'],
        							
        							$_POST['blog_date'],

        							$_POST['blog_paragraph'],
        							
        							$_REQUEST['blog_id']
        						));
        } else {

        	unlink('../images/blogImages/'.$_POST['current_photo']);

			$final_name = 'Blog-featured-'.$_REQUEST['blog_id'].'.'.$ext;
        	move_uploaded_file( $path_tmp, '../images/blogImages/'.$final_name );


        	$statement = $pdo->prepare("UPDATE blog SET 
        							blog_title=?,         							
        							blog_image=?,
        							blog_date=?,
                                    blog_paragraph=?
                                    
        							WHERE blog_id=?");
        	$statement->execute(array(
        							$_POST['blog_title'],       							
        							$final_name,
        							$_POST['blog_date'],
        							$_POST['blog_paragraph'], 							
        							$_REQUEST['blog_id']
        						));
        }
		

        
    	$success_message = 'blog is updated successfully.';
    }
}
?>

<?php
if(!isset($_REQUEST['blog_id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the blog_id is valid or not
	$statement = $pdo->prepare("SELECT * FROM blog WHERE blog_id=?");
	$statement->execute(array($_REQUEST['blog_id']));
	$total = $statement->rowCount();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit blog</h1>
	</div>
	<div class="content-header-right">
		<a href="blog_settings.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM blog WHERE blog_id=?");
$statement->execute(array($_REQUEST['blog_id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	$blog_title = $row['blog_title'];
	$blog_image = $row['blog_image'];
	$blog_date = $row['blog_date'];
    $blog_paragraph = $row['blog_paragraph'];
}

?>
<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
			
			<p>
			<?php echo $error_message; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
			
			<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Blog Title <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="blog_title" class="form-control" value="<?php echo $blog_title; ?>">
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Blog Date <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="blog_date" class="form-control" value="<?php echo $blog_date ; ?>">
							</div>
						</div>	
						
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Existing Featured Photo</label>
							<div class="col-sm-4" style="padding-top:4px;">
								<img src="../images/blogImages/<?php echo $blog_image; ?>" alt="" style="width:150px;">
								<input type="hidden" name="current_photo" value="<?php echo $blog_image; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Change Featured Photo </label>
							<div class="col-sm-4" style="padding-top:4px;">
								<input type="file" name="blog_image">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-8">
								<textarea name="blog_paragraph" class="form-control" cols="30" rows="10" blog_id="editor1"><?php echo $blog_paragraph; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>