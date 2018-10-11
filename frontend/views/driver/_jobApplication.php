<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use inquid\signature\SignatureWidget;
/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($application, 'agree') ?>
    <?= $form->field($application, 'sign')->hiddenInput() ?>

    <?= \inquid\signature\SignatureWidget::widget([
            'clear' => true,
            'url' => 'job-application',
            'save_server' => false]) ?>


    <div class="form-group">
        <?= Html::submitButton('Continue', ['class' => 'btn btn-primary']) ?>
        <button type="button" class="button save" data-action="save-server" onclick="saveToServer('google.com')">Save in Database</button>
    </div>
    <?php ActiveForm::end(); ?>

</div>
