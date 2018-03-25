<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($alcohol_drugs, 'positive')->checkboxList([ 1 => 'Yes', 0 => 'No']); ?>

    <?= $form->field($alcohol_drugs, 'proof')->checkboxList([ 1 => 'Yes', 0 => 'No']);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
