<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\datecontrol\DateControl;

$js = '

jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {

    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {

        jQuery(this).html("Address: " + (index + 1))

    });

});


jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {

    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {

        jQuery(this).html("Address: " + (index + 1))

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
        'id' => 'login-form-vertical',
        'type' => ActiveForm::TYPE_VERTICAL,
         'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL],
        'options' => [
            'enctype' => 'multipart/form-data',
            'id' => 'dynamic-form',
            'role' => 'form'
        ],
    ]);
    ?>
    <div class="row">
        <div class="col-md-12">
            <?php
            echo $form->field($model, 'position_id')
                ->dropDownList(
                    ArrayHelper::map(\app\models\Position::find()->asArray()->all(), 'id', 'name')
                )
            ?>
        </div>
    </div>
    <div class="row">

            <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
            <?= $form->field($model, 'mi_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
            <?php echo $form->field($model, 'birth_date')->widget(DateControl::classname(), [
                'type'=>DateControl::FORMAT_DATE,
                'ajaxConversion'=>false,
                'widgetOptions' => [
                    'pluginOptions' => [
                        'autoclose' => true
                    ]
                ]
            ]);
            ?>
            </div>
    </div>
    <div class="row">

            <div class="col-md-3">
            <?= $form->field($model, 'ssn')->textInput() ?>
            </div>
            <div class="col-md-2">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-5">
            <?= $form->field($model, 'legal_right')->textInput(['maxlength' => true]) ?>
            </div>
    </div>
    <div class="row">

        <div class="col-md-5">
            <?= $form->field($driver_custom_questions, 'now_employed')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($driver_custom_questions, 'refereed_you')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($driver_custom_questions, 'rate_of_pay')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($driver_custom_questions, 'bonded')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($driver_custom_questions, 'convicted')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($driver_custom_questions, 'unable_reason')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class ="col-md-12">


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
                    <div class="panel-body container-users"><!-- widgetContainer -->

                        <?php foreach ($address as $index => $single_address): ?>

                            <div class="user-item panel panel-default"><!-- widgetBody -->

                                <div class="panel-heading">

                                    <span class="panel-title-address">Address: <?= ($index + 1) ?></span>

                                    <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>

                                    <div class="clearfix"></div>

                                </div>

                                <div class="panel-body">

                                    <?php

                                    // necessary for update action.

                                    if (!$single_address->isNewRecord) {

                                        echo Html::activeHiddenInput($single_address, "[{$index}]id");

                                    }

                                    ?>

                                    <div class="row">
                                        <div class ="col-sm-3">
                                            <?= $form->field($single_address, "[{$index}]street")->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class ="col-sm-2">
                                            <?= $form->field($single_address, "[{$index}]city")->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class ="col-sm-3">
                                            <?= $form->field($single_address, "[{$index}]state")->textInput(['maxlength' => true]) ?>
                                        </div>
                                            <div class ="col-sm-2">
                                            <?= $form->field($single_address, "[{$index}]zip")->textInput(['maxlength' => true]) ?>
                                            </div>
                                        <div class ="col-sm-2">
                                            <?= $form->field($single_address, "[{$index}]time")->textInput(['maxlength' => true]) ?>
                                        </div>

                                    </div><!-- end:row -->

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>
            <?php DynamicFormWidget::end();
            ?>

    </div>
    <div class="form-group">

        <?= Html::submitButton($model->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
