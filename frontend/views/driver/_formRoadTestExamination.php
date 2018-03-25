<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($examination, 'pre_trip_inspect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'combination_units')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'placing_equipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'energency_equipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'operating_venchile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'turning_venchile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'breaking_venchile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($examination, 'backing_parking')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($examination, 'other')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
