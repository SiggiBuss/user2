<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php
if (isset(Yii::app()->user->tenant))
 echo 'tenant :'.Yii::app()->user->tenant.'<br>'; ?>

<?php 
if (yii::app()->user->checkAccess('Administrator',Yii::app()->user->id))
    echo 'Administratoild<br>';
if (yii::app()->user->checkAccess('Steuerberater',Yii::app()->user->id))
    echo 'Steuerberaterbild<br>';
if (yii::app()->user->checkAccess('Kunde',Yii::app()->user->id))
    echo 'Kundebild<br>';
if (yii::app()->user->checkAccess('Mitarbeiter',Yii::app()->user->id))
    echo 'Mitarbeiterbild<br>';
if (yii::app()->user->checkAccess('Teamleiter',Yii::app()->user->id))
    echo 'Teamleiterbild<br>';
if (yii::app()->user->checkAccess('Buchhaltung',Yii::app()->user->id))
    echo 'Buchhaltungbild<br>'; ?>