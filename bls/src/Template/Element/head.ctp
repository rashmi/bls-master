<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <?= $this->Html->charset() ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?= $this->fetch('title') ?> | <?= h(STORE_NAME) ?></title>
	<?= $this->Html->meta('icon') ?>
	<!-- Bootstrap core CSS -->	
	<?= $this->Html->css('admin/bootstrap.min.css') ?>
	<?= $this->Html->css('admin/fonts/css/font-awesome.min.css') ?>
	<?= $this->Html->css('admin/animate.min.css') ?>
	<?= $this->Html->css('admin/custom.css') ?>
	<?= $this->Html->css('admin/maps/jquery-jvectormap-2.0.3.css') ?>
	<?= $this->Html->css('admin/icheck/flat/green.css') ?>
	<?= $this->Html->css('admin/floatexamples.css') ?>
	
<!--	
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="fonts/css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">-->

<!-- Custom styling plus plugins -->
<!--<link href="css/custom.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
<link href="css/icheck/flat/green.css" rel="stylesheet" />
<link href="css/floatexamples.css" rel="stylesheet" type="text/css" />-->


  <!--<script src="js/jquery.min.js"></script>-->
 <?= $this->Html->script('admin/jquery.min.js');?>
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		


</head>