<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_warehouse_receipt_debt_done".
 *
 * @property int|null $warehouse_id
 * @property int|null $sku_id
 * @property int|null $type
 * @property float|null $qty
 */
class ViewWarehouseReceiptDebtDone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_warehouse_receipt_debt_done';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse_id', 'sku_id', 'type'], 'integer'],
            [['qty'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'warehouse_id' => 'Warehouse ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
        ];
    }
}
