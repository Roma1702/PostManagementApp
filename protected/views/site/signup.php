<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Sign Up';
$this->breadcrumbs=array(
    'Sign Up',
);
?>

<h1>Sign Up</h1>

<p>Please fill out the following form with your registration data:</p>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'registartion-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username',array('size'=>60,'minlength'=>6,'maxlength'=>255)); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password',array('size'=>60,'minlength'=>6,'maxlength'=>255)); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password2'); ?>
        <?php echo $form->passwordField($model, 'password2',array('size'=>60,'minlength'=>6,'maxlength'=>255)); ?>
        <?php echo $form->error($model, 'password2'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Sign up'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>