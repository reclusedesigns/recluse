<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Recluse</title>
	<meta name="author" content="Recluse">
	
	<!-- vendor files -->
	<link rel="stylesheet" href="design/vendor/bootstrap/css/bootstrap.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/vendor/fontello/css/fontello.css" type="text/css" media="screen" charset="utf-8">
	<!-- <link rel="stylesheet" href="design/vendor/nivo-slider/nivo-slider.css" type="text/css" media="screen" /> -->
	
	<!-- muay styles -->
	<link rel="stylesheet" href="design/css/layout.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/css/home.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/vendor/ultotop/css/ui.totop.css" type="text/css" media="screen" />
	
	<!-- the javascriptage -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="design/vendor/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/scrollto.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/ultotop/js/easing.js" type="text/javascript"></script>
	<script src="design/vendor/ultotop/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script src="design/vendor/nivo-slider/jquery.nivo.slider.js" type="text/javascript" charset="utf-8"></script>
<!-- 	<script src="design/scripts/toys.js" type="text/javascript" charset="utf-8"></script> -->
	
	<!-- typekit! -->
	<script type="text/javascript" src="//use.typekit.net/xfk3ysb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="index">Recluse</a>
		  <!--
<ul class="nav">
				<li><a href="hireme"><strong><i class="icon icon-info-circle-2"></i> Status:</strong> Available for work</a></li>
			</ul>	
-->
			<ul class="nav pull-right">
			<?php $full_name = $_SERVER['PHP_SELF']; $name_array = explode('/',$full_name); $count = count($name_array); $page_name = $name_array[$count-1];?>
				<li class="<?php echo ($page_name=='about.php')?'active':'';?>"><a href="about.php"><i class="icon icon-feather"></i></a></li>
				<li class="<?php echo ($page_name=='method.php')?'active':'';?>"><a href="method.php"><i class="icon icon-cog-2"></i> </a></li>
				<li class="<?php echo ($page_name=='contact.php')?'active':'';?>"><a href="contact.php"><i class="icon icon-mail-2"></i> </a></li>
		  </ul>
		</div>
	</div>
	</div>

