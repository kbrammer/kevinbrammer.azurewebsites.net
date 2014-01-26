<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $page_title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="<?= $page_title ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://kevinbrammer.com<?= Request::current()->url() ?>" />
  <meta property="og:image" content="http://kevinbrammer.com<?= URL::site('assets/images/gravatar.jpg') ?>" />
  <meta property="og:site_name" content="kevinbrammer.com" />
  
  <link rel="stylesheet" href="<?= URL::site('assets/css/styles.css')?>">
  <link rel="stylesheet" href="<?= URL::site('assets/js/highlight.js/styles/default.css')?>">
  <link rel="shortcut icon" href="<?= URL::site('assets/ico/fav.png')?>">
  <!-- <?= $host_name ?> -->
  <?php if($host_name !== 'http://kevinbrammer.com'): ?>
  <link rel="canonical" href="http://kevinbrammer.com<?= Request::current()->url() ?>"/>
  <?php endif; ?>
  <!--[if lt IE 9]>
  <script src="<?= URL::site('assets/js/html5shiv.js')?>"></script>
  <script src="<?= URL::site('assets/js/respond.min.js')?>"></script>
  <![endif]-->  
</head>
<body>
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=422467021130825";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <?php echo $navbar; ?>
  
  <div class="container">
    
    <div class="row">

      <div class="col-md-9">
        <?php echo $content; ?>
      </div><!-- /col-md-9 -->

      <div class="col-md-3 sidebar">
        <?php echo $sidebar; ?>
      </div><!-- /col-md-3 -->

    </div><!-- /row -->

    <?php echo $footer; ?>

  </div> <!-- /container -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="<?= URL::site('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?= URL::site('assets/js/highlight.js/highlight.pack.js')?>"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45547579-1', 'kevinbrammer.com');
    ga('send', 'pageview');
  </script>
</body>
</html>