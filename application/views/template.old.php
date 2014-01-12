<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= isset($site_name)?$site_name:'Website Design Baytown and Houston Texas - Affordable Website Designs' ?></title>
	<meta name="description" content=" Baytown Texas Web Design Company, we’re committed to consumer friendly web sites, unique in design and creativity. Terra ATS is a web development, web marketing, and design company serving Baytown and the Houston area."/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="baytown, web design, web, site, design,  baytown texas, web development, graphic design, texas , web design, website design houston texas, ecommerce website design, houston web page design, houston texas web design company, professional houston website design,  design, Houston, software development, software, software Houston, Houston texas software">
	<meta name="robot" content="index,follow">
	<meta name="Copyright" content="Terra Advanced Technical Solutions Inc of Baytown Texas">
	<link rel="stylesheet" href="<?= URL::base()?>assets/css/styles.css">   
	<!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
	<link rel="shortcut icon" href="<?= URL::base() ?>assets/ico/fav.png">
	<!--[if lt IE 9]>
	<script src="<?= URL::base()?>assets/js/html5shiv.js"></script>
	<script src="<?= URL::base()?>assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li <?= Request::current()->action() == 'index' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>home">Home</a></li>
          <li <?= Request::current()->action() == 'about' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>home/about">About</a></li>
          <!-- <li <?= Request::current()->action() == 'blog' ? 'class="active"' : '' ?>><a href="<?= URL::base() ?>blog">Blog</a></li> -->
        </ul>
        <h3 class="text-muted">Kevin Brammer</h3>
      </div>

      <div class="row marketing">
        <?php echo $content; ?>
      </div>

      <div class="footer">
        <p>&copy; Kevin Brammer <?= date('Y') ?></p>        
      </div>

    </div> <!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= URL::base() ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
