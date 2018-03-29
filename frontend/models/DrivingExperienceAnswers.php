<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driving_experience_answers".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $driving_experience_id
 * @property string $type
 * @property string $dates
 * @property string $miles
 *
 * @property DrivingExperience $drivingExperience
 * @property Driver $driver
 */
class DrivingExperienceAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driving_experience_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'driving_experience_id'], 'integer'],
            [['type', 'dates', 'miles'], 'string', 'max' => 255],
            [['driving_experience_id'], 'exist', 'skipOnError' => true, 'targetClass' => DrivingExperience::className(), 'targetAttribute' => ['driving_experience_id' => 'id']],
            [['driver_id'], 'exist', 'skipOnError' => true, 'targetClass' => Driver::className(), 'targetAttribute' => ['driver_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'driver_id' => 'Driver ID',
            'driving_experience_id' => 'Driving Experience ID',
            'type' => 'Circle type of equipment(van,tank,flat,dump,refer)',
            'dates' => 'Dates(from/to)',
            'miles' => 'Approx. no. of miles(TOTAL)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivingExperience()
    {
        return $this->hasOne(DrivingExperience::className(), ['id' => 'driving_experience_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'driver_id']);
    }
}
