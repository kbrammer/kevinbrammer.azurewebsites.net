<div class="row">
	<div class="col-md-12">
        <h2><?= $post->title ?></h2>
        <h3><small>Published by <?= $post->user->full_name ?> on <?= strftime('%B %d, %Y', strtotime($post->date)) ?></small></h3>
        <hr>
        <p><?= $post->get_content() ?></p>
        <hr>
        <!-- FB -->
        <div class="fb-like" data-href="http://kevinbrammer.com<?= Request::current()->url() ?>" data-send="true" data-width="450" data-show-faces="true" data-font="segoe ui"></div>
        <hr>
        <!-- Disqus -->
        <div id="disqus_thread"></div>

        <script type="text/javascript">
            var disqus_shortname = 'kbrammer'; 
            var disqus_identifier = '<?= $post->url_title ?>';
            (function () {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        <!-- end Disqus -->
	</div>
</div>