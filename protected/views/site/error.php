<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div style="margin-bottom: 50px"></div>
<div class="container" style="margin-bottom:70px;">
	<center><h1>Error <?php echo $code; ?></h1>
	<h2>System failure</h2>
	<h3>Please return to the home page</h3>
	<div class="error">
		<div>
			<?php echo $message; ?>
		</div>
	</div>
	</center>
</div>