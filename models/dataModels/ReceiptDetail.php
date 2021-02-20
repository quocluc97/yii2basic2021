<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "receipt_detail".
 *
 * @property int $id
 * @property int $receipt_id
 * @property int $sku_id
 * @property int $type
 * @property int|null $qty
 * @property int|null $qty_ok
 * @property int|null $qty_error
 * @property int $status
 * @property int|null $created_by
 */
class ReceiptDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receipt_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'sku_id', 'type'], 'required'],
            [['receipt_id', 'sku_id', 'type', 'qty', 'qty_ok', 'qty_error', 'status', 'created_by'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receipt_id' => 'Receipt ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'qty_ok' => 'Qty Ok',
            'qty_error' => 'Qty Error',
            'status' => 'Status',
            'created_by' => 'Created By',
        ];
    }
}
