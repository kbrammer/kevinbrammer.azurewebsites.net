<h2>Uploaded Images</h2>

<div class="row">
	<div class="col-md-12">
	<p><?= $message ?></p>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<?= Form::open('admin/images', array('enctype' => 'multipart/form-data')) ?>
		<?= Form::file('file') ?>
		<?= Form::submit('action', 'Save', array('class' => 'btn btn-primary', 'style' => 'margin: 20px 0;')) ?>
		<?= Form::close() ?>
	</div>
</div>

<div class="row">
	<?php
		$uploads = Kohana::list_files(NULL, array(DOCROOT.'uploads'));
		
		foreach($uploads as $file_name => $file_path):
			$full_name = 'uploads/'.$file_name;
	?>
	<div class="col-md-4">
		<a href="<?= URL::site($full_name) ?>"><?= HTML::image($full_name, array('class' => 'img-thumbnail gallery')) ?></a>
		<!-- <a href="<?= URL::site('admin/deleteimage/'.$file_name) ?>">Delete</a> -->
		<!-- <?= Form::input(NULL, URL::site($full_name), array('class' => 'form-control')) ?> -->
	</div>
	<?php endforeach; ?>
</div>