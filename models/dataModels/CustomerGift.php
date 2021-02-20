<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_gift".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $gift_id
 * @property int $qty
 */
class CustomerGift extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_gift';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'gift_id'], 'required'],
            [['customer_id', 'gift_id', 'qty'], 'integer'],
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
        ];
    }
}
