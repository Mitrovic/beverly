<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "road_test_examination".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $pre_trip_inspect
 * @property string $combination_units
 * @property string $placing_equipment
 * @property string $energency_equipment
 * @property string $operating_venchile
 * @property string $turning_venchile
 * @property string $breaking_venchile
 * @property string $backing_parking
 * @property string $other
 *
 * @property Driver $driver
 */
class RoadTestExamination extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'road_test_examination';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id'], 'integer'],
            [['pre_trip_inspect', 'combination_units', 'placing_equipment', 'energency_equipment', 'operating_venchile', 'turning_venchile', 'breaking_venchile', 'backing_parking', 'other'], 'string', 'max' => 255],
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
            'pre_trip_inspect' => 'The pre-trip inspection. (As required by Sec. 392.7)',
            'combination_units' => 'Coupling and uncoupling of combination units, if the equipment he or she may drive 
                                    includes combination units.',
            'placing_equipment' => 'Placing the equipment in operation.',
            'energency_equipment' => 'Use of vehicle’s controls and emergency equipment.',
            'operating_venchile' => 'Operating the vehicle in traffic and while passing other vehicles.',
            'turning_venchile' => 'Turning the vehicle.',
            'breaking_venchile' => 'Braking, and slowing the vehicle by means other than braking.',
            'backing_parking' => 'Backing, and parking the vehicle.',
            'other' => 'Other, explain:',
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
