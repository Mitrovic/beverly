<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driving_experience_answers".
 *
 * @property int $id
 * @property int $driving_experience_id
 * @property string $type
 * @property string $dates
 * @property string $miles
 *
 * @property DrivingExperience $drivingExperience
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
            [['driving_experience_id'], 'integer'],
            [['type', 'dates', 'miles'], 'string', 'max' => 255],
            [['driving_experience_id'], 'exist', 'skipOnError' => true, 'targetClass' => DrivingExperience::className(), 'targetAttribute' => ['driving_experience_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'driving_experience_id' => 'Driving Experience ID',
            'type' => 'Type',
            'dates' => 'Dates',
            'miles' => 'Miles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivingExperience()
    {
        return $this->hasOne(DrivingExperience::className(), ['id' => 'driving_experience_id']);
    }
}
