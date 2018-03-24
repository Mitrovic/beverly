<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "traffic_convictions".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $location
 * @property string $date
 * @property string $charge
 * @property string $penalty
 *
 * @property Driver $driver
 */
class TrafficConvictions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'traffic_convictions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location', 'date', 'charge', 'penalty'], 'required'],
            [['driver_id'], 'integer'],
            [['date'], 'safe'],
            [['location', 'charge', 'penalty'], 'string', 'max' => 255],
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
            'location' => 'Location',
            'date' => 'Date',
            'charge' => 'Charge',
            'penalty' => 'Penalty',
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
