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
        <p>(answer all questions - please print)</p>
    </DIV>
</DIV>
<div class = "container">
    <div class="driver-view">
        <table id="table-example-1">
            <tr>
                <td width="50%">Position(s) Applied for</td>
                <td><?=$model->position_id?></td>
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
        <?php } ?>
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
                    <td>Name</td>
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

        <h2>Traffic Convictions and Forfeitures for the Past 3 Years</h2>

        <?php $convictions = $model->trafficConvictions;
        foreach($convictions as $convict)
        {
            $c_location = $convict->location;
            $c_date     = $convict->date;
            $c_charge   = $convict->charge;
            $c_penalty  = $convict->penalty; ?>

            <table class="table table-striped table-bordered detail-view">
                <tbody>
                <tr>
                    <td width="50%">Location</td>
                    <td><?= $c_location ?></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><?= $c_date ?></td>
                </tr>
                <tr>
                    <td>Charge</td>
                    <td><?= $c_charge  ?></td>
                </tr>
                <tr>
                    <td>Penalty</td>
                    <td><?= $c_penalty ?></td>
                </tr>
                </tbody>
            </table>
        <?php    }
        ?>




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
        <!-- END OF DRIVING EXP   -->

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
</div>