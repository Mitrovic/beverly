<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'DRIVER’S ROAD TEST EXAMINATION';
$this->params['breadcrumbs'][] = ['label' => 'DRIVER’S ROAD TEST EXAMINATION', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">
    <div class = "container">
    <h4 class="title"><?= Html::encode($this->title) ?></h4>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
            <span class="sr-only">0% Complete</span>
        </div>
    </div>

    <?= $this->render('_formRoadTestExamination', [
        'examination' => $examination,
    ]) ?>
    </div>
</div>
