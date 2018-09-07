<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\form\ActiveForm;
use kartik\builder\Form;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\datecontrol\DateControl;
?>
<?php
$form = ActiveForm::begin([
    'enableClientValidation' => true,
    'enableAjaxValidation' => true,
    'validateOnChange' => true,
    'validateOnBlur' => false,
    'id' => 'login-form-inline',
    'type' => ActiveForm::TYPE_INLINE,
    'options' => [
        'enctype' => 'multipart/form-data',
        'id' => 'dynamic-form',
        'role' => 'form'
    ],
]);
?>
<div class ="col-md-12">
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

                <i class="fa fa-user"></i> EMPLOYMENT HISTORY

                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add employer</button>

                <div class="clearfix"></div>
            </div>

                <div class="container-users">
                <?php foreach ($history as $index => $employment): ?>
                    <div class = "user-item">

                            <?= $form->field($employment, "[{$index}]name")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]address")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]city")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]state")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]zip")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]contact_person")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]phone", ['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-phone"></i>']]
                            ])->label(false)->textInput(['maxlength' => true]) ?>
                        <?php
                        /*
                        echo $form->field($employment, 'date', [
                            'addon' => [
                                'append' => ['content' => 'to'],
                                'groupOptions' => ['class'=>'input-group-md'],
                                'contentAfter' => '<input type="text" id="date-to" class="form-control" placeholder="End Date">'
                            ]
                        ]);*/
                        ?>
                            <?php echo $form->field($employment, "[{$index}]date")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]position_held")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]salary")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]reason_for_leaving")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]fmcr")->label(false)->textInput(['maxlength' => true]) ?>

                            <?= $form->field($employment, "[{$index}]safety")->label(false)->textInput(['maxlength' => true]) ?>


                        <div class="text-center vcenter">
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                        </div>
                    </tr>
                    </div>
                <?php endforeach; ?>
                </div>
            <div class="panel-footer">
                <p>*Includes vehicles having a GVWR of 26,001 lbs. or more, vehicles designed to transport 16 or more passengers
                (including the driver), or any size vehicle used to transport hazardous materials in a quantity requiring placarding.<br/>
                ✝
                The Federal Motor Carrier Safety Regulations (FMCSRs) apply to anyone operating a motor vehicle on a highway
                in interstate commerce to transport passengers or property when the vehicle: (1) weighs or has a GVWR of 10,001 pounds
                or more, (2) is designed or used to transport more than 8 passengers (including the driver), OR (3) is of any size and is
                used to transport hazardous materials in a quantity requiring placarding.
                </p>
            </div>
        </div>



</div>
<?php DynamicFormWidget::end();
?>
</div>
    <div class ="col-md-12">
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

                    <i class="fa fa-user"></i> ACCIDENT RECORD FOR PAST YEARS OR MORE

                    <button type="button" class="pull-right add-accident btn btn-success btn-xs"><i class="fa fa-plus"></i> Add new row</button>

                    <div class="clearfix"></div>
                </div>
                <table class="table table-bordered table-striped margin-b-none">
                    <tbody class="container-accidents">
                    <?php foreach ($accidents as $index => $accident): ?>
                        <tr class="accident-item">
                            <td class="vcenter">
                                <?php // $form->field($accident, "[{$index}]date")->label(false)->textInput(['maxlength' => true]) ?>
                                <?php echo $form->field($accident, "[{$index}]date")->label(false)->widget(DateControl::classname(), [
                                    'displayFormat' => 'dd/MM/yyyy',
                                    'autoWidget' => false,
                                    'widgetClass' => 'yii\widgets\MaskedInput',
                                    'widgetOptions' => [
                                        'mask' => '99/99/9999'
                                    ],
                                ]);
                                ?>
                            </td>

                            <td>
                                <?= $form->field($accident, "[{$index}]accident_nature")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td>
                                <?= $form->field($accident, "[{$index}]fatalities")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td>
                                <?= $form->field($accident, "[{$index}]injuries")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td>
                                <?= $form->field($accident, "[{$index}]hazardous_material")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>


                            <td class="text-center vcenter">
                                <button type="button" class="remove-accident btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
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
    <div class ="col-md-12">
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
                    AND FORFEITURES FOR THE PAST 3 YEARS (OTHER THAN PARKING VIOLATIONS) IF NONE, WRITE
                    NONE

                    <button type="button" class="pull-right add-conviction btn btn-success btn-xs"><i class="fa fa-plus"></i> Add new row</button>

                    <div class="clearfix"></div>
                </div>
                <table class="table table-bordered table-striped margin-b-none">
                    <tbody class="container-convictions">
                    <?php foreach ($traffic_convictions as $index => $traffic): ?>
                        <tr class="conviction-item">
                            <td>
                                <?= $form->field($traffic, "[{$index}]location")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td class="vcenter">
                                <?php echo $form->field($traffic, "[{$index}]date")->label(false)->widget(DateControl::classname(), [
                                    'displayFormat' => 'dd/MM/yyyy',
                                    'autoWidget' => false,
                                    'widgetClass' => 'yii\widgets\MaskedInput',
                                    'widgetOptions' => [
                                        'mask' => '99/99/9999'
                                    ],
                                ]);
                                ?>
                            </td>
                            <td>
                                <?= $form->field($traffic, "[{$index}]charge")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td>
                                <?= $form->field($traffic, "[{$index}]penalty")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>


                            <td class="text-center vcenter">
                                <button type="button" class="remove-conviction btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
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
    <div class ="col-md-12">
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
                <table class="table table-bordered table-striped margin-b-none">
                    <thead>

                    </thead>
                    <tbody class="container-licenses">
                    <?php foreach ($licenses as $index => $license): ?>
                        <tr class="license-item">
                            <td>
                                <?= $form->field($license, "[{$index}]state")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>

                            <td>
                                <?= $form->field($license, "[{$index}]license_no")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td>
                                <?= $form->field($license, "[{$index}]type")->label(false)->textInput(['maxlength' => true]) ?>
                            </td>
                            <td class="vcenter">
                                <?php echo $form->field($license, "[{$index}]expiration_date")->label(false)->widget(DateControl::classname(), [
                                    'displayFormat' => 'dd/MM/yyyy',
                                    'autoWidget' => false,
                                    'widgetClass' => 'yii\widgets\MaskedInput',
                                    'widgetOptions' => [
                                        'mask' => '99/99/9999'
                                    ],
                                ]);
                                ?>
                            </td>

                            <td class="text-center vcenter">
                                <button type="button" class="remove-license btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
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
    <?= $form->field($licenses_custom, 'denied_license')->checkbox()?>

    <?= $form->field($licenses_custom, 'suspended_license')->checkbox()?>
    <?= $form->field($licenses_custom, 'answer')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
    <div class = "col-md-12">
        <h3>DRIVING EXPERIENCE</h3>

    <?= $form->field($driving_experience, 'straight_truck')->checkbox()?>
    <?= $form->field($driving_experience, 'tractor_semi_trailer')->checkbox()?>
    <?= $form->field($driving_experience, 'tractor_two_trailer')->checkbox()?>
    <?= $form->field($driving_experience, 'tractor_three_trailer')->checkbox()?>
    <?= $form->field($driving_experience, 'motorcoach_eight')->checkbox()?>
    <?= $form->field($driving_experience, 'motorcoach_fifteen')->checkbox()?>
    <?= $form->field($driving_experience, 'other')->textInput(['maxlength' => true]) ?>
    <?= $form->field($driving_experience, 'states')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-group">
    <div class="col-md-12">
        <?= Html::submitButton($employment->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>
    </div>

<?php ActiveForm::end(); ?>