<?php

/* @var $this yii\web\View */

$this->title = 'Кабельная продукция';
?>

<?= $this->render('/blocks/mainBlock'); ?>
<?= $this->render('/blocks/catalogBlock', ['items'=>$items]); ?>
<?= $this->render('/blocks/ownProductionBlock'); ?>
<?= $this->render('/blocks/sliderBlock', ['slides'=>$slides]); ?>
<?= $this->render('/blocks/deliveryBlock'); ?>
<?= $this->render('/blocks/partnersBlock'); ?>
<?= $this->render('/blocks/aboutBlock'); ?>
<?= $this->render('/blocks/contactsBlock'); ?>