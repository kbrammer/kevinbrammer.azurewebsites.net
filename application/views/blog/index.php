<?php foreach($posts as $post): ?>
  <div class="row">
    <div class="col-md-12">
      <h2><?= $post->title ?></h2>
      <p><?= Text::limit_words($post->excerpt) ?></p>
      <p><a class="btn btn-default" href="<?= URL::site('blog/detail/' . $post->url_title) ?>" role="button">Read more &raquo;</a></p>
    </div>
  </div>
  <hr>
<?php endforeach; ?>