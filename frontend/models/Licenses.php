<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "licenses".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $state
 * @property string $license_no
 * @property string $type
 * @property string $expiration_date
 *
 * @property Driver $driver
 */
class Licenses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'licenses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'state', 'license_no', 'type', 'expiration_date'], 'required'],
            [['driver_id'], 'integer'],
            [['expiration_date'], 'safe'],
            [['state', 'license_no', 'type'], 'string', 'max' => 255],
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
            'state' => 'State',
            'license_no' => 'License No',
            'type' => 'Type',
            'expiration_date' => 'Expiration Date',
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
