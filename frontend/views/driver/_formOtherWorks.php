<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">
    <p>INSTRUCTIONS: When employed by a motor carrier, a driver must report to the carrier all on-duty time including time working for other employers. The
        definition of on-duty time found in Section 395.2 paragraphs (8) and (9) of the Federal Motor Carrier Safety Regulations includes time performing any
        other work in the capacity of, or in the employ or service of, a common, contract or private motor carrier, also performing any compensated work for any
        nonmotor carrier entity.</p>
    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($other_works, 'another_employer')->checkboxList([ 1 => 'Yes', 0 => 'No']); ?>

    <?= $form->field($other_works, 'employed_by_company')->checkboxList([ 1 => 'Yes', 0 => 'No']);?>

    <div class="form-group">
        <div class="col-md-12">
            <?= Html::submitButton('Save and continue' , ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
