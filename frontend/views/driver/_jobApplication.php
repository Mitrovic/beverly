<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;
/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data','id' => 'privacyform']]); ?>

    <?= $form->field($application, 'sign')->hiddenInput() ?>


    <?= \inquid\signature\SignatureWidget::widget([
            'clear' => true,
            'width' =>'300px',
            'height' =>'200px',
            'url' => 'job-application',
            'save_server' => false]) ?>


    <div class="form-group">

        <?= Html::submitButton('Continue',['class' => 'btn btn-primary','name'=>'subbbmit',
            'onClick'=>'saveToServer()']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

