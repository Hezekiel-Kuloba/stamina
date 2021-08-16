<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['background_image']['name'];
    $path_tmp = $_FILES['background_image']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='svg' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif, png or svg file<br>';
        }
    }

    if($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM schedule WHERE schedule_id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $background_image = $row['background_image'];
            unlink('../images/scheduleImages/'.$background_image);
        }

        // updating the data
        $final_name = 'background_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET background_image=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & schedule us page
if(isset($_POST['form2'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET backgroundimage_text1=? WHERE schedule_id=1");
    $statement->execute(array($_POST['backgroundimage_text1']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & schedule us page
if(isset($_POST['form3'])) {    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET text1=?, text2=? WHERE schedule_id=1");
    $statement->execute(array($_POST['text1'],$_POST['text2']));
    $success_message = 'General content settings is updated successfully.';  
}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM schedule WHERE schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $background_image = $row['background_image'];	
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$text1 = $row['text1'];
	$text2 = $row['text2'];
}
?>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
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

                <p>
                    <?php echo $success_message; ?>
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">schedule Background Image settings</a></li>
                        <li><a href="#tab_2" data-toggle="tab">schedule Info</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $background_image; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="background_image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule Background Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">backgroundimage_text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="backgroundimage_text1"
                                                    value="<?php echo $backgroundimage_text1; ?>">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_2">




                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">schedule text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="text1"
                                                    value="<?php echo $text1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">schedule text2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="text2"
                                                    value="<?php echo $text2; ?>">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form3">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</section>
                    <?php require_once('footer.php'); ?>