<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<form action="" method="post" enctype="multipart/form-data">

			<!-- Add Name -->	
			  <div class="form-group">
			    <label for="fullname">Name</label>
			    <input type="text" class="form-control" id="fullname" name="fullname">
			    <small class="form-text text-danger"><?= form_error('fullname'); ?></small>
			  </div>

			  <!-- Add Email -->
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" id="email" name="email">
			    <small class="form-text text-danger"><?= form_error('email'); ?></small>
			  </div>

			  <!-- Add Address -->
			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="text" class="form-control" id="address" name="address">
			    <small class="form-text text-danger"><?= form_error('address'); ?></small>
			  </div>

			  <!-- Add Company -->
			  <div class="form-group">
			    <label for="company">Company</label>
			    <select class="form-control" id="company" name="company">
			    <?php foreach($company as $cmp): ?>
			      <option value="<?= $cmp['idcompany']; ?>"><?= $cmp['name']; ?></option> 
				<?php endforeach; ?>
			    </select>
			  </div>

			  <!-- Add City -->
			  <div class="form-group">
			    <label for="city">City</label>
			    <select class="form-control" id="city" name="city">
			    <?php foreach($city as $cty): ?>
			      <option value="<?= $cty['idcity']; ?>"><?= $cty['cityname']; ?>,<?= $cty['country']; ?></option> 
				<?php endforeach; ?>
			    </select>
			  </div>

			<!-- Add Picture -->
			<div class="form-group">
				<label for="foto">Picture</label>	
				<input type="file" class="form-control" name="foto">
			</div>

			<!-- Btn Back & Save --> 
			<a href="<?=base_url(); ?>members" class="btn btn-primary">Back</a> 
			<button type="submit" id="Submitbtn" name="Submitbtn" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>