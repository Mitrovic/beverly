<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employment_history".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $address
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property string $contact_person
 * @property string $phone
 * @property string $date
 * @property string $position_held
 * @property string $salary
 * @property string $reason_for_leaving
 * @property string $fmcr
 * @property string $safety
 *
 * @property Driver $driver
 */
class EmploymentHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employment_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','address', 'city', 'state', 'zip', 'contact_person', 'phone', 'date', 'position_held', 'salary', 'reason_for_leaving', 'fmcr', 'safety'], 'required'],
            [['driver_id', 'zip'], 'integer'],
            [['address', 'city', 'state', 'contact_person', 'phone', 'date', 'position_held', 'salary', 'reason_for_leaving', 'fmcr', 'safety'], 'string', 'max' => 255],
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
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'contact_person' => 'Contact Person',
            'phone' => 'Phone',
            'date' => 'Date',
            'position_held' => 'Position Held',
            'salary' => 'Salary',
            'reason_for_leaving' => 'Reason For Leaving',
            'fmcr' => 'Fmcr',
            'safety' => 'Safety',
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
