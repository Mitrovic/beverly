<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\datecontrol\DateControl;

$js = '

jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {

    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {

        jQuery(this).html("User: " + (index + 1))

    });

});


jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {

    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {

        jQuery(this).html("User: " + (index + 1))

    });

});

';


$this->registerJs($js);

/* @var $this yii\web\View */
/* @var $model app\models\Driver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="driver-form">

    <?php
    $form = ActiveForm::begin([
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'validateOnChange' => true,
        'validateOnBlur' => false,
        'options' => [
            'enctype' => 'multipart/form-data',
            'id' => 'dynamic-form',
            'role' => 'form'
        ],
    ]);
    ?>
    <div class="row">
        <div class="col-md-6">
            <?php
            echo $form->field($model, 'position_id')
                ->dropDownList(
                    ArrayHelper::map(\app\models\Position::find()->asArray()->all(), 'id', 'name')
                )
            ?>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mi_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
    <?= $form->field($model, 'ssn')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_right')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'birth_date')->widget(DateControl::classname(), [
            'displayFormat' => 'dd/MM/yyyy',
            'autoWidget' => false,
            'widgetClass' => 'yii\widgets\MaskedInput',
            'widgetOptions' => [
            'mask' => '99/99/9999'
            ],
            ]);
    ?>
        </div>
        <div class ="col-md-12">
            <div id="panel-option-values" class="panel panel-default">

                <?php DynamicFormWidget::begin([
                    'widgetContainer' => 'dynamicform_wrapper',
                    'widgetBody' => '.container-users',
                    'widgetItem' => '.user-item',
                    'min' => 1,
                    'insertButton' => '.add-item',
                    'deleteButton' => '.remove-item',
                    'model' => $address[0],
                    'formId' => 'dynamic-form',
                    'formFields' => [
                        'street',
                        'state',
                        'zip',
                        'time',
                    ],

                ]); ?>
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <i class="fa fa-user"></i> Address

                        <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add address</button>

                        <div class="clearfix"></div>
                    </div>
                    <table class="table table-bordered table-striped margin-b-none">
                        <thead>
                        <tr>
                            <th >street</th>
                            <th >state</th>
                            <th >zip</th>
                            <th >time</th>
                            <th style="width: 90px; text-align: center">Delete</th>
                        </tr>
                        </thead>
                        <tbody class="container-users">
                        <?php foreach ($address as $index => $single_address): ?>
                            <tr class="user-item">
                                <td class="vcenter">
                                    <?= $form->field($single_address, "[{$index}]street")->label(false)->textInput(['maxlength' => true]) ?>
                                </td>
                                <td>
                                    <?= $form->field($single_address, "[{$index}]state")->label(false)->textInput(['maxlength' => true]) ?>
                                </td>
                                <td>
                                    <?= $form->field($single_address, "[{$index}]zip")->label(false)->textInput(['maxlength' => true]) ?>
                                </td>
                                <td>
                                    <?= $form->field($single_address, "[{$index}]time")->label(false)->textInput(['maxlength' => true]) ?>
                                </td>

                                <td class="text-center vcenter">
                                    <button type="button" class="remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
            <?php DynamicFormWidget::end();
            ?>
        </div>

    </div>
    <div class="form-group">

        <?= Html::submitButton($model->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
