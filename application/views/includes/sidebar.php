<?php echo Form::open(); ?>
<!-- <p>Search for:</p> -->
<div class="input-group">
  <span class="input-group-addon">
    <span class="glyphicon glyphicon-search"></span>
  </span>
  <input type="text" name="search" class="form-control" placeholder="Search for...">
  <span class="input-group-btn">
    <button class="btn btn-default" type="submit">Go!</button>
  </span>
</div>
<?php echo Form::close(); ?>

<h3>Recent Posts</h3>
<ul class="list-unstyled">
  <?php foreach($recent_posts as $recent_post): ?>
    <li><a class="" href="<?= URL::site('blog/detail/' . $recent_post->url_title) ?>" role="button"><?= $recent_post->title ?></a></li>
  <?php endforeach; ?>
</ul>


<h3>Subscribe</h3>
<a class="btn btn-default" href="<?= URL::site('feed/rss') ?>"><img src="<?= URL::base() ?>assets/images/feed-icon-14x14.png" alt="Feed Icon">&nbsp;RSS 2.0</a>