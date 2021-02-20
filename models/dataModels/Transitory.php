<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "transitory".
 *
 * @property int $id
 * @property int $project_id
 * @property int $agency_id
 * @property int|null $warehouse_from_id
 * @property int|null $warehouse_to_id
 * @property int $status
 * @property int|null $created_by
 * @property int|null $created_at
 */
class Transitory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transitory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'agency_id'], 'required'],
            [['project_id', 'agency_id', 'warehouse_from_id', 'warehouse_to_id', 'status', 'created_by', 'created_at'], 'integer'],
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
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
        ];
    }
}
