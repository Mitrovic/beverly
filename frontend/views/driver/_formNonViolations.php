<?php

use kartik\datecontrol\DateControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($non_violation, "date")->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATE,
        'ajaxConversion'=>false,
        'widgetOptions' => [
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]);
    ?>

    <?= $form->field($non_violation, 'motor_name')->textInput(['maxlength' => true]); ?>
    <?= $form->field($non_violation, 'motor_address')->textInput(['maxlength' => true]); ?>
    <?= $form->field($non_violation, 'motor_state')->textInput(['maxlength' => true]); ?>
    <?= $form->field($non_violation, 'revied_by')->textInput(['maxlength' => true]); ?>
    <?= $form->field($non_violation, 'title')->textInput(['maxlength' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
