<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'CERTIFICATE OF DRIVER’S ROAD TEST';
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class = "container">
<div class="driver-create">

    <h4 class="title"><?= Html::encode($this->title) ?></h4>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
            <span class="sr-only">0% Complete</span>
        </div>
    </div>

    <?= $this->render('_formCertificate', [
        'certificate' => $certificate,
    ]) ?>

</div>
</div>
