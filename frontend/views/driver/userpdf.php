<?php

use app\models\DrivingExperience;
use app\models\DrivingExperienceAnswers;
use app\models\Education;
use app\models\ExperienceQualification;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id = "userpdf">
<DIV id="page_1">
    <DIV id="id_1">
        <P class="p0 ft0">DRIVER’S APPLICATION</P>
        <P class="p1 ft0">FOR EMPLOYMENT</P>
        <TABLE cellpadding=0 cellspacing=0 class="t0">
            <TR height=0>
                <TD width=86px></TD>
                <TD width=38px></TD>
                <TD width=24px></TD>
                <TD width=9px></TD>
                <TD width=1px></TD>
                <TD width=211px></TD>
                <TD width=81px></TD>
                <TD width=34px></TD>
                <TD width=22px></TD>
                <TD width=111px></TD>
                <TD width=100px></TD>
            </TR>
            <TR>
                <TD class="tr0 td0"><P class="p2 ft1">Applicant Name</P></TD>
                <TD colspan=3 class="tr1 td1"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td2"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td3"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td4"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=4 class="tr1 td5"><P class="p4 ft3">Date of Application</P></TD>
            </TR>
            <TR>
                <TD colspan=4 class="tr0 td6"><P class="p5 ft1">(print)</P></TD>
                <TD class="tr0 td7"><P class="p3 ft2">&nbsp;</P></TD>
                <TD rowspan=2 class="tr2 td3"><P class="p6 ft4">BEVERLY FREIGHT INC</P></TD>
                <TD class="tr0 td8"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr0 td9"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr0 td10"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr0 td11"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr0 td12"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr0 td0"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=3 class="tr0 td13"><P class="p7 ft3">Company</P></TD>
                <TD class="tr0 td7"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td4"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td14"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td15"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr1 td16"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr0 td12"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr3 td0"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=2 class="tr3 td17"><P class="p7 ft3">Address</P></TD>
                <TD class="tr4 td18"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=2 class="tr4 td19"><P class="p3 ft4">1426 W Rosemont Ave Unit G</P></TD>
                <TD class="tr4 td4"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr4 td14"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr4 td15"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr4 td16"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr3 td12"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr5 td0"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr5 td20"><P class="p7 ft3">City</P></TD>
                <TD colspan=2 class="tr3 td21"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr3 td2"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr3 td3"><P class="p8 ft5">Chicago</P></TD>
                <TD class="tr3 td4"><P class="p3 ft1">IL</P></TD>
                <TD class="tr3 td14"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr5 td10"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr3 td16"><P class="p9 ft1">60660</P></TD>
                <TD class="tr5 td12"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
        </TABLE>
        <P class="p10 ft3">In compliance with Federal and State equal employment opportunity laws, qualified applicants are considered for all positions without regard to race, color, religion, sex, national origin, age, marital status, veteran status, <NOBR>non-job</NOBR> related disability, or any other protected group status.</P>
        <P class="p11 ft6">TO BE READ AND SIGNED BY APPLICANT</P>
        <P class="p12 ft7">I authorize you to make such investigations and inquiries of my personal, employment, financial or medical history and other related matters as may be necessary in arriving at an employment decision. (Generally, inquiries regarding medical history will be made only if and after a conditional offer of employment has been extended.) I hereby release employers, schools, health care providers and other persons from all liability in responding to inquiries and releasing information in connection with my application.</P>
        <P class="p13 ft8">In the event of employment, I understand that false or misleading information given in my application or <NOBR>inter-view(s)</NOBR> may result in discharge. I understand, also, that I am required to abide by all rules and regulations of the Company.</P>
        <P class="p14 ft7">I understand that information I provide regarding current and/or previous employers may be used, and those employer(s) will be contacted, for the purpose of investigating my safety performance history as required by 49 CFR</P>
        <P class="p15 ft8">391.23(d) and (e). I understand that I have the right to:</P>
        <P class="p16 ft8"><SPAN class="ft3">•</SPAN><SPAN class="ft9">Review information provided by previous employers;</SPAN></P>
        <P class="p17 ft8"><SPAN class="ft3">•</SPAN><SPAN class="ft9">Have errors in the information corrected by previous employers and for those previous employers to </SPAN><NOBR>re-send</NOBR> the corrected information to the prospective employer; and</P>
        <P class="p18 ft8"><SPAN class="ft3">•</SPAN><SPAN class="ft9">Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information.</SPAN></P>
        <P class="p19 ft8">Signature<SPAN style="padding-left:429px;">Date</SPAN></P>
        <TABLE cellpadding=0 cellspacing=0 class="t1">
            <TR>
                <TD class="tr6 td22"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td23"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td24"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td25"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td26"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td27"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td28"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td29"><P class="p20 ft10">FOR COMPANY USE</P></TD>
                <TD class="tr6 td30"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td7"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td31"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr7 td32"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td33"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td34"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td35"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td36"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td37"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td38"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td39"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td40"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td2"><P class="p3 ft11">&nbsp;</P></TD>
                <TD class="tr7 td41"><P class="p3 ft11">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr8 td42"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td23"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td24"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td25"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td26"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td27"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td28"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td29"><P class="p21 ft6">PROCESS RECORD</P></TD>
                <TD class="tr8 td30"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td7"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td43"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=5 class="tr6 td44"><P class="p22 ft1">APPLICANT HIRED</P></TD>
                <TD colspan=2 class="tr8 td45"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr8 td39"><P class="p23 ft1">REJECTED</P></TD>
                <TD class="tr8 td40"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td7"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td43"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=4 class="tr9 td46"><P class="p22 ft1">DATE EMPLOYED</P></TD>
                <TD colspan=3 class="tr10 td47"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=3 class="tr10 td48"><P class="p23 ft1">POINT EMPLOYED</P></TD>
                <TD class="tr9 td43"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr9 td49"><P class="p22 ft1">DEPARTMENT</P></TD>
                <TD colspan=5 class="tr10 td50"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=2 class="tr10 td51"><P class="p23 ft1">CLASSIFICATION</P></TD>
                <TD colspan=2 class="tr9 td52"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=8 class="tr11 td53"><P class="p4 ft12">(IF REJECTED, SUMMARY REPORT OF REASONS SHOULD BE PLACED IN FILE)</P></TD>
                <TD class="tr11 td30"><P class="p3 ft13">&nbsp;</P></TD>
                <TD class="tr11 td7"><P class="p3 ft13">&nbsp;</P></TD>
                <TD class="tr11 td43"><P class="p3 ft13">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=7 class="tr12 td54"><P class="p22 ft1">SIGNATURE OF INTERVIEWING OFFICER</P></TD>
                <TD class="tr6 td39"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr6 td40"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr12 td7"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr12 td43"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr13 td55"><P class="p3 ft14">&nbsp;</P></TD>
                <TD class="tr13 td33"><P class="p3 ft14">&nbsp;</P></TD>
                <TD class="tr13 td34"><P class="p3 ft14">&nbsp;</P></TD>
                <TD class="tr13 td35"><P class="p3 ft14">&nbsp;</P></TD>
                <TD class="tr13 td36"><P class="p3 ft14">&nbsp;</P></TD>
                <TD class="tr13 td37"><P class="p3 ft14">&nbsp;</P></TD>
                <TD class="tr13 td38"><P class="p3 ft14">&nbsp;</P></TD>
                <TD colspan=4 class="tr13 td56"><P class="p3 ft14">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr14 td22"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr14 td23"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr14 td24"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr14 td25"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr14 td26"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr14 td27"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr14 td28"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=4 class="tr14 td57"><P class="p24 ft6">TERMINATION OF EMPLOYMENT</P></TD>
            </TR>
            <TR>
                <TD colspan=3 class="tr8 td58"><P class="p25 ft1">DATE TERMINATED</P></TD>
                <TD colspan=4 class="tr15 td59"><P class="p3 ft2">&nbsp;</P></TD>
                <TD colspan=4 class="tr15 td60"><P class="p26 ft1">DEPARTMENT RELEASED FROM</P></TD>
            </TR>
            <TR>
                <TD class="tr16 td22"><P class="p25 ft1">DISMISSED</P></TD>
                <TD colspan=6 class="tr9 td61"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr9 td39"><P class="p27 ft1">VOLUNTARILY QUIT</P></TD>
                <TD colspan=3 class="tr9 td62"><P class="p3 ft1">OTHER</P></TD>
            </TR>
            <TR>
                <TD colspan=6 class="tr10 td63"><P class="p25 ft1">TERMINATION REPORT PLACED IN FILE</P></TD>
                <TD class="tr12 td38"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr12 td39"><P class="p28 ft1">SUPERVISOR</P></TD>
                <TD class="tr12 td40"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr12 td2"><P class="p3 ft2">&nbsp;</P></TD>
                <TD class="tr12 td41"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
        </TABLE>
        <P class="p29 ft15">This form is made available with the understanding that J. J. Keller & Associates, Inc. is not engaged in rendering legal, accounting, or other professional services. J. J. Keller & Associates, Inc. assumes no responsibility for the use of this form, or any decision made by an employer which may violate local, state, or federal law.</P>
    </DIV>
    <DIV id="id_2">
        <TABLE cellpadding=0 cellspacing=0 class="t2">
            <TR>
                <TD class="tr17 td64"><P class="p3 ft16">© Copyright 2005 J. J. KELLER & ASSOCIATES, INC., Neenah, WI • USA</P></TD>
                <TD class="tr17 td65"><P class="p3 ft2">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr18 td64"><P class="p30 ft16">(800) <NOBR>327-6868</NOBR> • www.jjkeller.com • Printedates in the United St</P></TD>
                <TD class="tr18 td65"><P class="p3 ft17">15F (Rev. 2/05) 691</P></TD>
            </TR>
        </TABLE>
    </DIV>
