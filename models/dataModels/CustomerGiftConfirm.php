<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_gift_confirm".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $gift_id
 * @property int $qty
 * @property int $status
 * @property int|null $created_at
 *
 * @property Gift $gift
 * @property Customer $customer
 */
class CustomerGiftConfirm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_gift_confirm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'gift_id', 'qty'], 'required'],
            [['customer_id', 'gift_id', 'qty', 'status', 'created_at'], 'integer'],
            [['gift_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gift::className(), 'targetAttribute' => ['gift_id' => 'id']],
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
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Gift]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGift()
    {
        return $this->hasOne(Gift::className(), ['id' => 'gift_id']);
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
}
