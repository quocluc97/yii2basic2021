<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "notification_warehouse_receipt".
 *
 * @property int $id
 * @property int $notification_warehouse_id
 * @property int $receipt_id
 * @property string $message
 * @property int $status
 * @property int|null $created_at
 */
class NotificationWarehouseReceipt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification_warehouse_receipt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notification_warehouse_id', 'receipt_id', 'message'], 'required'],
            [['notification_warehouse_id', 'receipt_id', 'status', 'created_at'], 'integer'],
            [['message'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'notification_warehouse_id' => 'Notification Warehouse ID',
            'receipt_id' => 'Receipt ID',
            'message' => 'Message',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
