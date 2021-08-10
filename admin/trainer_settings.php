<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Trainers</h1>
	</div>
	<div class="content-header-right">
		<a href="addtrainer.php" class="btn btn-primary btn-sm">Add Trainers</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">SL</th>
								<th>Photo</th>
								<th width="200">Trainer Name</th>
								<th width="200">Trainer Skill</th>
								<th width="200">Trainer Intro</th>
								
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare("SELECT
														
														t1.trainer_id,
														t1.trainer1_name,
														t1.trainer1_skill,
														t1.about_me,
														t1.trainer1_image

							                           	FROM trainer t1            
							                           	ORDER BY t1.trainer_id DESC
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td style="width:130px;"><img src="../images/trainerImages/<?php echo $row['trainer1_image']; ?>" alt="<?php echo $row['trainer1_name']; ?>" style="width:100px;"></td>
									<td><?php echo $row['trainer1_name']; ?></td>
									<td><?php echo $row['trainer1_skill']; ?></td>
									<td><?php echo $row['about_me']; ?></td>
								
									
									<td>										
										<a href="edittrainer.php?trainer_id=<?php echo $row['trainer_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="deletetrainer.php?trainer_id=<?php echo $row['trainer_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
                <p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>