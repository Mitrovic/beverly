<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driving_experience".
 *
 * @property int $id
 * @property string $name
 *
 * @property DrivingExperienceAnswers[] $drivingExperienceAnswers
 */
class DrivingExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driving_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivingExperienceAnswers()
    {
        return $this->hasMany(DrivingExperienceAnswers::className(), ['driving_experience_id' => 'id']);
    }
}
