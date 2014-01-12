<container>
	<div class="row">

		<div class="col-md-4 col-md-offset-4 ">
			<!-- action="/terra-ats/portal/user/login"  -->
			<form class="form-signin" role="form" method="post" accept-charset="utf-8">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" name="username" class="form-control" placeholder="Email address" required autofocus>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
				<label class="checkbox">
					<input type="checkbox" name="remember" value="remember-me"> Remember me
				</label>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
			<p>Or <?= HTML::anchor('user/create', 'create a new account'); ?></p>

			<? if ($message) : ?>
			<h3 class="message">
				<?= $message; ?>
			</h3>
		<? endif; ?>
	</div>

</div>
</container>

