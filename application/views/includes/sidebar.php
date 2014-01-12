<?php echo Form::open(); ?>
<!-- <p>Search for:</p> -->
<div class="input-group">
  <span class="input-group-addon">
    <span class="glyphicon glyphicon-search"></span>
  </span>
  <input type="text" name="search" class="form-control" placeholder="Search for...">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">Go!</button>
  </span>
</div>
<?php echo Form::close(); ?>

<h3>Recent Posts</h3>
<ul class="list-unstyled">
  <?php foreach($recent_posts as $recent_post): ?>
    <li><a class="" href="<?= URL::site('blog/detail/' . $recent_post->url_title) ?>" role="button"><?= $recent_post->title ?></a></li>
  <?php endforeach; ?>
</ul>