<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "other_compensated_work".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $another_employer
 * @property int $employed_by_company
 *
 * @property Driver $driver
 */
class OtherCompensatedWork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'other_compensated_work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'another_employer', 'employed_by_company'], 'required'],
            [['another_employer', 'employed_by_company'], 'string', 'max' => 1],
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
            'another_employer' => 'Are you currently working for another employer?',
            'employed_by_company' => 'At this time do you intend to work for another employer while still employed by this company?',
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
