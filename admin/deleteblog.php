<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['blog_id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the blog_id is valid or not
	$statement = $pdo->prepare("SELECT * FROM blog WHERE blog_id=?");
	$statement->execute(array($_REQUEST['blog_id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}
?>

<?php
	// Getting photo blog_id to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM blog WHERE blog_id=?");
	$statement->execute(array($_REQUEST['blog_id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$trainer1_image = $row['trainer1_image'];
		unlink('../images/blogImages/'.$trainer1_image);
	}

	// Getting other photo blog_id to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM blog WHERE blog_id=?");
	$statement->execute(array($_REQUEST['blog_id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$photo = $row['photo'];
		unlink('../images/blogImages/'.$photo);
	}


	// Delete from tbl_photo
	$statement = $pdo->prepare("DELETE FROM blog WHERE blog_id=?");
	$statement->execute(array($_REQUEST['blog_id']));

	
	header('location: blog_settings.php');
?>