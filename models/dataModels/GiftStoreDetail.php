<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "gift_store_detail".
 *
 * @property int $id
 * @property int $gift_store_id
 * @property int $gift_id
 * @property int $qty
 * @property int|null $status
 * @property int $created_at
 */
class GiftStoreDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gift_store_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gift_store_id', 'gift_id', 'qty', 'created_at'], 'required'],
            [['gift_store_id', 'gift_id', 'qty', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gift_store_id' => 'Gift Store ID',
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
