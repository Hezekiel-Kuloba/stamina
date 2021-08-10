<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['gallery_id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the gallery_id is valid or not
	$statement = $pdo->prepare("SELECT * FROM gallery WHERE gallery_id=?");
	$statement->execute(array($_REQUEST['gallery_id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<?php
	// Getting photo gallery_id to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM gallery WHERE gallery_id=?");
	$statement->execute(array($_REQUEST['gallery_id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$image1 = $row['image1'];
		unlink('../images/coursesImages/'.$image1);
	}

	// Getting other photo gallery_id to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM gallery WHERE gallery_id=?");
	$statement->execute(array($_REQUEST['gallery_id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$photo = $row['photo'];
		unlink('../images/coursesImages/'.$photo);
	}


	// Delete from tbl_photo
	$statement = $pdo->prepare("DELETE FROM gallery WHERE gallery_id=?");
	$statement->execute(array($_REQUEST['gallery_id']));

	
	header('location: gallery_settings.php');
?>