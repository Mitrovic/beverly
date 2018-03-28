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
            <div class="col-sm-3">
                <?= $form->field($ex_answer, "[{$index}]type")->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($ex_answer, "[{$index}]dates")->textInput(['maxlength' => true]) ?>
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
    <div class="col-sm-12">
        <h4>EXPERIENCE AND QUALIFICATIONS – OTHER</h4>
    </div>
    <div class="col-sm-12">
        <p>SHOW ANY TRUCKING, TRANSPORTATION OR OTHER EXPERIENCE THAT MAY HELP IN YOUR WORK FOR THIS COMPANY</p>
        <p>  LIST COURSES AND TRAINING OTHER THAN SHOWN ELSEWHERE IN THIS APPLICATION</p>
        <p>  LIST SPECIAL EQUIPMENT OR TECHNICAL MATERIALS YOU CAN WORK WITH (OTHER THAN THOSE ALREADY SHOWN)</p>
    </div>
</div>
<div class ="row">
    <div class="col-sm-12">
        <h4>EDUCATION</h4>
    </div>
    <div class="col-sm-12">

    </div>
</div>
    <div class="form-group">
        <div class="col-md-12">
            <?= Html::submitButton($ex_answer->isNewRecord ? 'Save and continue' : 'Update', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>