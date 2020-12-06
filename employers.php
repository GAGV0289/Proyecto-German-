<?php include("db.php") ?>

<?php include("includes/header.php") ?>


<div class="container p-4">
	<div class="row">

		<div class="col-md-4">
			
			<div class="card card-body">
				
				<form action="save_task.php" method="POST">
					
					<div class="form-group">
						<input type="text" name="first_Name" class="form-control" placeholder="First name" autofocus>
					</div>

					<div class="form-group">
						<input type="text" name="last_Name" class="form-control" placeholder="Last name">
					</div>
					<input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
				</form>		
			
			</div>	
		
		</div>


		<div class="col-md-8">
			
		</div>			
	</div>
</div>



<?php include("includes/footer.php") ?>