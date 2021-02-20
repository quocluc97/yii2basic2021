<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "transfer_detail".
 *
 * @property int $id
 * @property int $transfer_id
 * @property int $sku_id
 * @property int $type
 * @property int $qty
 * @property string|null $phase
 * @property int $receive_at
 * @property string|null $note
 * @property int $status
 * @property int|null $created_at
 * @property int $created_by
 */
class TransferDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transfer_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transfer_id', 'sku_id', 'type', 'qty', 'receive_at', 'created_by'], 'required'],
            [['transfer_id', 'sku_id', 'type', 'qty', 'receive_at', 'status', 'created_at', 'created_by'], 'integer'],
            [['note'], 'string'],
            [['phase'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transfer_id' => 'Transfer ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'phase' => 'Phase',
            'receive_at' => 'Receive At',
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
