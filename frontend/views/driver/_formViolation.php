<?php

use kartik\datecontrol\DateControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
?>

<div class="customer-form">

    <?php


    $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <div class="row">
        <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>

    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Section I</h4></div>
        <div class="panel-body">
            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $violations[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'full_name',
                    'address_line1',
                    'address_line2',
                    'city',
                    'state',
                    'postal_code',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
                <?php foreach ($violations as $i => $violation): ?>
                    <div class="item panel panel-default"><!-- widgetBody -->
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">
                                MOTOR VEHICLE
                                DRIVER CERTIFICATION
                                OF VIOLATIONS
                            </h3>
                            <div class="pull-right">
                                <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                            // necessary for update action.
                            if (! $violation->isNewRecord) {
                                echo Html::activeHiddenInput($violation, "[{$i}]id");
                            }
                            ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php echo $form->field($violation, "[{$i}]date")->label('Date')->widget(DateControl::classname(), [
                                        'displayFormat' => 'dd/MM/yyyy',
                                        'autoWidget' => false,
                                        'widgetClass' => 'yii\widgets\MaskedInput',
                                        'widgetOptions' => [
                                            'mask' => '99/99/9999'
                                        ],
                                    ]);
                                    ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($violation, "[{$i}]offense")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($violation, "[{$i}]location")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-sm-3">
                                    <?= $form->field($violation, "[{$i}]type_of_venchile")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- .row -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?= Html::encode('If no violations are listed above, I certify that I have not been convicted or forfeited bond or collateral on account of any
            violation required to be listed during the past 12 months.' ) ?>

    <?= Html::a('Not Convicted', ['nonviolation','id' => $model->id], ['class' => 'btn btn-primary']) ?>

</div>