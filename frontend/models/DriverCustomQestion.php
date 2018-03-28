<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver_custom_question".
 *
 * @property int $id
 * @property int $driver_id
 * @property string $worked
 * @property string $worked_dates
 * @property string $worked_rp
 * @property string $worked_position
 * @property string $reason_living
 * @property string $now_employed
 * @property string $refereed_you
 * @property string $rate_of_pay
 * @property string $bonded
 * @property string $convicted
 * @property string $unable_reason
 *
 * @property Driver $driver
 */
class DriverCustomQestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver_custom_question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'worked', 'worked_dates', 'worked_rp', 'worked_position', 'reason_living', 'now_employed', 'refereed_you', 'rate_of_pay'], 'required'],
            [['driver_id'], 'integer'],
            [['convicted', 'unable_reason'], 'string'],
            [['worked', 'worked_dates', 'worked_rp', 'worked_position', 'reason_living', 'now_employed', 'refereed_you', 'rate_of_pay', 'bonded'], 'string', 'max' => 255],
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
            'worked' => 'Worked',
            'worked_dates' => 'Worked Dates',
            'worked_rp' => 'Worked Rp',
            'worked_position' => 'Worked Position',
            'reason_living' => 'Reason Living',
            'now_employed' => 'Are you now employed',
            'refereed_you' => 'Who referred you?',
            'rate_of_pay' => 'Rate of pay expected',
            'bonded' => 'Have you ever been bonded?',
            'convicted' => 'Have you ever been convicted of a felony?',
            'unable_reason' => 'Is there any reason you might be unable to perform the functions of the job for which you have applied',
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
