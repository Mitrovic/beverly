<?php

use app\models\DrivingExperience;
use app\models\DrivingExperienceAnswers;
use app\models\Education;
use app\models\ExperienceQualification;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class = "container">
<div class="driver-view">

    <h1>Application completed</h1>
    <h5>Thank you for submitting!</h5>
    <h5>A represantive from Beverly Freight INC will be in touch with you within 48 hours.</h5>
    <h5>If you have any questions in the meantime, please contact us at (847) 8576129.</h5>

    <?php // Html::a('Preview pdf', ['pdfpreview', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?php
    echo Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> PDF file', ['/driver/mpdf-demo-1','id' => $model->id], [
        'class'=>'btn btn-success',
        'target'=>'_blank',
        'data-toggle'=>'tooltip',
        'title'=>'Will open the generated PDF file in a new window'
    ]);
    ?>
</div>
</div>
