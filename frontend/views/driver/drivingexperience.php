<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'DRIVING EXPERIENCE';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class = "container">
    <div class="driver-create">

        <h4><?= Html::encode($this->title) ?></h4>

        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                <span class="sr-only">30% Complete</span>
            </div>
        </div>

        <?= $this->render('_drivingExperience', [
            'driving_experience' => $driving_experience,
            'qualifications'=>$qualifications,
            'education'=>$education,
            'driving_experience_answers' => (empty($driving_experience_answers)) ? [new DrivingExperienceAnswers] : $driving_experience_answers,
        ]) ?>

    </div>
</div>
