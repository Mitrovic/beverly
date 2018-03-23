<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accident_record".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $date
 * @property string $accident_nature
 * @property string $fatalities
 * @property string $injuries
 * @property string $hazardous_material
 *
 * @property Driver $driver
 */
class AccidentRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accident_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'accident_nature', 'fatalities', 'injuries', 'hazardous_material'], 'required'],
            [['driver_id'], 'integer'],
            [['date'], 'safe'],
            [['accident_nature', 'fatalities', 'injuries', 'hazardous_material'], 'string', 'max' => 255],
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
            'accident_nature' => 'Accident Nature',
            'fatalities' => 'Fatalities',
            'injuries' => 'Injuries',
            'hazardous_material' => 'Hazardous Material',
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
