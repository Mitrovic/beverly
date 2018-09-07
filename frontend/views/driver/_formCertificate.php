<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="certificate-road-test-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="panel-heading">

        <i class="fa fa-car"></i> Instructions: The original or copy of the certificate shall be retained in the employing motor
        carrier’s driver qualification file of the person examined and copy given to the person who was examined. (49 CFR
        391.31(e)(f)(g))

        <div class="clearfix"></div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <?= $form->field($certificate, 'license_number')->textInput(['maxlength' => true]) ?>
        <?= $form->field($certificate, 'state')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($certificate, 'power_unit')->textInput(['maxlength' => true]) ?>
        <?= $form->field($certificate, 'trailer_type')->textInput(['maxlength' => true]) ?>
        <?= $form->field($certificate, 'bus')->textInput(['maxlength' => true]) ?>
    </div>

    </div>
    <div class="panel-footer">
        <p>*This is to certify that the above-named driver was given a road test
            Under my supervision on , consisting of
            Approximately 5 miles of driving.
            It is my considered opinion that this driver possesses sufficient driving
            Skill to operate safely the type of commercial motor vehicle listed above.
        </p>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save and continue', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
