<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

    if(empty($_POST['trainer1_name'])) {
        $valid = 0;
        $error_message .= "image name can not be empty<br>";
    }

    $path = $_FILES['trainer1_image']['name'];
    $path_tmp = $_FILES['trainer1_image']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    } else {
    	$valid = 0;
        $error_message .= 'You must have to select a featured photo<br>';
    }


    if($valid == 1) {

    	$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'trainer'");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row) {
			$ai_id=$row[10];
		}

    	if( isset($_FILES['photo']["name"]) && isset($_FILES['photo']["tmp_name"]) )
        {
        	$photo = array();
            $photo = $_FILES['photo']["name"];
            $photo = array_values(array_filter($photo));

        	$photo_temp = array();
            $photo_temp = $_FILES['photo']["tmp_name"];
            $photo_temp = array_values(array_filter($photo_temp));

        	$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'trainer'");
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
                    move_uploaded_file($photo_temp[$i],"../images/trainerImages/".$final_name1[$m]);
                    $m++;
                    $z++;
		        }
            }

            if(isset($final_name1)) {
            	for($i=0;$i<count($final_name1);$i++)
		        {
		        	$statement = $pdo->prepare("INSERT INTO trainer (photo,trainer_id) VALUES (?,?)");
		        	$statement->execute(array($final_name1[$i],$ai_id));
		        }
            }            
        }

		$final_name = 'product-featured-'.$ai_id.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/trainerImages/'.$final_name );

		//Saving data into the main table tbl_product
		$statement = $pdo->prepare("INSERT INTO trainer(
										trainer1_name,
										trainer1_image,
                                        about_me,
                                        aboutme_paragraph,
										trainer1_skill									
									) VALUES (?,?,?,?,?)");
		$statement->execute(array(
										$_POST['trainer1_name'],
										$final_name,
                                        $_POST['about_me'],
                                        $_POST['aboutme_paragraph'],
										$_POST['trainer1_skill']
									));

		

        
	
    	$success_message = 'Trainer is added successfully.';
    }
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Trainer</h1>
	</div>
	<div class="content-header-right">
		<a href="trainer_settings.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


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
							<label for="" class="col-sm-3 control-label">Trainer Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="trainer1_name" class="form-control">
							</div>
						</div>	
						
                        <div class="form-group">
							<label for="" class="col-sm-3 control-label">Trainer skill <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="trainer1_skill" class="form-control">
							</div>
						</div>	
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">about_me <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="about_me" class="form-control">
							</div>
						</div>	
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Featured Photo <span>*</span></label>
							<div class="col-sm-4" style="padding-top:4px;">
								<input type="file" name="trainer1_image">
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-8">
								<textarea name="aboutme_paragraph" class="form-control" cols="30" rows="10" id="editor1"></textarea>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>