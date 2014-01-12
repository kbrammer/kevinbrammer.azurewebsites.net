<div class="row">
	<div class="col-md-12">
		<h2>Test</h2>

		<?php echo Form::open(); ?>

		<?php echo Form::label('content', 'Content'); ?>
		<?php echo Form::textarea('content', $test->content, array('class' => 'form-control')); ?>

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