<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM sunday_schedule WHERE sunday_schedule_id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM sunday_schedule WHERE sunday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$sunday_schedule_id = $row['sunday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>

            <?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM monday_schedule WHERE monday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$monday_schedule_id = $row['monday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>
            <?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM tuesday_schedule WHERE tuesday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$tuesday_schedule_id = $row['tuesday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




}

?>

<?php

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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>
            <?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM wednesday_schedule WHERE wednesday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$wednesday_schedule_id = $row['wednesday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




}

?>

<?php

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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>
            <?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM thursday_schedule WHERE thursday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$thursday_schedule_id = $row['thursday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




}

?>

<?php

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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>
            <?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM friday_schedule WHERE friday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$friday_schedule_id = $row['friday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




}

?>

<?php

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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>
            <?php
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['image1']['name'];
    $path_tmp = $_FILES['image1']['tmp_name'];

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
            $image1 = $row['image1'];
            unlink('../images/scheduleImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image1=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['image2']['name'];
    $path_tmp = $_FILES['image2']['tmp_name'];

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
            $image2 = $row['image2'];
            unlink('../images/scheduleImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image2=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['image3']['name'];
    $path_tmp = $_FILES['image3']['tmp_name'];

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
            $image3 = $row['image3'];
            unlink('../images/scheduleImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image3=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['image4']['name'];
    $path_tmp = $_FILES['image4']['tmp_name'];

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
            $image4 = $row['image4'];
            unlink('../images/scheduleImages/'.$image4);
        }

        // updating the data
        $final_name = 'image4'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image4=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['image5']['name'];
    $path_tmp = $_FILES['image5']['tmp_name'];

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
            $image5 = $row['image5'];
            unlink('../images/scheduleImages/'.$image5);
        }

        // updating the data
        $final_name = 'image5'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image5=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form6'])) {
    $valid = 1;

    $path = $_FILES['image6']['name'];
    $path_tmp = $_FILES['image6']['tmp_name'];

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
            $image6 = $row['image6'];
            unlink('../images/scheduleImages/'.$image6);
        }

        // updating the data
        $final_name = 'image6'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image6=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['image7']['name'];
    $path_tmp = $_FILES['image7']['tmp_name'];

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
            $image7 = $row['image7'];
            unlink('../images/scheduleImages/'.$image7);
        }

        // updating the data
        $final_name = 'image7'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image7=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['image8']['name'];
    $path_tmp = $_FILES['image8']['tmp_name'];

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
            $image8 = $row['image8'];
            unlink('../images/scheduleImages/'.$image8);
        }

        // updating the data
        $final_name = 'image8'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/scheduleImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE schedule SET image8=? WHERE schedule_id=1");
        $statement->execute(array($final_name));
        $success_message = 'schedule image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form9'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET time1=?, time2=?, time3=?,, time4=?, time5=?, time6=?, time7=?, time8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['time1'],$_POST['time2'],$_POST['time3'],$_POST['time4'],$_POST['time5'],$_POST['time6'],$_POST['time7'],$_POST['time8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form10'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE schedule SET class1=?, class2=?, class3=?,, class4=?, class5=?, class6=?, class7=?, class8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['class1'],$_POST['class2'],$_POST['class3'],$_POST['class4'],$_POST['class5'],$_POST['class6'],$_POST['class7'],$_POST['class8']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form11'])) {
    
    $statement = $pdo->prepare("UPDATE schedule SET name1=?, name2=?, name3=?,, name4=?, name5=?, name6=?, name7=?, name8=? WHERE schedule_id=1");
    $statement->execute(array($_POST['name1'],$_POST['name2'],$_POST['name3'],$_POST['name4'],$_POST['name5'],$_POST['name6'],$_POST['name7'],$_POST['name8']));
    $success_message = 'General content settings is updated successfully.';
    
}


?>
<?php
$statement = $pdo->prepare("SELECT * FROM saturday_schedule WHERE saturday_schedule_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	// $logo = $row['logo'];
	$saturday_schedule_id = $row['saturday_schedule_id'];
	$image1 = $row['image1'];
	$time1 = $row['time1'];
	$class1 = $row['class1'];
	$name1 = $row['name1'];
	$image2 = $row['image2'];
	$time2 = $row['time2'];
	$class2 = $row['class2'];
	$name2 = $row['name2'];
	$image3 = $row['image3'];
	$time3 = $row['time3'];
	$class3 = $row['class3'];
	$name3 = $row['name3'];
	$image4 = $row['image4'];
	$time4 = $row['time4'];
	$class4 = $row['class4'];
	$name4 = $row['name4'];
	$image5 = $row['image5'];
	$time5 = $row['time5'];
	$class5 = $row['class5'];
	$name5 = $row['name5'];
	$image6 = $row['image6'];
	$time6 = $row['time6'];
	$class6 = $row['class6'];
	$name6 = $row['name6'];
	$image7 = $row['image7'];
	$time7 = $row['time7'];
	$class7 = $row['class7'];
	$name7 = $row['name7'];
	$image8 = $row['image8'];
	$time8 = $row['time8'];
	$class8 = $row['class8'];
	$name8 = $row['name8'];




}

?>

<?php

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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Image 1 Plan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Image 2 Plan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Image 3 Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Image 4 Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Image 5 Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Image 6 Plan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Image 7 Plan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Image 8 Plan</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image1; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image1</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time1"
                                                    value="<?php echo $time1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class1"
                                                    value="<?php echo $class1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name1"
                                                    value="<?php echo $name1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane active" id="tab_2">


                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $image2; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form1">Update schedule image2</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time2"
                                                    value="<?php echo $time2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class2"
                                                    value="<?php echo $class2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name2"
                                                    value="<?php echo $name2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form9">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image3; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update schedule image3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time3"
                                                    value="<?php echo $time3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class3"
                                                    value="<?php echo $class3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name3"
                                                    value="<?php echo $name3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form11">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab_4">


                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <img src="../images/pricingImages/<?php echo $image4; ?>"
                                                            class="existing-photo" style="height:80px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                                    <div class="col-sm-6" style="padding-top:6px;">
                                                        <input type="file" name="image4">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form1">Update schedule image4</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form class="form-horizontal" action="" method="post">
                                        <div class="box box-info">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">time4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="time4"
                                                            value="<?php echo $time4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class1 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class1"
                                                            value="<?php echo $class1; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">class4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="class4"
                                                            value="<?php echo $class4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label">name4 </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name4"
                                                            value="<?php echo $name4; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left"
                                                            name="form9">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





                                    </div>
                        <div class="tab-pane " id="tab_5">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image5; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update schedule image5</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time5"
                                                    value="<?php echo $time5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class5"
                                                    value="<?php echo $class5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name5"
                                                    value="<?php echo $name5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form13">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    <div class="tab-pane " id="tab_6">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image6; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image6">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update schedule image6</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time6"
                                                    value="<?php echo $time6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class6"
                                                    value="<?php echo $class6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name6"
                                                    value="<?php echo $name6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form14">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            <div class="tab-pane " id="tab_7">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image7; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image7">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update schedule image7</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time7"
                                                    value="<?php echo $time7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class7"
                                                    value="<?php echo $class7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name7"
                                                    value="<?php echo $name7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form15">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="tab-pane " id="tab_8">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/scheduleImages/<?php echo $image8; ?>"
                                                    class="existing-photo" style="height:80px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="image8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update schedule image8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">time8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="time8"
                                                    value="<?php echo $time8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">class8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="class8"
                                                    value="<?php echo $class8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">name8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name8"
                                                    value="<?php echo $name8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form16">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            </div>
                    <?php require_once('footer.php'); ?>

