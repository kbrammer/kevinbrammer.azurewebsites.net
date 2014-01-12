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

  <link rel="stylesheet" href="<?= URL::base()?>assets/css/styles.css">   
  <link rel="shortcut icon" href="<?= URL::base() ?>assets/ico/fav.png">

  <!--[if lt IE 9]>
  <script src="<?= URL::base()?>assets/js/html5shiv.js"></script>
  <script src="<?= URL::base()?>assets/js/respond.min.js"></script>
  <![endif]-->  
</head>
<body>
  <?php echo $navbar; ?>

  <?php echo $carousel; ?>
  
  <div class="container">
    
    <?php echo $content; ?>

    <?php echo $footer; ?>

  </div> <!-- /container -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="<?= URL::base() ?>assets/js/bootstrap.min.js"></script>

</body>
</html>