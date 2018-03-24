<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */

$this->title = 'Update Certificate Road Test: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Certificate Road Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="certificate-road-test-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
