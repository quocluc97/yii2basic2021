<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "transfer".
 *
 * @property int $id
 * @property int $project_id
 * @property int $agency_id
 * @property int $warehouse_from_id
 * @property int $warehouse_to_id
 * @property int $type
 * @property int $status
 * @property int|null $created_at
 * @property int $created_by
 */
class Transfer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transfer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'agency_id', 'warehouse_from_id', 'warehouse_to_id', 'type', 'created_by'], 'required'],
            [['project_id', 'agency_id', 'warehouse_from_id', 'warehouse_to_id', 'type', 'status', 'created_at', 'created_by'], 'integer'],
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
            'agency_id' => 'Agency ID',
            'warehouse_from_id' => 'Warehouse From ID',
            'warehouse_to_id' => 'Warehouse To ID',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
