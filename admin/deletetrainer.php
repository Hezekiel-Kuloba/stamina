<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['trainer_id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the trainer_id is valid or not
	$statement = $pdo->prepare("SELECT * FROM trainer WHERE trainer_id=?");
	$statement->execute(array($_REQUEST['trainer_id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<?php
	// Getting photo trainer_id to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM trainer WHERE trainer_id=?");
	$statement->execute(array($_REQUEST['trainer_id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$trainer1_image = $row['trainer1_image'];
		unlink('../images/trainerImages/'.$trainer1_image);
	}

	// Getting other photo trainer_id to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM trainer WHERE trainer_id=?");
	$statement->execute(array($_REQUEST['trainer_id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$photo = $row['photo'];
		unlink('../images/trainerImages/'.$photo);
	}


	// Delete from tbl_photo
	$statement = $pdo->prepare("DELETE FROM trainer WHERE trainer_id=?");
	$statement->execute(array($_REQUEST['trainer_id']));

	
	header('location: trainer_settings.php');
?>