<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'PREVIOUS PRE-EMPLOYMENT EMPLOYEE
                ALCOHOL AND DRUG TEST STATEMENT';
$this->params['breadcrumbs'][] = ['label' => 'DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">
    <div class = "container">
        <h1 class="title"><?= Html::encode($this->title) ?></h1>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                <span class="sr-only">100% Complete</span>
            </div>
        </div>

    <?= $this->render('_formAlcoholDrugs', [
        'alcohol_drugs' => $alcohol_drugs,
    ]) ?>
    </div>
</div>
