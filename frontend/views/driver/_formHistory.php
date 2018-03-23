<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\datecontrol\DateControl;
//var_dump($model);
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
<div class ="col-md-12">
    <div id="panel-option-values" class="panel panel-default">

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
        <?php
        echo $form->field($model, 'position_id')
            ->dropDownList(
                ArrayHelper::map(\app\models\Position::find()->asArray()->all(), 'id', 'name')
            )
        ?>
        <div class="panel panel-default">

            <div class="panel-heading">

                <i class="fa fa-user"></i> EMPLOYMENT HISTORY

                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add employer</button>

                <div class="clearfix"></div>
            </div>
            <table class="table table-bordered table-striped margin-b-none">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Contact person</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Position Held</th>
                    <th>Salary</th>
                    <th>Reason for leaving</th>
                    <th>FMCR</th>
                    <th>Safety</th>
                    <th style="width: 90px; text-align: center">Delete</th>
                </tr>
                </thead>
                <tbody class="container-users">
                <?php foreach ($history as $index => $employment): ?>
                    <tr class="user-item">
                        <td class="vcenter">
                            <?= $form->field($employment, "[{$index}]name")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]address")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]city")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]state")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]zip")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]contact_person")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]phone")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]date")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]position_held")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]salary")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]reason_for_leaving")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]fmcr")->label(false)->textInput(['maxlength' => true]) ?>
                        </td>
                        <td>
                            <?= $form->field($employment, "[{$index}]safety")->label(false)->textInput(['maxlength' => true]) ?>
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
    <div class ="col-md-12">
        <div id="panel-option-values" class="panel panel-default">

            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper',
                'widgetBody' => '.container-users',
                'widgetItem' => '.user-item',
                'min' => 1,
                'insertButton' => '.add-item',
                'deleteButton' => '.remove-item',
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

                    <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add new row</button>

                    <div class="clearfix"></div>
                </div>
                <table class="table table-bordered table-striped margin-b-none">
                    <thead>
                    <tr>
                        <th>Dates</th>
                        <th>Nature of accident</th>
                        <th>Fatalities</th>
                        <th>Injuries</th>
                        <th>Hazardous material spill</th>
                        <th style="width: 90px; text-align: center">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="container-users">
                    <?php foreach ($accidents as $index => $accident): ?>
                        <tr class="user-item">
                            <td class="vcenter">
                                <?= $form->field($accident, "[{$index}]date")->label(false)->textInput(['maxlength' => true]) ?>
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
    <div class="form-group">

        <?= Html::submitButton($employment->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>

    </div>

<?php ActiveForm::end(); ?>