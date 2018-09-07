<?php

use kartik\datecontrol\DateControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<input class="examination-road-test-form">
<p>The following chart below is the new updated version of Beverly Freight,Inc driving
    statute that was adopted based on previous experience that we had supervising
    the drivers on their everyday duty’s and attitudes towards traffic rules.</br>
    This charges are measures that had to be taken in order to keep the company
    safety record underneath the <b>NATIONAL AVERAGE SCORE</b> provided by <b>SAFER</b> and
    <b>FMCSA</b>.</br>
    By signing this form Drivers and Owner operators are agreeing to all charges listed
    underneath as consequences for their behavior.</p></br>
    <p>
        - Any violation as a result of roadside inspection (except above described) will be
        charged by the points per violation from FMCSA Safety Management
        System(SMS) multiply 35$</br></br>
        Example: Inspection with violation 393.25(f) Stop lamp violations
        Violation Severity Weight is 6 points, Time Weight is 3,
        Total Weight is 18 points
        6*3*35$=630$</br>
        <b>Beverly Freight,Inc</br>
        1426 W Rosemont Ave #G</br>
            Chicago,IL 60660</b></br>
        - Any driver that had inspection with maintenance violation will be submitted to a
        supervise conditional program in which driver is required to perform an Annual
        DOT inspection in time period no less than two months repeatedly until further
        notes. Annual DOT inspection will be conducted at following facilities: TA, Petro
        Truck Stop or Speedco.</br></br>
        - In the situation when the roadside DOT inspection is followed by a citation, all
        BEVERLY FREIGHT drivers are advised to hire a lawyer to try and fight the ticket in
        order to dismiss it. This impacts the company safety score and drivers personal
        record, it is highly recommended to make this as a priority. BEVERLY FREIGHT will
        be involved and will help out all drivers to clean their record by paying already
        predetermined BEVERLY FREIGHT charge expense(s). If the ticket is dismissed and
        violation challenged, the moment it is removed from BEVERLY FREIGHT public
        safety records, funds will be reimbursed to the eligible driver.</br></br>
        We appreciate your devotion in this matter and opportunity to help each other
        now and in future.</br></br>
        <b>REWARDS:</b></br>
        Level III inspection – no violation discovered reward is 100$</br>
        Level II inspection – no violation discovered reward is 200$</br>
        Level I inspection – no violation discovered reward is 300$</br>
    </p>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($policy, 'policy')->checkboxList([ 1 => 'Yes', 0 => 'No']); ?>
    <?php // $form->field($non_violation, 'motor_name')->textInput(['maxlength' => true]); ?>
    <input type="file" name="UserSignature[signature]"/>
    <?= \inquid\signature\SignatureWidget::widget(['clear' => true, 'undo' => true, 'change_color' => true, 'url' => 'google.com', 'save_server' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
