<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'DRIVER’S APPLICATION FOR EMPLOYMENT - History';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class = "container">
    <div class="driver-create">

        <h4><?= Html::encode($this->title) ?></h4>

        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                <span class="sr-only">0% Complete</span>
            </div>
        </div>

        <?= $this->render('_formHistory', [
            'model' => $model,
            'history' => (empty($history)) ? [new EmploymentHistory] : $history,
            'accidents' => (empty($accidents)) ? [new AccidentRecord] : $accidents,
            'traffic_convictions' => (empty($traffic_convictions)) ? [new TrafficConvictions] : $traffic_convictions,
            'licenses' => (empty($licenses)) ? [new Licenses] : $licenses,
            'licenses_custom' => $licenses_custom,
            'driving_experience' => $driving_experience,
        ]) ?>

    </div>
</div>
