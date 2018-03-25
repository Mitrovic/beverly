<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alcohol_drugs".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $positive
 * @property int $proof
 *
 * @property Driver $driver
 */
class AlcoholDrugs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alcohol_drugs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'positive', 'proof'], 'required'],
            [['positive', 'proof'], 'string', 'max' => 1],
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
            'positive' => ' Have you tested positive, or refused to test, on any pre-employment drug or alcohol test
                            administered by an employer to which you applied for, but did not obtain, safety-sensitive
                            transportation work covered by DOT agency drug and alcohol testing rules during the
                            past two years?',
            'proof' =>      'If you answered yes, can you provide/obtain proof that you’ve successfully completed the
                            DOT return-to-duty requirements?',
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
