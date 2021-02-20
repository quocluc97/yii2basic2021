<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_gift_debt".
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $address
 * @property int $status
 * @property int|null $created_at
 * @property string|null $note
 *
 * @property Customer $customer
 * @property CustomerGiftDebtDetail[] $customerGiftDebtDetails
 * @property CustomerGiftDebtImage[] $customerGiftDebtImages
 */
class CustomerGiftDebt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_gift_debt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id', 'status', 'created_at'], 'integer'],
            [['note'], 'string'],
            [['address'], 'string', 'max' => 255],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'address' => 'Address',
            'status' => 'Status',
            'created_at' => 'Created At',
            'note' => 'Note',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[CustomerGiftDebtDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftDebtDetails()
    {
        return $this->hasMany(CustomerGiftDebtDetail::className(), ['customer_gift_debt_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftDebtImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftDebtImages()
    {
        return $this->hasMany(CustomerGiftDebtImage::className(), ['customer_gift_debt_id' => 'id']);
    }
}
