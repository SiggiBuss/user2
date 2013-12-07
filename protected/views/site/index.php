<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1> <?php echo CHtml::encode(Yii::app()->user->name); ?>, welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


 <?php $q = User::model()->findByPk(yii::app()->user->id);
 echo 'deine Rolle ist: ';
             if (isset($q)) {
		echo $q->getRole(); 
                $Currency = $q->company->currency_code->currency_code;
                $locale = $q->company->country_code->locale;
                echo '<br>'.$Currency.'<br>';
                echo 'locale :'.$locale.'<br>';
               
                }
             else
                 echo 'guest';
echo '<br>';   
?>

<?php 
  Yii::app()->language = $locale;
?>

<?php
if (isset(Yii::app()->user->tenant))
 echo 'tenant :'.Yii::app()->user->tenant.'<br>'; ?>

<?php //echo 'tentant1:'.Yii::app()->user->tenant.'<br>'; ?>
   
<?php 
       // $arr = CJSON::encode(include('path/to/yii/framework/i18n/data/de_de.php')['monthNames']['wide']);

?>

<?php $domain = $_SERVER['HTTP_HOST']; ?>
<?php echo'domain:'.$domain;?>
<?php //yii::app()->user->setState('currency',Yii::app()->params->act_currency); ?>

<?php //$Currency = Yii::app()->user->getState('currency'); ?>

<ul>
<li>Current language: <?php echo Yii::app()->getLanguage(); ?></li>
<li>getID() : <?php echo Yii::app()->locale->getLanguageID(Yii::app()->getLanguage()); ?></li>

<li>Date &amp; time short: <?php echo Yii::app()->dateFormatter->formatDateTime(time(), 'short'); ?></li>
<li>Date medium: <?php echo Yii::app()->dateFormatter->formatDateTime(time(), 'medium', false); ?></li>
<li>Time medium: <?php echo Yii::app()->dateFormatter->formatDateTime(time(), false, 'medium'); ?></li>
<li>Date short format: <?php echo Yii::app()->locale->getDateFormat('short'); ?></li>
<li>Time medium format: <?php echo Yii::app()->locale->getTimeFormat('medium'); ?></li>
<li>Parsed date and time: <?php echo Yii::app()->dateFormatter->format(Yii::app()->locale->getDateFormat('long'),CDateTimeParser::parse('04/06/2010', 'dd/MM/yyyy')); ?></li>
<li>Date &amp; time custom format: <?php echo Yii::app()->dateFormatter->formatDateTime(time(), 'small', 'small'); ?></li>
<li> localeDisplayName : <?php echo Yii::app()->locale->getLocaleDisplayName('de'); ?></li>
<li> locale AM Name : <?php echo Yii::app()->locale->getAMName(); ?></li>
<li> locale currency : <?php echo Yii::app()->locale->getCurrencyFormat(); ?></li>
<li> locale decimalformat : <?php echo Yii::app()->locale->getDecimalFormat(); ?></li>
<li> locale currency Symbol : <?php echo Yii::app()->locale->getCurrencySymbol($Currency); ?></li>
<li> locale NumberFormatter : <?php //echo Yii::app()->locale->getNumberFormatter(); ?></li>
<li> Actual Currency : <?php echo $Currency; ?></li>

<li> locale $numberformat : <?php echo Yii::app()->format->formatNumber(10388.333); ?></li>
<li> money $numberformat : <?php echo Yii::app()->numberFormatter->formatCurrency(10388.333,$Currency); ?></li>



</ul>
