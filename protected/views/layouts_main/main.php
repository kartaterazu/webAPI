<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Web API Dhima</title>

		<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="1-PLVuLFLCZAbzzsEi6QhINNzH-Dr4qkVm7M9haGd4A" />
		<meta http-equiv="Cache-control" content="public">
		<meta http-equiv="Cache-control" content="private">
		<meta http-equiv="Cache-control" content="no-cache">
		<meta http-equiv="Cache-control" content="no-store">
		
		<!-- Latest compiled and minified Boootstrap CSS -->
		<link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css?v=1.0" rel="stylesheet">

		<!-- Optional bootstrap theme -->
		<link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap-theme.min.css?v=1.0" rel="stylesheet">

		<link href="<?php echo Yii::app()->request->baseUrl;?>/css/jquery-ui.min.css?v=1.0" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl;?>/css/styles.min.css?v=1.1" rel="stylesheet">

		<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	</head>
	<body>
	  	<!-- Start Content -->
	  	<?php echo $content; ?>
	  	<!-- End Content -->

		<script>
		  jQuery.ajaxSetup({async:true});
			$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
			  options.async = true;
		  });
		</script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js?v=1.0"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui.min.js?v=1.0"></script>

		<!-- Project Starter by Dhima Tauvik Ariezha -->

  	</body>
</html>
