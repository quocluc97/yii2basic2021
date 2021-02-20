<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_product".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $product_id
 * @property int $qty
 */
class CustomerProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'product_id'], 'required'],
            [['customer_id', 'product_id', 'qty'], 'integer'],
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
            'product_id' => 'Product ID',
            'qty' => 'Qty',
        ];
    }
}
