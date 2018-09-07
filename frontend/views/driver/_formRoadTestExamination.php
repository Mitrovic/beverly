<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">

    <?php  $form = ActiveForm::begin([
        'id' => 'login-form-horizontal',
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 7, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]);
    ?>
    <div class="panel-heading text-warning">

        <i class="fa fa-car"></i> *The road test shall be given by the motor carrier or a person designated by it. However, a driver who is a motor carrier
        must be given the test by another person. The test shall be given buy a person who is competent to evaluate and
        determine whether the person who takes the test has demonstrated that he or she is capable of operating the vehicle and
        associated equipment that the motor carrier intends to assign.

        <div class="clearfix"></div>
    </div>

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
        <div class="col-md-12">
            <?= Html::submitButton('Save and continue' , ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
