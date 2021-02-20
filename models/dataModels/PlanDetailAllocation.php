<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "plan_detail_allocation".
 *
 * @property int $id
 * @property int $plan_detail_id
 * @property int $warehouse_from_id
 * @property int $warehouse_to_id
 * @property int $qty
 * @property int $receive_at
 * @property int $status
 * @property int|null $created_at
 * @property int $created_by
 */
class PlanDetailAllocation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan_detail_allocation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plan_detail_id', 'warehouse_from_id', 'warehouse_to_id', 'qty', 'receive_at', 'created_by'], 'required'],
            [['plan_detail_id', 'warehouse_from_id', 'warehouse_to_id', 'qty', 'receive_at', 'status', 'created_at', 'created_by'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_detail_id' => 'Plan Detail ID',
            'warehouse_from_id' => 'Warehouse From ID',
            'warehouse_to_id' => 'Warehouse To ID',
            'qty' => 'Qty',
            'receive_at' => 'Receive At',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
