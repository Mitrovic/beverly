<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "experience_qualification".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $states
 * @property string $other_experience
 * @property string $courses_training
 * @property string $special_equipment
 *
 * @property Driver $driver
 */
class ExperienceQualification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experience_qualification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id'], 'integer'],
            [['states', 'other_experience', 'courses_training', 'special_equipment'], 'string', 'max' => 255],
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
            'states' => 'LIST STATES OPERATED IN FOR LAST FIVE YEARS',
            'other_experience' => 'SHOW ANY TRUCKING, TRANSPORTATION OR OTHER EXPERIENCE THAT MAY HELP IN YOUR WORK FOR THIS COMPANY',
            'courses_training' => 'LIST COURSES AND TRAINING OTHER THAN SHOWN ELSEWHERE IN THIS APPLICATION',
            'special_equipment' => 'LIST SPECIAL EQUIPMENT OR TECHNICAL MATERIALS YOU CAN WORK WITH (OTHER THAN THOSE ALREADY SHOWN)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'driver_id']);
    }
}
