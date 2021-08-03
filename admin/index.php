<?php require_once('header.php'); ?>
<?php
//Change Logo
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['photo_backgroundImage']['name'];
    $path_tmp = $_FILES['photo_backgroundImage']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $background_image = $row['background_image'];
            unlink('../images/backgroundImages/'.$background_image);
        }

        // updating the data
        $final_name = 'background_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/backgroundImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET background_image=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Background image is updated successfully.';
        
    }
}
// Change Box image1
if(isset($_POST['form3'])) {
    $valid = 1;

    $path = $_FILES['photo_image1']['name'];
    $path_tmp = $_FILES['photo_image1']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $image1 = $row['image1'];
            unlink('../images/svgImages/'.$image1);
        }

        // updating the data
        $final_name = 'image1'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/svgImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET image1=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Box image is updated successfully.';
        
    }
}
// Change Box image2
if(isset($_POST['form4'])) {
    $valid = 1;

    $path = $_FILES['photo_image2']['name'];
    $path_tmp = $_FILES['photo_image2']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $image2 = $row['image2'];
            unlink('../images/svgImages/'.$image2);
        }

        // updating the data
        $final_name = 'image2'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/svgImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET favicon=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Box image is succesfully updated.';
        
    }
}
//Box image3
if(isset($_POST['form5'])) {
    $valid = 1;

    $path = $_FILES['photo_image3']['name'];
    $path_tmp = $_FILES['photo_image3']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $image3 = $row['image3'];
            unlink('../images/svgImages/'.$image3);
        }

        // updating the data
        $final_name = 'image3'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/svgImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET image3=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Box image is succesfully updated.';
        
    }
}
if(isset($_POST['form7'])) {
    $valid = 1;

    $path = $_FILES['photo_client']['name'];
    $path_tmp = $_FILES['photo_client']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $client_image = $row['client_image'];
            unlink('../images/clientImages/'.$client_image);
        }

        // updating the data
        $final_name = 'client_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/clientImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET client_image=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Client image is succesfully updated.';
        
    }
}
if(isset($_POST['form8'])) {
    $valid = 1;

    $path = $_FILES['photo_client1']['name'];
    $path_tmp = $_FILES['photo_client1']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $client1_image = $row['client1_image'];
            unlink('../images/clientImages/'.$client1_image);
        }

        // updating the data
        $final_name = 'client1_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/clientImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET client1_image=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Client image is succesfully updated.';
        
    }
}
if(isset($_POST['form9'])) {
    $valid = 1;

    $path = $_FILES['photo_client2']['name'];
    $path_tmp = $_FILES['photo_client2']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $client2_image = $row['client2_image'];
            unlink('../images/clientImages/'.$client2_image);
        }

        // updating the data
        $final_name = 'client2_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/clientImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET client2_image=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Client image is succesfully updated.';
        
    }
}

if(isset($_POST['form10'])) {
    $valid = 1;

    $path = $_FILES['photo_discount_banner']['name'];
    $path_tmp = $_FILES['photo_discount_banner']['tmp_name'];

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
        $statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $discount_banner_image = $row['discount_banner_image'];
            unlink('../images/bannerImages/'.$discount_banner_image);
        }

        // updating the data
        $final_name = 'discount_banner_image'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../images/bannerImages/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("UPDATE home SET discount_banner_image=? WHERE home_id=2");
        $statement->execute(array($final_name));

        $success_message = 'Banner image is succesfully updated.';
        
    }
}

//Footer & Contact us page
if(isset($_POST['form2'])) {
    
    // updating the database
    $statement = $pdo->prepare("UPDATE home SET backgroundimage_text1=?, backgroundimage_text2=?, backgroundimage_text3=? WHERE home_id=2");
    $statement->execute(array($_POST['backgroundimage_text1'],$_POST['backgroundimage_text2'],$_POST['backgroundimage_text3']));
    $success_message = 'General content settings is updated successfully.';
    
}

if(isset($_POST['form6'])) {
    
    // updating the database

    $statement = $pdo->prepare("UPDATE home SET image1_text1=?, image1_text2=?, image2_text1=?, image2_text2=?,  image3_text1=?,  image3_text2=? WHERE home_id=2");
    $statement->execute(array($_POST['image1_text1'],$_POST['image1_text2'],$_POST['image2_text1'],$_POST['image2_text2'],$_POST['image3_text1'],$_POST['image3_text2']));
    $success_message = 'General content settings is updated successfully.';
    
}
if(isset($_POST['form11'])) {
    
    // updating the database

    $statement = $pdo->prepare("UPDATE home SET clients=?, client_name=?, client_text=?, client1_name=?, client1_text=?, client2_name=?, client2_text=? WHERE home_id=2");
    $statement->execute(array($_POST['clients'],$_POST['client_name'],$_POST['client_text'],));
    $success_message = 'General content settings is updated successfully.';
    
}

