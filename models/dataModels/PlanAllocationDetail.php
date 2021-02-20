<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "plan_allocation_detail".
 *
 * @property int $id
 * @property int $plan_allocation_id
 * @property int $warehouse_from_id
 * @property int $warehouse_to_id
 * @property int $warehouse_from_type 1: kho ngoai; 2: kho trong he thong
 * @property int $sku_id
 * @property int $type
 * @property int $qty
 * @property int $status
 * @property int|null $created_at
 *
 * @property PlanAllocation $planAllocation
 * @property Warehouse $warehouseFrom
 * @property Warehouse $warehouseTo
 */
class PlanAllocationDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan_allocation_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plan_allocation_id', 'warehouse_from_id', 'warehouse_to_id', 'sku_id', 'type', 'qty'], 'required'],
            [['plan_allocation_id', 'warehouse_from_id', 'warehouse_to_id', 'warehouse_from_type', 'sku_id', 'type', 'qty', 'status', 'created_at'], 'integer'],
            [['plan_allocation_id'], 'exist', 'skipOnError' => true, 'targetClass' => PlanAllocation::className(), 'targetAttribute' => ['plan_allocation_id' => 'id']],
            [['warehouse_from_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_from_id' => 'id']],
            [['warehouse_to_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_to_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_allocation_id' => 'Plan Allocation ID',
            'warehouse_from_id' => 'Warehouse From ID',
            'warehouse_to_id' => 'Warehouse To ID',
            'warehouse_from_type' => 'Warehouse From Type',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[PlanAllocation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanAllocation()
    {
        return $this->hasOne(PlanAllocation::className(), ['id' => 'plan_allocation_id']);
    }

    /**
     * Gets query for [[WarehouseFrom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseFrom()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse_from_id']);
    }

    /**
     * Gets query for [[WarehouseTo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseTo()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse_to_id']);
    }
}
