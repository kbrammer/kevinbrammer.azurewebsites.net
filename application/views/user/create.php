<?= Form::open('user/create', array('role' => 'form', 'class' => 'form-signin')); ?>
<div class="container">

	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="form-signin-heading">Create a New User</h2>
			<? if ($message) : ?>
			<p class="text-success"><?= $message; ?></p>
			<? endif; ?>
		</div>
	</div> <!-- .row -->

	<div class="row">
		<div class="col-md-4 col-md-offset-4">

			<div class="form-group">
				<?= Form::label('username', 'Username'); ?>
				<?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')); ?>
				<p class="text-warning"><?= Arr::get($errors, 'username'); ?></p>
			</div>

			<div class="form-group">
				<?= Form::label('email', 'Email Address'); ?>
				<?= Form::input('email', HTML::chars(Arr::get($_POST, 'email')), array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')); ?>
				<p class="text-warning"><?= Arr::get($errors, 'email'); ?></p>
			</div>

			<div class="form-group">
				<?= Form::label('password', 'Password'); ?>
				<?= Form::password('password', NULL, array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')); ?>
				<p class="text-warning"><?= Arr::path($errors, '_external.password'); ?></p>
			</div>

			<div class="form-group">
				<?= Form::label('password_confirm', 'Confirm Password'); ?>
				<?= Form::password('password_confirm', NULL, array('class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')); ?>
				<p class="text-warning"><?= Arr::path($errors, '_external.password_confirm'); ?></p>
			</div>

		</div>
	</div> <!-- .row -->

	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<?= Form::submit('create', 'Create User', array('class' => 'btn btn-lg btn-primary btn-block')); ?>	
			<p class="text-info">Or <?= HTML::anchor('user/login', 'login'); ?> if you have an account already.</p>
		</div>
	</div> <!-- .row -->

</div> <!-- .container -->
<?= Form::close(); ?>