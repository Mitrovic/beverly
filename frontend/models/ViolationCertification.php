<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "violation_certification".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $date
 * @property string $offense
 * @property string $location
 * @property string $type_of_venchile
 *
 * @property Driver $driver
 */
class ViolationCertification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'violation_certification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'date', 'offense', 'location', 'type_of_venchile'], 'required'],
            [['date'], 'safe'],
            [['offense', 'location', 'type_of_venchile'], 'string', 'max' => 255],
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
            'date' => 'Date',
            'offense' => 'Offense',
            'location' => 'Location',
            'type_of_venchile' => 'Type Of Venchile',
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
