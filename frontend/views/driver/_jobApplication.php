<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($application, 'agree') ?>
    <?= $form->field($application, 'sign') ?>

    <div class="form-group">
        <?= Html::submitButton('Continue', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
