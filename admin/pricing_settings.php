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
        $statement = $pdo->prepare("SELECT * FROM pricing WHERE pricing_id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $background_image = $row['background_image'];
            unlink('../images/pricingImages/'.$background_image);
        }

        // updating the data
        $final_name = 'background_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/pricingImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE pricing SET background_image=? WHERE pricing_id=1");
        $statement->execute(array($final_name));
        $success_message = 'Pricing image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form2'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE pricing SET backgroundimage_text1=?, backgroundimage_text2=?, backgroundimage_text3=? WHERE pricing_id=1");
    $statement->execute(array($_POST['backgroundimage_text1'],$_POST['backgroundimage_text2'],$_POST['backgroundimage_text3']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form3'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE pricing SET text1=?, text2=? WHERE pricing_id=1");
    $statement->execute(array($_POST['text1'],$_POST['text2']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form4'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE pricing SET starter_text1=?, starter_text2=?,  starter_text3=?,  starter_text4=?,  starter_text5=?,  starter_text6=?,  starter_text7=?,  starter_text8=?,  starter_text9=?,  starter_text10=? WHERE pricing_id=1");
    $statement->execute(array($_POST['starter_text1'],$_POST['starter_text2'],$_POST['starter_text3'],$_POST['starter_text4'],$_POST['starter_text5'],$_POST['starter_text6'],$_POST['starter_text7'],$_POST['starter_text8'],$_POST['starter_text9'],$_POST['starter_text10']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form5'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE pricing SET basic_text1=?, basic_text2=?,  basic_text3=?, basic_text4=?, basic_text5=?, basic_text6=?, basic_text7=?, basic_text8=?, basic_text9=?, basic_text10=? WHERE pricing_id=1");
    $statement->execute(array($_POST['basic_text1'],$_POST['basic_text2'], $_POST['basic_text3'], $_POST['basic_text4'], $_POST['basic_text5'], $_POST['basic_text6'], $_POST['basic_text7'], $_POST['basic_text8'], $_POST['basic_text9'], $_POST['basic_text10']));
    $success_message = 'General content settings is updated successfully.';
    
}
//Footer & Contact us page
if(isset($_POST['form6'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE pricing SET pro_text1=?, pro_text2=?, pro_text3=?, pro_text4=?, pro_text5=?, pro_text6=?, pro_text7=?, pro_text8=?, pro_text9=?, pro_text10=? WHERE pricing_id=1");
    $statement->execute(array($_POST['pro_text1'],$_POST['pro_text2'],$_POST['pro_text3'],$_POST['pro_text4'],$_POST['pro_text5'],$_POST['pro_text6'],$_POST['pro_text7'],$_POST['pro_text8'],$_POST['pro_text9'],$_POST['pro_text10']));
    $success_message = 'General content settings is updated successfully.';
    
}
if(isset($_POST['form7'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE pricing SET unlimited_text1=?, unlimited_text2=? unlimited_text3=?, unlimited_text4=?, unlimited_text5=?, unlimited_text6=?, unlimited_text7=?, unlimited_text8=?, unlimited_text9=?, unlimited_text10=? WHERE pricing_id=1");
    $statement->execute(array($_POST['unlimited_text1'],$_POST['unlimited_text2'],$_POST['unlimited_text3'],$_POST['unlimited_text4'],$_POST['unlimited_text5'],$_POST['unlimited_text6'],$_POST['unlimited_text7'],$_POST['unlimited_text8'],$_POST['unlimited_text9'],$_POST['unlimited_text10']));
    $success_message = 'General content settings is updated successfully.';
    
}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM pricing WHERE pricing_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Pricng Background settings</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Pricing Intro Text</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Starter Plan</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Basic Plan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Pro Plan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Unlimited Plan</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <img src="../images/pricingImages/<?php echo $background_image; ?>"
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
                                                    name="form1">Update Pricing Background Image</button>
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
                                            <label for="" class="col-sm-2 control-label">backgroundimage_text2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="backgroundimage_text2"
                                                    value="<?php echo $backgroundimage_text2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">backgroundimage_text3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="backgroundimage_text3"
                                                    value="<?php echo $backgroundimage_text3; ?>">
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
                                            <label for="" class="col-sm-2 control-label">Pricing text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="text1"
                                                    value="<?php echo $text1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pricing text2 </label>
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
                        <div class="tab-pane " id="tab_3">




                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text1"
                                                    value="<?php echo $starter_text1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text2"
                                                    value="<?php echo $starter_text2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text3"
                                                    value="<?php echo $starter_text3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text3</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text3"
                                                    value="<?php echo $starter_text3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text4 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text4"
                                                    value="<?php echo $starter_text4; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text5"
                                                    value="<?php echo $starter_text5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text6"
                                                    value="<?php echo $starter_text6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text7"
                                                    value="<?php echo $starter_text7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text8"
                                                    value="<?php echo $starter_text8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text9 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text9"
                                                    value="<?php echo $starter_text9; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Starter text10 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="starter_text10"
                                                    value="<?php echo $starter_text10; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form4">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_4">




                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text1"
                                                    value="<?php echo $basic_text1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text2"
                                                    value="<?php echo $basic_text2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text3"
                                                    value="<?php echo $basic_text3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text4 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text4"
                                                    value="<?php echo $basic_text4; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text5"
                                                    value="<?php echo $basic_text5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text6"
                                                    value="<?php echo $basic_text6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text7"
                                                    value="<?php echo $basic_text7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text8"
                                                    value="<?php echo $basic_text8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text9 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text9"
                                                    value="<?php echo $basic_text9; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Basic text10 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="basic_text10"
                                                    value="<?php echo $basic_text10; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form5">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_5">




                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text1"
                                                    value="<?php echo $pro_text1; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text2"
                                                    value="<?php echo $pro_text2; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text3"
                                                    value="<?php echo $pro_text3; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text4 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text4"
                                                    value="<?php echo $pro_text4; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text5"
                                                    value="<?php echo $pro_text5; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text6"
                                                    value="<?php echo $pro_text6; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text7"
                                                    value="<?php echo $pro_text7; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text8"
                                                    value="<?php echo $pro_text8; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text9 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text9"
                                                    value="<?php echo $pro_text9; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Pro text10 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pro_text10"
                                                    value="<?php echo $pro_text10; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form6">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>





                        </div>
                        <div class="tab-pane " id="tab_6">




                            <form class="form-horizontal" action="" method="post">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text1 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text1"
                                                    value="<?php echo $unlimited_text1; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text2 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text2"
                                                    value="<?php echo $unlimited_text2; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text3 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text3"
                                                    value="<?php echo $unlimited_text3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text4 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text4"
                                                    value="<?php echo $unlimited_text4; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text5 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text5"
                                                    value="<?php echo $unlimited_text5; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text6 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text6"
                                                    value="<?php echo $unlimited_text6; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text7 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text7"
                                                    value="<?php echo $unlimited_text7; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text8 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text8"
                                                    value="<?php echo $unlimited_text8; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text9 </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text9"
                                                    value="<?php echo $unlimited_text9; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Unlimited text </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="unlimited_text10"
                                                    value="<?php echo $unlimited_text10; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form7">Update</button>
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
    </section>
                    <?php require_once('footer.php'); ?>