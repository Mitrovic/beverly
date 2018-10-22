<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "policy".
 *
 * @property int $id
 * @property int $agree
 * @property string $sign
 */
class Policy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'policy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sign'], 'required'],
            [['sign'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agree' => 'Agree',
            'sign' => 'Signature',
        ];
    }

    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['policy_id' => 'id']);
    }
}
