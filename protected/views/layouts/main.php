<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
         <?php $q = User::model()->findByPk(yii::app()->user->id); ?>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
                <div id="logo"> 
                  
                    
                    <?php //echo CHtml::encode(Yii::app()->name); ?>
                </div>
       <?php $q = User::model()->findByPk(yii::app()->user->id);
             if (isset($q)) {
		echo '<div id="logo">'.$q->getRole().'</div><br>'; // CHtml::encode(Yii::app()->name).' '.
                echo '<a href='.Yii::app()->request->baseUrl.'/index.php/site/home> <img src="'.Yii::app()->request->baseUrl.$q->company->logo_path.'" alt="Logo"  width="200"></a>';
                }
             else
                 echo '<div id="logo">'.CHtml::encode(Yii::app()->name);
                     ?>
        <?php echo 'rules :'.((yii::app()->user->checkAccess('Administrator',$user)) || (yii::app()->user->checkAccess('Mitarbeiter',$user)) || (yii::app()->user->checkAccess('Teamleiter',$user))) ;?>   
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'init', 'url'=>array('/rbac/init')),
                                array('label'=>'test', 'url'=>array('/rbac/test')),
				array('label'=>'Login', 'url'=>array('/usr/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/usr/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