if(isset($_POST['form12'])) {
    
    // updating the database

    $statement = $pdo->prepare("UPDATE home SET discount_banner_text1=?, discount_banner_text2=?, discount_banner_text3=?, discount_banner_text4=?, discount_banner_text5=?  WHERE home_id=2");
    $statement->execute(array($_POST['discount_banner_text1=?'], $_POST['discount_banner_text2=?'], $_POST['discount_banner_text3=?'], $_POST['discount_banner_text4=?'], $_POST['discount_banner_text5=?']));
    $success_message = 'General content settings is updated successfully.';
    
}
?>
<?php
$statement = $pdo->prepare("SELECT * FROM home WHERE home_id=2");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $background_image = $row['background_image'];	
	$backgroundimage_text1 = $row['backgroundimage_text1'];
	$backgroundimage_text2 = $row['backgroundimage_text2'];
	$backgroundimage_text3 = $row['backgroundimage_text3'];
	$image1 = $row['image1'];
	$image1_text1 = $row['image1_text1'];
	$image1_text2 = $row['image1_text2'];
	$image2 = $row['image2'];
	$image2_text1 = $row['image2_text1'];
	$image2_text2 = $row['image2_text2'];
	$image3 = $row['image3'];
	$image3_text1 = $row['image3_text1'];
	$image3_text2 = $row['image3_text2'];
    $clients = $row['clients'];
	$client_image = $row['client_image'];
	$client_name = $row['client_name'];
	$client_text = $row['client_text'];
	$client1_image = $row['client1_image'];
	$client1_name = $row['client1_name'];
	$client1_text = $row['client1_text'];
	$client2_image = $row['client2_image'];
	$client2_name = $row['client2_name'];
	$client2_text = $row['client2_text'];
	$discount_banner_image = $row['discount_banner_image'];
	$discount_banner_text1 = $row['discount_banner_text1'];
	$discount_banner_text2 = $row['discount_banner_text2'];
	$discount_banner_text3 = $row['discount_banner_text3'];
	$discount_banner_text4 = $row['discount_banner_text4'];
	$discount_banner_text5 = $row['discount_banner_text5']; 
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
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Background Image Settings</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Box image settings</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Clients Comments settings</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Discount Banner settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">


                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/backgroundImages/<?php echo $background_image; ?>"
                                                class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_backgroundImage">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form1">Update
                                                Background image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Background image text1 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="backgroundimage_text1"
                                                value="<?php echo $backgroundimage_text1; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Background image text2 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="backgroundimage_text2"
                                                value="<?php echo $backgroundimage_text2; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Background image text3 </label>
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

                    <div class="tab-pane " id="tab_3">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/clientImages/<?php echo $client_image; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_client">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form7">Update
                                                Client image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/clientImages/<?php echo $client1_image; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_client1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form8">Update
                                                Client1 image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/clientImages/<?php echo $client2_image; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_client2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form9">Update
                                                Client2 image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Client text -->
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Client Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client_name"
                                                value="<?php echo $client_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Client text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client_text"
                                                value="<?php echo $client_text; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Client Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client1_name"
                                                value="<?php echo $client1_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Client text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client1_text"
                                                value="<?php echo $client1_text; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Client Name </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client2_name"
                                                value="<?php echo $client2_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Client text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="client2_text"
                                                value="<?php echo $client2_text; ?>">
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
                    <div class="tab-pane " id="tab_4">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/bannerImages/<?php echo $discount_banner_image; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="">photo_discount_banner
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form10">Update
                                                Banner image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Banner Image text1 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="discount_banner_text1"
                                                value="<?php echo $discount_banner_text1; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Banner Image text2 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="discount_banner_text2"
                                                value="<?php echo $discount_banner_text2; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Banner Image text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="discount_banner_text3"
                                                value="<?php echo $discount_banner_text3; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Banner Image text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="discount_banner_text4"
                                                value="<?php echo $discount_banner_text4; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Banner Image text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="discount_banner_text5"
                                                value="<?php echo $discount_banner_text5; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form12">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane " id="tab_2">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/svgImages/<?php echo $image1; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_image1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form3">Update
                                                Box image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Box image 2 -->
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/svgImages/<?php echo $image2; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_image2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form4">Update
                                                Box image2</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../images/svgImages/<?php echo $image3; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_image3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form5">Update
                                                Box image3</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Box Image1 text </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="image1_text1"
                                                value="<?php echo $image1_text1; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Box image1 text2 </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="image1_text2"
                                                value="<?php echo $image1_text2; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Box Image2 text1</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="image2_text1"
                                                value="<?php echo $image2_text1; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Box Image2 text2</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="image2_text2"
                                                value="<?php echo $image2_text2; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Box Image3 text1</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="image3_text1"
                                                value="<?php echo $image3_text1; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Box Image3 text2</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="image3_text2"
                                                value="<?php echo $image3_text2; ?>">
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
                </div>

                <?php require_once('footer.php'); ?>