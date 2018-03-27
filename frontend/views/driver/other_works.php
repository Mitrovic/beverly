<?php

use yii\helpers\Html;
use app\models\EmploymentHistory;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK';
$this->params['breadcrumbs'][] = ['label' => 'DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create">
    <div class = "container">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                <span class="sr-only">0% Complete</span>
            </div>
        </div>

    <?= $this->render('_formOtherWorks', [
        'other_works' => $other_works,
    ]) ?>
    </div>
</div>
