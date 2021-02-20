<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_command_skus".
 *
 * @property int|null $command_id
 * @property int|null $sku_id
 * @property int|null $type
 * @property float|null $qty
 * @property float|null $qty_remain
 * @property float|null $qty_out
 * @property float|null $qty_in
 * @property float|null $qty_error
 */
class ViewCommandSkus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_command_skus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'sku_id', 'type'], 'integer'],
            [['qty', 'qty_remain', 'qty_out', 'qty_in', 'qty_error'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'command_id' => 'Command ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'qty_remain' => 'Qty Remain',
            'qty_out' => 'Qty Out',
            'qty_in' => 'Qty In',
            'qty_error' => 'Qty Error',
        ];
    }
}
