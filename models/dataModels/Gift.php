<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "gift".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $image
 * @property int $brand_id
 * @property string|null $unit
 * @property float|null $price
 * @property int|null $status
 * @property string|null $note
 * @property int|null $created_at
 * @property bool|null $is_ontop
 *
 * @property BrandSetProjectGift[] $brandSetProjectGifts
 * @property CustomerAppointmentDetail[] $customerAppointmentDetails
 * @property CustomerGiftConfirm[] $customerGiftConfirms
 * @property CustomerGiftDebtDetail[] $customerGiftDebtDetails
 * @property CustomerGiftReceived[] $customerGiftReceiveds
 * @property Brand $brand
 */
class Gift extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gift';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', 'image', 'brand_id'], 'required'],
            [['brand_id', 'status', 'created_at'], 'integer'],
            [['price'], 'number'],
            [['is_ontop'], 'boolean'],
            [['code', 'name', 'image', 'unit', 'note'], 'string', 'max' => 255],
            [['code'], 'unique'],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'image' => 'Image',
            'brand_id' => 'Brand ID',
            'unit' => 'Unit',
            'price' => 'Price',
            'status' => 'Status',
            'note' => 'Note',
            'created_at' => 'Created At',
            'is_ontop' => 'Is Ontop',
        ];
    }

    /**
     * Gets query for [[BrandSetProjectGifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjectGifts()
    {
        return $this->hasMany(BrandSetProjectGift::className(), ['gift_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerAppointmentDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAppointmentDetails()
    {
        return $this->hasMany(CustomerAppointmentDetail::className(), ['gift_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftConfirms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftConfirms()
    {
        return $this->hasMany(CustomerGiftConfirm::className(), ['gift_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftDebtDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftDebtDetails()
    {
        return $this->hasMany(CustomerGiftDebtDetail::className(), ['gift_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftReceiveds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftReceiveds()
    {
        return $this->hasMany(CustomerGiftReceived::className(), ['gift_id' => 'id']);
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }
}
