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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formViolation', [
        'violations' => $violations,
        'model'     => $model
    ]) ?>


</div>
