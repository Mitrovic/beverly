<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property int $position_id
 * @property string $name
 * @property string $mi_name
 * @property string $lname
 * @property int $ssn
 * @property string $phone
 * @property string $email
 * @property string $legal_right
 * @property string $birth_date
 *
 * @property Address[] $addresses
 * @property Position $position
 * @property DriverCustomQuestion[] $driverCustomQuestions
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_id', 'name', 'mi_name', 'lname', 'ssn', 'phone', 'email', 'legal_right', 'birth_date'], 'required'],
            [['position_id', 'ssn'], 'integer'],
            [['birth_date'], 'safe'],
            [['name', 'mi_name', 'lname', 'phone', 'email', 'legal_right'], 'string', 'max' => 255],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_id' => 'Position(s) Applied for',
            'name' => 'Name',
            'mi_name' => 'Middle Name',
            'lname' => 'Last Name',
            'ssn' => 'Social Security Number',
            'phone' => 'Phone',
            'email' => 'Email',
            'legal_right' => 'Do you have the legal right to work in the United States?',
            'birth_date' => 'Birth Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriverCustomQuestions()
    {
        return $this->hasMany(DriverCustomQuestion::className(), ['driver_id' => 'id']);
    }
}
