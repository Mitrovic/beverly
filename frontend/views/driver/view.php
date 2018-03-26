<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class = "container">
<div class="driver-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'position_id',
            'name',
            'mi_name',
            'lname',
            'ssn',
            'phone',
            'email:email',
            'legal_right',
            'birth_date',
        ],
    ]) ?>
    <h2>Adrese</h2>
    <?php
    $adrese = $model->addresses;
    foreach ($adrese as $adresa){
        echo 'Street'.$adresa->street;
        echo 'State'.$adresa->state;
        echo 'Zip'.$adresa->zip;
        echo 'Time'.$adresa->time;
    }
    ?>
    <h2>AccidentRecord</h2>
    <?php
    $accident_records = $model->getAccidentRecords();
    //var_dump($accident_records);
    foreach ($accident_records as $record) {
        var_dump($record);
    }
    ?>
</div>
</div>
