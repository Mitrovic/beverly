<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'Driver History';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">

    <h1><?= Html::encode($this->title) ?></h1>

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
