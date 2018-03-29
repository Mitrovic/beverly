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
    'options' => [
        'enctype' => 'multipart/form-data',
        'id' => 'dynamic-form',
        'role' => 'form'
    ],
]);
?>
<div class ="row">
    <?php
    foreach ($driving_experience as $index => $experience){
        echo '<div class="col-sm-12">';
        $ex_answer = $experience->name;

        echo '<div class="col-sm-3">';
        echo '<label class="driving-label">'.$ex_answer.'</label>';
        echo '</div>';

        $id = $experience->id;
        foreach ($driving_experience_answers as $ex_answer) {

            ?>
            <div class="col-sm-4">
                <?= $form->field($ex_answer, "[{$index}]type")->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-2">
                <?php
                echo '<label class="control-label">How long</label>';
                echo DateRangePicker::widget([
                    'model'=>$ex_answer,
                    'attribute'=>"[{$index}]dates",
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
            <div class="col-sm-3">
                <?= $form->field($ex_answer, "[{$index}]miles")->textInput(['maxlength' => true]) ?>
            </div>

            <?php
            echo $form->field($ex_answer, "[{$index}]driving_experience_id")->hiddenInput(['value'=> $id])->label(false);
        }
        echo '</div>';
    }
    ?>

</div>
<div class ="row">
    <div class="col-sm-12"><?= $form->field($qualifications, "states")->textInput(['maxlength' => true]) ?></div>
</div>
<div class ="row">
    <div class="col-sm-12">
        <h4>EXPERIENCE AND QUALIFICATIONS – OTHER</h4>
    </div>
    <div class="col-sm-12">
        <?= $form->field($qualifications, "other_experience")->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-12">
        <?= $form->field($qualifications, "courses_training")->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-12">
        <?= $form->field($qualifications, "special_equipment")->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class ="row">
    <div class="col-sm-12">
        <h4>EDUCATION</h4>
    </div>
    <div class="col-sm-4">
        <?= $form->field($education, "highest_school")->dropDownList(
            ['0' => 'select','1' => '1','2' => '2','3' => '3', '4' => '4', '5' => '5','6' => '6','7' => '7','8' => '8']
        ); ?>
    </div>
    <div class="col-sm-4">
        <?= $form->field($education, "high_school")->dropDownList(
            ['0' => 'select','1' => '1','2' => '2','3' => '3', '4' => '4', '5' => '5','6' => '6','7' => '7','8' => '8']
        ); ?>
    </div>
    <div class="col-sm-4">
        <?= $form->field($education, "college")->dropDownList(
            ['0' => 'select','1' => '1','2' => '2','3' => '3', '4' => '4', '5' => '5','6' => '6','7' => '7','8' => '8']
        ); ?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($education, "last_school")->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($education, "last_school_state")->textInput(['maxlength' => true]) ?>
    </div>
</div>
    <div class="form-group">
        <div class="col-md-12">
            <?= Html::submitButton($ex_answer->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>