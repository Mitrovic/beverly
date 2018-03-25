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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formRoadTestExamination', [
        'examination' => $examination,
    ]) ?>

</div>
