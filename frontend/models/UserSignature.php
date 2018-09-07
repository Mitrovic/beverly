<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user_signature".
 *
 * @property int $id
 * @property int $driver_id
 * @property int $policy
 * @property string $signature
 * @property string $date
 *
 * @property Driver $driver
 */
class UserSignature extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_signature';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id', 'policy','signature'], 'required'],
            [['driver_id'], 'integer'],
            //[['signature'], 'file', 'skipOnEmpty' => false],
            [['date'], 'safe'],
            [['policy'], 'string', 'max' => 1],
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
            'policy' => 'Policy',
            'signature' => 'Signature',
            'date' => 'Date',
        ];
    }
    /**
     * Upload signature
     **/
    public function upload()
    {
        if ($this->validate()) {
            $this->signature->saveAs('uploads/' . $this->signature->baseName . '.' . $this->signature->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'driver_id']);
    }
}
