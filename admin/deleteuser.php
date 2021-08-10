<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['customer_id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the customer_id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE customer_id=?");
	$statement->execute(array($_REQUEST['customer_id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<?php

	// Delete from tbl_photo
	$statement = $pdo->prepare("DELETE FROM tbl_customer WHERE customer_id=?");
	$statement->execute(array($_REQUEST['customer_id']));

	
	header('location: user_settings.php');
?>