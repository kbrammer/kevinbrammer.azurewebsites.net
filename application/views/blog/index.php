<?php foreach($posts as $post): ?>
  <div class="row">
    <div class="col-md-12">
      <h2><?= $post->title ?></h2>
      <h3 class="subtitle"><small>Published by <?= $post->user->full_name ?> on <?= strftime('%B %d, %Y', strtotime($post->date)) ?></small></h3>
      <p><?= Text::limit_words($post->excerpt) ?></p>
      <p><a class="btn btn-default" href="<?= URL::site('blog/' . $post->url_title) ?>" role="button">Read more &raquo;</a></p>
    </div>
  </div>
  <hr>
<?php endforeach; ?>