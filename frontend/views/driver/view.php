<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class = "container">
<div class="driver-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'position_id',
            'name',
            'mi_name',
            'lname',
            'ssn',
            'phone',
            'email:email',
            'legal_right',
            'birth_date',
        ],
    ]) ?>
    <h2>Address</h2>
    <?php
    $adrese = $model->addresses;
    foreach ($adrese as $adresa) {
        $street = $adresa->street;
        $state = $adresa->state;
        $zip = $adresa->zip;
        $time = $adresa->time;
        ?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
                <tr>
                    <td>State</td>
                    <td><?= $state ?></td>
                </tr>
                <tr>
                    <td>Street</td>
                    <td><?= $street ?></td>
                </tr>
                <tr>
                    <td>ZIP</td>
                    <td><?= $zip  ?></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><?= $time ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>

    <!-- Accident Record    -->
    <h2>Accident Record</h2>
    <?php
    $accident_records = $model->accidentRecords;
    //var_dump($accident_records);
    foreach ($accident_records as $record) {
        $record_date     = $record->date;
        $accident_nature = $record->accident_nature;
        $fatalities      = $record->fatalities;
        $injuries        = $record->injuries;
        $hazaard         = $record->hazardous_material;
        ?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td>Date</td>
                <td><?= $record_date ?></td>
            </tr>
            <tr>
                <td>Accident Nature</td>
                <td><?= $accident_nature ?></td>
            </tr>
            <tr>
                <td>Fatalities</td>
                <td><?= $fatalities  ?></td>
            </tr>
            <tr>
                <td>Injuries</td>
                <td><?= $injuries ?></td>
            </tr>
            <tr>
                <td>Hazardous Material</td>
                <td><?= $hazaard ?></td>
            </tr>
            </tbody>
        </table>
    <?php } ?>
    <!-- END OF Accident Record   -->

    <!--  Employment History    -->
    <h2>Employment History</h2>

    <?php $employments_his = $model->employmentHistories;
    foreach ($employments_his as $emp_his)
    {
        $eh_name      = $emp_his->name;
        $eh_address   = $emp_his->address;
        $eh_city      = $emp_his->city;
        $eh_state     = $emp_his->state;
        $eh_zip       = $emp_his->zip;
        $eh_contact   = $emp_his->contact_person;
        $eh_phone     = $emp_his->phone;
        $eh_date      = $emp_his->date;
        $eh_position  = $emp_his->position_held;
        $eh_salary    = $emp_his->salary;
        $eh_reason    = $emp_his->reason_for_leaving;
        $eh_fmcr      = $emp_his->fmcr;
        $eh_safety    = $emp_his->safety;
        ?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td>Name</td>
                <td><?= $eh_name ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?= $eh_address ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?= $eh_city  ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?= $eh_state ?></td>
            </tr>
            <tr>
                <td>ZIP</td>
                <td><?= $eh_zip ?></td>
            </tr>
            <tr>
                <td>Contact Person</td>
                <td><?= $eh_contact ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?= $eh_phone ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?= $eh_date ?></td>
            </tr>
            <tr>
                <td>Position Held</td>
                <td><?= $eh_position ?></td>
            </tr>
            <tr>
                <td>SALARY/WAGE</td>
                <td><?= $eh_salary ?></td>
            </tr>
            <tr>
                <td>Reason for Leaving</td>
                <td><?= $eh_reason ?></td>
            </tr>
            <tr>
                <td>FMCR</td>
                <td><?= $eh_fmcr ?></td>
            </tr>
            <tr>
                <td>Safety</td>
                <td><?= $eh_safety ?></td>
            </tr>
            <hr>
            </tbody>
        </table>
   <?php  } ?>
    <!-- END OF Employment History   -->

    <!--  EXPERIENCE AND QUALIFICATIONS – DRIVER  -->
    <h2>EXPERIENCE AND QUALIFICATIONS – DRIVER</h2>
    <?php $licences = $model->licenses;
        foreach ($licences as $licence){
            $l_state     = $licence->state;
            $l_number    = $licence->license_no;
            $l_type      = $licence->type;
            $l_exp_date  = $licence->expiration_date; ?>

        <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td>State</td>
                    <td><?= $l_state ?></td>
                </tr>
                <tr>
                    <td>Licence no</td>
                    <td><?= $l_number ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><?= $l_type  ?></td>
                </tr>
                <tr>
                    <td>Expiration Date</td>
                    <td><?= $l_exp_date ?></td>
                </tr>
                </tbody>
        </table>
    <?php  }  ?>
    <!-- END OF EXPERIENCE AND QUALIFICATIONS – DRIVER -->

    <!-- DRIVING EXPERIENCE   -->
    <h2>DRIVING EXPERIENCE</h2>
    <?php $driving_expirience = $model->drivingExperiences;
    //TODO FALI TABELA CELA MITROVICU
        foreach ($driving_expirience as $driv_exp)
        {
            $de_straight_truk   = $driv_exp->straight_truck;
            $de_tractor_st      = $driv_exp->tractor_semi_trailer;
            $de_tractor_2       = $driv_exp->tractor_two_trailer;
            $de_tractor_3       = $driv_exp->tractor_three_trailer;
            $de_motor_8         = $driv_exp->motorcoach_eight;
            $de_motor_15        = $driv_exp->motorcoach_fifteen;
            $de_other           = $driv_exp->other;
            $de_states          = $driv_exp->states; ?>
        <h5>Fali tabela</h5>
    <?php } ?>
    <!-- END OF DRIVING EXP   -->

    <!-- CERTIFICATE OF DRIVER’S ROAD TEST   -->
    <h2>CERTIFICATE OF DRIVER’S ROAD TEST</h2>
    <?php $road_tests = $model->certificateRoadTests;
    foreach ($road_tests as $road_test)
    {
        $rt_license_number = $road_test->license_number;
        $rt_state          = $road_test->state;
        $rt_power_unit     = $road_test->power_unit;
        $rt_trailer_type   = $road_test->trailer_type;
        $rt_bus            = $road_test->bus; ?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td>Driver's Licence Number</td>
                <td><?= $rt_license_number ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?= $rt_state ?></td>
            </tr>
            <tr>
                <td>Type of Power Unit</td>
                <td><?= $rt_power_unit  ?></td>
            </tr>
            <tr>
                <td>Type of Trailer(s)</td>
                <td><?= $rt_trailer_type ?></td>
            </tr>
            <tr>
                <td>If passenger carrier, type of bus</td>
                <td><?= $rt_bus ?></td>
            </tr>
            </tbody>
        </table>
   <?php } ?>
    <!-- END OF  CERTIFICATE OF DRIVER’S ROAD TEST -->

    <!-- DRIVER’S ROAD TEST EXAMINATION   -->
    <h2>DRIVER’S ROAD TEST EXAMINATION</h2>
    <?php $examination_tests = $model->roadTestExaminations;
        foreach ($examination_tests as $examination_test)
        {
            $et_inspect       = $examination_test->pre_trip_inspect;
            $et_combination   = $examination_test->combination_units;
            $et_placing_eq    = $examination_test->placing_equipment;
            $et_emergency_eq  = $examination_test->energency_equipment;
            $et_operating_ven = $examination_test->operating_venchile;
            $et_turning_ven   = $examination_test->turning_venchile;
            $et_breaking_ven  = $examination_test->breaking_venchile;
            $et_backing_par   = $examination_test->backing_parking;
            $et_other         = $examination_test->other; ?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td><?= $et_inspect ?></td>
                <td>The pre-trip inspection. (As required by Sec. 392.7)</td>
            </tr>
            <tr>
                <td><?= $et_combination ?></td>
                <td>Coupling and uncoupling of combination units, if the equipment he or she may drive includes
                    combination units.</td>
            </tr>
            <tr>
                <td><?= $et_placing_eq  ?></td>
                <td>Placing the equipment in operation.</td>
            </tr>
            <tr>
                <td><?= $et_emergency_eq ?></td>
                <td>Use of vehicle’s controls and emergency equipment.</td>
            </tr>
            <tr>
                <td><?= $et_operating_ven ?></td>
                <td>Operating the vehicle in traffic and while passing other vehicles.</td>
            </tr>
            <tr>
                <td><?= $et_turning_ven ?></td>
                <td>Turning the vehicle.</td>
            </tr>
            <tr>
                <td><?= $et_breaking_ven ?></td>
                <td>Braking, and slowing the vehicle by means other than braking.</td>
            </tr>
            <tr>
                <td><?= $et_backing_par ?></td>
                <td>Backing, and parking the vehicle.</td>
            </tr>
            <tr>
                <td><?= $et_other ?></td>
                <td>Other, explain:</td>
            </tr>
            </tbody>
        </table>
    <?php }   ?>
    <!--  END OF DRIVER’S ROAD TEST EXAMINATION   -->

    <!--  DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK  -->
    <h2>DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK</h2>
    <?php $comp_works = $model->otherCompensatedWorks;
        foreach ($comp_works as $comp_work)
        {
            $cp_another_emp = $comp_work->another_employer;
            $cp_empl_by_co  = $comp_work->employed_by_company; ?>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td>Are you currently working for another employer?</td>
                <td><?= ($cp_another_emp)?'Yes':'No' ?></td>
            </tr>
            <tr>
                <td>At this time do you intend to work for another employer while still employed by this company?</td>
                <td><?= ($cp_empl_by_co)?'Yes':'No' ?></td>
            </tr>

            </tbody>
        </table>

    <?php  }  ?>
    <!--  END OF DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK  -->

    <!--  MOTOR VEHICLE DRIVER'S CERTIFICATION OF VIOLATIONS AND ANNUAL...  -->
    <h2>MOTOR VEHICLE DRIVER'S CERTIFICATION OF VIOLATIONS AND ANNUAL
        REVIEW OF DRIVING RECORD
    </h2>
    <?php $violations = $model->violationCertifications;
        if (count($violations) > 0)
        {   ?>
            <h4> Offense(s)</h4>
        <?php
            foreach ($violations as $violation)
            {
                $v_date     = $violation->date;
                $v_offense  = $violation->offense;
                $v_location = $violation->location;
                $v_venchile = $violation->type_of_venchile; ?>
                <table class="table table-striped table-bordered detail-view">
                    <tbody>
                    <tr>
                        <td>Date</td>
                        <td><?= $v_date ?></td>
                    </tr>
                    <tr>
                        <td>Offense</td>
                        <td><?= $v_offense ?></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td><?= $v_location ?></td>
                    </tr>
                    <tr>
                        <td>Type Of Venchile</td>
                        <td><?= $v_venchile ?></td>
                    </tr>

                    </tbody>
                </table>

    <?php }
        }
        $non_violations = $model->nonViolationCertifications;
        if (count($non_violations) > 0)
        {
            foreach ($non_violations as $non_violation)
            {
                $nv_date          = $non_violation->date;
                $nv_motor_name    = $non_violation->motor_name;
                $nv_motor_address = $non_violation->motor_address;
                $nv_motor_state   = $non_violation->motor_state;
                $nv_revied        = $non_violation->revied_by;
                $nv_title         = $non_violation->title; ?>

            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td>Date</td>
                    <td><?= $nv_date ?></td>
                </tr>
                <tr>
                    <td>Motor Carrier's Name</td>
                    <td><?= $nv_motor_name ?></td>
                </tr>
                <tr>
                    <td>Motor Carrier's Address</td>
                    <td><?= $nv_motor_address ?></td>
                </tr>
                <tr>
                    <td>Motor Carrier's City/State/Zip</td>
                    <td><?= $nv_motor_state ?></td>
                </tr>
                <tr>
                    <td>Reviewed by: Signature</td>
                    <td><?= $nv_revied ?></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><?= $nv_title ?></td>
                </tr>

                </tbody>
            </table>
            <?php
            }
        }
        ?>
    <!-- END  MOTOR VEHICLE DRIVER'S CERTIFICATION OF VIOLATIONS AND ANNUAL...  -->

    <!--  ALCOHOL AND DRUG TEST STATEMENT  -->
    <h2>PREVIOUS PRE-EMPLOYMENT EMPLOYEE
        ALCOHOL AND DRUG TEST STATEMENT</h2>
    <?php $alcohols_and_drugs = $model->alcoholDrugs;
        foreach ($alcohols_and_drugs as $alc_drug)
        {
            $ad_positive = $alc_drug->positive;
            $ad_proof    = $alc_drug->proof; ?>
            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td>Have you tested positive, or refused to test, on any pre-employment drug or alcohol test
                        administered by an employer to which you applied for, but did not obtain, safety-sensitive
                        transportation work covered by DOT agency drug and alcohol testing rules during the past
                        two years?</td>
                    <td><?= ($ad_positive)?'Yes':'No' ?></td>
                </tr>
                <tr>
                    <td>If you answered yes, can you provide/obtain proof that you’ve successfully completed
                        the DOT return-to-duty requirements?</td>
                    <td><?= ($ad_proof)?'Yes':'No' ?></td>
                </tr>
                </tbody>
            </table>
    <?php
        }
    ?>
</div>
</div>
