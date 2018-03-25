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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formAlcoholDrugs', [
        'alcohol_drugs' => $alcohol_drugs,
    ]) ?>

</div>