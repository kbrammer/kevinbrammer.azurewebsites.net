<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= URL::base() ?>home">Kevin Brammer</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<!-- <li <?= Request::current()->action() == 'index' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>home">Home</a></li> -->
				<!-- <li <?= Request::current()->action() == 'about' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>home/about">About</a></li> -->
				<li <?= Request::current()->controller() == 'Blog' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>blog">Blog</a></li>
				<li <?= Request::current()->action() == 'music' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>home/music">Local Music</a></li>
			</ul>
		</div><!--/.nav-collapse -->

	</div>
</div>