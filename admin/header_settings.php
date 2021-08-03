<?php require_once('header.php'); ?>
<?php
//Change Logo
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['photo_logo']['name'];
    $path_tmp = $_FILES['photo_logo']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM header WHERE header_id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $logo = $row['logo'];
            unlink('../images/logoImages/'.$logo);
        }

        // updating the data
        $final_name = 'logo'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/logoImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE header SET logo=? WHERE header_id=1");
        $statement->execute(array($final_name));

        $success_message = 'Logo is updated successfully.';
        
    }
}
// Change Favicon
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['photo_favicon']['name'];
    $path_tmp = $_FILES['photo_favicon']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM header WHERE header_id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $favicon = $row['favicon'];
            unlink('../images/faviconImages/'.$favicon);
        }

        // updating the data
        $final_name = 'favicon'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/faviconImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE header SET favicon=? WHERE header_id=1");
        $statement->execute(array($final_name));

        $success_message = 'Favicon is updated successfully.';
        
    }
}
//Footer & Contact us page
if(isset($_POST['form3'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE header SET phone_number=? WHERE header_id=1");
    $statement->execute(array($_POST['phone_number']));
    $success_message = 'General content settings is updated successfully.';
    
}
$statement = $pdo->prepare("SELECT * FROM header WHERE header_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $logo                            = $row['logo'];
    $favicon                         = $row['favicon'];
    // $contact_email                   = $row['contact_email'];
    $phone_number                    = $row['phone_number'];

}
?>
<?php
if(isset($_POST['form4'])) {
    
    // updating the database

    $statement = $pdo->prepare("UPDATE social SET twitter=?, facebook=?, instagram=?, whatsapp=? WHERE social_id=1");
    $statement->execute(array($_POST['twitter'],$_POST['facebook'],$_POST['instagram'],$_POST['whatsapp']));
    $success_message = 'General content settings is updated successfully.';
    
}
$statement = $pdo->prepare("SELECT * FROM social WHERE social_id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $facebook                            = $row['facebook'];
    $twitter                      = $row['twitter'];
    // $contact_email                   = $row['contact_email'];
    $instagram                   = $row['instagram'];
    $whatsapp                 = $row['whatsapp'];

    
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
            
            <p><?php echo $success_message; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="content">

<div class="row">
    <div class="col-md-12">
                        
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Contact</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Social Media</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">


                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="../images/logoImages/<?php echo $logo; ?>" class="existing-photo" style="height:80px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="photo_logo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form1">Update Logo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                        


                    </div>
                    <div class="tab-pane" id="tab_2">

                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="../images/faviconImages/<?php echo $favicon; ?>" class="existing-photo" style="height:40px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="photo_favicon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form2">Update Favicon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>


                    </div>
                    <div class="tab-pane" id="tab_3">

                        <form class="form-horizontal" action="" method="post">
                        <div class="box box-info">
                            <div class="box-body">
                                <!-- <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Email </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="contact_email" value="<?php echo $contact_email; ?>">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Phone Number </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>">
                                    </div>
                                </div>                            
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form3">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>


                    </div>
                    <div class="tab-pane" id="tab_4">

                        <form class="form-horizontal" action="" method="post">
                        <div class="box box-info">
                            <div class="box-body">
                                <!-- <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Email </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="contact_email" value="<?php echo $contact_email; ?>">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Twitter Link Address </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="twitter" value="<?php echo $twitter; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Facebook Link Address  </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="facebook" value="<?php echo $facebook; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Instagram Link Address </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="instagram" value="<?php echo $instagram; ?>">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form4">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>


                    </div>
                    <?php require_once('footer.php'); ?>