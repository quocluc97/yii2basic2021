<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $file_name
 * @property string $url
 * @property int $created_by
 * @property int $created_at
 * @property int $status
 *
 * @property CheckInOutSp[] $checkInOutSps
 * @property CheckInOutSp[] $checkInOutSps0
 * @property CheckInOutSup[] $checkInOutSups
 * @property CheckInOutSup[] $checkInOutSups0
 * @property CustomerAppointment[] $customerAppointments
 * @property CustomerAppointment[] $customerAppointments0
 * @property CustomerGiftDebtImage[] $customerGiftDebtImages
 * @property CustomerOntopImage[] $customerOntopImages
 * @property Sp[] $sps
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_name', 'url', 'created_at'], 'required'],
            [['created_by', 'created_at', 'status'], 'integer'],
            [['file_name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_name' => 'File Name',
            'url' => 'Url',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[CheckInOutSps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSps()
    {
        return $this->hasMany(CheckInOutSp::className(), ['image_in_id' => 'id']);
    }

    /**
     * Gets query for [[CheckInOutSps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSps0()
    {
        return $this->hasMany(CheckInOutSp::className(), ['image_out_id' => 'id']);
    }

    /**
     * Gets query for [[CheckInOutSups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSups()
    {
        return $this->hasMany(CheckInOutSup::className(), ['image_in_id' => 'id']);
    }

    /**
     * Gets query for [[CheckInOutSups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSups0()
    {
        return $this->hasMany(CheckInOutSup::className(), ['image_out_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerAppointments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAppointments()
    {
        return $this->hasMany(CustomerAppointment::className(), ['appointment_image_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerAppointments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAppointments0()
    {
        return $this->hasMany(CustomerAppointment::className(), ['delivery_image_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftDebtImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftDebtImages()
    {
        return $this->hasMany(CustomerGiftDebtImage::className(), ['image_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerOntopImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerOntopImages()
    {
        return $this->hasMany(CustomerOntopImage::className(), ['image_id' => 'id']);
    }

    /**
     * Gets query for [[Sps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSps()
    {
        return $this->hasMany(Sp::className(), ['avatar_id' => 'id']);
    }
}
