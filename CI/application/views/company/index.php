<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div> 
<?php if($this->session->flashdata('flash')): ?>
<?php endif; ?>

	<div class="row mt-4">
		<div class="col-md-3">
			<a href="<?=base_url(); ?>company/add" class="btn btn-success">Add Company Data</a>
		</div>
	</div>

	<div class="row mt-2">
		<div class="col-md-12">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Company Name</th>
 
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach($company as $cp) : ?>
    <tr>
      <th><?= $i; ?></th> 
      <td><?= $cp['name']; ?></td>


      <td>
      	<a href="<?= base_url(); ?>company/edit/<?= $cp['idcompany']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
      	<a href="<?= base_url(); ?>company/delete/<?= $cp['idcompany']; ?>" class="btn btn-danger tombol-hapus"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>
</div>