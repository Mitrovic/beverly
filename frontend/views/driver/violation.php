<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'MOTOR VEHICLE DRIVER\'S CERTIFICATION OF
                VIOLATIONS AND ANNUAL REVIEW OF DRIVING
                RECORD';
$this->params['breadcrumbs'][] = ['label' => 'SECTION I', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">
    <div class = "container">
        <h1 class="title"><?= Html::encode($this->title) ?></h1>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                <span class="sr-only">90% Complete</span>
            </div>
        </div>

    <?= $this->render('_formViolation', [
        'violations' => $violations,
        'model'     => $model
    ]) ?>
    </div>

</div>
