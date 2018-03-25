<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="certificate-road-test-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($certificate, 'license_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($certificate, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($certificate, 'power_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($certificate, 'trailer_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($certificate, 'bus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>