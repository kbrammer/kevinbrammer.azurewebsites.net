<div class="row">
	<div class="col-md-12">
	  <h2><?= $post->title ?></h2>
	  <small><?= $post->user->full_name ?></small>
	  <p><?= $post->get_content() ?></p>
	</div>
</div>