</DIV>
<DIV id="page_2">

    <DIV id="id_1">
        <h2>APPLICANT TO COMPLETE</h2>
    </DIV>
</DIV>
<div class = "container">
    <div class="driver-view">
        <h3>Personal information</h3>
        <table id="table-example-1">
            <tr>
                <td width="50%">Position(s) Applied for</td>
                <td><?=$model->position->name?></td>
            </tr>
            <tr>
                <td width="50%">Name</td>
                <td><?=$model->name?></td>
            </tr>
            <tr>
                <td width="50%">Middle Name </td>
                <td><?=$model->mi_name?></td>
            </tr>
            <tr>
                <td width="50%">Last Name</td>
                <td><?=$model->lname?></td>
            </tr>
            <tr>
                <td width="50%">Social Security Number</td>
                <td><?=$model->ssn?></td>
            </tr>
            <tr>
                <td width="50%">Phone</td>
                <td><?=$model->phone?></td>
            </tr>
            <tr>
                <td width="50%">Email</td>
                <td><?=$model->email?></td>
            </tr>
            <tr>
                <td width="50%">Do you have the legal right to work in the United States?</td>
                <td><?=$model->legal_right?></td>
            </tr>
            <tr>
                <td width="50%">Date of Birth </td>
                <td><?=$model->birth_date?></td>
            </tr>
        </table>
        <h3>Address</h3>
        <?php
        $adrese = $model->addresses;
        $address_count = 0;
        foreach ($adrese as $adresa) {
            if($address_count ==0){
                echo '<h4>Current Address</h4>';
            }else{
                echo '<h4>Previous Address '.$address_count.'</h4>';
            }
            $street = $adresa->street;

            $state = $adresa->state;
            $zip = $adresa->zip;
            $time = $adresa->time;
            ?>
            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td width="50%">State</td>
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
            <?php
            $address_count++;
        }
        ?>
        <h3>Other</h3>
        <?php
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                [
                    'attribute' => 'Are you now employed?',
                    'value'=>$model->driverCustomQuestions->now_employed,
                ],
                [
                    'attribute' => 'Who referred you?',
                    'value'=>$model->driverCustomQuestions->refereed_you,
                ],
                [
                    'attribute' => 'Rate of pay expected',
                    'value'=>$model->driverCustomQuestions->rate_of_pay,
                ],
                [
                    'attribute' => 'Have you ever been bonded?',
                    'value'=>$model->driverCustomQuestions->bonded,
                ],
                [
                    'attribute' => 'Have you ever been convicted of a felony?',
                    'value'=>$model->driverCustomQuestions->convicted,
                ],
                [
                    'attribute' => 's there any reason you might be unable to perform the functions of the job for which you have applied ?',
                    'value'=>$model->driverCustomQuestions->unable_reason,
                ],
            ],
        ]);
        ?>

        <!--  Employment History    -->
        <h2>Employment History</h2>
        <p>All driver applicants to drive in interstate commerce must provide the following information on all employers during the
            preceding 3 years. List complete mailing address, street number, city, state and zip code.
            Applicants to drive a commercial motor vehicle* in intrastate or interstate commerce shall also provide an addi-tional 7 years’
            information on those employers for whom the applicant operated such ve (NOTE: List employers in reverse order starting with the
            most recent. Add another sheet as necessary.)</p>
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
            <table class="table table-striped table-bordered detail-view pdf_table">
                <tbody>
                <tr>
                    <td>Employer Name</td>
                    <td width="50%"><?= $eh_name ?></td>
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
                    <td>WERE YOU SUBJECT TO THE FMCSRs WHILE EMPLOYED </td>
                    <td><?php if($eh_fmcr){echo 'Yes';}else{echo 'No';} ?></td>
                </tr>
                <tr>
                    <td>WAS YOUR JOB DESIGNATED AS A SAFETY-SENSITIVE FUNCTION IN ANY DOT-REGULATED MODE SUBJECT TO THE DRUG AND
                        ALCOHOL TESTING REQUIREMENTS OF 49 CFR PART 40?</td>
                    <td><?php if($eh_safety){echo 'Yes';}else{echo 'No';} ?></td>
                </tr>
                <hr>
                </tbody>
            </table>
        <?php  } ?>
        <p>*Includes vehicles having a GVWR of 26,001 lbs. or more, vehicles designed to transport 16 or more passengers
            (including the driver), or any size vehicle used to transport hazardous materials in a quantity requiring placarding.</p>

        <p>✝ The Federal Motor Carrier Safety Regulations (FMCSRs) apply to anyone operating a motor vehicle on a highway
            in interstate commerce to transport passengers or property when the vehicle: (1) weighs or has a GVWR of 10,001 pounds
            or more, (2) is designed or used to transport more than 8 passengers (including the driver), OR (3) is of any size and is
            used to transport hazardous materials in a quantity requiring placarding.</p>
        <!-- END OF Employment History   -->
        <!-- Accident Record    -->
        <h2>Accident Record</h2>
        <?php
        $accident_records = $model->accidentRecords;
        //var_dump($accident_records);
        $accident_count = 0;
        foreach ($accident_records as $record) {
            $record_date     = $record->date;
            $accident_nature = $record->accident_nature;
            $fatalities      = $record->fatalities;
            $injuries        = $record->injuries;
            $hazaard         = $record->hazardous_material;
            if($accident_count ==0){
                echo '<h4>LAST ACCIDENT</h4>';
            }else{
                echo '<h4>PREVIOUS ACCIDENT '.$accident_count.'</h4>';
            }
            ?>
            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td width="50%">Date</td>
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
        <?php
            $accident_count++;
        } ?>
        <!-- END OF Accident Record   -->

        <h2>Traffic Convictions and Forfeitures</h2>
        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <td width = "25%">Location</td>
                <td width = "25%">Date</td>
                <td width = "25%">Charge</td>
                <td width = "25%">Penalty</td>
            </tr>
        <?php $convictions = $model->trafficConvictions;
        foreach($convictions as $convict)
        {
            $c_location = $convict->location;
            $c_date     = $convict->date;
            $c_charge   = $convict->charge;
            $c_penalty  = $convict->penalty; ?>


                <tr>
                    <td><?= $c_location ?></td>
                    <td><?= $c_date ?></td>
                    <td><?= $c_charge  ?></td>
                    <td><?= $c_penalty ?></td>
                </tr>

        <?php    }
        ?>
            </tbody>
        </table>


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
                    <td width="50%">State</td>
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
        <?php
        $drv_experience_types = DrivingExperience::find()->all();


        ?>
        <table class="table table-striped table-bordered detail-view">
            <thead>
            <th>CLASS OF EQUIPMENT</th>
            <th>CIRCLE TYPE OF EQUIPMENT</th>
            <th>DATES</th>
            <th>APPROX. NO. OF MILES</th>
            </thead>
            <tbody>

            <?php foreach ($drv_experience_types as $drv_type)
            { ?>
                <tr>
                    <td><?= $drv_type->name ?></td>
                    <td>
                        <?php $customers = DrivingExperienceAnswers::findAll(['driving_experience_id' => $drv_type->id,'driver_id' => $model->id]);
                        foreach ($customers as $customer)
                        {
                            echo $customer->type;
                        }
                        ?>
                    </td>
                    <td>
                        <?php $customers = DrivingExperienceAnswers::findAll(['driving_experience_id' => $drv_type->id,'driver_id' => $model->id]);
                        foreach ($customers as $customer)
                        {
                            echo $customer->dates;
                        }
                        ?>
                    </td>
                    <td>
                        <?php $customers = DrivingExperienceAnswers::findAll(['driving_experience_id' => $drv_type->id,'driver_id' => $model->id]);
                        foreach ($customers as $customer)
                        {
                            echo $customer->miles;
                        }
                        ?>
                    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>
        <?php
        ?>
        <h2>EXPERIENCE AND QUALIFICATIONS – OTHER</h2>

        <?php $exp_qualifications = ExperienceQualification::findAll(['driver_id' => $model->id]);
        foreach ($exp_qualifications as $exp_qualification)
        {
            $eq_states = $exp_qualification->states;
            $eq_other  = $exp_qualification->other_experience;
            $eq_course = $exp_qualification->courses_training;
            $eq_spec   = $exp_qualification->special_equipment; ?>
            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td>LIST STATES OPERATED IN FOR LAST FIVE YEARS:</td>
                    <td><?= $eq_states ?></td>
                </tr>
                <tr>
                    <td>SHOW ANY TRUCKING, TRANSPORTATION OR OTHER EXPERIENCE THAT MAY HELP IN YOUR WORK FOR THIS COMPANY</td>
                    <td><?= $eq_other ?></td>
                </tr>
                <tr>
                    <td>LIST COURSES AND TRAINING OTHER THAN SHOWN ELSEWHERE IN THIS APPLICATION</td>
                    <td><?= $eq_course  ?></td>
                </tr>
                <tr>
                    <td>LIST SPECIAL EQUIPMENT OR TECHNICAL MATERIALS YOU CAN WORK WITH (OTHER THAN THOSE ALREADY SHOWN)</td>
                    <td><?= $eq_spec ?></td>
                </tr>
                </tbody>
            </table>
        <?php }
        ?>


        <h2>EDUCATION</h2>

        <?php $educations = Education::findAll(['driver_id' => $model->id]);

        foreach ($educations as $education)
        {   ?>
            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td width="50%">HIGHEST GRADE COMPLETED</td>
                    <td><?= $education->highest_school ?></td>
                </tr>
                <tr>
                    <td>HIGH SCHOOL</td>
                    <td><?= $education->high_school ?></td>
                </tr>
                <tr>
                    <td>COLLEGE:</td>
                    <td><?= $education->college  ?></td>
                </tr>
                <tr>
                    <td>LAST SCHOOL ATTENDED</td>
                    <td><?= $education->last_school ?></td>
                </tr>
                <tr>
                    <td>LAST SCHOOL ATTENDED - State</td>
                    <td><?= $education->last_school_state ?></td>
                </tr>
                </tbody>
            </table>
        <?php }
        ?>
        <!-- CERTIFICATE OF DRIVER’S ROAD TEST   -->
        <h2>CERTIFICATE OF DRIVER’S ROAD TEST</h2>
        <p>Instructions:
            The original or copy of the certificate shall be retained in the employing motor
            carrier’s driver qualification file of the person examined and copy given to the person who was examined. (49 CFR
            391.31(e)(f)(g)).</p>
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
                    <td width="50%">Driver's Licence Number</td>
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
        <p>INSTRUCTIONS: When employed by a motor carrier, a driver must report to the carrier all on-duty time including time working for other employers. The
            definition of on-duty time found in Section 395.2 paragraphs (8) and (9) of the Federal Motor Carrier Safety Regulations includes time performing any
            other work in the capacity of, or in the employ or service of, a common, contract or private motor carrier, also performing any compensated work for any
            nonmotor carrier entity.</p>
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
        <h4>SECTION I
            MOTOR VEHICLE
            DRIVER CERTIFICATION
            OF VIOLATIONS</h4>
        <p> I certify that the following is a true and complete list of traffic violations (other than parking violations) which I have been
            convicted or forfeited bond or collateral during the past 12 months.</p>
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
        <p>Sec. 40.25(j) As the employer, you must also ask the employee whether he/she has tested positive, or refused to test, on any
            pre-employment drug or alcohol test administer by an employer to which the employee applied for, but did not obtain, safetysensitive
            transportation work covered by DOT agency drug and alcohol testing rules during the past two years. If the employee
            admits that he/she had a positive test or a refusal to test, you must not use the employee to perform safety-sensitive functions
            for you, until and unless the employee documents successful completion of the return-to-duty process. (see Sec. 40.25(b)(5)
            and (e))</p>
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
    <DIV id="page_11">


        <P class="p64 ft85">Beverly Freight,Inc</P>
        <P class="p64 ft85">1426 W Rosemont Ave #G</P>
        <P class="p130 ft85">Chicago,IL 60660</P>
        <P class="p206 ft86">LISTING OF BEVERLY FREIGHT IN HOUSE RULES FOR TRAFFIC OFFENSES WITH</P>
        <P class="p207 ft87">APPROPRIATE PENALTIES FOR IT</P>
        <P class="p208 ft89">The following chart below is the new updated version of <SPAN class="ft88">Beverly Freight,Inc </SPAN>driving statute that was adopted based on previous experience that we had supervising the drivers on their everyday duty’s and attitudes towards traffic rules.</P>
        <P class="p209 ft91">This charges are measures that had to be taken in order to keep the company safety record underneath the <SPAN class="ft90">NATIONAL AVERAGE SCORE </SPAN>provided by <SPAN class="ft90">SAFER </SPAN>and</P>
        <P class="p210 ft93">FMCSA<SPAN class="ft92">.</SPAN></P>
        <P class="p211 ft92">By signing this form Drivers and Owner operators are agreeing to all charges listed underneath as consequences for their behavior.</P>
        <TABLE cellpadding=0 cellspacing=0 class="t29">
            <TR>
                <TD class="tr37 td363"><P class="p48 ft87">UNSAFE DRIVING</P></TD>
                <TD class="tr37 td364"><P class="p66 ft87">CHARGE 1<SPAN class="ft94">ST </SPAN>TIME</P></TD>
                <TD class="tr37 td365"><P class="p212 ft87">CHARGE 2<SPAN class="ft94">ND </SPAN>TIME</P></TD>
            </TR>
            <TR>
                <TD class="tr18 td366"><P class="p3 ft95">&nbsp;</P></TD>
                <TD class="tr18 td367"><P class="p3 ft95">&nbsp;</P></TD>
                <TD class="tr18 td368"><P class="p3 ft95">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">392.16 FAILING TO USE</P></TD>
                <TD class="tr12 td370"><P class="p66 ft86">1000$</P></TD>
                <TD class="tr12 td371"><P class="p212 ft97">2000$+ TERMINATION</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">SEAT BELTS WHILE</P></TD>
                <TD class="tr12 td370"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr12 td371"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr9 td366"><P class="p48 ft99">OPERATING CMV</P></TD>
                <TD class="tr9 td367"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr9 td368"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">392.2C FAILURE TO OBEY</P></TD>
                <TD class="tr12 td370"><P class="p66 ft86">2000$</P></TD>
                <TD class="tr12 td371"><P class="p212 ft97">3000$+ TERMINATION</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">TRAFFIC CONTROL</P></TD>
                <TD class="tr12 td370"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr12 td371"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td369"><P class="p48 ft100"><SPAN class="ft99">DEVICE (</SPAN>NOT STOPPING</P></TD>
                <TD class="tr10 td370"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr10 td371"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td366"><P class="p48 ft100">ON THE WEIGH STATION<SPAN class="ft99">)</SPAN></P></TD>
                <TD class="tr10 td367"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr10 td368"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td369"><P class="p48 ft99">392.71a USING OR</P></TD>
                <TD class="tr10 td370"><P class="p66 ft87">1000$</P></TD>
                <TD class="tr10 td371"><P class="p212 ft87">1000$</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">EQUIPPING A CMV WITH</P></TD>
                <TD class="tr12 td370"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr12 td371"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td366"><P class="p48 ft99">RADAR DETECTOR</P></TD>
                <TD class="tr10 td367"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr10 td368"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td369"><P class="p48 ft99">392.2 LV LANE</P></TD>
                <TD class="tr10 td370"><P class="p66 ft87">300$</P></TD>
                <TD class="tr10 td371"><P class="p212 ft87">600$</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td366"><P class="p48 ft99">RESTRICTION VIOLATION</P></TD>
                <TD class="tr10 td367"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr10 td368"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">392.2PK UNLAWFULLY</P></TD>
                <TD class="tr12 td370"><P class="p66 ft86">100$</P></TD>
                <TD class="tr12 td371"><P class="p212 ft86">200$</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td369"><P class="p48 ft96">PARKING OR LEAVING</P></TD>
                <TD class="tr12 td370"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr12 td371"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td369"><P class="p48 ft99">VEHICLE IN THE</P></TD>
                <TD class="tr10 td370"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr10 td371"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr10 td366"><P class="p48 ft99">ROADWAY</P></TD>
                <TD class="tr10 td367"><P class="p3 ft98">&nbsp;</P></TD>
                <TD class="tr10 td368"><P class="p3 ft98">&nbsp;</P></TD>
            </TR>
        </TABLE>
    </DIV>
    <DIV id="page_12">
        <DIV id="p12dimg1">
            <IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAFfAAEDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD1/wD4QTwf/wBCpof/AILof/iaK6CigAooooAKKKKACiiigDz/AP4Wn/1IXjn/AME//wBnRXoFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP/Y/GH/Qd0P8A8E03/wAlUV0FFABRXn//AAu34ef9DD/5JXH/AMbooA//2Q==" alt=""></DIV>


        <P class="p68 ft85">Beverly Freight,Inc</P>
        <P class="p68 ft85">1426 W Rosemont Ave #G</P>
        <P class="p68 ft101">Chicago,IL 60660</P>
        <TABLE cellpadding=0 cellspacing=0 class="t30">
            <TR>
                <TD class="tr9 td372"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td373"><P class="p212 ft99">392.60a UNAUTHORIZED</P></TD>
                <TD class="tr10 td374"><P class="p213 ft87">300$</P></TD>
                <TD class="tr10 td375"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td365"><P class="p214 ft87">500$</P></TD>
                <TD class="tr9 td28"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr12 td372"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td376"><P class="p212 ft96">PASSENGER ON BOARD</P></TD>
                <TD class="tr12 td377"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td378"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td371"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td28"><P class="p3 ft103">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD class="tr16 td372"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr9 td379"><P class="p212 ft99">CMV</P></TD>
                <TD class="tr9 td380"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr9 td381"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr9 td368"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr16 td28"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr38 td382"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr38 td380"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr38 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr38 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr38 td385"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr4 td386"><P class="p38 ft87">HOURS OF SERVICE WITH</P></TD>
                <TD class="tr4 td387"><P class="p59 ft87">1<SPAN class="ft94">ST </SPAN>TIME</P></TD>
                <TD class="tr4 td26"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr4 td388"><P class="p3 ft87">2<SPAN class="ft94">ND </SPAN>TIME</P></TD>
                <TD class="tr4 td389"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr15 td386"><P class="p38 ft104">OUT OF SERVICE</P></TD>
                <TD class="tr15 td387"><P class="p3 ft105">&nbsp;</P></TD>
                <TD class="tr15 td26"><P class="p3 ft105">&nbsp;</P></TD>
                <TD class="tr15 td388"><P class="p3 ft105">&nbsp;</P></TD>
                <TD class="tr15 td389"><P class="p3 ft105">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr9 td390"><P class="p38 ft87">VIOLATIONS</P></TD>
                <TD class="tr9 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr9 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr9 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr9 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr6 td386"><P class="p38 ft106">ANY HOURS OF SERVICE-</P></TD>
                <TD class="tr6 td387"><P class="p215 ft107">1000$</P></TD>
                <TD class="tr6 td26"><P class="p3 ft108">&nbsp;</P></TD>
                <TD class="tr6 td388"><P class="p3 ft109">2000$ + TERMINATION</P></TD>
                <TD class="tr6 td389"><P class="p3 ft108">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr12 td386"><P class="p38 ft96">OUT OF SERVICE</P></TD>
                <TD class="tr12 td387"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td26"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td388"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td389"><P class="p3 ft103">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr16 td390"><P class="p38 ft99">VIOLATION</P></TD>
                <TD class="tr16 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr16 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr16 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr16 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr6 td386"><P class="p38 ft106">395.13d DRIVING AFTER</P></TD>
                <TD class="tr6 td387"><P class="p215 ft107">5000$</P></TD>
                <TD class="tr6 td26"><P class="p3 ft108">&nbsp;</P></TD>
                <TD class="tr6 td388"><P class="p3 ft109">TERMINATION</P></TD>
                <TD class="tr6 td389"><P class="p3 ft108">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td390"><P class="p38 ft99">BEING DECLARED OOS</P></TD>
                <TD class="tr10 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr12 td386"><P class="p38 ft96">ANY VIOLATION HOURS</P></TD>
                <TD class="tr12 td387"><P class="p59 ft86">500$</P></TD>
                <TD class="tr12 td26"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td388"><P class="p3 ft97">1000$ + TERMINATION</P></TD>
                <TD class="tr12 td389"><P class="p3 ft103">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td390"><P class="p38 ft99">OF SERVICE RELATED</P></TD>
                <TD class="tr10 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td386"><P class="p38 ft99"><NOBR>392.2-SLLS2</NOBR> STATE/LOCAL</P></TD>
                <TD class="tr10 td387"><P class="p59 ft87">1000$</P></TD>
                <TD class="tr10 td26"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td388"><P class="p3 ft110">2000$ + TERMINATION</P></TD>
                <TD class="tr10 td389"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr12 td386"><P class="p38 ft96">LAWS SPEEDING AND</P></TD>
                <TD class="tr12 td387"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td26"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td388"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td389"><P class="p3 ft103">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td390"><P class="p38 ft99">WARNING</P></TD>
                <TD class="tr10 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr12 td386"><P class="p38 ft96"><NOBR>392.2-SLLSWZ</NOBR> SPEEDING</P></TD>
                <TD class="tr12 td387"><P class="p59 ft97">2000$ + TERMINATION</P></TD>
                <TD class="tr12 td26"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td388"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td389"><P class="p3 ft103">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td386"><P class="p38 ft99">IN A</P></TD>
                <TD class="tr10 td387"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td26"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td388"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td389"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td386"><P class="p38 ft99">WORK/CONSTRUCTION</P></TD>
                <TD class="tr10 td387"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td26"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td388"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td389"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td390"><P class="p38 ft99">ZONE</P></TD>
                <TD class="tr10 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td386"><P class="p38 ft99">392.2R RECKLESS DRIVING</P></TD>
                <TD class="tr10 td387"><P class="p59 ft110">2000$ +TERMINATION</P></TD>
                <TD class="tr10 td26"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td388"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td389"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr27 td390"><P class="p3 ft111">&nbsp;</P></TD>
                <TD class="tr27 td391"><P class="p3 ft111">&nbsp;</P></TD>
                <TD class="tr27 td383"><P class="p3 ft111">&nbsp;</P></TD>
                <TD class="tr27 td384"><P class="p3 ft111">&nbsp;</P></TD>
                <TD class="tr27 td392"><P class="p3 ft111">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr12 td386"><P class="p38 ft96">391.11b2 <NOBR>NON-ENGLISH</NOBR></P></TD>
                <TD class="tr12 td387"><P class="p59 ft86">500$</P></TD>
                <TD class="tr12 td26"><P class="p3 ft103">&nbsp;</P></TD>
                <TD class="tr12 td388"><P class="p216 ft112">1000$</P></TD>
                <TD class="tr12 td389"><P class="p3 ft103">&nbsp;</P></TD>
            </TR>
            <TR>
                <TD colspan=2 class="tr10 td390"><P class="p38 ft99">SPEAKING DRIVER</P></TD>
                <TD class="tr10 td391"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td383"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td384"><P class="p3 ft102">&nbsp;</P></TD>
                <TD class="tr10 td392"><P class="p3 ft102">&nbsp;</P></TD>
            </TR>
        </TABLE>
        <P class="p217 ft99"><SPAN class="ft99">-</SPAN><SPAN class="ft113">Any violation as a result of roadside inspection (except above described) will be charged by the points per violation from FMCSA Safety Management System(SMS) multiply 35$</SPAN></P>
        <P class="p218 ft99"><SPAN class="ft100">Example: </SPAN>Inspection with violation 393.25(f) Stop lamp violations Violation Severity Weight is 6 points, Time Weight is 3, Total Weight is 18 points</P>
        <P class="p219 ft99">6*3*35$=630$</P>
    </DIV>
    <DIV id="page_13">


        <DIV id="id_1">
            <P class="p64 ft85">Beverly Freight,Inc</P>
            <P class="p64 ft85">1426 W Rosemont Ave #G</P>
            <P class="p130 ft85">Chicago,IL 60660</P>
            <P class="p220 ft99"><SPAN class="ft99">-</SPAN><SPAN class="ft113">Any driver that had inspection with maintenance violation will be submitted to a supervise conditional program in which driver is required to perform an Annual DOT inspection in time period no less than two months repeatedly until further notes. Annual DOT inspection will be conducted at following facilities: TA, Petro Truck Stop or Speedco.</SPAN></P>
            <P class="p221 ft114"><SPAN class="ft114">-</SPAN><SPAN class="ft115">In the situation when the roadside DOT inspection is followed by a citation, all BEVERLY FREIGHT drivers are advised to hire a lawyer to try and fight the ticket in order to dismiss it. This impacts the company safety score and drivers personal record, it is highly recommended to make this as a priority. BEVERLY FREIGHT will be involved and will help out all drivers to clean their record by paying already predetermined BEVERLY FREIGHT charge expense(s). If the ticket is dismissed and violation challenged, the moment it is removed from BEVERLY FREIGHT public safety records, funds will be reimbursed to the eligible driver.</SPAN></P>
            <P class="p222 ft116">We appreciate your devotion in this matter and opportunity to help each other now and in future.</P>
            <P class="p223 ft87">REWARDS:</P>
            <P class="p224 ft99">Level III inspection – no violation discovered reward is 100$</P>
            <P class="p130 ft99">Level II inspection – no violation discovered reward is 200$</P>
            <P class="p225 ft99">Level I inspection – no violation discovered reward is 300$</P>
            <P class="p226 ft99">DRIVER NAME______________________________________</P>
        </DIV>
        <DIV id="id_2">
            <P class="p64 ft99">SIGNATURE________________________ DATE________________</P>
        </DIV>
    </DIV>
    <DIV id="page_14">
        <DIV id="p14dimg1">
            <IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAQgAzADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD32V/Lid8Z2gnFOpsi742TONwIzTqACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACqeq6rZaJpsuo6jOsFpDt8yVgcLlgo6e5FXK4/4pafeap8OdVs9Ptpbm6kMOyGJcs2JkJwPoCfwoA1tT8W6Do08UOo6nDbySKGCtnhScAtgfKCeMnFbVcd4qNvqumnRZLbUlt7qENdTW1lI7Mg6RhgpAZjxyCAM9CQR2I6c0AFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRmgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/xj4+l8H/FyP8AtUX0mjf2YBHBbyEDezHMu3IDEYK+vPFdho99pXhzw5qetS+Ipb/RGm8+G4nnacwoQq+WCcnG7oP9qqPiJrfUNT1jTfFWjT3fhxBDJbXEdu8pSQrhlAjBfvncBxyK4dfAWrWngLxbZaTBeTWs93BLp8NwoWaeNG+ZmXAPuBgE7Bx6gHonh34maF4iuLmBI7yxkt7UXjC9jVAYDj5wQxGPmHXnmmaN8TtG1rXrDSI7PU7afUIWntHuYFVJoxuO4EMSMhGxkCuM8N2SS+GbjVh4Z1W619dHksriK8MnlHaVAiUOfmBAB+XoMjIJFZHhbTtXX4h+CdUudOv4rX7NNE0YtdkVtxMFVQBuCfMpy2T8xyT2AOutPiRd3vxhufD/APZ9+un29uYPLSLLeaXjxK/TamCQDnoQe9cx8NfijBong+SXxLeatfyyXpzO2+cQRkKFLO5+Vc54yT7c1vaRbXNl+0f4gvZLC7Ftd2CRRTCAlGO2Dnd0A+Ruvp61xPhu3v7X4Nan4bfTdQ/tjUbuO4s7Y2cn7xQ8X8W3ao/dt94igD23V/G+jaRZafcs892dRx9khs4jLJMMZyFHYDqa8++KXik3Oh+GNc8Oa1dxw3V55RNrcvGrqRna6gjkEY56ZNcyPDOveDNd8GahqVpfS2ltaG1uJbAea9u7PMWX5ATwJAc4wcHGaPF3h620jwvpWmaJpusG3GsNfRieNpXkjESL5nyr8gzgbW+bgnHNAHo+rfE2Kx+IieGhp9+UtozNcyQ27StJlMqqooztG4Et04x71rfE6a4tfh1rN1aXVxbXEEPmRy28zRupBHdSDXDtK9j8e4/EVxa3g0vUNNVbedbWRskqoAIC5U8c7gMd+K9E8daVc654F1nTbOPzLm4tmWJCdu5uoHP0oA574ZQy638OYbq+1HU5rq7M0ckz30pddsjKNp3fL90cjmm+EvENp4b+Hei32t6pf3l1qSCRTK0lxNK7AZVBycAc4HHWsj4deMtI8N+GLXw3qjXVtrVvJL5lkbOV3yzs4xtUg53DvWN4z0azsvDfhTSNSurvTNbsLDdb30Z3W8Eq7AUkIBxk8BhgDjr0oA9TPjfw+nh6DXJb8Q2E8nkxtJGwYyZI27cZzlW4x2NP0PxloPiHSrjUrC+U21sxSdpQUMRAz8wPSvFfEHiHUb74VeH7vXtMt7u8k1VzDO6uEKruAdljILEktjoDtzg94/D8dg+h/ETSNcu76zSR0kaZrZy6qszspICgDJZODjhuOnAB63/wtPwUH2trsSZYhGaN9r4OMqduCMg8j0rWu/F+g2OuJo1zqUSag+P3Rz8uRlQx6KT2ya8F+Hl/pF9r/hSLUNbsbRNFimNuAzq87ySlgrblCj72MBj0rQs4rNtW8VeDvFV3q1tPqF99ohgs4xK158xdQG8tiDgLzkD6YNAH0BcwfabaSHzZYt4xvibay+4PavANF8ReKrz4Uah4ubxTqAvLK6SFImEbROC8Y+Ybc/xnuK9zing0bw/DLeyPBBbQKJHuHBZQAB8zDgn1I4zXiHwX0fwrrnh97DWVS51BLlmS0lmkUFQqkN5eQrc7uSD09qAPSvDPj+yufh5pniTxBc29kbpnjJGSHdXZBtA5JITOAKreOvFAufhjd654Y1kAxywqtxbENjdKiMDnpw+cVg/ES0Gk/EPwJqEqpb6BaTeTuGFjhkzkZ9OAOf8AZNcHZmQfDnx5qBlUaXfavELTJ/1rC4VmZR6bdvPt7UAd3ofii41bTvBcc/jOKz1NnMl3BLGd16pchV4wvOMfjmvRb/xZoOl6tFpd7qlvBfSgFIXbB5zjJ6DOOMkZr58l1XTjY/C9ftEQe0uGeck8xKLj+LPToTz6VradqGi2uu+L/C3j1riBdSvI502xyPJIVkJUZjDcFQmPxoA9yXxJoj6sdJGq2f8AaAYr9m85fMyBnG3Oan03V9O1m3afTb23u4VbYzwSBwGwDjI9iD+NePfE3TbjwjrXh/xtoUcgZTFZy27k/vcIQitkbsldyHP+z3r1nw3ocHhzQLXS4CWEKku55Mjk5ZicckkmgDVooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooACM9arw6hZXLMsF3BKVOG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ABRRRQAUUUUAFFFFABRRRQAUhGccmlooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooArahcy2dhPcQWsl3LGhZIIiA0h9Bniucs/GF9e6jd2SeGrzzLOeOG5IuIm8veAQcBuQAwJx2rrK5DwpOsnivxaNki+ZexujNEyh1EKISCQM4KkcUAbuh6sNZ04XXleS3nTRGIuGIMcrRnp7r+taG9BnLAYODk+2f5V5rphhjXw/fRWksV3Nr16kkotirmBpLhgrHbkKcxHnA6fWvNZp7h4rl7Sz1C1S60F4GtorKZc3IfgSSHmVxknefXjFAH0LrmrrouiX2peQ9yLOFpnijIDbVBJ6+wNaAIJwCDxmvELmNY/twtLO4SOfwTsmCwOBLPlVG7j5n5xzziu98IzSW2q39jqzC41dpPOW+WBlW4gcArjIOzbyuzOBjPegDsd6/N8w+X73PT60F1DBc8ntXA+JvCl0fFMl/pcpi/t21OmXhUY8o/fE3udiMmOOSvNYV3HdtNremMfJ8WNrKSaTMc+YLIyxkeW3JWIIsgZR8vDcc0Aeugg9DmivHvFviGO21nVdJjmuzdrrtldLHBDIwWAxQ7juHABO7gHJOeOa9L0HxDZ+Io757JZQtldvZy+am0+YmCcA9vmHNAGtRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAB5FGAM+9FFABjHSiiigDItfDlnaeJb3Xlkunu7uMRssk5MaKAoIVOgzsXP0+udeiigBCoIIPeq9pY29iJhboy+dIZZCzsxZiAM5JPYAY6ACrNFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUgUAk88+9LQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAFTUdTsNItftWo3kFpb7gvmzyBFyegyazv8AhNPCv/QzaN/4Hxf/ABVbE9vDcx+XPDHKmc7ZFDDP0NQf2Vp3/Pha/wDflf8ACgDO/wCE08K/9DNo3/gfF/8AFUf8Jp4V/wChm0b/AMD4v/iq0P7K07/oH2v/AH5X/CkOkaYwwdOtCPQwL/hQBn/8Jr4UHXxPo3/gfF/8VS/8Jr4U/wChm0b/AMD4v/iqujQ9IAwNKscf9e6f4Uw+HtELBjo+nlh0P2ZM/wAqAKn/AAmvhT/oZ9G/8D4v/iqP+E28J/8AQz6L/wCB8X/xVWn8OaHIu2TRtOcejWqH+lVj4L8Kk5PhnRv/AAAi/wDiaAFXxn4Wc4XxLo5PoL6L/wCKqaPxPoEpxHrmmOf9m7jP9ar/APCFeFP+hY0X/wAAIv8A4ml/4Qrwr/0LOjf+AEX/AMTQBcXXdIb7uq2J+lwn+NS/2pp//P8A2v8A3+X/ABrO/wCEL8K5/wCRZ0b/AMAIv/iaT/hCfCn/AELGi/8AgBF/8TQBpf2pp/8Az/2v/f5f8aP7U0//AJ/rb/v8v+NZh8EeEz18L6Kf+4fF/wDE0n/CDeEf+hW0T/wXxf8AxNAGp/amn/8AP9a/9/l/xo/tXTv+f+1/7/L/AI1l/wDCDeEf+hW0T/wXxf8AxNH/AAgvhD/oVdD/APBfF/8AE0Aay6jZP928t2+kqn+tO+22v/PzD/38FZC+CPCa/d8L6KPpp8X/AMTTv+EM8K/9C1o3/gBF/wDE0AbAuIGGRNGR7MKerq4yrBh6g5rHHhHwyowPDukgegso/wD4mnr4W8PJ93QdLX6WcY/pQBrUVlf8IzoH/QD03/wEj/wo/wCEZ0D/AKAem/8AgJH/AIUAatFY7eFPDzHJ0TT8+1ug/pSf8Il4d/6Alh/34X/CgDZorFbwj4dcYOi2OPaECoT4H8Mk5/sa2/AEf1oA6CisBPBXhtDlNJgU+oyP61OvhfRV+7ZAfSRv8aANiiqdnpdnYOz20OxmGCd7HP5mrlABRRRQAUUUUAFFFFABRRRQAUUUUAGcdaKa6CSNkJYBgRlTgj6EdK5r/hB7LtrHiMf9xq5/+LoA6eiuSn8AW033fEPiiL/rnrM39Sag/wCFcQf9DX4v/wDBzJQB2lFcavw8iQYHirxYfrq8hqX/AIQNP+ho8Uf+DNv8KAOtorlR4IAGP+En8S/+DD/7Gj/hCOf+Ro8Tf+B//wBjQB1VFcm3gYk8eK/E4+l+P/iaY/gOQj5fGHihT6/blP8A7JQB19FcWfh/ck8eN/FQ+l4n/wARWv4f8Oz6E0xl17VtUEuMC/lV/Lx6YUUAbtFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAEF61ylnI1osRnAyolJC/jjmvN7H4pXqeFdL8UaxplvFpF/c/Zt1tMWlhbc4yVZQCPl7N+Fei6jO9tp880dtNcuqHEUIBdj6DJFeK6d4O8Qa78PNG8CXuiXWnJBcme71C4ZCiKGdgEVWJYncPTHrQB7BP4k0O2kmjn1exikh2eakk6qybgCuQTkZBBH1rO0nxfZ3Kzf2leaVasb2S2tRDfLKJ1UJznjDZcArjI49a42x8CtcfGjWr3VdCiutEbTYobee7iSRGkVYRwDnnAYZx2NY9v4L1pvh54kA0hodaj159S0sMg3Y3RY2c8ZCsMfSgD2GfWtKtYJ5p9StIoreTypneZQI3/usc8HkcU99UsEkSNry3DunmKpkALJ/eHPI9/Y15b428L+IZNK8P38Nq99cRXzXep2lmio0rsDtb5gwJRfkBIPGMY4xlaV4Cvo/Gfg9L3w/czaXaWlwt19tlS6WNXEoRGJUA4JB2gELuoA9M8W+NbDwt4TOv7TfQOypAIGBEjN0+bsPeoY/EusA3cMmmWLyx2aXdvNDfEwT7mK7d7IApGPU9R60ni20fT/AAza2Oj+GbbU7MXKJNpiwoEMPJbap+UEHBHvXmd34P1FPDfiqLQoddfRJ7JEttL1CFw63BlVj5aHnCqPvY5z1OMkA9ms9XjOm2k+pPa2VzOvMP2lXAbuFbjd+FWzf2aqGN3AFKhsmQYweh+lfMGlaNE32vSdZi1W2lOix27A6ZJdfZmMqvkICCgITPbO7OfXpfiX4ek1fU5Lnw/oN1dWT6BBHaS2lkWTf9o3/KVGAdnpz2oA99mure3VWnniiDcKXcLn6ZrMu/EunWfiWw0CR3N/exvKiqBhFXuxzxnoOuTXieuafruqaNBZv4T1ia5XQI4kvJImciQMp27HwI3BB+blj2GDXWf2XdX3xd8PavcaHeSWsuhLHLNPakiOcFz+8JHyNjHXnkCgD1OK5gmC+XNG24ZG1gc/T1pyyxuFKyKwb7pBzn6fka8U8NaZqNl4o8I2raHqcEenXOpJdzGydYtkjuY/mxgryMdufrVfw34R1h/hlr80WnXtr4jivrhtNkkR4ZViZYwQmccFQ4HuTQB7okiSDKMDjrinV4/8INM1eDVJL2/g1mzElgsc9vd23kQtKGADqCcuxCkliAfm6nNewUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFcQnxT0HdfG4ttStYLCcW93PNbfu4HLFQGKk9x+ort68Atr6xOi/FS2eWKae81CYWtujhnnYu23Yo5bnByAehNAHvNtdQXlrFdW0ySwSqGSRGBVgfQinSTxRSRRySIrysVjUnBcgEkD14BP4V4Lpt3qPh/wAIaFod5f3enXf9kXspsJJXtWRy8hjcS5DF+gEeMdTQutXeq+PPh5cXGpzzRPpHnP5d2VSS6WObI44DkhVbud209cUAe/ZGcZ5oryz4bazea5c2t/e62TqTm6S+0qS6ZnQmU7D5J/1YVUUZxzv65Nep0AFFFFABRRRQAUUUUAFFFFAGVrFrqk8+nyaZPbxrHP8A6Wk4OJICDkKQMhshcdO9aoGBgUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUEZGDRRQAUUUUAFAGBgUUUAFBAIwRkUUUAY914X0i81CW/kgmjupgFmkt7qWEygDADbGG4Y7GtSKCKCBIIo1SJFCKijCqoGAAOwxUlFABjnPeiiigApMDOe9LRQAmB6D1paKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACmCKMAARqMcDAp9FADGijdgzxqzAEAkZOD1FQrp9knkbbSBRb58kCMfus9dv8Ad/CrNFAEMdnbRXEtxHbxJNLjzJEQBnx0yRyfxqaiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACikZlRC7sFVRkknAApsUqTwpLE6vG6hlZSCCDyCCOtAD6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigBskaTRPFIgeN1KsrDIIPUGlACqAAABwAO1LRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFIyK67WGRkHFAC0UYwMCigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKQZyc49qWgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKK8w+IvxC1Xwp4s07SrO50i1trm1aZ59RildVYEgD5DnnHpQB6fRXHaD44tbjRdGk1O9tbm/1Tz/IOmQStFMY2OQoYFhgD+LuD7Vnw/E+z1Pxb4e0/RzHcaZqcM80t00UgZQgbAAwMHcvOeg+ooA9Borm7Px34fv41mt7uRoHhmnjlNvKqyJFxIVJUA4ORjqccZqaz8YaPqHh68122nlbTrVGd5Xt5I8hV3EgOoJGCORQBvUV5toXib4haxDputR6Lo82h302RBFIy3UcBJxISz7Dxg4HPPQdumtPHfh6+vVtba7mdnuWtFk+xzCIzL1TzCmzP40AdHRXJyfEjwtG6q1/cENO1qhXT7hg8qkgopCYY5B4HpSL8TfCUiWTRao8v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geCb/UdNZEvEaGOJ5F3BS8qJkjvjdmulqrqWm2er6dPp9/bpcWs67JInGQwoA8013XfF+labLp8GsxSajpy3NxcXslmm25SOKOQIFAwv+twSB/DSat4612y8Q3t1FcQ/2VBNc2a2bQDcXhsjceZvznBbAx6V2Vx4C8L3WkWmlTaRC1jaSGWGIs2FY5zznJzk5BqzL4R0GfxA+uS6bE+ovEYmlbPKldp46ZKnbnrjigDy3TvG/jW+KaV/adiL+6uLPyrsWwKRJPDNKV29yBGAD71p2Pj3xDqMGla1HNbR6dHa2LX1p5ILzPcXEkBKt/CAVBxXWf8ACs/CQ0i40xdJRLeeYTvsYqwcAhSGByMBmA9Mmr0vgrQZtX0vUzZBbnTI1ittjFVVVztBUcHaSSM9CaAOb8HeKdf1bxbJbahLbPp91b3U9tEse14fJufIwT/FnrXolYOk+DtD0TWr3WLCyEN7eAiV95YYJDMFB6AsMnHet6gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD/9k=" alt=""></DIV>


    </DIV>
    <DIV id="page_15">


        <P class="p227 ft117">CELLPHONE DEVICE REGULATION</P>
        <P class="p228 ft99">Cell Phone device are <SPAN class="ft87">STRICTLY </SPAN>forbidden to be used in the truck while operating Commercial Motor Vehicle by the section <NOBR><SPAN class="ft87">392.2-SLLT</SPAN></NOBR><SPAN class="ft87"> </SPAN>of DOT Driving regulation law. It’s mandatory to have <NOBR>hands-free</NOBR> or Bluetooth if your intentions are talking on the phone while driving a CMV. Texting is forbidden at <SPAN class="ft87">ALL TIME!!</SPAN></P>
        <P class="p229 ft99">Driver Name________________________________</P>
        <P class="p230 ft99">By signing this agreement the person stated above agrees that will accept a company charge of <SPAN class="ft118">$</SPAN><SPAN class="ft119">2000 </SPAN>if at any point driver violate the <SPAN class="ft87">Cellphone Device</SPAN></P>
        <P class="p225 ft87">Regulation</P>
        <P class="p231 ft99">Drivers Signature_______________________________</P>
        <P class="p232 ft120">Date___________________</P>
        <P class="p231 ft96">Beverly Freight, Inc</P>
        <P class="p130 ft99">1426 W Rosemont Ave #G</P>
        <P class="p64 ft99">Chicago,IL 60660</P>
    </DIV>
</div>