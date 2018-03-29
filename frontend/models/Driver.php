<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property int $position_id
 * @property string $name
 * @property string $mi_name
 * @property string $lname
 * @property int $ssn
 * @property string $phone
 * @property string $email
 * @property string $legal_right
 * @property string $birth_date
 *
 * @property AccidentRecord[] $accidentRecords
 * @property Address[] $addresses
 * @property AlcoholDrugs[] $alcoholDrugs
 * @property CertificateRoadTest[] $certificateRoadTests
 * @property DrivingExperienceAnswers[] $drivingExperienceAnswers
 * @property Position $position
 * @property DriverCustomQuestion[] $driverCustomQuestions
 * @property DrivingExperience[] $drivingExperiences
 * @property ExperienceQualification[] $experienceQualification
 * @property EmploymentHistory[] $employmentHistories
 * @property Licenses[] $licenses
 * @property LicensesCustom[] $licensesCustoms
 * @property NonViolationCertification[] $nonViolationCertifications
 * @property OtherCompensatedWork[] $otherCompensatedWorks
 * @property RoadTestExamination[] $roadTestExaminations
 * @property TrafficConvictions[] $trafficConvictions
 * @property ViolationCertification[] $violationCertifications
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_id', 'name', 'mi_name', 'lname', 'ssn', 'phone', 'email', 'legal_right', 'birth_date'], 'required'],
            [['position_id', 'ssn'], 'integer'],
            [['birth_date'], 'safe'],
            [['name', 'mi_name', 'lname', 'phone', 'email', 'legal_right'], 'string', 'max' => 255],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_id' => 'Position(s) Applied for',
            'name' => 'Name',
            'mi_name' => 'Middle Name',
            'lname' => 'Last Name',
            'ssn' => 'Social Security Number',
            'phone' => 'Phone',
            'email' => 'Email',
            'legal_right' => 'Do you have the legal right to work in the United States?',
            'birth_date' => 'Date of Birth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccidentRecords()
    {
        return $this->hasMany(AccidentRecord::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlcoholDrugs()
    {
        return $this->hasMany(AlcoholDrugs::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificateRoadTests()
    {
        return $this->hasMany(CertificateRoadTest::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriverCustomQuestions()
    {
        return $this->hasOne(DriverCustomQestion::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivingExperiences()
    {
        return $this->hasMany(DrivingExperience::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploymentHistories()
    {
        return $this->hasMany(EmploymentHistory::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLicenses()
    {
        return $this->hasMany(Licenses::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLicensesCustoms()
    {
        return $this->hasMany(LicensesCustom::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNonViolationCertifications()
    {
        return $this->hasMany(NonViolationCertification::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOtherCompensatedWorks()
    {
        return $this->hasMany(OtherCompensatedWork::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoadTestExaminations()
    {
        return $this->hasMany(RoadTestExamination::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrafficConvictions()
    {
        return $this->hasMany(TrafficConvictions::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViolationCertifications()
    {
        return $this->hasMany(ViolationCertification::className(), ['driver_id' => 'id']);
    }

    public function getDrivingExperienceAnswers()
    {
        return $this->hasMany(DrivingExperienceAnswers::className(), ['driver_id' => 'id']);
    }

    public function getDrivingExperienceQualification()
    {
        return $this->hasMany(ExperienceQualification::className(), ['driver_id' => 'id']);
    }
    public function getOneDrivingExperienceQualification()
    {
        return $this->hasOne(ExperienceQualification::className(), ['driver_id' => 'id']);
    }
}
