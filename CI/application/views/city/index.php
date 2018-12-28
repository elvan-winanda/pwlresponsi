<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div> 
<?php if($this->session->flashdata('flash')): ?>
<?php endif; ?>

	<div class="row mt-4">
		<div class="col-md-3">
			<a href="<?=base_url(); ?>city/add" class="btn btn-success">Add City Data</a>
		</div>
	</div>

	<div class="row mt-2">
		<div class="col-md-12">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">City Name</th>
      <th scope="col">Country</th>
 
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach($city as $ct) : ?>
    <tr>
      <th><?= $i; ?></th> 
      <td><?= $ct['cityname']; ?></td>
      <td><?= $ct['country']; ?></td>

      <td>
      	<a href="<?= base_url(); ?>city/edit/<?= $ct['idcity']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
      	<a href="<?= base_url(); ?>city/delete/<?= $ct['idcity']; ?>" class="btn btn-danger tombol-hapus"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>
</div>