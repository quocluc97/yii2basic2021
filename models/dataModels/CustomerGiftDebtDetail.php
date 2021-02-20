<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_gift_debt_detail".
 *
 * @property int $id
 * @property int $customer_gift_debt_id
 * @property int $gift_id
 * @property int $qty
 * @property int $status
 *
 * @property CustomerGiftDebt $customerGiftDebt
 * @property Gift $gift
 */
class CustomerGiftDebtDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_gift_debt_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_gift_debt_id', 'gift_id', 'qty'], 'required'],
            [['customer_gift_debt_id', 'gift_id', 'qty', 'status'], 'integer'],
            [['customer_gift_debt_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerGiftDebt::className(), 'targetAttribute' => ['customer_gift_debt_id' => 'id']],
            [['gift_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gift::className(), 'targetAttribute' => ['gift_id' => 'id']],
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
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'status' => 'Status',
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
     * Gets query for [[Gift]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGift()
    {
        return $this->hasOne(Gift::className(), ['id' => 'gift_id']);
    }
}
