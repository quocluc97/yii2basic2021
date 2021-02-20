<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_gift_debt_image".
 *
 * @property int $id
 * @property int $customer_gift_debt_id
 * @property int $image_id
 * @property int $status
 * @property int $type
 *
 * @property CustomerGiftDebt $customerGiftDebt
 * @property Image $image
 */
class CustomerGiftDebtImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_gift_debt_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_gift_debt_id', 'image_id'], 'required'],
            [['customer_gift_debt_id', 'image_id', 'status', 'type'], 'integer'],
            [['customer_gift_debt_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerGiftDebt::className(), 'targetAttribute' => ['customer_gift_debt_id' => 'id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_gift_debt_id' => 'Customer Gift Debt ID',
            'image_id' => 'Image ID',
            'status' => 'Status',
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[CustomerGiftDebt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftDebt()
    {
        return $this->hasOne(CustomerGiftDebt::className(), ['id' => 'customer_gift_debt_id']);
    }

    /**
     * Gets query for [[Image]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_id']);
    }
}
