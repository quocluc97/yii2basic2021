<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "warehouse_outlet".
 *
 * @property int $id
 * @property int $project_id
 * @property int $warehouse_id
 * @property int $outlet_id
 * @property int $status
 * @property int|null $created_at
 */
class WarehouseOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'warehouse_id', 'outlet_id'], 'required'],
            [['project_id', 'warehouse_id', 'outlet_id', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'warehouse_id' => 'Warehouse ID',
            'outlet_id' => 'Outlet ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
