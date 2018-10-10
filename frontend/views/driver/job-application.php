<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Driver */

$this->title = 'APPLICANT’S STATEMENT AND AGREEMENT';
$this->params['breadcrumbs'][] = ['label' => 'Job Application', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <div class = "container">
        <div class="driver-create job-application">
            <h4 class="title"><?= Html::encode($this->title) ?></h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>
            <div class ="debug-timeline-panel__item">
                <p>In compliance with Federal and State equal employment opportunity laws, qualified applicants are considered for all positions without regard to race, color, religion, sex, national origin, age, marital status, veteran status, non-job related disability, or any other protected group status.</p>

                <ul>
                    <li>I authorize BCP Transportation, Inc. (“Company”) and any agent acting on their behalf, to verify all statements contained in this application for employment and to make such investigations and inquiries of my personal, employment, financial or medical history and other related matters as may be necessary in arriving at an employment decision. I agree to furnish additional information and complete such examinations as may be required to complete my application file. (Generally, inquiries regarding medical history will be made only if and after a conditional offer of employment has been extended.)</li>
                    <li>I hereby release and discharge the Company and any agent acting on their behalf, employers, schools, health care providers and other persons from any and all liability in responding to inquiries and releasing information in connection with my application.</li>
                    <li>According to the Fair Credit Reporting Act, I am entitled to know if employment is denied because of information obtained by my prospective employer from a consumer reporting agency. If so, I will be so advised and given the name of the agency or source of information.</li>
                    <li>I understand that any misrepresentation, falsification or willful omission of information contained in this application or in connection with any physical examination shall be sufficient reason for refusal of or dismissal from employment.</li>
                    <li>I understand that this employment application and any related Company documents are not contracts of employment and that, if I am hired, I may voluntarily leave employment at any time for any reason and, otherwise, the Company may terminate my employment at any time for any reason. Any representations to the contrary in any related Company document or by any representative of the Company shall not be relied upon or be construed as Company policy.</li>
                </ul>
                <p>

                I understand that information I provide regarding current and/or previous employers may be used, and those employer(s) will be contacted, for the purpose of investigating my safety performance history as required by FMCSA regulation 49 CFR Part 391.23(d) and (e). I understand that pursuant to FMCSA regulation 49 CFR Part 391.23(i)(1), I have the right to:
                Review information provided by previous employers;
                Have errors in the information corrected by previous employers and for those previous employers to re-send the corrected information to the prospective employer; and
                    Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information.</p>
                <ul>
                    <li>
                        Review information provided by previous employers.
                    </li>
                    <li>
                        Have errors in the information corrected by previous employers and for those previous employers to re-send the corrected information to the prospective employer.
                    </li>
                    <li>
                        Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information.
                    </li>
                </ul>
            </div>
            <?= $this->render('_jobApplication', [
                'application' => $application
            ]) ?>

        </div>
    </div>
</section>