<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_gift_set".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $brand_set_project_id
 * @property int $qty
 */
class CustomerGiftSet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_gift_set';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'brand_set_project_id'], 'required'],
            [['customer_id', 'brand_set_project_id', 'qty'], 'integer'],
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
            'brand_set_project_id' => 'Brand Set Project ID',
            'qty' => 'Qty',
        ];
    }
}
