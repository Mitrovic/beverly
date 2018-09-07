<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificateRoadTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-road-test-form">


    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($alcohol_drugs, 'positive')->checkboxList([ 1 => 'Yes', 0 => 'No']); ?>

    <?= $form->field($alcohol_drugs, 'proof')->checkboxList([ 1 => 'Yes', 0 => 'No']);?>
    <div class="card">

    <div class ="card-content table-responsive">
    <textarea  id="txtarea">The Fédération Internationale de Football Association (FIFA, /ˈfiːfə/; English: Federation of International Football Associations) is the international governing body of association football, futsal and beach soccer. Its membership comprises 209 national associations. Its headquarters are in Zurich, Switzerland, and its president is Sepp Blatter. FIFA is responsible for the organisation of football's major international tournaments, notably the World Cup. The need for a single body to oversee association football became apparent at the beginning of the 20th century with the increasing popularity of international fixtures. FIFA was founded in Paris on 21 May 1904; the French name and acronym persist even outside French-speaking countries. The founding members were the national associations of Belgium, Denmark, France, the Netherlands, Spain (represented by Madrid Football Club; the Spanish federation was not created until 1913), Sweden and Switzerland. Also, that same day, the German Association declared its intention of affiliating through a telegram.The Fédération Internationale de Football Association (FIFA, /ˈfiːfə/; English: Federation of International Football Associations) is the international governing body of association football, futsal and beach soccer. Its membership comprises 209 national associations. Its headquarters are in Zurich, Switzerland, and its president is Sepp Blatter. FIFA is responsible for the organisation of football's major international tournaments, notably the World Cup. The need for a single body to oversee association football became apparent at the beginning of the 20th century with the increasing popularity of international fixtures. FIFA was founded in Paris on 21 May 1904; the French name and acronym persist even outside French-speaking countries. The founding members were the national associations of Belgium, Denmark, France, the Netherlands, Spain (represented by Madrid Football Club; the Spanish federation was not created until 1913), Sweden and Switzerland. Also, that same day, the German Association declared its intention of affiliating through a telegram.</textarea>
    <div><input type="checkbox"  value="I agree all." id="agre"/>I agree all.</div>
    </div>
    <div><input type="submit" id="txt"  value="Submit" /></div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
