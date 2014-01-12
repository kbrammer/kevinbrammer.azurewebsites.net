<div class="row">
	<div class="col-md-12">
		<h2>Edit Post</h2>

		<div class="error"><?= $msg; ?></div>

		<?php echo Form::open(); ?>

		<?php echo Form::label('status', 'Status'); ?>
		<?php echo Form::select('status', array('' => 'Select', 'draft' => 'Draft', 'published' => 'Published'), $post->status, array('class' => 'form-control')); ?>

		<?php echo Form::label('title', 'Title'); ?>
		<?php echo Form::input('title', $post->title, array('class' => 'form-control')); ?>

		<?php echo Form::label('excerpt', 'Excerpt'); ?>
		<?php echo Form::input('excerpt', $post->excerpt, array('class' => 'form-control')); ?>
		
		<?php echo Form::label('content', 'Content'); ?>
		<?php echo Form::textarea('content', $post->content, array('class' => 'form-control')); ?>

		<br>

		<?php if($post->status === 'published'): ?>
		<a href="<?= URL::site('blog/detail/' . $post->url_title) ?>" role="button" target="_blank">Preview</a>
		<?php endif; ?>

		<?php echo Form::submit(NULL, 'Save', array('class' => 'btn btn-primary pull-right')); ?>

		<?php echo Form::close(); ?>
		<br>
	</div>
</div>

<?php if(Kohana::$environment === Kohana::DEVELOPMENT && Request::current()->method() === Kohana_Request::POST): ?>
<div class="row">
	<div class="col-md-12">
		<pre>
		<?php
			print_r(Request::current()->post());
		?>
		</pre>
	</div>
</div>
<?php endif; ?>