<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificate_road_test".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $license_number
 * @property string $state
 * @property string $power_unit
 * @property string $trailer_type
 * @property string $bus
 *
 * @property Driver $driver
 */
class CertificateRoadTest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certificate_road_test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['license_number', 'state', 'power_unit', 'trailer_type', 'bus'], 'required'],
            [['driver_id'], 'integer'],
            [['license_number', 'state', 'power_unit', 'trailer_type', 'bus'], 'string', 'max' => 255],
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
            'license_number' => 'Driver’s License Number',
            'state' => 'State',
            'power_unit' => 'Type of Power Unit',
            'trailer_type' => 'Type of Trailer(s)',
            'bus' => 'If passenger carrier, type of bus',
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
