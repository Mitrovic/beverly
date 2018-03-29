<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use kartik\daterange\DateRangePicker;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\datecontrol\DateControl;
?>
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

    <div id="panel-option-values" class="">

        <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper',
                'widgetBody' => '.container-users',
                'widgetItem' => '.user-item',
                'min' => 1,
                'insertButton' => '.add-item',
                'deleteButton' => '.remove-item',
                'model' => $history[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'street',
                    'state',
                    'zip',
                    'time',
                ],

            ]); ?>
        <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>


        <div class="panel panel-default">

            <div class="panel-heading">

                <i class="fa fa-user"></i> EMPLOYMENT HISTORY (All driver applicants to drive in interstate commerce must provide the following information on all employers.)

                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add employer</button>

                <div class="clearfix"></div>
            </div>

                <div class="container-users">
                <?php foreach ($history as $index => $employment): ?>
                    <div class = "user-item panel panel-default">
                        <div class="panel-heading">

                            <span class="panel-title-address">Employer: <?= ($index + 1) ?></span>

                            <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>

                            <div class="clearfix"></div>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class ="col-sm-3">
                                    <?= $form->field($employment, "[{$index}]name")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-3">
                                    <?= $form->field($employment, "[{$index}]address")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]city")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]state")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]zip")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]contact_person")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]phone")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                <div class = "form-group required">
                                    <?php
                                    echo '<label class="control-label">How long</label>';
                                    echo DateRangePicker::widget([
                                        'model'=>$employment,
                                        'attribute'=>"[{$index}]date",
                                        'convertFormat'=>true,
                                        'pluginOptions'=>[
                                            'timePicker'=>false,
                                            'timePickerIncrement'=>30,
                                            'locale'=>[
                                                'format'=>'Y-m-d'
                                            ]
                                        ]
                                    ]);
                                    ?>
                                </div>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]position_held")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]salary")->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class ="col-sm-2">
                                    <?= $form->field($employment, "[{$index}]reason_for_leaving")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                            <div class="row">

                                <div class ="col-sm-12 button_small">
                                    <?= $form->field($employment, "[{$index}]fmcr")->radioButtonGroup([ 1 => 'Yes', 0 => 'No']) ?>
                                </div>
                                <div class ="col-sm-12 button_small">
                                    <?= $form->field($employment, "[{$index}]safety")->radioButtonGroup([ 1 => 'Yes', 0 => 'No']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>


</div>
<?php DynamicFormWidget::end();
?>
        <div id="panel-option-values" class="panel panel-default">

            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper_1',
                'widgetBody' => '.container-accidents',
                'widgetItem' => '.accident-item',
                'min' => 1,
                'insertButton' => '.add-accident',
                'deleteButton' => '.remove-accident',
                'model' => $accidents[0],
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

                    <i class="fa fa-user"></i> ACCIDENT RECORD FOR PAST YEARS ( If you don't have accident you can skip this section)

                    <button type="button" class="pull-right add-accident btn btn-success btn-xs"><i class="fa fa-plus"></i> Add new row</button>

                    <div class="clearfix"></div>
                </div>
                <div class="container-accidents">
                    <?php foreach ($accidents as $index => $accident): ?>
                        <div class = "accident-item panel panel-default">
                            <div class="panel-heading">

                                <span class="panel-title-address">Accident: <?= ($index + 1) ?></span>

                                <button type="button" class="pull-right remove-accident btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>

                                <div class="clearfix"></div>

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class ="col-sm-3">
                                        <?php echo $form->field($accident, "[{$index}]date")->widget(DateControl::classname(), [
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
                                    <div class ="col-sm-3">
                                        <?= $form->field($accident, "[{$index}]accident_nature")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-2">
                                        <?= $form->field($accident, "[{$index}]fatalities")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-2">
                                        <?= $form->field($accident, "[{$index}]injuries")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-2">
                                        <?= $form->field($accident, "[{$index}]hazardous_material")->textInput(['maxlength' => true]) ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>


        </div>
        <?php DynamicFormWidget::end();
        ?>
        <div id="panel-option-values" class="panel panel-default">

            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper_2',
                'widgetBody' => '.container-convictions',
                'widgetItem' => '.conviction-item',
                'min' => 1,
                'insertButton' => '.add-conviction',
                'deleteButton' => '.remove-conviction',
                'model' => $traffic_convictions[0],
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

                    <i class="fa fa-user"></i> TRAFFIC CONVICTIONS
                    AND FORFEITURES FOR THE PAST 3 YEARS (OTHER THAN PARKING VIOLATIONS) If none, you can skip this section

                    <button type="button" class="pull-right add-conviction btn btn-success btn-xs"><i class="fa fa-plus"></i> Add new row</button>

                    <div class="clearfix"></div>
                </div>
                <div class="container-convictions">
                    <?php foreach ($traffic_convictions as $index => $traffic): ?>
                        <div class = "conviction-item panel panel-default">
                            <div class="panel-heading">

                                <span class="panel-title-address">CONVICTION: <?= ($index + 1) ?></span>

                                <button type="button" class="pull-right remove-conviction btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>

                                <div class="clearfix"></div>

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class ="col-sm-3">
                                        <?php echo $form->field($traffic, "[{$index}]date")->widget(DateControl::classname(), [
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
                                    <div class ="col-sm-3">
                                        <?= $form->field($traffic, "[{$index}]location")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-3">
                                        <?= $form->field($traffic, "[{$index}]charge")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-3">
                                        <?= $form->field($traffic, "[{$index}]penalty")->textInput(['maxlength' => true]) ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
        <?php DynamicFormWidget::end();
        ?>
        <div id="panel-option-values" class="panel panel-default">

            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper_3',
                'widgetBody' => '.container-licenses',
                'widgetItem' => '.license-item',
                'min' => 1,
                'insertButton' => '.add-license',
                'deleteButton' => '.remove-license',
                'model' => $licenses[0],
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

                    <i class="fa fa-user"></i> XPERIENCE AND QUALIFICATIONS–DRIVER

                    <button type="button" class="pull-right add-license btn btn-success btn-xs"><i class="fa fa-plus"></i> Add new row</button>

                    <div class="clearfix"></div>
                </div>
                    <div class="container-licenses">
                    <?php foreach ($licenses as $index => $license): ?>
                        <div class = "license-item">
                            <div class="panel-heading">

                                <span class="panel-title-address">DRIVER LICENSE: <?= ($index + 1) ?></span>

                                <button type="button" class="pull-right remove-license btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>

                                <div class="clearfix"></div>

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class ="col-sm-3">
                                        <?php echo $form->field($license, "[{$index}]expiration_date")->widget(DateControl::classname(), [
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
                                    <div class ="col-sm-3">
                                        <?= $form->field($license, "[{$index}]state")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-3">
                                        <?= $form->field($license, "[{$index}]license_no")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class ="col-sm-3">
                                        <?= $form->field($license, "[{$index}]type")->textInput(['maxlength' => true]) ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    </div>

            </div>


        </div>
        <?php DynamicFormWidget::end();
        ?>
    <div class = "row">
        <div class ="col-md-12 button_small">
            <?= $form->field($licenses_custom, 'denied_license')->radioButtonGroup([ 1 => 'Yes', 0 => 'No']);?>
        </div>
        <div class ="col-md-12 button_small">
        <?= $form->field($licenses_custom, 'suspended_license')->radioButtonGroup([ 1 => 'Yes', 0 => 'No']);?>
        </div>
        <div class ="col-md-12">
        <?= $form->field($licenses_custom, 'answer')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-12">
        <?= Html::submitButton($employment->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    </div>

<?php ActiveForm::end(); ?>