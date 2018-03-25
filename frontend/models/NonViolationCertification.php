<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "non_violation_certification".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $date
 * @property string $motor_name
 * @property string $motor_address
 * @property string $motor_state
 * @property string $revied_by
 * @property string $title
 *
 * @property Driver $driver
 */
class NonViolationCertification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'non_violation_certification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'date', 'motor_name', 'motor_address', 'motor_state', 'revied_by', 'title'], 'required'],
            [['date'], 'safe'],
            [['motor_name', 'motor_address', 'motor_state', 'revied_by', 'title'], 'string', 'max' => 255],
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
            'motor_name' => 'Motor Name',
            'motor_address' => 'Motor Address',
            'motor_state' => 'Motor State',
            'revied_by' => 'Revied By',
            'title' => 'Title',
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
