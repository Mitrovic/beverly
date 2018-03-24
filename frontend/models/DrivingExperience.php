<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driving_experience".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $straight_truck
 * @property int $tractor_semi_trailer
 * @property int $tractor_two_trailer
 * @property int $tractor_three_trailer
 * @property int $motorcoach_eight
 * @property int $motorcoach_fifteen
 * @property string $other
 * @property string $states
 *
 * @property Driver $driver
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
            [['straight_truck', 'tractor_semi_trailer', 'tractor_two_trailer', 'tractor_three_trailer', 'motorcoach_eight', 'motorcoach_fifteen', 'states'], 'required'],
            [['driver_id'], 'integer'],
            [['straight_truck', 'tractor_semi_trailer', 'tractor_two_trailer', 'tractor_three_trailer', 'motorcoach_eight', 'motorcoach_fifteen'], 'string', 'max' => 1],
            [['other', 'states'], 'string', 'max' => 255],
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
            'straight_truck' => 'Straight Truck',
            'tractor_semi_trailer' => 'Tractor Semi Trailer',
            'tractor_two_trailer' => 'Tractor Two Trailer',
            'tractor_three_trailer' => 'Tractor Three Trailer',
            'motorcoach_eight' => 'Motorcoach Eight',
            'motorcoach_fifteen' => 'Motorcoach Fifteen',
            'other' => 'Other',
            'states' => 'States',
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
