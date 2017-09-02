<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="resource-type" content="document" />
    <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
    <meta http-equiv="content-language" content="en-us" />


    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/font.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/select2.css" rel="stylesheet" type="text/css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
	<script>
		jQuery.ajaxSetup({async:true});
    	$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
		    options.async = true;
		});
	</script>
  </head>
  <body>
  	<!-- Start Content -->
  	<section class="content">
		<div class="tab-fitur">
			<div class="container">
				<div class="row">
			<?php echo $content; ?>
				</div>
			</div>
		</div>
	</section>
  	<!-- End Content -->
  </body>
</html>