<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "licenses_custom".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $denied_license
 * @property int $suspended_license
 * @property string $answer
 *
 * @property Driver $driver
 */
class LicensesCustom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'licenses_custom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['denied_license', 'suspended_license'], 'required'],
            [['driver_id'], 'integer'],
            [['answer'], 'string'],
            [['denied_license', 'suspended_license'], 'string', 'max' => 1],
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
            'denied_license' => 'A)Have you ever been denied a license, permit or privilege to operate a motor vehicle?',
            'suspended_license' => 'B) Has any license, permit or privilege ever been suspended or revoked?',
            'answer' => 'IF THE ANSWER TO EITHER A OR B IS YES, GIVE DETAILS',
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
