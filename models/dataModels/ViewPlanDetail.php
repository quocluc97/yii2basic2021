<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_plan_detail".
 *
 * @property int|null $id
 * @property int|null $plan_id
 * @property int|null $sku_id
 * @property int|null $type
 * @property int|null $qty
 * @property string|null $phase
 * @property int|null $receive_at
 * @property string|null $note
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $project_id
 * @property int|null $agency_id
 */
class ViewPlanDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_plan_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'plan_id', 'sku_id', 'type', 'qty', 'receive_at', 'status', 'created_at', 'created_by', 'project_id', 'agency_id'], 'integer'],
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
            'plan_id' => 'Plan ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'phase' => 'Phase',
            'receive_at' => 'Receive At',
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'project_id' => 'Project ID',
            'agency_id' => 'Agency ID',
        ];
    }
}
