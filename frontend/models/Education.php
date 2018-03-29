<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $highest_school
 * @property int $high_school
 * @property int $college
 * @property string $last_school
 * @property string $last_school_state
 *
 * @property Driver $driver
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id'], 'integer'],
            [['highest_school', 'high_school', 'college'], 'string', 'max' => 3],
            [['last_school', 'last_school_state'], 'string', 'max' => 255],
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
            'highest_school' => 'CIRCLE HIGHEST GRADE COMPLETED',
            'high_school' => 'High School',
            'college' => 'College',
            'last_school' => 'LAST SCHOOL ATTENDED',
            'last_school_state' => 'City/State',
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
