<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'DRIVER’S APPLICATION FOR EMPLOYMENT';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <div class = "container">
        <div class="driver-create">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
        <?= $this->render('_form', [
            'model' => $model,
            'address' => (empty($address)) ? [new Address] : $address,
            'employment_history' => (empty($employment_history)) ? [new EmploymentHistory] : $employment_history
        ]) ?>

        </div>
    </div>
</section>