<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<form action="" method="post">
			  <div class="form-group">
			    <label for="companyname">Company Name</label>
			    <input type="text" class="form-control" id="companyname" name="companyname">
			    <small class="form-text text-danger"><?= form_error('companyname'); ?></small>
			  </div>
			  <a href="<?=base_url(); ?>company" class="btn btn-primary">Back</a> 
			<button type="submit" id="Submitbtn" name="Submitbtn" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>